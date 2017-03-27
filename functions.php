<?php
/**
 * Functions
 */
define( 'WORKSTORE_TOKYO_DO_THEME_VER', '0.0.0' );

add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style(
        'workstore-tokyo-do-main',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        WORKSTORE_TOKYO_DO_THEME_VER
    );
} );
