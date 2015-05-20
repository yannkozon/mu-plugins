<?php
defined('ABSPATH') or die('Cheatin\' uh?');
/*
MU Plugin: remove-website-comment-field
Description: Remove website field in comments
Author: Yann Kozon
Author URI: http://www.yannkozon.com
*/

function mu_remove_website_comment_field($fields) {  
	if(isset($fields['url'])) {
		unset($fields['url']);
	}
	return $fields;  
}
add_action('comment_form_default_fields', 'mu_remove_website_comment_field');