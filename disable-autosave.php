<?php
defined('ABSPATH') or die();
/*
MU Plugin: disable-autosave
Description: Disable autosave
Author: Yann Kozon
Author URI: http://www.yannkozon.com
*/

function mu_disable_autosave() {
	wp_deregister_script( 'autosave' );
}
add_action( 'admin_init', 'mu_disable_autosave' );