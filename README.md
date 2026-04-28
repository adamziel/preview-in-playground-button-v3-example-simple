# preview-in-playground-button-v3-example-simple

Level 1 example of the WordPress Playground "Preview in Playground" v3 reusable workflows.

A single plugin with a (toy) build step. Demonstrates the simplest caller setup: one `artifacts:` entry on the build side and `kind: plugin` on the publish side.

## Files

- `my-plugin.php` — the plugin.
- `.github/workflows/pr-preview-build.yml` — runs on `pull_request`, produces a zip.
- `.github/workflows/pr-preview-publish.yml` — runs on `workflow_run`, exposes the zip and posts the preview button.

The reusable workflows are pinned to the in-development branch
`adamziel/build-command-reusable-workflows` of
`WordPress/action-wp-playground-pr-preview`. Repin to `@v3` once that lands.
