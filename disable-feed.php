<?php
defined('ABSPATH') or die();
/*
MU Plugin: disable-feed
Description: Disable feed - RSS, Atom...
Author: Yann Kozon
Author URI: http://www.yannkozon.com
*/

function mu_disable_feed() {  
	wp_redirect( esc_url( home_url( '/' ) ), 301 );
	die();
}
add_action( 'do_feed', 'mu_disable_feed' );
add_action( 'do_feed_rdf', 'mu_disable_feed' );
add_action( 'do_feed_rss', 'mu_disable_feed' );
add_action( 'do_feed_rss2', 'mu_disable_feed' );
add_action( 'do_feed_atom', 'mu_disable_feed' );
add_action( 'do_feed_rss2_comments', 'mu_disable_feed' );
add_action( 'do_feed_atom_comments', 'mu_disable_feed' );