<?php
defined('ABSPATH') or die('Cheatin\' uh?');
/*
MU Plugin: single-search-redirect
Description: Redirect to post if there is only one search result
Author: Yann Kozon
Author URI: http://www.yannkozon.com
*/

function mu_single_search_redirect() {  
    if(is_search()) {  
        global $wp_query;
        if($wp_query->post_count == 1) {
        	wp_redirect(get_permalink($wp_query->posts['0']->ID));
        }
    }  
}
add_action('template_redirect', 'mu_single_search_redirect');