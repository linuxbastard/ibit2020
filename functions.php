<?php
add_action( 'wp_enqueue_scripts', 'ibit2020_enqueue_styles' );
function ibit2020_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    /* wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    ); */
}
// Add featured image sizes
add_image_size( 'image-box', 155); // width, height, crop

// Register the three useful image sizes for use in Add Media modal
add_filter( 'image_size_names_choose', 'wpshout_custom_sizes' );
function wpshout_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'image-box' => __( 'Medium Width' ),
    ) );
}
