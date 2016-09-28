<?php

/**
 * Custom function gets the last modified date of the file
 * Output: YYYY.MM.DD.HHMM
 * Example output: 2015.04.13.1905 (April 13th, 2015 at 7:05 PM)
 */
function fileVersion($ver) {
	date_default_timezone_set('America/Chicago');
	$themePath = './wp-content/themes/BCBSMN';
	return date("Y.m.d.Hi", filemtime($themePath . $ver));
}

/**
 * Remove Emoji code
 */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

/**
 * Remove unnecessary styles & scripts
 */
function deregister_styles_scripts() {
	//wp_deregister_style('');
	wp_deregister_script('jquery');
}
add_action('wp_enqueue_scripts', 'deregister_styles_scripts');

/**
 * Custom CSS files to be called at the top of the page
 * Version numbers are the dates the files were last modified
 */
function custom_styles() {
	$top_styles = array(
	    'theme' => '/assets/css/style.min.css'
	);
	foreach ($top_styles as $handle => $src) {
		echo wp_enqueue_style($handle, get_template_directory_uri() . $src, array(), fileVersion($src), false);
	}
}
add_action('wp_enqueue_scripts', 'custom_styles');