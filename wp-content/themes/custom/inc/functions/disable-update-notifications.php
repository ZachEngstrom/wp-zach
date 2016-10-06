<?php

/*
 * Disable Notifications if not Super Admin
 */

if (!is_super_admin()) {

	/*
	 * Disable Update WordPress Notifications
	 */

    function remove_core_updates() {
		if(! current_user_can('update_core')){return;}
		add_action('init', create_function('$a',"remove_action( 'init', 'wp_version_check' );"),2);
		add_filter('pre_option_update_core','__return_null');
		add_filter('pre_site_transient_update_core','__return_null');
	}
	add_action('after_setup_theme','remove_core_updates');

	/*
	 * Disable Update Plugin Notifications
	 */

	remove_action('load-update-core.php','wp_update_plugins');
	add_filter('pre_site_transient_update_plugins','__return_null');
}