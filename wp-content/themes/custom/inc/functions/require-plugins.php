<?php

/**
 * Display Error Message in Admin Console if Required Plugins aren't Installed
 **/

function showAdminMessages() {
	$plugin_messages = array();

	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

	/* Black Studio TinyMCE Widget */
	if(!is_plugin_active( 'black-studio-tinymce-widget/black-studio-tinymce-widget.php' ))
	{
		$plugin_messages[] = '<strong>This theme requires you to install <a href="'.site_url().'/wp-admin/plugin-install.php?s=Black+Studio+TinyMCE+Widget&tab=search&type=term">Black Studio TinyMCE Widget</a></strong>.';
	}

	/* Display Widgets */
	if(!is_plugin_active( 'display-widgets/display-widgets.php' ))
	{
		$plugin_messages[] = '<strong>This theme requires you to install <a href="'.site_url().'/wp-admin/plugin-install.php?s=Display+Widgets&tab=search&type=term">Display Widgets</a></strong>.';
	}

	/* Easy Theme and Plugin Upgrades */
	if(!is_plugin_active( 'easy-theme-and-plugin-upgrades/init.php' ))
	{
		$plugin_messages[] = '<strong>This theme requires you to install <a href="'.site_url().'/wp-admin/plugin-install.php?s=Easy+Theme+and+Plugin+Upgrades&tab=search&type=term">Easy Theme and Plugin Upgrades</a></strong>.';
	}

	if(count($plugin_messages) > 0)
	{
		echo '<div id="message" class="error">';

			foreach($plugin_messages as $message)
			{
				echo '<p>'.$message.'</p>';
			}

		echo '<p style="opacity:.75"><small><strong>Installation failed? Contact <a href="mailto:PDL.Content.Support@bluecrossmn.com?cc=PDL.Cloud.Services@bluecrossmn.com&subject=WordPress - Plugin Installation Failed - '.site_url().'">PDL Content Support</a></strong></small></p></div>';
	}
}

add_action('admin_notices', 'showAdminMessages');