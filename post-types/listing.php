<?php

/**
 * Registers the `listing` post type.
 */
function listing_init() {
	register_post_type( 'listing', array(
		'labels'                => array(
			'name'                  => __( 'Listings', 'sova-living-child-theme' ),
			'singular_name'         => __( 'Listing', 'sova-living-child-theme' ),
			'all_items'             => __( 'All Listings', 'sova-living-child-theme' ),
			'archives'              => __( 'Listing Archives', 'sova-living-child-theme' ),
			'attributes'            => __( 'Listing Attributes', 'sova-living-child-theme' ),
			'insert_into_item'      => __( 'Insert into Listing', 'sova-living-child-theme' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Listing', 'sova-living-child-theme' ),
			'featured_image'        => _x( 'Featured Image', 'listing', 'sova-living-child-theme' ),
			'set_featured_image'    => _x( 'Set featured image', 'listing', 'sova-living-child-theme' ),
			'remove_featured_image' => _x( 'Remove featured image', 'listing', 'sova-living-child-theme' ),
			'use_featured_image'    => _x( 'Use as featured image', 'listing', 'sova-living-child-theme' ),
			'filter_items_list'     => __( 'Filter Listings list', 'sova-living-child-theme' ),
			'items_list_navigation' => __( 'Listings list navigation', 'sova-living-child-theme' ),
			'items_list'            => __( 'Listings list', 'sova-living-child-theme' ),
			'new_item'              => __( 'New Listing', 'sova-living-child-theme' ),
			'add_new'               => __( 'Add New', 'sova-living-child-theme' ),
			'add_new_item'          => __( 'Add New Listing', 'sova-living-child-theme' ),
			'edit_item'             => __( 'Edit Listing', 'sova-living-child-theme' ),
			'view_item'             => __( 'View Listing', 'sova-living-child-theme' ),
			'view_items'            => __( 'View Listings', 'sova-living-child-theme' ),
			'search_items'          => __( 'Search Listings', 'sova-living-child-theme' ),
			'not_found'             => __( 'No Listings found', 'sova-living-child-theme' ),
			'not_found_in_trash'    => __( 'No Listings found in trash', 'sova-living-child-theme' ),
			'parent_item_colon'     => __( 'Parent Listing:', 'sova-living-child-theme' ),
			'menu_name'             => __( 'Listings', 'sova-living-child-theme' ),
		),
		'public'                => true,
		'hierarchical'          => false,
		'show_ui'               => true,
		'show_in_nav_menus'     => true,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'has_archive'           => true,
		'rewrite'               => true,
		'query_var'             => true,
		'menu_position'         => null,
		'menu_icon'             => 'dashicons-admin-multisite',
		'show_in_rest'          => true,
		'rest_base'             => 'listing',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	) );

}
add_action( 'init', 'listing_init' );

/**
 * Sets the post updated messages for the `listing` post type.
 *
 * @param  array $messages Post updated messages.
 * @return array Messages for the `listing` post type.
 */
function listing_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['listing'] = array(
		0  => '', // Unused. Messages start at index 1.
		/* translators: %s: post permalink */
		1  => sprintf( __( 'Listing updated. <a target="_blank" href="%s">View Listing</a>', 'sova-living-child-theme' ), esc_url( $permalink ) ),
		2  => __( 'Custom field updated.', 'sova-living-child-theme' ),
		3  => __( 'Custom field deleted.', 'sova-living-child-theme' ),
		4  => __( 'Listing updated.', 'sova-living-child-theme' ),
		/* translators: %s: date and time of the revision */
		5  => isset( $_GET['revision'] ) ? sprintf( __( 'Listing restored to revision from %s', 'sova-living-child-theme' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		/* translators: %s: post permalink */
		6  => sprintf( __( 'Listing published. <a href="%s">View Listing</a>', 'sova-living-child-theme' ), esc_url( $permalink ) ),
		7  => __( 'Listing saved.', 'sova-living-child-theme' ),
		/* translators: %s: post permalink */
		8  => sprintf( __( 'Listing submitted. <a target="_blank" href="%s">Preview Listing</a>', 'sova-living-child-theme' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		/* translators: 1: Publish box date format, see https://secure.php.net/date 2: Post permalink */
		9  => sprintf( __( 'Listing scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Listing</a>', 'sova-living-child-theme' ),
		date_i18n( __( 'M j, Y @ G:i', 'sova-living-child-theme' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		/* translators: %s: post permalink */
		10 => sprintf( __( 'Listing draft updated. <a target="_blank" href="%s">Preview Listing</a>', 'sova-living-child-theme' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'listing_updated_messages' );
