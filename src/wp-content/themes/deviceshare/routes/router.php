<?php
add_filter('rewrite_rules_array', 'add_custom_rewrite_rules');
add_filter('query_vars', 'add_custom_query_vars');
add_filter('init', 'flush_custom_rules');
add_action('template_redirect', 'route');

function add_custom_rewrite_rules($rules)
{
    $newrules = [
        '^profile/notices/([^/]+)/?$' => 'index.php?pagename=profile/notices&id=$matches[1]'
    ];
    return $newrules + $rules;
}

function flush_custom_rules()
{
    global $wp_rewrite;
    $wp_rewrite->flush_rules();
}

function add_custom_query_vars($vars)
{
    array_push($vars, 'id');
    return $vars;
}

function route()
{
    global $wp_query;
    $path = $wp_query->query['pagename'] ?? 'portal';
    $slug = !empty($wp_query->query_vars['pagename']) ? $wp_query->query_vars['pagename'] : 'portal';

    if (!empty($wp_query->query['id'])) {
        $singularize = require_once get_template_directory() . '/routes/singularize.php';
        $slug = $singularize[$slug];
    }
    require get_template_directory() . "/pages/{$path}/page-{$slug}.php";
}
