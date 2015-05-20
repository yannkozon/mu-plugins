<?php
defined('ABSPATH') or die('Cheatin\' uh?');
/*
MU Plugin: sanitize-file-name
Description: Remove accents to upload file
Author: Yann Kozon
Author URI: http://www.yannkozon.com
*/

add_filter('sanitize_file_name', 'remove_accents');