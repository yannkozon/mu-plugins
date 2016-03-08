<?php
defined('ABSPATH') or die();
/*
MU Plugin: remove-frameborder-oembed
Description: Remove frameborder property oembed
Author: Yann Kozon
Author URI: http://www.yannkozon.com
*/

function mu_remove_frameborder_oembed( $return, $data, $url ) {
    return str_replace( 'frameborder="0" allowfullscreen', 'style="border:none"', $return );
}
add_filter( 'oembed_dataparse', 'mu_remove_frameborder_oembed', 90, 3 );