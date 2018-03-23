<?php 
	/**
	 * Registers a new post type
	 * @uses $wp_post_types Inserts new post type object into the list
	 *
	 * @param string  Post type key, must not exceed 20 characters
	 * @param array|string  See optional args description above.
	 * @return object|WP_Error the registered post type object, or an error object
	 */
	function bootstrap_slider() {
	
		$labels = array(
			'name'               => __( 'All Sliders', 'text-domain' ),
			'singular_name'      => __( 'All sliers', 'text-domain' ),
			'add_new'            => _x( 'Add New Slide', 'text-domain', 'text-domain' ),
			'add_new_item'       => __( 'Add New Slide', 'text-domain' ),
			'menu_name'          => __( 'Sliders', 'text-domain' ),
		);
	
		$args = array(
			'labels'              => $labels,
			'hierarchical'        => false,
			'description'         => 'description',
			'taxonomies'          => array(),
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => null,
			'menu_icon'           => null,
			'show_in_nav_menus'   => true,
			'publicly_queryable'  => true,
			'exclude_from_search' => false,
			'has_archive'         => true,
			'query_var'           => true,
			'can_export'          => true,
			'rewrite'             => true,
			'capability_type'     => 'post',
			'supports'            => array(
				'title',
				'editor',
				'thumbnail',
			),
		);
	
		register_post_type( 'slider', $args );
	}
	
	add_action( 'init', 'bootstrap_slider' );
	