<?php
defined('ABSPATH') or die();

/*
MU Plugin: remove-wp-embed
Description: Remove embed script
Author: Yann Kozon
Author URI: https://www.yannkozon.com
*/

function mu_remove_wp_embed() {
	if( ! is_admin() ) {
		wp_deregister_script( 'wp-embed.min.js' );
		wp_deregister_script( 'wp-embed' );
		wp_deregister_script( 'embed' );
	}
}
add_action( 'init', 'mu_remove_wp_embed', 9999 );