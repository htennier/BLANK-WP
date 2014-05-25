<?php

define( 'TPL_DIR', TEMPLATEPATH . '/' );
define( 'TPL_URL', get_template_directory_uri() . '/' );

// Add meta boxes
include( TPL_DIR . 'inc/meta-boxes.php' );

// Add custom post types
include( TPL_URL . 'inc/custom-post-types.php' );

// Add featured image box
add_theme_support( 'post-thumbnails' ); 

// Load jQuery
add_action( 'wp_enqueue_script', 'load_jquery' );
function load_jquery() {
    wp_enqueue_script( 'jquery' );
}

// Add Primary Menu
register_nav_menu( 'primary', __( 'Primary Menu', 'twentytwelve' ) );

function theme_scripts_styles() {
	global $wp_styles;

	// Add function.js
	wp_enqueue_script( 'theme-function', TPL_URL . 'js/functions.js', array( 'jquery' ), '1.0', true );

	// Load styles.css
	wp_enqueue_style( 'theme-style', get_stylesheet_uri() );

	// Add ie.css
	wp_enqueue_style( 'theme-ie', get_template_directory_uri() . '/css/ie.css', array( 'theme-style' ), '20121010' );
	$wp_styles->add_data( 'theme-ie', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts_styles' );



