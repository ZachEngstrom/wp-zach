<?php
/**
 * Site Header
 */

function bcbsmn_setup() {
   add_theme_support('title-tag');
   add_theme_support('automatic-feed-links');
   add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','bcbsmn_setup');