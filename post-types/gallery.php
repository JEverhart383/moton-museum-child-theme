<?php

/**
 * Registers the `gallery` post type.
 */
function gallery_init() {
	register_post_type( 'gallery', array(
		'labels'                => array(
			'name'                  => __( 'Galleries', 'moton-museum-child-theme' ),
			'singular_name'         => __( 'Gallery', 'moton-museum-child-theme' ),
			'all_items'             => __( 'All Galleries', 'moton-museum-child-theme' ),
			'archives'              => __( 'Gallery Archives', 'moton-museum-child-theme' ),
			'attributes'            => __( 'Gallery Attributes', 'moton-museum-child-theme' ),
			'insert_into_item'      => __( 'Insert into Gallery', 'moton-museum-child-theme' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Gallery', 'moton-museum-child-theme' ),
			'featured_image'        => _x( 'Featured Image', 'gallery', 'moton-museum-child-theme' ),
			'set_featured_image'    => _x( 'Set featured image', 'gallery', 'moton-museum-child-theme' ),
			'remove_featured_image' => _x( 'Remove featured image', 'gallery', 'moton-museum-child-theme' ),
			'use_featured_image'    => _x( 'Use as featured image', 'gallery', 'moton-museum-child-theme' ),
			'filter_items_list'     => __( 'Filter Galleries list', 'moton-museum-child-theme' ),
			'items_list_navigation' => __( 'Galleries list navigation', 'moton-museum-child-theme' ),
			'items_list'            => __( 'Galleries list', 'moton-museum-child-theme' ),
			'new_item'              => __( 'New Gallery', 'moton-museum-child-theme' ),
			'add_new'               => __( 'Add New', 'moton-museum-child-theme' ),
			'add_new_item'          => __( 'Add New Gallery', 'moton-museum-child-theme' ),
			'edit_item'             => __( 'Edit Gallery', 'moton-museum-child-theme' ),
			'view_item'             => __( 'View Gallery', 'moton-museum-child-theme' ),
			'view_items'            => __( 'View Galleries', 'moton-museum-child-theme' ),
			'search_items'          => __( 'Search Galleries', 'moton-museum-child-theme' ),
			'not_found'             => __( 'No Galleries found', 'moton-museum-child-theme' ),
			'not_found_in_trash'    => __( 'No Galleries found in trash', 'moton-museum-child-theme' ),
			'parent_item_colon'     => __( 'Parent Gallery:', 'moton-museum-child-theme' ),
			'menu_name'             => __( 'Galleries', 'moton-museum-child-theme' ),
		),
		'public'                => true,
		'hierarchical'          => false,
		'show_ui'               => true,
		'show_in_nav_menus'     => true,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
		'has_archive'           => true,
		'rewrite'               => true,
		'query_var'             => true,
		'menu_position'         => null,
		'menu_icon'             => 'dashicons-
slides',
		'show_in_rest'          => true,
		'rest_base'             => 'gallery',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	) );

}
add_action( 'init', 'gallery_init' );

/**
 * Sets the post updated messages for the `gallery` post type.
 *
 * @param  array $messages Post updated messages.
 * @return array Messages for the `gallery` post type.
 */
function gallery_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['gallery'] = array(
		0  => '', // Unused. Messages start at index 1.
		/* translators: %s: post permalink */
		1  => sprintf( __( 'Gallery updated. <a target="_blank" href="%s">View Gallery</a>', 'moton-museum-child-theme' ), esc_url( $permalink ) ),
		2  => __( 'Custom field updated.', 'moton-museum-child-theme' ),
		3  => __( 'Custom field deleted.', 'moton-museum-child-theme' ),
		4  => __( 'Gallery updated.', 'moton-museum-child-theme' ),
		/* translators: %s: date and time of the revision */
		5  => isset( $_GET['revision'] ) ? sprintf( __( 'Gallery restored to revision from %s', 'moton-museum-child-theme' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		/* translators: %s: post permalink */
		6  => sprintf( __( 'Gallery published. <a href="%s">View Gallery</a>', 'moton-museum-child-theme' ), esc_url( $permalink ) ),
		7  => __( 'Gallery saved.', 'moton-museum-child-theme' ),
		/* translators: %s: post permalink */
		8  => sprintf( __( 'Gallery submitted. <a target="_blank" href="%s">Preview Gallery</a>', 'moton-museum-child-theme' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		/* translators: 1: Publish box date format, see https://secure.php.net/date 2: Post permalink */
		9  => sprintf( __( 'Gallery scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Gallery</a>', 'moton-museum-child-theme' ),
		date_i18n( __( 'M j, Y @ G:i', 'moton-museum-child-theme' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		/* translators: %s: post permalink */
		10 => sprintf( __( 'Gallery draft updated. <a target="_blank" href="%s">Preview Gallery</a>', 'moton-museum-child-theme' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'gallery_updated_messages' );
