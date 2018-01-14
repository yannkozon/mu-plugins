<?php
defined('ABSPATH') or die();

/*
MU Plugin: add-oembed-wrapper
Description: Add oembed wrapper
Author: Yann Kozon
Author URI: https://www.yannkozon.com
*/

function mu_add_oembed_wrapper( $html, $url, $attr, $post_id ) {
	return '<span class="oembed-wrapper">' . $html . '</span>';
}
add_filter( 'embed_oembed_html', 'mu_add_oembed_wrapper', 9999, 4 );