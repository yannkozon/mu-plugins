<?php
defined('ABSPATH') or die('Cheatin\' uh?');
/*
MU Plugin: remove-login-error
Description: Remove login error
Author: Yann Kozon
Author URI: http://www.yannkozon.com
*/

add_filter('login_errors', create_function('$a', "return null;"));