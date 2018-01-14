<?php
defined('ABSPATH') or die();

/*
MU Plugin: remove-meta-box-author
Description: Remove meta box author in post and page
Author: Yann Kozon
Author URI: https://www.yannkozon.com
*/

function mu_remove_meta_box_author() {
	remove_meta_box( 'authordiv', 'post', 'normal' );
	remove_meta_box( 'authordiv', 'page', 'normal' );
}
add_action( 'admin_menu', 'mu_remove_meta_box_author' );