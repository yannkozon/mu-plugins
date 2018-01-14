<?php
defined('ABSPATH') or die();

/*
MU Plugin: sanitize-file-name
Description: Sanitize upload file name
Author: Yann Kozon
Author URI: https://www.yannkozon.com
*/

add_filter( 'sanitize_file_name', 'remove_accents' );