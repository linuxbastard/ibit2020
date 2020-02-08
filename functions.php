<?php

require get_template_directory() . '/classes/class-twentytwenty-svg-icons.php';
require get_stylesheet_directory (). '/classes/more-svg-icons.php';

add_action( 'wp_enqueue_scripts', 'ibit2020_enqueue_styles' );
function ibit2020_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    /* wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    ); */
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Montserrat:400,400i,700,800&display=swap', false );
    wp_enqueue_script( 'ibit-customjs', get_stylesheet_directory_uri() . '/custom.js', array ( 'jquery' ), 1.1, true);
}
// Add featured image sizes
add_image_size( 'image-box', 155); // width, height, crop

// Register the three useful image sizes for use in Add Media modal
add_filter( 'image_size_names_choose', 'ibit_custom_sizes' );
function ibit_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'image-box' => __( 'Medium Width' ),
    ) );
}
