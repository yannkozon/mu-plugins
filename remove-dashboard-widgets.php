<?php
defined('ABSPATH') or die();

/*
MU Plugin: remove-dashboard-widgets
Description: Remove default dashboard widgets
Author: Yann Kozon
Author URI: https://www.yannkozon.com
*/

function mu_remove_dashboard_widgets() {
 	global $wp_meta_boxes;
 	unset( $wp_meta_boxes['dashboard'] );
}
add_action( 'wp_dashboard_setup', 'mu_remove_dashboard_widgets' );