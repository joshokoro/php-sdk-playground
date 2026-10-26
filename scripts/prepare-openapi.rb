#!/usr/bin/env ruby
# frozen_string_literal: false

# Normalise the pinned OpenAPI document so Kiota can generate a supportable PHP client.
# Safe to run more than once.

require "yaml"

PATH = File.expand_path("../openapi.yaml", __dir__)

NOISE = %w[
  properties items allOf anyOf oneOf content schema additionalProperties
  responses requestBody parameters paths components schemas
  application/json application/yaml text/yaml text/plain headers
].freeze

SCHEMA_KEYS = %w[
  type properties items allOf anyOf oneOf additionalProperties enum const
  format $ref not prefixItems discriminator
].freeze

HTTP_METHODS = %w[get post put patch delete head options trace].freeze

def schema_like?(node)
  node.is_a?(Hash) && (node.keys & SCHEMA_KEYS).any?
end

def pure_ref?(node)
  node.is_a?(Hash) && node["$ref"] && (node.keys - %w[$ref description title]).empty?
end

def types_of(node)
  Array(node["type"]).map(&:to_s)
end

def extractable?(node)
  return false unless schema_like?(node)
  return false if pure_ref?(node)
  return true if types_of(node).include?("object")
  return true if node["properties"].is_a?(Hash) && !node["properties"].empty?
  additional = node["additionalProperties"]
  additional.is_a?(Hash) && (types_of(additional).include?("object") || additional["properties"].is_a?(Hash))
end

def pascal(segment)
  segment.to_s
    .gsub(/[{}]/, "")
    .split(/[^A-Za-z0-9]+/)
    .reject(&:empty?)
    .map { |part| part[0].upcase + part[1..].to_s }
    .join
end

def meaningful(parts)
  parts.reject { |part| NOISE.include?(part) || part =~ /\A\d+\z/ || part.empty? }
end

def const_suffix(schema)
  properties = schema.is_a?(Hash) ? schema["properties"] : nil
  return nil unless properties.is_a?(Hash)

  properties.each_value do |property|
    next unless property.is_a?(Hash) && property["const"].is_a?(String)

    suffix = pascal(property["const"])
    return suffix unless suffix.empty?
  end
  nil
end

def claim(candidate, used)
  candidate = "Schema#{candidate}" unless candidate =~ /\A[A-Za-z]/
  candidate = candidate[0, 48]
  return nil if candidate.empty? || used[candidate]

  used[candidate] = true
  candidate
end

def unique_name(parts, used, schema = nil)
  segments = meaningful(parts).map { |part| pascal(part) }.reject(&:empty?)
  segments = ["Schema"] if segments.empty?
  if (suffix = const_suffix(schema))
    preferred = claim("#{segments.last}#{suffix}", used) || claim("#{segments.join}#{suffix}", used)
    return preferred if preferred
  end
  chosen = nil
  built = []
  segments.reverse_each do |segment|
    built.unshift(segment)
    candidate = claim(built.join, used)
    if candidate
      chosen = candidate
      break
    end
  end
  if chosen.nil?
    base = built.join
    base = "Schema#{base}" unless base =~ /\A[A-Za-z]/
    base = base[0, 40]
    n = 2
    chosen = "#{base}#{n}"
    chosen = "#{base}#{n += 1}" while used[chosen]
  end
  used[chosen] = true
  chosen
end

def component_root?(parts)
  parts == %w[components schemas]
end

def title_schema(node, parts, used)
  # OpenAPI.NET throws when primitive and union schemas carry titles.
  # Object schemas are the ones Kiota turns into long or hashed class names.
  return unless extractable?(node)
  return if node["title"].is_a?(String) && !node["title"].empty?
  return if pure_ref?(node)

  node["title"] = unique_name(parts, used)
end

def transform(node, parts, new_schemas, used)
  case node
  when Hash
    node.keys.each do |key|
      value = node[key]
      child_parts = parts + [key.to_s]
      if value.is_a?(Hash) && extractable?(value) && !component_root?(parts)
        transform(value, child_parts, new_schemas, used)
        name = unique_name(child_parts, used, value)
        value["title"] ||= name
        new_schemas[name] = value
        node[key] = { "$ref" => "#/components/schemas/#{name}" }
      elsif value.is_a?(Hash)
        transform(value, child_parts, new_schemas, used)
        title_schema(value, child_parts, used) unless component_root?(parts)
      elsif value.is_a?(Array)
        transform_array(value, child_parts, new_schemas, used)
      end
    end
  when Array
    transform_array(node, parts, new_schemas, used)
  end
end

def transform_array(list, parts, new_schemas, used)
  list.each_index do |index|
    value = list[index]
    child_parts = parts + [index.to_s]
    if value.is_a?(Hash) && extractable?(value)
      transform(value, child_parts, new_schemas, used)
      name = unique_name(child_parts, used, value)
      value["title"] ||= name
      new_schemas[name] = value
      list[index] = { "$ref" => "#/components/schemas/#{name}" }
    else
      transform(value, child_parts, new_schemas, used)
      title_schema(value, child_parts, used) if value.is_a?(Hash)
    end
  end
