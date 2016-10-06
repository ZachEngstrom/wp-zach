<?php

function add_ie_html5_shim () {
	$ie_scripts = array(
	    'html5shiv' => array('/assets/js/lib/html5shiv.min.js' => '3.7.3'),
	    'respond'   => array('/assets/js/lib/respond.min.js'   => '1.4.2')
	);
	echo "<!--[if lt IE 9]>\n";
	foreach ($ie_scripts as $handle => $srcVers) {
		foreach ($srcVers as $src => $ver) {
	    	echo "<script type='text/javascript' src='" . get_template_directory_uri() . $src . "'></script>\n";
		}
	}
	echo "<![endif]-->\n";
}
add_action('wp_head', 'add_ie_html5_shim');