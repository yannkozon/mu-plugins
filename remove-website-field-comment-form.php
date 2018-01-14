<?php
defined('ABSPATH') or die();

/*
MU Plugin: remove-website-field-comment-form
Description: Remove website field in comment form
Author: Yann Kozon
Author URI: https://www.yannkozon.com
*/

function mu_remove_website_field_comment_form( $fields ) {  
	if( isset( $fields['url'] ) ) {
		unset( $fields['url'] );
	}
	return $fields;  
}
add_action( 'comment_form_default_fields', 'mu_remove_website_field_comment_form' );