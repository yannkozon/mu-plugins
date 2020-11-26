<?php
defined('ABSPATH') or die();

/*
MU Plugin: remove-post-tag
Description: Remove post tag
Author: Yann Kozon
Author URI: https://www.yannkozon.com
*/

function mu_unregister_post_tags() {
    unregister_taxonomy_for_object_type( 'post_tag', 'post' );
}
add_action( 'init', 'mu_unregister_post_tags' );
