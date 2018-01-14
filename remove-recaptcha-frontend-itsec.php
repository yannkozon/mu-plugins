<?php
defined('ABSPATH') or die();

/*
MU Plugin: remove-recaptcha-frontend-itsec
Description: Remove recaptcha in frontend theme if you use Google reCAPTCHA with iThemes security pro
Author: Yann Kozon
Author URI: https://www.yannkozon.com
*/

function mu_remove_recaptcha_frontend_itsec() {
    if( ! in_array( $GLOBALS['pagenow'], array( 'wp-login.php', 'wp-register.php' ) ) ) {
    	wp_dequeue_script( 'google-recaptcha' );
   		wp_dequeue_script( 'itsec-recaptcha' );
    }
}
add_action( 'wp_enqueue_scripts', 'mu_remove_recaptcha_frontend_itsec', 999 );