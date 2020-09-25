<?php
defined('ABSPATH') or die();

/*
MU Plugin: duplicate-posts
Description: Allows users to clone posts
Author: Yann Kozon
Author URI: https://www.yannkozon.com
*/

function mu_duplicate_posts_admin_action() {
	if ( current_user_can( 'edit_posts' ) ) {

		if ( ! ( isset( $_GET['post'] ) || isset( $_POST['post'] ) || ( isset( $_REQUEST['action'] ) && 'mu_duplicate_posts' == $_REQUEST['action'] ) ) ) {
			wp_die( 'Le lien suivi est expiré.' );
			check_admin_referer( '_wpnonce' . $post->ID );
		}

		$post_id         = ( isset( $_GET['post'] ) ? absint( $_GET['post'] ) : absint( $_POST['post'] ) );
		$post            = get_post( $post_id );
		$current_user    = wp_get_current_user();
		$new_post_author = $post->post_author;

		if ( isset( $post ) && $post != null ) {
			var_dump('tests');

			$args = array(
				'comment_status' => $post->comment_status,
				'ping_status'    => $post->ping_status,
				'post_author'    => $new_post_author,
				'post_content'   => $post->post_content,
				'post_excerpt'   => $post->post_excerpt,
				'post_name'      => $post->post_name,
				'post_parent'    => $post->post_parent,
				'post_password'  => $post->post_password,
				'post_status'    => 'draft',
				'post_title'     => $post->post_title,
				'post_type'      => $post->post_type,
				'to_ping'        => $post->to_ping,
				'menu_order'     => $post->menu_order
			);

			$new_post_id = wp_insert_post( $args );

			$taxonomies = get_object_taxonomies( $post->post_type );

			foreach ( $taxonomies as $taxonomy ) {
				$post_terms = wp_get_object_terms( $post_id, $taxonomy, array( 'fields' => 'slugs' ) );
				wp_set_object_terms( $new_post_id, $post_terms, $taxonomy, false );
			}

			$post_meta_infos = get_post_meta( $post_id );

			wp_redirect( admin_url( sprintf( 'post.php?post=%s&action=edit', $new_post_id ) ) );
			exit;
		} else {
			wp_die( 'Le lien suivi est expiré.' );
		}
	}
}

add_action( 'admin_action_mu_duplicate_posts', 'mu_duplicate_posts_admin_action' );


function mu_duplicate_posts_row_actions( $actions, $post ) {
	if ( current_user_can( 'edit_posts', $post->ID ) ) {
		$url = wp_nonce_url( admin_url( sprintf( 'admin.php?post=%s&action=mu_duplicate_posts', esc_attr( $post->ID ) ) ), '_wpnonce' . $post->ID );
		$actions['duplicate'] = sprintf( '<a href="%s" aria-label="Dupliquer « %s »">Dupliquer</a>', esc_url( $url ), esc_attr( $post->post_title ) );
	}

    return $actions;
} 
 
add_filter( 'page_row_actions', 'mu_duplicate_posts_row_actions', PHP_INT_MAX, 2 );
add_filter( 'post_row_actions', 'mu_duplicate_posts_row_actions', PHP_INT_MAX, 2 );