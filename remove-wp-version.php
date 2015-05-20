<?php
defined('ABSPATH') or die('Cheatin\' uh?');
/*
MU Plugin: remove-wp-version
Description: Hide Wordpress version
Author: Yann Kozon
Author URI: http://www.yannkozon.com
*/

add_filter('the_generator', '__return_empty_string');
remove_action('wp_head', 'wp_generator');