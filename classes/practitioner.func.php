<?php
/**
 *
 *
 */

if(!function_exists("practitioner_init")){
	function practitioner_init(){
		
		$labels = array(
			'name'               => _x( 'Practitioner', 'post type general name', 'your-plugin-textdomain' ),
			'singular_name'      => _x( 'Practitioner', 'post type singular name', 'your-plugin-textdomain' ),
			'menu_name'          => _x( 'Practitioner', 'admin menu', 'your-plugin-textdomain' ),
			'name_admin_bar'     => _x( 'Practitioner', 'add new on admin bar', 'your-plugin-textdomain' ),
			'add_new'            => _x( 'Add New', 'Practitioner', 'your-plugin-textdomain' ),
			'add_new_item'       => __( 'Add New Practitioner', 'your-plugin-textdomain' ),
			'new_item'           => __( 'New Practitioner', 'your-plugin-textdomain' ),
			'edit_item'          => __( 'Edit Practitioner', 'your-plugin-textdomain' ),
			'view_item'          => __( 'View Practitioner', 'your-plugin-textdomain' ),
			'all_items'          => __( 'All Practitioner', 'your-plugin-textdomain' ),
			'search_items'       => __( 'Search Practitioner', 'your-plugin-textdomain' ),
			'parent_item_colon'  => __( 'Parent Practitioner:', 'your-plugin-textdomain' ),
			'not_found'          => __( 'No Practitioner found.', 'your-plugin-textdomain' ),
			'not_found_in_trash' => __( 'No Practitioner found in Trash.', 'your-plugin-textdomain' )
		);
		
		$args = array(
			'labels'             => $labels,
			'description'        => __( 'Description.', 'your-plugin-textdomain' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'practitioner' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'editor', 'thumbnail')
		);
		
		register_post_type( PRAC_POST_TYPE, $args );
		
		//============= TAXONOMIES
		
		$labels = array(
			'name'              => _x( 'Languages', 'taxonomy general name', 'textdomain' ),
			'singular_name'     => _x( 'Language', 'taxonomy singular name', 'textdomain' ),
			'search_items'      => __( 'Search Languages', 'textdomain' ),
			'all_items'         => __( 'All Languages', 'textdomain' ),
			'parent_item'       => __( 'Parent Language', 'textdomain' ),
			'parent_item_colon' => __( 'Parent Language:', 'textdomain' ),
			'edit_item'         => __( 'Edit Language', 'textdomain' ),
			'update_item'       => __( 'Update Language', 'textdomain' ),
			'add_new_item'      => __( 'Add New Language', 'textdomain' ),
			'new_item_name'     => __( 'New Language Name', 'textdomain' ),
			'menu_name'         => __( 'Language', 'textdomain' ),
		);
		
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'Language' ),
		);
		
		register_taxonomy( PRAC_LANGUAGE, array( PRAC_POST_TYPE ), $args );
		
		
		$labels = array(
			'name'              => _x( 'Client Group Sizes', 'taxonomy general name', 'textdomain' ),
			'singular_name'     => _x( 'Client Group Size', 'taxonomy singular name', 'textdomain' ),
			'search_items'      => __( 'Search Client Group Sizes', 'textdomain' ),
			'all_items'         => __( 'All Client Group Sizes', 'textdomain' ),
			'parent_item'       => __( 'Parent Client Group Size', 'textdomain' ),
			'parent_item_colon' => __( 'Parent Client Group Size:', 'textdomain' ),
			'edit_item'         => __( 'Edit Client Group Size', 'textdomain' ),
			'update_item'       => __( 'Update Client Group Size', 'textdomain' ),
			'add_new_item'      => __( 'Add New Client Group Size', 'textdomain' ),
			'new_item_name'     => __( 'New Client Group Size Name', 'textdomain' ),
			'menu_name'         => __( 'Client Group Size', 'textdomain' ),
		);
		
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'Client Group Size' ),
		);
		
		register_taxonomy( 'cgs', array( PRAC_POST_TYPE ), $args );
		
		$labels = array(
			'name'              => _x( 'Client Age Groups', 'taxonomy general name', 'textdomain' ),
			'singular_name'     => _x( 'Client Age Group', 'taxonomy singular name', 'textdomain' ),
			'search_items'      => __( 'Search Client Age Groups', 'textdomain' ),
			'all_items'         => __( 'All Client Age Groups', 'textdomain' ),
			'parent_item'       => __( 'Parent Client Age Group', 'textdomain' ),
			'parent_item_colon' => __( 'Parent Client Age Group:', 'textdomain' ),
			'edit_item'         => __( 'Edit Client Age Group', 'textdomain' ),
			'update_item'       => __( 'Update Client Age Group', 'textdomain' ),
			'add_new_item'      => __( 'Add New Client Age Group', 'textdomain' ),
			'new_item_name'     => __( 'New Client Age Group Name', 'textdomain' ),
			'menu_name'         => __( 'Client Age Group', 'textdomain' ),
		);
		
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'Client Age Group' ),
		);
		
		register_taxonomy( 'cag', array( PRAC_POST_TYPE ), $args );
		
		$labels = array(
			'name'              => _x( 'Services', 'taxonomy general name', 'textdomain' ),
			'singular_name'     => _x( 'Service', 'taxonomy singular name', 'textdomain' ),
			'search_items'      => __( 'Search Services', 'textdomain' ),
			'all_items'         => __( 'All Services', 'textdomain' ),
			'parent_item'       => __( 'Parent Service', 'textdomain' ),
			'parent_item_colon' => __( 'Parent Service:', 'textdomain' ),
			'edit_item'         => __( 'Edit Service', 'textdomain' ),
			'update_item'       => __( 'Update Service', 'textdomain' ),
			'add_new_item'      => __( 'Add New Service', 'textdomain' ),
			'new_item_name'     => __( 'New Service Name', 'textdomain' ),
			'menu_name'         => __( 'Service', 'textdomain' ),
		);
		
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'service' ),
		);
		
		register_taxonomy( PRAC_SERVICE, array( PRAC_POST_TYPE ), $args );
		
		
		$labels = array(
			'name'              => _x( 'Conditions', 'taxonomy general name', 'textdomain' ),
			'singular_name'     => _x( 'Condition', 'taxonomy singular name', 'textdomain' ),
			'search_items'      => __( 'Search Conditions', 'textdomain' ),
			'all_items'         => __( 'All Conditions', 'textdomain' ),
			'parent_item'       => __( 'Parent Condition', 'textdomain' ),
			'parent_item_colon' => __( 'Parent Condition:', 'textdomain' ),
			'edit_item'         => __( 'Edit Condition', 'textdomain' ),
			'update_item'       => __( 'Update Condition', 'textdomain' ),
			'add_new_item'      => __( 'Add New Condition', 'textdomain' ),
			'new_item_name'     => __( 'New Condition Name', 'textdomain' ),
			'menu_name'         => __( 'Condition', 'textdomain' ),
		);
		
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'condition' ),
		);
		
		register_taxonomy( PRAC_CONDITION, array( PRAC_POST_TYPE ), $args );
		
	}
}


if(!function_exists("practitioner_meta_boxes")){
	function practitioner_meta_boxes(){
		add_meta_box("practitioner_metabox", "Practitioner Details", "practitioner_meta_boxes_cb", PRAC_POST_TYPE);
	}
	
	function practitioner_meta_boxes_cb($practitioner){
		
		//Make the dao builder build a practitioner object
		
		require_once WNY_ADMIN_PATH . DS . "metaboxes" . DS . "practitioner_details.php";
	}
	
}