end

def error_response(description)
  {
    "description" => description,
    "content" => {
      "application/json" => {
        "schema" => { "$ref" => "#/components/schemas/ErrorResponseBody" }
      }
    }
  }
end

def each_operation(spec)
  spec.fetch("paths", {}).each do |path, item|
    next unless item.is_a?(Hash)

    item.each do |method, operation|
      next unless HTTP_METHODS.include?(method) && operation.is_a?(Hash)

      yield path, method, operation
    end
  end
end

def fix_query_param(param)
  return unless param.is_a?(Hash) && param["in"] == "query"

  schema = param["schema"]
  return unless schema.is_a?(Hash)

  case param["name"]
  when "limit"
    schema["type"] = "integer"
    schema.delete("enum")
    schema.delete("format") if schema["format"] == "string"
  when "includeArchived"
    schema["type"] = "boolean"
    schema.delete("enum")
  end
end

def strip_schema_keywords(node)
  case node
  when Hash
    node.delete("$schema")
    node.each_value { |child| strip_schema_keywords(child) }
  when Array
    node.each { |child| strip_schema_keywords(child) }
  end
end

def add_discriminators(schemas)
  schemas.each_value do |schema|
    next unless schema.is_a?(Hash)
    next if schema["discriminator"].is_a?(Hash)

    union_key = schema["anyOf"] ? "anyOf" : (schema["oneOf"] ? "oneOf" : nil)
    next unless union_key

    branches = schema[union_key]
    next unless branches.is_a?(Array) && branches.size > 1

    resolved = branches.map do |branch|
      if branch.is_a?(Hash) && branch["$ref"]
        schemas[branch["$ref"].to_s.split("/").last]
      else
        branch
      end
    end
    next unless resolved.all? { |branch| branch.is_a?(Hash) && branch["properties"].is_a?(Hash) }

    property_names = resolved.map { |branch| branch["properties"].keys }.reduce(:&) || []
    discriminator = property_names.find do |property|
      constants = resolved.map { |branch| branch.dig("properties", property, "const") }
      constants.all? { |value| value.is_a?(String) } && constants.uniq.size == constants.size
    end
    next unless discriminator

    mapping = {}
    branches.each_with_index do |branch, index|
      const_value = resolved[index].dig("properties", discriminator, "const")
      ref = branch["$ref"]
      next unless ref

      mapping[const_value] = ref
    end
    next if mapping.size != branches.size

    schema["discriminator"] = {
      "propertyName" => discriminator,
      "mapping" => mapping
    }
  end
end

# The published spec omits productId, but plan create and update reject a body
# without it. Keep the field on every refresh so regeneration does not drop it.
def require_plan_product_id(spec)
  schema = spec.dig("components", "schemas", "PlanRequestSchema")
  return unless schema.is_a?(Hash)

  properties = schema["properties"] ||= {}
  properties["productId"] ||= { "type" => "string" }
  required = schema["required"] ||= []
  required << "productId" unless required.include?("productId")
end

def finish(spec, label)
  require_plan_product_id(spec)
  destination = ENV["OUT"] || PATH
  header = <<~YAML
    # Pinned Salable OpenAPI description.
    # Regenerate the PHP client with scripts/generate.sh after changing this file.
    # Do not replace this file with a live download during release.
  YAML
  File.write(destination, header + YAML.dump(spec))
  warn "#{label} schemas=#{spec.dig("components", "schemas").size}"
  exit 0
end

source = ENV["SOURCE"] || PATH
# Expand YAML aliases into independent copies so extraction cannot alias a
# schema onto itself.
spec = YAML.load(YAML.dump(YAML.load_file(source)))
stage = ENV["STAGE"] || "all"
schemas = spec["components"]["schemas"]
raise "components.schemas missing" unless schemas.is_a?(Hash)

strip_schema_keywords(spec)
finish(spec, "strip") if stage == "strip"

each_operation(spec) do |_path, _method, operation|
  Array(operation["parameters"]).each { |param| fix_query_param(param) }
  responses = operation["responses"] ||= {}
  responses["403"] ||= error_response("Forbidden — insufficient permissions")
  responses["404"] ||= error_response("Resource not found")
end

component_parameters = spec.dig("components", "parameters")
case component_parameters
when Hash
  component_parameters.each_value { |param| fix_query_param(param) }
when Array
  component_parameters.each { |param| fix_query_param(param) }
end

# import is a Go keyword. Keep the HTTP path /api/products/import and name the
# operation Import so the generator post-step can publish Products().Import().
import_operation = spec.dig("paths", "/api/products/import", "post")
import_operation["operationId"] = "Import" if import_operation.is_a?(Hash)
finish(spec, "params") if stage == "params"

used = {}
schemas.each_key { |name| used[name] = true }

new_schemas = {}
transform(spec, [], new_schemas, used)
schemas.merge!(new_schemas)

schemas.each do |name, schema|
  next unless schema.is_a?(Hash)

  schema["title"] ||= name
end
finish(spec, "extract") if stage == "extract"

add_discriminators(schemas)

finish(spec, stage)
