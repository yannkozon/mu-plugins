<?php
defined('ABSPATH') or die();

/*
MU Plugin: disable-admin-email-verification
Description: Disable admin email verification
Author: Yann Kozon
Author URI: https://www.yannkozon.com
*/

add_filter( 'admin_email_check_interval', '__return_zero' );