<?php
defined('ABSPATH') or die();

/*
MU Plugin: svg-upload
Description: Support svg file upload in media library
Author: Yann Kozon
Author URI: https://www.yannkozon.com
*/

function mu_upload_mimes( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'mu_upload_mimes', PHP_INT_MAX );