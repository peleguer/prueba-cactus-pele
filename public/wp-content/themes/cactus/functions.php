<?php

add_theme_support( 'post-thumbnails' );


// Load CSS files
function enqueue_custom_styles() {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/styles/bootstrap.min.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/styles/main.css');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');


// Load Javascript files
function enqueue_custom_scripts() {
    wp_enqueue_script('main', get_template_directory_uri() . '/scripts/main.min.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');


// Create a custom post type "Perro"
function create_custom_post_type_perro() {
    register_post_type('perro', array(
        'labels' => array(
            'name' => __('Perros'),
            'singular_name' => __('Perro')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'perros'),
        'supports' => array('title', 'editor', 'thumbnail')
    ));
}
add_action('init', 'create_custom_post_type_perro');