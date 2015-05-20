<?php
defined('ABSPATH') or die('Cheatin\' uh?');
/*
MU Plugin: remove-frameborder-oembed
Description: Remove frameborder property to oembed
Author: Yann Kozon
Author URI: http://www.yannkozon.com
*/

function mu_remove_frameborder_oembed($html, $data, $url) {
    $html = str_replace('frameborder="0" allowfullscreen', 'style="border:none"', $html);
    return $html;
}
add_filter('oembed_dataparse', 'mu_remove_frameborder_oembed', 90, 3);