<?php
defined('ABSPATH') or die();
/*
MU Plugin: remove-wp-version
Description: Remove wordpress version
Author: Yann Kozon
Author URI: http://www.yannkozon.com
*/

remove_action( 'wp_head', 'wp_generator' );

function mu_remove_wp_version() {
	return '';
}
add_filter( 'the_generator', 'mu_remove_wp_version' );