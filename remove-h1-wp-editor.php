<?php
defined('ABSPATH') or die();
/*
MU Plugin: remove-h1-wp-editor
Description: Remove H1 in wp editor
Author: Yann Kozon
Author URI: http://www.yannkozon.com
*/

function mu_remove_h1_wp_editor( $init ) {
    $init['block_formats'] = 'Paragraph=p;Heading 2=h2;Heading 3=h3;Heading 4=h4;Heading 5=h5;Heading 6=h6;Pre=pre';
    return $init;
}
add_filter( 'tiny_mce_before_init', 'mu_remove_h1_wp_editor' );