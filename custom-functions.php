<?php
require_once dirname(__FILE__) . '/post-types/listing.php';

function create_mls_status_taxonomy() {
	register_taxonomy(
			'listings_mls_status',
			'listing',
			array(
					'labels' => array(
							'name' => 'MLS Status',
							'add_new_item' => 'Add New MLS Status',
							'new_item_name' => "New MLS Status"
					),
					'show_ui' => true,
					'show_tagcloud' => false,
					'hierarchical' => true
			)
	);
}


function get_mls_status_badge($post_id) {
	$statuses = get_the_terms(get_the_ID(), 'listings_mls_status');
	$html = ''; 
	if(is_array($statuses)) {
		$status = $statuses[0];
		switch($status->slug) {
			case 'active':
				$html = '<span class="badge badge-pill badge-success">For Sale</span>';
				break;
			case 'under-contract':
				$html = '<span class="badge badge-pill badge-warning">Under Contract</span>';
				break;
			case 'closed':
				$html = '<span class="badge badge-pill badge-danger">Sold</span>';
				break;
			default:
				$html = '<span class="badge badge-pill badge-success">For Sale</span>';
		}
		return $html;
	} else {
		return $html;
	}
}

add_action( 'init', 'create_mls_status_taxonomy', 0 );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}