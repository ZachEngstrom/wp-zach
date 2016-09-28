<?php

// add a favicon to your
function blog_favicon() {
	echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.site_url().'/wp-content/themes/BCBSMN/assets/img/favicon.ico" />';
}
add_action('wp_head', 'blog_favicon');
