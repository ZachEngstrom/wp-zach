<?php

function remove_footer_admin () {
echo 'Powered by <a href="http://www.wordpress.org" target="_blank">WordPress</a> | Designed and developed by Zach Engstrom</p>';
}

add_filter('admin_footer_text', 'remove_footer_admin');