<?php
defined('ABSPATH') or die();

/*
MU Plugin: remove-h1-wp-editor
Description: Remove H1 in wp editor / gutenberg
Author: Yann Kozon
Author URI: https://www.yannkozon.com
*/

function mu_remove_h1_wp_editor( $init ) {
    $init['block_formats'] = 'Paragraph=p;Heading 2=h2;Heading 3=h3;Heading 4=h4;Heading 5=h5;Heading 6=h6;Pre=pre';
    return $init;
}
add_filter( 'tiny_mce_before_init', 'mu_remove_h1_wp_editor' );

function mu_remove_h1_gutenberg_editor() {
	echo '<style>
	#editor .block-library-heading-level-toolbar .components-toolbar-group button:first-child {
		width: 3px;
		min-width: auto;
		padding: 3px 0;
		pointer-events: none;
		visibility: hidden;
	}
	</style>';
}
add_action( 'admin_head', 'mu_remove_h1_gutenberg_editor' );