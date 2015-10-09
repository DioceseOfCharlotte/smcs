<?php

add_action( 'init', 'doc_classrooms_register_post_types' );
add_action( 'init', 'thursday_packet_post_type' );

function doc_classrooms_register_post_types() {
	register_post_type(
		'classroom',
		array(
			'description'         => '',
			'public'              => true,
			'publicly_queryable'  => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'exclude_from_search' => false,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 60,
			'menu_icon'           => 'dashicons-book-alt',
			'can_export'          => true,
			'delete_with_user'    => false,
			'hierarchical'        => true,
			'has_archive'         => 'classrooms',
			'query_var'           => 'classroom',
			'capability_type'     => 'classroom',
			'map_meta_cap'        => true,
			/* Capabilities. */
			'capabilities' => array(
				// meta caps (don't assign these to roles)
				'edit_post'              => 'edit_classroom',
				'read_post'              => 'read_classroom',
				'delete_post'            => 'delete_classroom',
				// primitive/meta caps
				'create_posts'           => 'create_classrooms',
				// primitive caps used outside of map_meta_cap()
				'edit_posts'             => 'edit_classrooms',
				'edit_others_posts'      => 'manage_classrooms',
				'publish_posts'          => 'manage_classrooms',
				'read_private_posts'     => 'read',
				// primitive caps used inside of map_meta_cap()
				'read'                   => 'read',
				'delete_posts'           => 'manage_classrooms',
				'delete_private_posts'   => 'manage_classrooms',
				'delete_published_posts' => 'manage_classrooms',
				'delete_others_posts'    => 'manage_classrooms',
				'edit_private_posts'     => 'edit_classrooms',
				'edit_published_posts'   => 'edit_classrooms'
			),
			/* The rewrite handles the URL structure. */
			'rewrite' => array(
				'slug'       => 'classrooms',
				'with_front' => false,
				'pages'      => true,
				'feeds'      => true,
				'ep_mask'    => EP_PERMALINK,
			),
			/* What features the post type supports. */
			'supports' => array(
				'title',
				'editor',
				'author',
				'thumbnail',
				'excerpt',
				'revisions',
				'page-attributes',
                'post-formats'
			),
			/* Labels used when displaying the posts. */
			'labels' => array(
				'name'               => __( 'Classrooms',                   	'rcdoc' ),
				'singular_name'      => __( 'Classroom',                    	'rcdoc' ),
				'menu_name'          => __( 'Classrooms',                   	'rcdoc' ),
				'name_admin_bar'     => __( 'Classrooms',                    	'rcdoc' ),
				'add_new'            => __( 'Add New',                          'rcdoc' ),
				'add_new_item'       => __( 'Add New Classroom',            	'rcdoc' ),
				'edit_item'          => __( 'Edit Classroom',               	'rcdoc' ),
				'new_item'           => __( 'New Classroom',                	'rcdoc' ),
				'view_item'          => __( 'View Classroom',               	'rcdoc' ),
				'search_items'       => __( 'Search Classrooms',            	'rcdoc' ),
				'not_found'          => __( 'No Classrooms found',          	'rcdoc' ),
				'not_found_in_trash' => __( 'No Classrooms found in trash', 	'rcdoc' ),
				'all_items'          => __( 'All Classrooms',              	    'rcdoc' ),
			)
		)
	);
	// Get the administrator role.
	$role = get_role( 'administrator' );
	// If the administrator role exists, add required capabilities for the plugin.
	if ( ! empty( $role ) ) {
		$role->add_cap( 'create_classrooms'     ); // Create new posts.
		$role->add_cap( 'manage_classrooms'     ); // delete/publish existing posts.
		$role->add_cap( 'edit_classrooms'       ); // Edit existing posts.
	}
}




// Register Custom Post Type
function thursday_packet_post_type() {

	$labels = array(
		'name'                => _x( 'Thursday Packets', 'Post Type General Name', 'smcs' ),
		'singular_name'       => _x( 'Thursday Packet', 'Post Type Singular Name', 'smcs' ),
		'menu_name'           => __( 'Thursday Packet', 'smcs' ),
		'name_admin_bar'      => __( 'Thursday Packet', 'smcs' ),
		'parent_item_colon'   => __( 'Parent Item:', 'smcs' ),
		'all_items'           => __( 'All Items', 'smcs' ),
		'add_new_item'        => __( 'Add New Item', 'smcs' ),
		'add_new'             => __( 'Add New', 'smcs' ),
		'new_item'            => __( 'New Item', 'smcs' ),
		'edit_item'           => __( 'Edit Item', 'smcs' ),
		'update_item'         => __( 'Update Item', 'smcs' ),
		'view_item'           => __( 'View Item', 'smcs' ),
		'search_items'        => __( 'Search Item', 'smcs' ),
		'not_found'           => __( 'Not found', 'smcs' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'smcs' ),
	);
	$args = array(
		'label'               => __( 'Thursday Packet', 'smcs' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-portfolio',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'thursday_packet', $args );

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
