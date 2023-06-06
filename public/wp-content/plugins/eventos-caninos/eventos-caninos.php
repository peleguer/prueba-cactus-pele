<?php
/*
Plugin Name: Eventos Caninos
Plugin URI: https://alexpeleguer.com/
Description: Este plugin añade un post type y una plantilla para eventos caninos
Version: 1.0
Author: Alex Peleguer
Author URI: https://alexpeleguer.com/
*/


// ACF fields configuration for the post type "eventos-caninos"
require __DIR__ . '/custom-fields.php';



// Flag for plugin activation
function eventos_caninos_activation() {
    // Set the activating flag
    set_transient( 'eventos_caninos_activating', true );
}
register_activation_hook( __FILE__, 'eventos_caninos_activation' );


// Update permalinks cache on plugin deactivation
function eventos_caninos_deactivation() {
    flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'eventos_caninos_deactivation' );


// Create custom post type "eventos-caninos"
function eventos_caninos_init() {
    $labels = array(
        'name' => 'Eventos Caninos',
        'singular_name' => 'Evento Canino',
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'thumbnail' ),
    );
    register_post_type( 'eventos-caninos', $args );

    // Check if the plugin is activating
    $is_activating = get_transient( 'eventos_caninos_activating' );
    if ( $is_activating ) {
        flush_rewrite_rules();
        delete_transient( 'eventos_caninos_activating' ); // Remove the activating flag
    }
}
add_action( 'init', 'eventos_caninos_init' );


// Create template for single event posts
function eventos_caninos_template( $template ) {
    if ( is_singular( 'eventos-caninos' ) ) {
        $new_template = plugin_dir_path( __FILE__ ) . 'single-eventos-caninos-template.php';
        if ( '' != $new_template ) {
            return $new_template;
        }
    }
    return $template;
}
add_filter( 'template_include', 'eventos_caninos_template' );

