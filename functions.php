<?php
/*
 * Theme Functions
 */

// Constants

define('THEMEROOT', get_stylesheet_directory_uri());
define('IMAGES', THEMEROOT . '/static/images/');
define('SCRIPTS', THEMEROOT . '/static/scripts/');

// Theme setup

if( !function_exists('amk_setup')) :

    function amk_setup(){

        // bs walker
        require_once('wp_bootstrap_navwalker.php');

        // all extra functionality
        require_once('toolbox/functions.php');

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

// Scripts
function amk_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'bootstrap', SCRIPTS . 'bootstrap.js', true );
}

add_action( 'wp_enqueue_scripts', 'amk_scripts' );

// Display navigation to the next/previous set of posts
if ( ! function_exists('amk_paging_nav') ){
    function amk_paging_nav(){
        echo '<ul class="pager">';
        if( get_previous_posts_link() ){
            echo '<li class="previous">';
            previous_posts_link('&larr; Newer Posts');
            echo '</li>';
        }
        if( get_next_posts_link() ){
            echo '<li class="next">';
            next_posts_link('Older Posts &rarr;');
            echo '</li>';
        }

        echo '</ul>';
    }
}

// Search but only posts
function SearchFilter($query) {
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}

add_filter('pre_get_posts','SearchFilter');