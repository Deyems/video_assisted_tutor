<?php

function db_setup_dashboard_post_type(){
    
    $labels = array(
		'name' => _x( 'dashboards', 'Post Type General Name', 'videotutor' ),
		'singular_name' => _x( 'dashboard', 'Post Type Singular Name', 'videotutor' ),
		'menu_name' => _x( 'dashboards', 'Admin Menu text', 'videotutor' ),
		'name_admin_bar' => _x( 'dashboard', 'Add New on Toolbar', 'videotutor' ),
		'archives' => __( 'dashboard Archives', 'videotutor' ),
		'attributes' => __( 'dashboard Attributes', 'videotutor' ),
		'parent_item_colon' => __( 'Parent dashboard:', 'videotutor' ),
		'all_items' => __( 'All dashboards', 'videotutor' ),
		'add_new_item' => __( 'Add New dashboard', 'videotutor' ),
		'add_new' => __( 'Add New', 'videotutor' ),
		'new_item' => __( 'New dashboard', 'videotutor' ),
		'edit_item' => __( 'Edit dashboard', 'videotutor' ),
		'update_item' => __( 'Update dashboard', 'videotutor' ),
		'view_item' => __( 'View dashboard', 'videotutor' ),
		'view_items' => __( 'View dashboards', 'videotutor' ),
		'search_items' => __( 'Search dashboard', 'videotutor' ),
		'not_found' => __( 'Not found', 'videotutor' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'videotutor' ),
		'featured_image' => __( 'Featured Image', 'videotutor' ),
		'set_featured_image' => __( 'Set featured image', 'videotutor' ),
		'remove_featured_image' => __( 'Remove featured image', 'videotutor' ),
		'use_featured_image' => __( 'Use as featured image', 'videotutor' ),
		'insert_into_item' => __( 'Insert into dashboard', 'videotutor' ),
		'uploaded_to_this_item' => __( 'Uploaded to this dashboard', 'videotutor' ),
		'items_list' => __( 'dashboards list', 'videotutor' ),
		'items_list_navigation' => __( 'dashboards list navigation', 'videotutor' ),
		'filter_items_list' => __( 'Filter dashboards list', 'videotutor' ),
    );
    
	$args = [
		'label' => __( 'dashboard', 'videotutor' ),
		'description' => __( 'To generate pages for users dashboard', 'videotutor' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-users',
		'supports' => ['title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'page-attributes', 'post-formats', 'custom-fields'],
		'taxonomies' => ['dashboardpages', 'userpages'],
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 20,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'rest_base' => 'dashboard',
		'publicly_queryable' => true,
		'capability_type' => 'page',
    ];

    // Register Custom Post Type dashboard
	register_post_type( 'dashboard', $args );

}