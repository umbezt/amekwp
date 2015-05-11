<?php

// Define Constants

define('THEMEROOT', get_stylesheet_directory_uri());
define('IMAGES', THEMEROOT . '/assets/img/');
define('SCRIPTS', THEMEROOT . '/assets/js/');

// Theme setup

if( !function_exists('amk_setup')) :

    function amk_setup(){

        // bs walker
        require_once('wp_bootstrap_navwalker.php');

        // all extra functionality
        require_once('library/functions.php');

        // Add support for post formats
        add_theme_support('post_formats', array('aside'));
        add_theme_support('automatic-feed-links');
        add_theme_support('post-thumbnails');
        add_theme_support('page-attributes');
        add_theme_support('custom-fields');

        // Register nav menus
        register_nav_menus( array(
            'main' => __( 'Main Navigation', 'amk' )
        ) );
    }
endif;

add_action('after_setup_theme', 'amk_setup');

// Register Scripts and Styles
function amk_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'bootstrap', SCRIPTS . 'bootstrap.js', array('jquery'), null, true );
    wp_enqueue_script( 'bootstrap', SCRIPTS . 'holder.js', array('jquery'), null, true );
}

add_action( 'wp_enqueue_scripts', 'amk_scripts' );
