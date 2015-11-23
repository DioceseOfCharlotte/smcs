<?php

add_action( 'init', 'doc_classrooms_register_taxonomies' );

function doc_classrooms_register_taxonomies() {

	/* Register the Classroom Grade taxonomy. */

	register_taxonomy(
		'classroom_grade',
		array( 'classroom' ),
		array(
			'public'            => true,
			'show_ui'           => true,
			'show_in_nav_menus' => true,
			'show_tagcloud'     => true,
			'show_admin_column' => true,
			'hierarchical'      => true,
			'query_var'         => 'classroom_grade',

			/* Capabilities. */
			'capabilities' => array(
				'manage_terms' => 'manage_classrooms',
				'edit_terms'   => 'manage_classrooms',
				'delete_terms' => 'manage_classrooms',
				'assign_terms' => 'edit_classrooms',
			),

			/* The rewrite handles the URL structure. */
			'rewrite' => array(
				'slug'         => 'classroom/grade',
				'with_front'   => false,
				'hierarchical' => true,
				'ep_mask'      => EP_NONE
			),

			/* Labels used when displaying taxonomy and terms. */
			'labels' => array(
				'name'                       => __( 'Classroom Grades', 'example-textdomain' ),
				'singular_name'              => __( 'Classroom Grade',   'example-textdomain' ),
				'menu_name'                  => __( 'Grades',             'example-textdomain' ),
				'name_admin_bar'             => __( 'Grade',               'example-textdomain' ),
				'search_items'               => __( 'Search Grades',      'example-textdomain' ),
				'popular_items'              => __( 'Popular Grades',     'example-textdomain' ),
				'all_items'                  => __( 'All Grades',         'example-textdomain' ),
				'edit_item'                  => __( 'Edit Grade',          'example-textdomain' ),
				'view_item'                  => __( 'View Grade',          'example-textdomain' ),
				'update_item'                => __( 'Update Grade',        'example-textdomain' ),
				'add_new_item'               => __( 'Add New Grade',       'example-textdomain' ),
				'new_item_name'              => __( 'New Grade Name',      'example-textdomain' ),
				'parent_item'                => __( 'Parent Grade',        'example-textdomain' ),
				'parent_item_colon'          => __( 'Parent Grade:',       'example-textdomain' ),
				'separate_items_with_commas' => null,
				'add_or_remove_items'        => null,
				'choose_from_most_used'      => null,
				'not_found'                  => null,
			)
		)
	);




}
