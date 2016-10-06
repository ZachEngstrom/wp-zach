<?php

function my_custom_dashboard_widgets() {

	global $wp_meta_boxes;

	wp_add_dashboard_widget('theme-support', 'Theme Support', 'custom_dashboard_help');
	
}

function custom_dashboard_help() {

	$my_theme = wp_get_theme();

	echo '<p></p><p><strong>Theme:</strong> <a href="'.site_url().'/wp-admin/themes.php?theme=bcbsmn">'.$my_theme->get('Name').'</a><br><strong>Version:</strong> '.$my_theme->get('Version').'</p>';

}

add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');