<?php
defined('ABSPATH') or die('Cheatin\' uh?');
/*
MU Plugin: hide-admin-bar
Description: Hide admin bar
Author: Yann Kozon
Author URI: http://www.yannkozon.com
*/

add_filter('show_admin_bar', '__return_false');