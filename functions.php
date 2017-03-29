<?php
/**
 * Functions
 */
define( 'WSTD_THEME_VER', '0.0.0' );

function workstore_tokyo_do_theme_init() {

    add_theme_support( 'title-tag' );

    add_action( 'wp_enqueue_scripts', function() {
        wp_enqueue_style(
            'workstore-tokyo-do-main',
            get_template_directory_uri() . '/assets/css/main.css',
            array(),
            WSTD_THEME_VER
        );
    } );

}
add_action( 'after_setup_theme', 'workstore_tokyo_do_theme_init' );
