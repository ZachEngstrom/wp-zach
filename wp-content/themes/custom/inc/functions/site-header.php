<?php
/**
 * Site Header
 */

function Custom_setup() {
   add_theme_support('title-tag');
   add_theme_support('automatic-feed-links');
   add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','Custom_setup');