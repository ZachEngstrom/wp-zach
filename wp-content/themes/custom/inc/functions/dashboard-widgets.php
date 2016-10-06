<?php

function my_custom_dashboard_widgets() {
	global $wp_meta_boxes;
	wp_add_dashboard_widget('custom_help_widget', 'Theme Support', 'custom_dashboard_help');
}

function custom_dashboard_help() {
	echo '
<!--a href="https://www.bluecrossmn.com" target="_blank">
	<img src="'.site_url().'/wp-content/themes/custom/assets/img/bcbsmn-logo.png" alt="Custom Logo">
</a-->
<p>Welcome to the <strong><a href="./themes.php">Custom</a></strong> WordPress theme! If you need help, please visit the <a href="https://linkmn.sharepoint.com/sites/collaboration/digitalplatform/wordpress-theme/" target="_blank"><strong>wiki</strong></a>.</p>';
}

add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');