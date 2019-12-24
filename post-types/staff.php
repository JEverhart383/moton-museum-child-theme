<?php

/**
 * Registers the `staff` post type.
 */
function staff_init() {
	register_post_type( 'staff', array(
		'labels'                => array(
			'name'                  => __( 'Staff', 'moton-museum-child-theme' ),
			'singular_name'         => __( 'Staff', 'moton-museum-child-theme' ),
			'all_items'             => __( 'All Staff', 'moton-museum-child-theme' ),
			'archives'              => __( 'Staff Archives', 'moton-museum-child-theme' ),
			'attributes'            => __( 'Staff Attributes', 'moton-museum-child-theme' ),
			'insert_into_item'      => __( 'Insert into Staff', 'moton-museum-child-theme' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Staff', 'moton-museum-child-theme' ),
			'featured_image'        => _x( 'Featured Image', 'staff', 'moton-museum-child-theme' ),
			'set_featured_image'    => _x( 'Set featured image', 'staff', 'moton-museum-child-theme' ),
			'remove_featured_image' => _x( 'Remove featured image', 'staff', 'moton-museum-child-theme' ),
			'use_featured_image'    => _x( 'Use as featured image', 'staff', 'moton-museum-child-theme' ),
			'filter_items_list'     => __( 'Filter Staff list', 'moton-museum-child-theme' ),
			'items_list_navigation' => __( 'Staff list navigation', 'moton-museum-child-theme' ),
			'items_list'            => __( 'Staff list', 'moton-museum-child-theme' ),
			'new_item'              => __( 'New Staff', 'moton-museum-child-theme' ),
			'add_new'               => __( 'Add New', 'moton-museum-child-theme' ),
			'add_new_item'          => __( 'Add New Staff', 'moton-museum-child-theme' ),
			'edit_item'             => __( 'Edit Staff', 'moton-museum-child-theme' ),
			'view_item'             => __( 'View Staff', 'moton-museum-child-theme' ),
			'view_items'            => __( 'View Staff', 'moton-museum-child-theme' ),
			'search_items'          => __( 'Search Staff', 'moton-museum-child-theme' ),
			'not_found'             => __( 'No Staff found', 'moton-museum-child-theme' ),
			'not_found_in_trash'    => __( 'No Staff found in trash', 'moton-museum-child-theme' ),
			'parent_item_colon'     => __( 'Parent Staff:', 'moton-museum-child-theme' ),
			'menu_name'             => __( 'Staff', 'moton-museum-child-theme' ),
		),
		'public'                => true,
		'hierarchical'          => false,
		'show_ui'               => true,
		'show_in_nav_menus'     => true,
		'supports'              => array( 'title', 'editor' ),
		'has_archive'           => true,
		'rewrite'               => true,
		'query_var'             => true,
		'menu_position'         => null,
		'menu_icon'             => 'dashicons-universal-access',
		'show_in_rest'          => true,
		'rest_base'             => 'staff',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	) );

}
add_action( 'init', 'staff_init' );

/**
 * Sets the post updated messages for the `staff` post type.
 *
 * @param  array $messages Post updated messages.
 * @return array Messages for the `staff` post type.
 */
function staff_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['staff'] = array(
		0  => '', // Unused. Messages start at index 1.
		/* translators: %s: post permalink */
		1  => sprintf( __( 'Staff updated. <a target="_blank" href="%s">View Staff</a>', 'moton-museum-child-theme' ), esc_url( $permalink ) ),
		2  => __( 'Custom field updated.', 'moton-museum-child-theme' ),
		3  => __( 'Custom field deleted.', 'moton-museum-child-theme' ),
		4  => __( 'Staff updated.', 'moton-museum-child-theme' ),
		/* translators: %s: date and time of the revision */
		5  => isset( $_GET['revision'] ) ? sprintf( __( 'Staff restored to revision from %s', 'moton-museum-child-theme' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		/* translators: %s: post permalink */
		6  => sprintf( __( 'Staff published. <a href="%s">View Staff</a>', 'moton-museum-child-theme' ), esc_url( $permalink ) ),
		7  => __( 'Staff saved.', 'moton-museum-child-theme' ),
		/* translators: %s: post permalink */
		8  => sprintf( __( 'Staff submitted. <a target="_blank" href="%s">Preview Staff</a>', 'moton-museum-child-theme' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		/* translators: 1: Publish box date format, see https://secure.php.net/date 2: Post permalink */
		9  => sprintf( __( 'Staff scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Staff</a>', 'moton-museum-child-theme' ),
		date_i18n( __( 'M j, Y @ G:i', 'moton-museum-child-theme' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		/* translators: %s: post permalink */
		10 => sprintf( __( 'Staff draft updated. <a target="_blank" href="%s">Preview Staff</a>', 'moton-museum-child-theme' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'staff_updated_messages' );
