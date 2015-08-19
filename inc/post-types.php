<?php

add_action( 'init', 'faculty_post_type' );
add_action( 'init', 'smcs_students_post_type' );
add_action( 'cmb2_init', 'smcs_grade_register_metabox' );

// Register Custom Post Type
function faculty_post_type() {

	$labels = array(
		'name'                => _x( 'Faculty', 'Post Type General Name', 'smcs' ),
		'singular_name'       => _x( 'Faculty Member', 'Post Type Singular Name', 'smcs' ),
		'menu_name'           => __( 'Faculty', 'smcs' ),
		'name_admin_bar'      => __( 'Faculty', 'smcs' ),
		'parent_item_colon'   => __( 'Parent Faculty Member:', 'smcs' ),
		'all_items'           => __( 'All Faculty', 'smcs' ),
		'add_new_item'        => __( 'Add New Faculty Member', 'smcs' ),
		'add_new'             => __( 'Add New', 'smcs' ),
		'new_item'            => __( 'New Faculty Member', 'smcs' ),
		'edit_item'           => __( 'Edit Faculty Member', 'smcs' ),
		'update_item'         => __( 'Update Faculty Member', 'smcs' ),
		'view_item'           => __( 'View Faculty Member', 'smcs' ),
		'search_items'        => __( 'Search Faculty', 'smcs' ),
		'not_found'           => __( 'Not found', 'smcs' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'smcs' ),
	);
	$args = array(
		'label'               => __( 'Faculty Member', 'smcs' ),
		'description'         => __( 'SMCS Staff', 'smcs' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'author', 'thumbnail', 'revisions', 'page-attributes', ),
		'taxonomies'          => array( 'smcs_faculty_role', 'smcs_faculty_title' ),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-id',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => false,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'faculty', $args );

}


// Register Students Post Type
function smcs_students_post_type() {

	register_post_type(
		'smcs_student',
		array(
			'description'         => __( 'SMCS Students', 'smcs' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-groups',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => true,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',

			'supports' => array(
				'title',
				'author',
				'revisions',
				'page-attributes',
			),

			'labels' => array(
				'name'                => __( 'Students', 'smcs' ),
				'singular_name'       => __( 'Student', 'smcs' ),
				'menu_name'           => __( 'Students', 'smcs' ),
				'name_admin_bar'      => __( 'Students', 'smcs' ),
				'parent_item_colon'   => __( 'Parent Item:', 'smcs' ),
				'all_items'           => __( 'All Students', 'smcs' ),
				'add_new_item'        => __( 'Add New Student', 'smcs' ),
				'add_new'             => __( 'Add New', 'smcs' ),
				'new_item'            => __( 'New Student', 'smcs' ),
				'edit_item'           => __( 'Edit Student', 'smcs' ),
				'update_item'         => __( 'Update Student', 'smcs' ),
				'view_item'           => __( 'View Student', 'smcs' ),
				'search_items'        => __( 'Search Students', 'smcs' ),
				'not_found'           => __( 'Not found', 'smcs' ),
				'not_found_in_trash'  => __( 'Not found in Trash', 'smcs' ),
			)
		)
	);
}






























function smcs_grade_register_metabox() {

$prefix = 'smcs_';

	$smcs_student = new_cmb2_box( array(
		'id'            => $prefix . 'grade',
		'title'         => __( 'Student Info', 'smcs' ),
		'object_types'  => array( 'smcs_student', ), // Post type
	) );
	$smcs_student->add_field( array(
		'name'             => __( 'Grade', 'cmb2' ),
		'desc'             => __( 'field description (optional)', 'cmb2' ),
		'id'               => $prefix . 'grade',
		'type'             => 'select',
		'show_option_none' => false,
		'options'          => array(
			'0' 	=> __( 'kindergarten', 'cmb2' ),
			'1'   		=> __( '1st', 'cmb2' ),
			'2'     => __( '2nd', 'cmb2' ),
			'3'   		=> __( '3rd', 'cmb2' ),
			'4'     => __( '4th', 'cmb2' ),
			'5'   		=> __( '5th', 'cmb2' ),
			'6'     => __( '6th', 'cmb2' ),
			'7'   		=> __( '7th', 'cmb2' ),
			'8'     => __( '8th', 'cmb2' ),
		),
	) );
}
