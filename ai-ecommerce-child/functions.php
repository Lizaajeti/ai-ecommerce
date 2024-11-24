<?php
function twenty_twenty_four_child_enqueue_styles() {
    wp_enqueue_style( 'twenty-twenty-four-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'twenty-twenty-four-child-style', get_stylesheet_directory_uri() . '/style.css', array( 'twenty-twenty-four-style' ) );
}
add_action( 'wp_enqueue_scripts', 'twenty_twenty_four_child_enqueue_styles' );
