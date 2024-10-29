<?php
/**
 * Plugin Name: custom post extand
 * Plugin URI:  Plugin URL Link
 * Author:      Plugin Author Name
 * Author URI:  Plugin Author Link
 * Description: This plugin make for pratice wich is "custom post extand".
 * Version:     0.1.0
 * License:     GPL-2.0+
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain:cpe
 */
function plugin_file_function(){
    load_plugin_textdomain('cpe', false, dirname(__FILE__) . "/lng");
}
add_action('plugins_loaded', 'plugin_file_function');

// Register Custom Post Type Car
function create_car_cpt() {

	$labels = array(
		'name' => _x( 'Cars', 'Post Type General Name', 'car' ),
		'singular_name' => _x( 'Car', 'Post Type Singular Name', 'car' ),
		'menu_name' => _x( 'Cars', 'Admin Menu text', 'car' ),
		'name_admin_bar' => _x( 'Car', 'Add New on Toolbar', 'car' ),
		'archives' => __( 'Car Archives', 'car' ),
		'attributes' => __( 'Car Attributes', 'car' ),
		'parent_item_colon' => __( 'Parent Car:', 'car' ),
		'all_items' => __( 'All Cars', 'car' ),
		'add_new_item' => __( 'Add New Car', 'car' ),
		'add_new' => __( 'Add New', 'car' ),
		'new_item' => __( 'New Car', 'car' ),
		'edit_item' => __( 'Edit Car', 'car' ),
		'update_item' => __( 'Update Car', 'car' ),
		'view_item' => __( 'View Car', 'car' ),
		'view_items' => __( 'View Cars', 'car' ),
		'search_items' => __( 'Search Car', 'car' ),
		'not_found' => __( 'Not found', 'car' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'car' ),
		'featured_image' => __( 'Featured Image', 'car' ),
		'set_featured_image' => __( 'Set featured image', 'car' ),
		'remove_featured_image' => __( 'Remove featured image', 'car' ),
		'use_featured_image' => __( 'Use as featured image', 'car' ),
		'insert_into_item' => __( 'Insert into Car', 'car' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Car', 'car' ),
		'items_list' => __( 'Cars list', 'car' ),
		'items_list_navigation' => __( 'Cars list navigation', 'car' ),
		'filter_items_list' => __( 'Filter Cars list', 'car' ),
	);
	$args = array(
		'label' => __( 'Car', 'car' ),
		'description' => __( '', 'car' ),
		'labels' => $labels,
		'menu_icon' => '',
		'supports' => array(),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => false,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => false,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'car', $args );

}
add_action( 'init', 'create_car_cpt', 0 );




?>