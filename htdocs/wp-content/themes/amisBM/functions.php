<?php

if (!function_exists('ABM_setup')){
    function ABM_setup() {
        // Lets WP manage the document title
        add_theme_support('title-tag');

        // Enables support for post thumbnails
        add_theme_support('post-thumbnails');

        // Enables support for switching the logo from the theme customizer
        add_theme_support('custom-logo', [
            'height' => 100,
            'width' => 100,
            'flex-width' => true,
            'flex-height' => true
        ]);

        // Enables support for setting header images from the theme customizer
        add_theme_support('custom-header', [
            'height' => 450,
            'width' => 1600,
            'flex-width' => true,
            'flex-height' => true,
            'default-image' => ''
        ]);

        // Lets us register menus in the wp back office
        register_nav_menus([
            'primary' => 'Header nav'
        ]);
    }
}
add_action( 'after_setup_theme', 'ABM_setup' );

?>