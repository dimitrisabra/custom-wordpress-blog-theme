<?php

add_action('after_setup_theme', function() {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'gallery', 'caption']);
    load_theme_textdomain('mytheme', get_template_directory() . '/languages');

    register_nav_menus([
        'primary' => __('Primary Menu', 'mytheme')
    ]);
});


add_action('wp_enqueue_scripts', function() {

    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');

    wp_enqueue_style('mytheme-main', get_stylesheet_uri(), [], file_exists(get_template_directory() . '/style.css') ? filemtime(get_template_directory() . '/style.css') : '1.0');

    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', [], null, true);

    wp_enqueue_script('mytheme-main', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], file_exists(get_template_directory() . '/assets/js/main.js') ? filemtime(get_template_directory() . '/assets/js/main.js') : '1.0', true);
});

add_action('init', function() {

    register_post_type('portfolio', [
        'labels' => [
            'name' => 'Portfolio',
            'singular_name' => 'Project'
        ],
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
        'rewrite' => [
            'slug' => 'portfolio',
            'with_front' => false
        ],
        'query_var' => true
    ]);
});

