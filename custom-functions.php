<?php

require_once dirname(__FILE__) . '/post-types/staff.php';
require_once dirname(__FILE__) . '/post-types/gallery.php';


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Moton Theme General Settings',
		'menu_title'	=> 'Moton Settings',
		'menu_slug' 	=> 'moton-theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Moton Theme CTA Settings',
		'menu_title'	=> 'CTA Settings',
		'parent_slug' 	=> 'moton-theme-general-settings'
	));
	
}



function assemble_staff_member_from_post($post) {
	$post_id = get_the_ID($post);
	$honorific = get_field('honorific', $post_id);
	$first_name = get_field('first_name', $post_id);
	$last_name = get_field('last_name', $post_id);
	$full_name = $honorific === 'None' ? "{$first_name} {$last_name}" : "{$honorific} {$first_name} {$last_name}";
	$position = get_field('position', $post_id);
	$moton_resident_scholar = get_field('moton_resident_scholar', $post_id);
	$email = get_field('email', $post_id);
	$phone = get_field('phone', $post_id);
	$headshot = get_field('headshot', $post_id);
	$permalink = get_the_permalink($post_id); 
	return array(
		'full_name' => $full_name,
		'position' => $position,
		'email' => $email,
		'phone' => $phone,
		'headshot' => $headshot,
		'moton_resident_scholar' => $moton_resident_scholar,
		'permalink' => $permalink
	);
}

function get_page_by_template($template = '') {
	$args = array(
		'meta_key' => '_wp_page_template',
		'meta_value' => $template
	);
	return get_pages($args); 
}


function moton_filter_pre_get_posts( $query ) {
	if ( ! $query->is_main_query() ) {
			return $query;
	} else {
			if ( $query->get('post_type') === 'staff' ) {
					$query->set('posts_per_page', -1 );
			}
			return $query;
	}
}
add_filter( 'pre_get_posts', 'moton_filter_pre_get_posts' );

add_post_type_support( 'page', 'excerpt' );

function replace_excerpt_button_class($text) {
	$text = str_replace('btn-secondary', 'btn-primary', $text);
	$text = str_replace('Read More...', 'Read More', $text);
	$text = str_replace('[...]', '', $text);
	return $text;
}

add_filter('get_the_excerpt', 'replace_excerpt_button_class');

function moton_get_upcoming_events() {
	$events_query = new WP_Query([
		'post_type' => 'tribe_events',
		'posts_per_page' => 10
	]);

	$events = moton_create_event_details_from_tribe_events($events_query);
	wp_reset_postdata();
	return $events;
}

function moton_create_event_details_from_tribe_events($events_query) {
	$events = [
		'featured_events' => [],
		'regular_events' => []
	];
	foreach($events_query->posts as $event){
		$event_details = [
			'title' => get_the_title($event->ID),
			'featured_image' => get_the_post_thumbnail_url($event->ID),
			'permalink' => get_the_permalink($event->ID),
			'featured' => get_post_meta($event->ID, '_tribe_featured', true),
			'event_start' => get_post_meta($event->ID, '_EventStartDate', true),
			'event_end' => get_post_meta($event->ID, '_EventEndDate', true),
			'content' => ''
		];
		if ($event_details['featured'] == '1') {
			$event_details['content'] = get_the_content($event->ID);
			array_push($events['featured_events'], $event_details);
		} else {
			array_push($events['regular_events'], $event_details);
		}
	}
	function sort_by_startdate($a, $b) {
		return strtotime($b['event_start']) - strtotime($a['event_start']);
	}
	usort($events['regular_events'], 'sort_by_startdate');
	usort($events['featured_events'], 'sort_by_startdate');
	$output = array_slice($events['regular_events'], 0, 3);
	$events['regular_events'] = $output;
	var_dump($output);
	return $events;
}

function moton_convert_to_friendly_date($datestring) {

}


