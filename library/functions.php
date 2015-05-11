<?php

function amk_admin_scripts(){

	wp_enqueue_style('custom_wp_admin_css', get_template_directory_uri() . '/static/styles/semantic.css');

}

add_action('admin_enqueue_scripts', 'amk_admin_scripts');

include('amk_readmore.php');
include('amk_image.php');
