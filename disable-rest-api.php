<?php
defined('ABSPATH') or die();

/*
MU Plugin: disable-rest-api
Description: Disable rest api
Author: Yann Kozon
Author URI: https://www.yannkozon.com
*/

function mu_disable_rest_api() {
	// Remove rest api in head and headers
	remove_action( 'xmlrpc_rsd_apis', 	'rest_output_rsd' );
	remove_action( 'wp_head', 			'rest_output_link_wp_head' );
	remove_action( 'template_redirect', 'rest_output_link_header', 11 );

	// Filters for WP-API version 1.x
	add_filter( 'json_enabled', '__return_false' );
	add_filter( 'json_jsonp_enabled', '__return_false' );
}

add_action( 'init', 'mu_disable_rest_api' );

function mu_disable_rest_api_rest_authentication_errors() {
	if( ! current_user_can( 'edit_posts' ) ) {
		wp_redirect( esc_url( home_url( '/' ) ), 301 );
		die();
	}
}

add_filter( 'rest_authentication_errors', 'mu_disable_rest_api_rest_authentication_errors' );