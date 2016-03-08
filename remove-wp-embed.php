<?php
defined('ABSPATH') or die();
/*
MU Plugin: remove-wp-embed
Description: Remove embed script
Author: Yann Kozon
Author URI: http://www.yannkozon.com
*/

remove_action( 'wp_head', 'rest_output_link_wp_head' );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 );

function mu_remove_wp_embed() {
	wp_deregister_script( 'wp-embed.min.js' );
	wp_deregister_script( 'wp-embed' );
	wp_deregister_script( 'embed' );
}
add_action( 'init', 'mu_remove_wp_embed', 9999 );