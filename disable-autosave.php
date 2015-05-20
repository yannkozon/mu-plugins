<?php
defined('ABSPATH') or die('Cheatin\' uh?');
/*
MU Plugin: disable-autosave
Description: Disable post autosave
Author: Yann Kozon
Author URI: http://www.yannkozon.com
*/

function mu_disable_autosave() {
	wp_deregister_script('autosave');
}
add_action('wp_print_scripts', 'mu_disable_autosave');