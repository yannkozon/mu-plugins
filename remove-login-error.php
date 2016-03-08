<?php
defined('ABSPATH') or die();
/*
MU Plugin: remove-login-error
Description: Remove login errors
Author: Yann Kozon
Author URI: http://www.yannkozon.com
*/

add_filter( 'login_errors', create_function( '$a', "return null;" ) );