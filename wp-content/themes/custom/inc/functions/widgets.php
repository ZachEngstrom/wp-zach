<?php
/**
 * Widgets
 */
function widgets_init() {
	// Right Rail: How Do I
	register_sidebar(array(
		'name' => 'Right Rail - How Do I',
		'id' => 'right-rail-how-do-i',
		'description' => 'Light Blue',
		'before_widget' => '<aside class="right-rail-how-do-i">',
		'after_widget' => '</aside>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	// Right Rail: Information Component
	register_sidebar(array(
		'name' => 'Right Rail - Info Component',
		'id' => 'right-rail-info',
		'description' => 'Light Tan',
		'before_widget' => '<aside class="right-rail-info">',
		'after_widget' => '</aside>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	// Right Rail: Promo Box
	register_sidebar(array(
		'name' => 'Right Rail - Promo Box',
		'id' => 'right-rail-promo',
		'description' => 'Light Gray',
		'before_widget' => '<aside class="right-rail-promo">',
		'after_widget' => '</aside>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	// Right Rail: Promotional Image
	register_sidebar(array(
		'name' => 'Right Rail - Promo Image',
		'id' => 'right-rail-image',
		//'description' => '',
		'before_widget' => '<aside class="right-rail-image">',
		'after_widget' => '</aside>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	// Right Rail: Promotional Video
	register_sidebar(array(
		'name' => 'Right Rail - Promo Video',
		'id' => 'right-rail-video',
		'description' => 'Light Gray',
		'before_widget' => '<aside class="right-rail-video">',
		'after_widget' => '</aside>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	// Right Rail: Flexible RTE
	register_sidebar(array(
		'name' => 'Right Rail - Flexible RTE',
		'id' => 'right-rail-rte',
		'description' => 'Light Gray',
		'before_widget' => '<aside class="right-rail-rte">',
		'after_widget' => '</aside>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	// Right Rail: Callout
	register_sidebar(array(
		'name' => 'Right Rail - Callout',
		'id' => 'right-rail-callout',
		'description' => 'Unknown Color',
		'before_widget' => '<aside class="right-rail-callout">',
		'after_widget' => '</aside>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
}
add_action( 'widgets_init', 'widgets_init' );