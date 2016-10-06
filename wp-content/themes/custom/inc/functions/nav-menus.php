<?php
/**
 * Register Navigation Menus
 */
function Custom_nav_menus() {
	$locations = array(
		'header-primary'   => __('Header Primary',   'Custom'),
		'header-secondary' => __('Header Secondary', 'Custom'),
		'footer-primary'   => __('Footer Primary',   'Custom'),
		'footer-secondary' => __('Footer Secondary', 'Custom'),
		'footer-social'    => __('Footer Social',    'Custom'),
	);
	register_nav_menus($locations);
}
add_action('init','Custom_nav_menus');

/**
 * Custom Menu in Header Primary parameters
 * Call with <?php menu_header_primary(); ?>
 */
function menu_header_primary() {
  wp_nav_menu( 
    array (
      'theme_location'  => 'header-primary',
      'menu_class'      => 'nav nav-pills navbar-nav',
      'fallback_cb'     => false,
    )
  );
}

/**
 * Custom Menu in Header Secondary parameters
 * Call with <?php menu_header_secondary(); ?>
 */
function menu_header_secondary() {
  wp_nav_menu( 
    array (
      'theme_location'  => 'header-secondary',
      'container'       => false,
      'container_class' => 'macro-nav pull-right',
      'menu_class'      => 'nav nav-pills',
      'fallback_cb'     => 'false'
    )
  );
}

/**
 * Custom Menu in Footer Primary parameters
 * Call with <?php menu_footer_primary(); ?>
 */
function menu_footer_primary() {
  wp_nav_menu( 
    array (
      'theme_location'  => 'footer-primary',
      'container_class' => 'footer-primary-list', 
      'menu_class'      => 'list-inline',
      'fallback_cb'     => false
    )
  );
}

/**
 * Custom Menu in Footer Secondary parameters
 * Call with <?php menu_footer_secondary(); ?>
 */
function menu_footer_secondary() {
  wp_nav_menu( 
    array (
      'theme_location'  => 'footer-secondary',
      'container_class' => 'footer-secondary-list', 
      'menu_class'      => 'list-inline',
      'fallback_cb'     => false
    )
  );
}

/**
 * Custom Menu in Footer Social parameters
 * Call with <?php menu_footer_social(); ?>
 */
function menu_footer_social() {
  wp_nav_menu( 
    array (
      'theme_location'  => 'footer-social',
      'container'       => 'div',
      'container_class' => 'footer-icons', 
      'menu_class'      => 'list-inline pull-right',
      'fallback_cb'     => false
    )
  );
}