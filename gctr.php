<?php
/*
Plugin Name: Google Campaign Text Replacer
Description: Use simple shortcodes to dynamically replace text with values from a Google campaign
Version: 2.0
Author: Kyle Maurer
Author URI: http://realbigmarketing.com/staff/kyle
*/
require_once (dirname(__FILE__).'/admin/admin.php');
require_once (dirname(__FILE__).'/shortcodes.php');
//Enqueue js only if shortcodes in use
//Method by Scribu http://scribu.net/wordpress/optimal-script-loading.html
add_action('init', 'register_gctr_script');
add_action('wp_footer', 'print_gctr_script');

function register_gctr_script() {
	wp_register_script('gctr-script', plugins_url('gctr.js', __FILE__), true);
}
function print_gctr_script() {
	global $add_gctr_script;
	if ( ! $add_gctr_script )
		return;
	wp_print_scripts('gctr-script');
}
?>