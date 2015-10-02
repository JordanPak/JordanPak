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
 add_action( 'genesis_before_content', 'jpak_home_hero' );
 function jpak_home_hero() {

     // Home Hero
     genesis_widget_area( 'home-hero' );

 } // jpak_home_hero()


 //-- LOAD FRAMEWORK --//
 genesis();
