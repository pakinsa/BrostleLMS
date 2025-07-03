<?php
function brostlelearn_theme_setup() {
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
}
add_action( 'after_setup_theme', 'brostlelearn_theme_setup' );

function brostlelearn_enqueue_assets() {
    wp_enqueue_style( 'brostlelearn-style', get_stylesheet_uri() );
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css' );
}
add_action( 'wp_enqueue_scripts', 'brostlelearn_enqueue_assets' );
?>