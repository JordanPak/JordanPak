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
 //remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
 remove_action( 'genesis_loop', 'genesis_do_loop' );




 // HOME HERO WIDGET AREA //
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

    echo '<div id="home-hero">';
        genesis_widget_area( 'home-hero' );
    echo '</div>';

 } // jpak_home_hero()


 //-- LOAD FRAMEWORK --//
 genesis();
