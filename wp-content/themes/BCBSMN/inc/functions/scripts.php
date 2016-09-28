<?php

/**
 * JS Library files to be called at the bottom of the page
 */
function lib_scripts() {
	$bottom_lib_scripts = array(
	    //'jquery' => array('/assets/js/lib/jquery.min.js'          => '1.11.3'),
	    //'bootstrap'    => array('/assets/js/lib/bootstrap.min.js' => '3.3.5')
	);
	foreach ($bottom_lib_scripts as $handle => $srcVers) {
		foreach ($srcVers as $src => $ver) {
	    	echo wp_enqueue_script($handle, get_template_directory_uri() . $src, array(), $ver, true);
		}
	}
}
add_action('wp_enqueue_scripts', 'lib_scripts');

/**
 * Custom JS files to be called at the bottom of the page
 * Version numbers are the dates the files were last modified
 */
function custom_scripts() {
	$bottom_scripts = array(
	    'main' => '/assets/js/scripts.min.js'
	);
	foreach ($bottom_scripts as $handle => $src) {
	    echo wp_enqueue_script($handle, get_template_directory_uri() . $src, array(), fileVersion($src), true);
	}
}
add_action('wp_enqueue_scripts', 'custom_scripts');