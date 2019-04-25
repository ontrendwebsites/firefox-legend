<?php
/*
Author: Andrew McDougal
URL: 

This is where you can drop your custom functions or
just edit things like thumbnail sizes, header images,
sidebars, comments, etc.
*/


// ONTREND FUNCTIONS




add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

// ONTREND FUNCTIONS

function add_footer_styles_and_scripts() {
  wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/library/js/ontrend.js?v=1' );
  wp_enqueue_style( 'hamburger-css', get_stylesheet_directory_uri() . '/library/css/hamburgers.css' );
  wp_enqueue_style( 'ontrend-css', get_stylesheet_directory_uri() . '/library/css/ontrend.css?v=3' );
};
add_action( 'get_footer', 'add_footer_styles_and_scripts' );

/* DON'T DELETE THIS CLOSING TAG */ ?>
