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

/* DON'T DELETE THIS CLOSING TAG */ ?>
