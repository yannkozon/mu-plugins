<?php
defined('ABSPATH') or die();

/*
MU Plugin: custom-admin-footer
Description: Custom admin footer
Author: Yann Kozon
Author URI: https://www.yannkozon.com
*/

add_filter( 'update_footer', '__return_empty_string', PHP_INT_MAX );

function mu_custom_admin_footer_text() {
	$theme = wp_get_theme();

	if ( ! empty( $theme->display( 'AuthorURI', false ) ) && ! empty( $theme->display( 'Author', false ) ) ) {
		return sprintf( __( 'Développé par <a href="%s" target="_blank" rel="noopener">%s</a>', '_st' ), $theme->display( 'AuthorURI', false ), $theme->display( 'Author', false ) );
	} elseif ( ! empty( $theme->display( 'Author', false ) ) ) {
		return sprintf( __( 'Développé par %s', '_st' ), $theme->display( 'AuthorURI', false ), $theme->display( 'Author', false ) );
	}

	return '';
}
add_filter( 'admin_footer_text', 'mu_custom_admin_footer_text', PHP_INT_MAX );