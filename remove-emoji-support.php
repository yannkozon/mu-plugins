<?php
defined('ABSPATH') or die();
/*
MU Plugin: remove-emoji-support
Description: Remove emoji support
Author: Yann Kozon
Author URI: http://www.yannkozon.com
*/

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );