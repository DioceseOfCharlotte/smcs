<?php

add_action( 'init', 'smcs_students_post_type' );
add_action( 'cmb2_init', 'smcs_grade_register_metabox' );

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
			'kindergarten' => __( 'kindergarten', 'cmb2' ),
			'1st'   		=> __( '1st', 'cmb2' ),
			'2nd'     => __( '2nd', 'cmb2' ),
			'3rd'   		=> __( '3rd', 'cmb2' ),
			'4th'     => __( '4th', 'cmb2' ),
			'5th'   		=> __( '5th', 'cmb2' ),
			'6th'     => __( '6th', 'cmb2' ),
			'7th'   		=> __( '7th', 'cmb2' ),
			'8th'     => __( '8th', 'cmb2' ),
		),
	) );
}
