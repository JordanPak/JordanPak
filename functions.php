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


// Unregister Unneeded Stuff
unregister_sidebar( 'sidebar-alt' );                    // Secondary Sidebar
add_filter( 'edit_post_link', '__return_false' );       // Edit Link on Posts
genesis_unregister_layout( 'content-sidebar-sidebar' ); // Content-Sidebar-Sidebar Layout
genesis_unregister_layout( 'sidebar-sidebar-content' ); // Sidebar-Sidebar-Content Layout
genesis_unregister_layout( 'sidebar-content-sidebar' ); // Sidebar-Content-Sidebar Layout



/*
 * ---------------
 *   JPAK CUSTOM
 * ---------------
 */

// GLOBAL STYLES
add_action( 'wp_enqueue_scripts', 'jpak_global_styles' );
function jpak_global_styles() {

    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Roboto:400,300,400italic,500,700|Roboto+Condensed:400,700', array(), CHILD_THEME_VERSION );
    wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', array(), CHILD_THEME_VERSION );

} // jpak_global_styles()



add_action( 'genesis_after_header', 'jpak_mini_hero' );
/**
* Mini Hero
*
* Echos the "Mini Hero" page header right below he site header
*
* @package JordanPak
* @since 1.0.0
*/
function jpak_mini_hero() {

    // Display if Default Page
    if ( basename( get_page_template() ) == 'page.php' ) {
        echo '<div id="mini-hero"></div>';
    }

} // jpak_mini_hero()



/**
* Customize Search Bar
*
* Changes Values for Search Text and Button Text
*
* @package JordanPak
* @since 1.0.0
*
* @return string
*/

add_filter( 'genesis_search_text', 'jpak_search_text' );
function jpak_search_text( $text ) {
	return esc_attr( 'Search This Website' );
}

add_filter( 'genesis_search_button_text', 'jpak_search_button_text' );
function jpak_search_button_text( $text ) {
	return esc_attr( 'Go' );
}



//  WIDGET AREAS  //

genesis_register_sidebar( array(
	'id'            => 'home-hero',
	'name'          => __( 'Home: Hero', 'jpak' ),
	'description'   => __( 'For Text Widget', 'jpak' ),
) );

genesis_register_sidebar( array(
    'id'            => 'featured-stuff',
    'name'          => __( 'Featured WP Stuff', 'jpak' ),
    'description'   => __( '3-Column Area for Text Widgets', 'jpak' ),
) );

genesis_register_sidebar( array(
    'id'            => 'home-more',
    'name'          => __( 'Home: More', 'jpak' ),
    // 'description'   => __( '', 'jpak' ),
) );



add_filter( 'genesis_post_info', 'jpak_post_info_filter' );
/**
* Customize Post Meta
*
* @package JordanPak
* @since 1.0.0
*
* @return string
*/
function jpak_post_info_filter($post_info) {
	$post_info = '[post_date format="M j, Y"]';
	return $post_info;
}



add_filter('genesis_footer_creds_text', 'jpak_footer_creds');
/**
* Customize Footer Credits
*
* @package JordanPak
* @since 1.0.0
*
* @return string
*/
function jpak_footer_creds( $creds ) {
	$creds = '[footer_copyright] Jordan Pakrosnis &middot; Powered by <b>WordPress</b> and the <b>Genesis Framework</b>';
	return $creds;
}
