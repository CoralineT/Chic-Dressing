<?php 

add_action( 'wp_enqueue_scripts', 'chicdressing_enqueue_styles' );
function chicdressing_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
}

add_filter( 'big_image_size_threshold', '__return_false' );


// Supression Google Fonts thème parent
function remove_google_fonts() {
    wp_dequeue_style( 'ashe-playfair-font' );
    wp_dequeue_style( 'ashe-opensans-font' );
    wp_dequeue_style( 'ashe-kalam-font' );
   }
   add_action('wp_enqueue_scripts', 'remove_google_fonts', 20 );

 