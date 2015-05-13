<?php
/**
 * Custom Post Type posttype
 * @author Oscar Mwanandimai
 * @version 0.1
 */

function posttype_cpt()
{
    $labels =  array(
        'name'               => _x( 'Posttypes', 'post type general name', 'amk' ),
        'singular_name'      => _x( 'Posttype', 'post type singular name', 'amk' ),
        'menu_name'          => _x( 'Posttypes', 'admin menu', 'amk' ),
        'name_admin_bar'     => _x( 'Posttypes', 'add new on admin bar', 'amk' ),
        'add_new'            => _x( 'Add New', 'posttype', 'amk' ),
        'add_new_item'       => __( 'Add Posttype', 'amk' ),
        'new_item'           => __( 'New Posttype', 'amk' ),
        'edit_item'          => __( 'Edit Posttype', 'amk' ),
        'view_item'          => __( 'View Posttype', 'amk' ),
        'all_items'          => __( 'All Posttypes', 'amk' ),
        'search_items'       => __( 'Search Posttypes', 'amk' ),
        'not_found'          => __( 'No posttypes found.', 'amk' ),
        'not_found_in_trash' => __( 'No posttypes found in Trash.', 'amk' ),
        'parent_item_colon'  => '',
    );
    $args = array(
        'labels' => $labels,
        'has_archive'        => false,
        'public'             => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'menu_icon'     => 'dashicons-groups',
        'query_var'     => true,
        'show_in_menu'  => true,
        'show_ui'       => true,
        'supports'      => array('title', 'editor', 'thumbnail'),
        'exclude_from_search' => false,
    );
    register_post_type( 'posttypes', $args );
    flush_rewrite_rules();
}
add_action('init', 'posttypes_cpt');
