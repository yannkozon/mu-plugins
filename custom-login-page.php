<?php
defined('ABSPATH') or die();

/*
MU Plugin: custom-login-page
Description: Custom login page
Author: Yann Kozon
Author URI: https://www.yannkozon.com
*/

function mu_clp_login_headerurl() {
    return home_url();
}
add_filter( 'login_headerurl', 'mu_clp_login_headerurl' );

function mu_clp_login_headertitle() {
    return get_bloginfo( 'name' );
}
add_filter( 'login_headertitle', 'mu_clp_login_headertitle' );

function clp_login_message() {
    return '<h2 class="login-title">' . __( 'Administration', 'mu-custom-login-page' ) . '</h2>';
}
add_filter( 'login_message', 'clp_login_message' );

function mu_clp_login_head() {
	// Remove error shake effect
	remove_action( 'login_head', 'wp_shake_js', 12 );

	// Add custom login stylesheet
	echo "<link rel='stylesheet' id='clp-style'  href='" . WPMU_PLUGIN_URL . "/custom-login-page/css/login.min.css?ver=1.0.0' type='text/css' media='all' />";
}
add_action('login_head', 'mu_clp_login_head');