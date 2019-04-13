<?php
/*
Author: Andrew McDougal
URL: 

This is where you can drop your custom functions or
just edit things like thumbnail sizes, header images,
sidebars, comments, etc.
*/


// ONTREND FUNCTIONS

function prefix_add_footer_styles() {
  wp_enqueue_style('googleFonts', '//fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Cormorant+Garamond:400,400i,700');
  wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css');
  wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/library/js/ontrend.js?v=1' );
  wp_enqueue_style( 'hamburger-css', get_stylesheet_directory_uri() . '/library/css/hamburgers/hamburgers.css' );
  wp_enqueue_style( 'ontrend-css', get_stylesheet_directory_uri() . '/library/css/ontrend.css?v=3' );
};
add_action( 'get_footer', 'prefix_add_footer_styles' );

/* DON'T DELETE THIS CLOSING TAG */ ?>
