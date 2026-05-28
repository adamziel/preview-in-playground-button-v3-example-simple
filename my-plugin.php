<?php
/**
 * Plugin Name: V3 Example (Simple)
 * Description: Smallest possible plugin demonstrating the v3 reusable
 *   build+publish workflows with the `kind: plugin` shortcut.
 * Version: 0.1.0
 */

add_action('admin_notices', function () {
    $built = @file_get_contents(__DIR__ . '/built-at.txt') ?: '(unknown)';
    printf(
        '<div class="notice notice-info"><p><strong>V3 Example (Simple)</strong> active. Built at: %s</p></div>',
        esc_html(trim($built))
    );
});

// Fork smoke test: v3 preview workflows.

// Fork smoke rerun after v3 fork verification fix.

// Fork smoke rerun against the published v3 tag.

// Fork smoke rerun against corrected @v3 workflow refs.
