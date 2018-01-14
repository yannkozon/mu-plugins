<?php
defined('ABSPATH') or die();

/*
MU Plugin: hide-admin-bar
Description: Hide admin bar
Author: Yann Kozon
Author URI: https://www.yannkozon.com
*/

add_filter( 'show_admin_bar', '__return_false' );