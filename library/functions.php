<?php

function amk_admin_scripts(){

	wp_enqueue_style('custom_wp_admin_css', get_template_directory_uri() . '/static/styles/semantic.css');
	wp_enqueue_script('my_custom_script', SCRIPTS . '/semantic.js');

}

add_action('admin_enqueue_scripts', 'amk_admin_scripts');

include('amk_readmore.php');