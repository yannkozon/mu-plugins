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

 	unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_site_health'] ); // État de santé du site
 	unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now'] ); // D’un coup d’œil
 	unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity'] ); // Activité

 	unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press'] ); // Brouillon rapide
 	unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_primary'] ); // Évènements et nouveautés WordPress
}
add_action( 'wp_dashboard_setup', 'mu_remove_dashboard_widgets' );