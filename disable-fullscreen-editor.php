<?php
defined('ABSPATH') or die();

/*
MU Plugin: disable-fullscreen-editor
Description: Disable fullscreen editor
Author: Yann Kozon
Author URI: https://www.yannkozon.com
*/

function mu_disable_fullscreen_editor() {
 	$script = "jQuery( window ).load(function() { const isFullscreenMode = wp.data.select( 'core/edit-post' ).isFeatureActive( 'fullscreenMode' ); if ( isFullscreenMode ) { wp.data.dispatch( 'core/edit-post' ).toggleFeature( 'fullscreenMode' ); } });";
	wp_add_inline_script( 'wp-blocks', $script );
}
add_action( 'enqueue_block_editor_assets', 'mu_disable_fullscreen_editor' );