<?php
/**
 * UnderStrap functions and definitions
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// UnderStrap's includes directory.
$understrap_inc_dir = 'inc';

// Array of files to include.
$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

// IMAGE SIZES

// add_image_size( 'main-image', 724, 474, true );
// add_image_size( 'featured-image', 600, 457, true );
add_image_size( 'grid-image', 375, 225, true );
add_image_size( 'portrait-image', 200, 260, true );
add_image_size( 'main-image', 600, 300, true );

// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$understrap_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	$understrap_includes[] = '/jetpack.php';
}

// Include files.
foreach ( $understrap_includes as $file ) {
	require_once get_theme_file_path( $understrap_inc_dir . $file );
}

function greenaway_files() {
	wp_enqueue_style('greenaway_main_styles', get_stylesheet_uri());
}


// Flush your rewrite rules
function bones_flush_rewrite_rules() {
	flush_rewrite_rules();
}



// let's create the function for the custom type
function custom_post_example() { 
	/* this adds your post categories to your custom post type */
	//register_taxonomy_for_object_type( 'category', 'custom_type' );
	/* this adds your post tags to your custom post type */
	//register_taxonomy_for_object_type( 'post_tag', 'custom_type' );


	// creating (registering) the custom type 
	register_post_type( 'work', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'Work', '' ), /* This is the Title of the Group */
			'singular_name' => __( 'Work', '' ), /* This is the individual type */
			'all_items' => __( 'All Work', '' ), /* the all items menu item */
			'add_new' => __( 'Add New', '' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Work Item', '' ), /* Add New Display Title */
			'edit' => __( 'Edit', '' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Work', '' ), /* Edit Display Title */
			'new_item' => __( 'New Work', '' ), /* New Display Title */
			'view_item' => __( 'View Work', '' ), /* View Display Title */
			'search_items' => __( 'Search Work', '' ), /* Search Custom Type Title */ 
			'not_found' =>  __( 'Nothing found in the Database.', '' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nothing found in Trash', '' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the example project', '' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			// 'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'work', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => false, /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky'),
			'taxonomies' => array('category',),
			'show_in_rest'       => true,
	  		'rest_base'          => 'work',
	  		'rest_controller_class' => 'WP_REST_Posts_Controller',
		) /* end of options */
	); /* end of register post type */

// creating (registering) the custom type 
	
	
	
	/* this adds your post categories to your custom post type */
	register_taxonomy_for_object_type( 'work_types', 'work' );
	/* this adds your post tags to your custom post type */
	// register_taxonomy_for_object_type( 'post_tag', 'custom_type' );
	
}

	// adding the function to the Wordpress init
	add_action( 'init', 'custom_post_example');
	
	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/
	
	// now let's add custom categories (these act like categories)
	register_taxonomy( 'work_types', 
		array('work_types', 'work'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
		array('hierarchical' => true,     /* if this is true, it acts like categories */
			'labels' => array(
				'name' => __( 'Work Categories', '' ), /* name of the custom taxonomy */
				'singular_name' => __( 'Work Category', '' ), /* single taxonomy name */
				'search_items' =>  __( 'Work Custom Categories', '' ), /* search title for taxomony */
				'all_items' => __( 'All Work Categories', '' ), /* all title for taxonomies */
				'parent_item' => __( 'Parent Work Category', '' ), /* parent title for taxonomy */
				'parent_item_colon' => __( 'Parent Work Category:', '' ), /* parent taxonomy title */
				'edit_item' => __( 'Edit Work Category', '' ), /* edit custom taxonomy title */
				'update_item' => __( 'Update Work Category', '' ), /* update title for taxonomy */
				'add_new_item' => __( 'Add New Work Category', '' ), /* add new title for taxonomy */
				'new_item_name' => __( 'New Work Category Name', '' ) /* name title for taxonomy */
			),
			'show_admin_column' => true, 
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'work-cat' ),
		)
	);


	// ACF  

	if( function_exists('acf_add_local_field_group') ):

		acf_add_local_field_group(array(
			'key' => 'group_620c06817dad0',
			'title' => 'Work category display',
			'fields' => array(
				array(
					'key' => 'field_620c06a68d49b',
					'label' => 'work cat display',
					'name' => 'work_cat_display',
					'type' => 'taxonomy',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'taxonomy' => 'category',
					'field_type' => 'select',
					'allow_null' => 0,
					'add_term' => 1,
					'save_terms' => 0,
					'load_terms' => 0,
					'return_format' => 'id',
					'multiple' => 0,
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'page_template',
						'operator' => '==',
						'value' => 'page-cat.php',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => true,
			'description' => '',
		));
		
		acf_add_local_field_group(array(
			'key' => 'group_620bd0a0d6fc9',
			'title' => 'work page',
			'fields' => array(
				array(
					'key' => 'field_620bd0aae78d8',
					'label' => 'work pages',
					'name' => 'work_pages',
					'type' => 'post_object',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'post_type' => array(
						0 => 'page',
					),
					'taxonomy' => '',
					'allow_null' => 0,
					'multiple' => 1,
					'return_format' => 'object',
					'ui' => 1,
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'page_template',
						'operator' => '==',
						'value' => 'page-work.php',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => true,
			'description' => '',
		));
		
		endif;

