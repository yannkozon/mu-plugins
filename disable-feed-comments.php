<?php
defined('ABSPATH') or die();

/*
MU Plugin: disable-feed-comments
Description: Disable feed comments - RSS, Atom...
Author: Yann Kozon
Author URI: https://www.yannkozon.com
*/

function mu_disable_feed_comments() {  
	wp_redirect( esc_url( home_url( '/' ) ), 301 );
	die();
}
add_action( 'do_feed_rss2_comments', 'mu_disable_feed_comments' );
add_action( 'do_feed_atom_comments', 'mu_disable_feed_comments' );