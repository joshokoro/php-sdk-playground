# Contributing

The supported PHP versions are 8.2, 8.3, 8.4, and 8.5.

## Generated client

Do not edit files under `src/SDK/`. Kiota overwrites that tree. Changes that should survive regeneration belong in `src/Salable.php`, `src/ApiKeyAccessTokenProvider.php`, or in `openapi.yaml`.

`openapi.yaml` is the pinned description. Release builds generate from this file and fail if `src/SDK/` does not match it.

To refresh the description from the published Salable spec:

```bash
curl -fsSL https://salable.app/openapi.yaml -o openapi.yaml
SOURCE=openapi.yaml ruby scripts/prepare-openapi.rb
```

`scripts/prepare-openapi.rb` is safe to run again. It names anonymous object schemas, types `limit` as an integer and `includeArchived` as a boolean, adds 403 and 404 error bodies, and adds discriminators where object unions already expose a unique `const` property.

Regenerate the client with [Kiota](https://github.com/microsoft/kiota) 1.35:

```bash
./scripts/generate.sh
```

Commit `openapi.yaml` and `src/SDK/` (including `src/SDK/kiota-lock.json`) together.

`import` is a Go keyword, so the pinned spec sets the `/api/products/import` operation id to `Import`. PHP is not affected: the navigator stays `import()` and the HTTP path stays `/api/products/import`.

## Checks

```bash
composer validate --strict
composer install
vendor/bin/php-cs-fixer fix --dry-run --diff
vendor/bin/phpstan analyse --no-progress
vendor/bin/phpunit
```

## Commits and versions

Use conventional commits. `feat` and `fix` drive minor and patch releases. A breaking spec change uses `feat!:` or a `BREAKING CHANGE:` footer.

The first public releases are `v0.x`. Those versions can still change shape. `v1.0.0` is the compatibility promise, after the OpenAPI names have settled.

## Packagist

semantic-release creates the GitHub tag and changelog. Packagist publishes `salable/sdk` from those tags only after a one-time setup:

1. Submit [github.com/Salable/php-sdk](https://github.com/Salable/php-sdk) on [Packagist](https://packagist.org/packages/submit) as `salable/sdk`.
2. Enable the Packagist GitHub webhook so new tags update the package automatically.

That registration is outside this repository. CI does not call the Packagist API.
