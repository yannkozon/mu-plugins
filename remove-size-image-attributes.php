<?php
defined('ABSPATH') or die();

/*
MU Plugin: remove-size-image-attributes
Description: Remove size attributes
Author: Yann Kozon
Author URI: https://www.yannkozon.com
*/

function mu_remove_size_image_attributes( $html ) {
   return preg_replace( '/(width|height)="\d*"\s/', "", $html );
}

add_filter( 'post_thumbnail_html', 'mu_remove_size_image_attributes', 10 );
add_filter( 'image_send_to_editor', 'mu_remove_size_image_attributes', 10 );