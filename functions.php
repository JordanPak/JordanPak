<?php

/**
 * JordanPak Functions
 *
 * Genesis Child Theme Functions.
 *
 * @package JordanPak
 * @since 1.0.0 (when the file was introduced)
 */



/*
 * -----------------
 *   GENESIS STUFF
 * -----------------
 */

// Start Genesis Engine
include_once( get_template_directory() . '/lib/init.php' );

// HTML5 Markup Structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

// Viewport Meta Tag
add_theme_support( 'genesis-responsive-viewport' );

// Definitions
define( 'CHILD_THEME_NAME', 'JordanPak' );
define( 'CHILD_THEME_URL', 'http://JordanPak.com/' );
define( 'CHILD_THEME_VERSION', '1.0.0' );



/*
 * ---------------
 *   JPAK CUSTOM
 * ---------------
 */

// GLOBAL STYLES
add_action( 'wp_enqueue_scripts', 'jpak_global_styles' );
function jpak_global_styles() {

    // wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Roboto:400,300,400italic,500,700', array(), CHILD_THEME_VERSION );
    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Roboto:400,300,400italic,500,700|Roboto+Condensed:400,700', array(), CHILD_THEME_VERSION );
    wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', array(), CHILD_THEME_VERSION );

} // jpak_global_styles()



//  WIDGET AREAS  //

genesis_register_sidebar( array(
	'id'            => 'home-hero',
	'name'          => __( 'Home Hero', 'jpak' ),
	'description'   => __( 'For Text Widget', 'jpak' ),
) );
