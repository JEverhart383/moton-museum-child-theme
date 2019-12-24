<?php

require_once dirname(__FILE__) . '/post-types/staff.php';

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}



function assemble_staff_member_from_post($post) {
	$post_id = get_the_ID($post);
	$honorific = get_field('honorific', $post_id);
	$first_name = get_field('first_name', $post_id);
	$last_name = get_field('last_name', $post_id);
	$full_name = $honorific === 'None' ? "{$honorific} {$first_name} {$last_name}" : "{$first_name} {$last_name}";
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


