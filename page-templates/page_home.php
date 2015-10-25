<?php

/**
 * JordanPak Home Page Template
 *
 * Genesis Child Theme Hooking
 *
 * @package JordanPak
 * @since 1.0.0 (when the file was introduced)
 */

 /*
  * Template Name: Home
  */


 // REMOVE SIDEBAR & POST CONTENT //
 remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );
 remove_action( 'genesis_loop', 'genesis_do_loop' );



 add_action( 'genesis_after_header', 'jpak_home_hero' );
 /**
 * Home Hero
 *
 * Echos the warpped home-hero widget area
 *
 * @package JordanPak
 * @since 1.0.0
 */
 function jpak_home_hero() {

    echo '<div id="home-hero"><div class="wrap">';
        genesis_widget_area( 'home-hero' );
    echo '</div></div>';

 } // jpak_home_hero()



 add_action( 'genesis_after_header', 'jpak_home_featured_stuff' );
 /**
 * Home Featured Stuff
 *
 * Echos the Featured WP Stuff Widget Area
 *
 * @package JordanPak
 * @since 1.0.0
 */
 function jpak_home_featured_stuff() {

    echo '<div id="featured-stuff"><div class="wrap">';
        genesis_widget_area( 'featured-stuff' );
    echo '</div></div>';

 } // jpak_home_hero()



 add_action( 'genesis_before_content', 'jpak_home_more' );
 /**
 * Home: More Widget Area
 *
 * @package JordanPak
 * @since 1.0.0
 */
 function jpak_home_more() {

    echo '<div id="home-more"><div class="wrap">';
        genesis_widget_area( 'home-more' );
    echo '</div></div>';

 } // jpak_home_hero()



 //-- LOAD FRAMEWORK --//
 genesis();
