<?php
defined('ABSPATH') or die();

/*
MU Plugin: remove-wp-version
Description: Remove wordpress version
Author: Yann Kozon
Author URI: https://www.yannkozon.com
*/

remove_action( 'wp_head', 'wp_generator' );
add_filter( 'the_generator', '__return_empty_string' );