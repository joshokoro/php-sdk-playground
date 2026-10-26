#!/usr/bin/env bash
# Regenerate src/SDK from the pinned OpenAPI document.
set -euo pipefail

root="$(cd "$(dirname "$0")/.." && pwd)"
cd "$root"

kiota="${KIOTA:-kiota}"

"$kiota" generate \
  --openapi ./openapi.yaml \
  --output ./src/SDK \
  --language php \
  --class-name Salable \
  --namespace-name 'Salable\SDK' \
  --clean-output \
  --exclude-backward-compatible \
  --log-level error
