<?php
defined('ABSPATH') or die();

/*
MU Plugin: remove-welcome-panel
Description: Remove welcome panel
Author: Yann Kozon
Author URI: https://www.yannkozon.com
*/

remove_action( 'welcome_panel', 'wp_welcome_panel' );