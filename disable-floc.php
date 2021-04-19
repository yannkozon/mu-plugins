<?php
defined('ABSPATH') or die();

/*
MU Plugin: disable-floc
Description: Disable FLoC technology 
Author: Yann Kozon
Author URI: https://www.yannkozon.com
*/

function mu_disable_floc() {  
	$headers[ 'Permissions-Policy' ] = 'interest-cohort=()';
	return $headers;
}
add_filter( 'wp_headers', 'mu_disable_floc' );