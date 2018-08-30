<?php

// ====================================REGISTER CUSTOM POST=====================================
add_action( 'init', 'product_init' );
/**
 * Register a product post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function product_init() {
	$labels = array(
		'name'               => _x( 'Products', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Products', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Products', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Products', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'Products', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Products', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Products', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Products', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Products', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Products', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Products', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Products:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Products found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Products found in Trash.', 'your-plugin-textdomain' )

	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'game' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'menu_icon'			 => 'dashicons-format-aside',
		'supports'           => array( 'title', 'editor')
	);

	register_post_type( 'product_post', $args );
}


// ============================TAXONOMY====================================
// ============================TAXONOMY====================================
/*function product_category(){

	//set the name of the taxonomy
	$taxonomy = 'product-category';
	//set the post types for the taxonomy
	$object_type = 'product_post';

	//populate our array of names for our taxonomy
	$labels = array(
		'name'               => 'Category',
		'singular_name'      => 'Category',
		'search_items'       => 'Search Category',
		'all_items'          => 'All Category',
		'parent_item'        => 'Parent Category',
		'parent_item_colon'  => 'Parent Category:',
		'update_item'        => 'Update Category',
		'edit_item'          => 'Edit TypeCategory',
		'add_new_item'       => 'Add New Category',
		'new_item_name'      => 'New Type Category',
		'menu_name'          => 'Products Categories'
	);

	//define arguments to be used
	$args = array(
		'labels'            => $labels,
		'hierarchical'      => true,
		'show_ui'           => true,
		'how_in_nav_menus'  => true,
		'public'            => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array('slug' => 'product-categories')
	);

	//call the register_taxonomy function
	register_taxonomy($taxonomy, $object_type, $args);
}
add_action('init','product_category');

function related_product_category(){

	//set the name of the taxonomy
	$taxonomy = 'related-product';
	//set the post types for the taxonomy
	$object_type = 'product_post';

	//populate our array of names for our taxonomy
	$labels = array(
		'name'               => 'Related Products Category',
		'singular_name'      => 'Related Products Category',
		'search_items'       => 'Search Related Products Category',
		'all_items'          => 'All Related Products Category',
		'parent_item'        => 'Parent Related Products Category',
		'parent_item_colon'  => 'Parent Related Products Category:',
		'update_item'        => 'Update Related Products Category',
		'edit_item'          => 'Edit Related Products Category',
		'add_new_item'       => 'Add New Related Products Category',
		'new_item_name'      => 'New Type Related Products Category',
		'menu_name'          => 'Related Products Category'
	);

	//define arguments to be used
	$args = array(
		'labels'            => $labels,
		'hierarchical'      => true,
		'show_ui'           => true,
		'how_in_nav_menus'  => true,
		'public'            => true,
		'show_admin_column' => true,
		'query_var'         => true
	);

	//call the register_taxonomy function
	register_taxonomy($taxonomy, $object_type, $args);
}
add_action('init','related_product_category');*/
?>