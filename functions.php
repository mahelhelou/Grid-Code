<?php

// STYLES & SCRIPTS
function grid_code_assets() {
    // loading styles
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab');
    wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.1.0/css/all.css');
    wp_enqueue_style('grid_code_main_styles', get_stylesheet_uri(), NULL, microtime());

    // loading scripts
    wp_enqueue_script('grid_code_main_scripts', get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
}
add_action('wp_enqueue_scripts', 'grid_code_assets');

// ADD THEME FEATURES
function grid_code_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html', array(
        'comment-list', 'comment-form', 'search-form'
    ));
}
add_action('after_setup_theme', 'grid_code_features');

// CUSTOM POST TYPES
function grid_code_post_types() {
    // Project Post Type
    register_post_type('project', array(
        'rewrite' => array('slug' => 'projects'),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comment'),
        'public' => true,
        'has_archive' => true,
        'labels' => array(
            'name' => 'Projects',
            'singular_name' => 'Project',
            'add_new_item' => 'Add New Project',
            'edit_item' => 'Edit Project',
            'all_items' => 'All Projects'
        ),
        'menu_icon' => 'dashicons-clipboard'
    ));
}
add_action('init', 'grid_code_post_types');