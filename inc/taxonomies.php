<?php

add_action( 'init', 'smcs_faculty_taxonomies' );

// Register Custom Taxonomy
function smcs_faculty_taxonomies() {
	// Faculty Role
	register_taxonomy(
	'smcs_faculty_role',
	array( 'faculty' ),
	array(
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => false,
			'labels' => array(
				'name'                       => _x( 'Roles', 'smcs' ),
				'singular_name'              => _x( 'Role', 'smcs' ),
				'menu_name'                  => __( 'Role', 'smcs' ),
				'all_items'                  => __( 'All Roles', 'smcs' ),
				'parent_item'                => __( 'Parent Role', 'smcs' ),
				'parent_item_colon'          => __( 'Parent Role:', 'smcs' ),
				'new_item_name'              => __( 'New Role', 'smcs' ),
				'add_new_item'               => __( 'Add New Role', 'smcs' ),
				'edit_item'                  => __( 'Edit Role', 'smcs' ),
				'update_item'                => __( 'Update Role', 'smcs' ),
				'view_item'                  => __( 'View Role', 'smcs' ),
				'separate_items_with_commas' => __( 'Separate Roles with commas', 'smcs' ),
				'add_or_remove_items'        => __( 'Add or remove Roles', 'smcs' ),
				'choose_from_most_used'      => __( 'Choose from the most used Roles', 'smcs' ),
				'popular_items'              => __( 'Popular Roles', 'smcs' ),
				'search_items'               => __( 'Search Roles', 'smcs' ),
				'not_found'                  => __( 'Not Found', 'smcs' ),
			)
		)
	);
	// Faculty Title
	register_taxonomy(
	'smcs_faculty_title',
	array( 'faculty' ),
	array(
			'hierarchical'               => false,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => false,
			'show_tagcloud'              => true,
			'labels' => array(
				'name'                       => _x( 'Titles or Classes', 'smcs' ),
				'singular_name'              => _x( 'Title or Class', 'smcs' ),
				'menu_name'                  => __( 'Title or Class', 'smcs' ),
				'all_items'                  => __( 'All Titles and Classes', 'smcs' ),
				'parent_item'                => __( 'Parent Title', 'smcs' ),
				'parent_item_colon'          => __( 'Parent Title:', 'smcs' ),
				'new_item_name'              => __( 'New Title', 'smcs' ),
				'add_new_item'               => __( 'Add New Title', 'smcs' ),
				'edit_item'                  => __( 'Edit Title', 'smcs' ),
				'update_item'                => __( 'Update Title', 'smcs' ),
				'view_item'                  => __( 'View Title', 'smcs' ),
				'separate_items_with_commas' => __( 'Separate Titles with commas', 'smcs' ),
				'add_or_remove_items'        => __( 'Add or remove Titles', 'smcs' ),
				'choose_from_most_used'      => __( 'Choose from the most used Titles', 'smcs' ),
				'popular_items'              => __( 'Popular Titles', 'smcs' ),
				'search_items'               => __( 'Search Titles', 'smcs' ),
				'not_found'                  => __( 'Not Found', 'smcs' ),
			)
		)
	);
}
