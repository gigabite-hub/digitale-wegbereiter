<?php 

// function projects_init() {
// 	register_post_type( 'sliders', array(
// 			'labels' 				=> array(
// 				'name' 					=> esc_html( 'Slides', 'post type general name' ),
// 				'singular_name' 		=> esc_html( 'Slide', 'post type singular name' ),
// 				'all_items' 			=> esc_html( 'All Slides' ),
// 				'add_new' 				=> esc_html( 'Add Slide', 'Slides' ),
// 				'add_new_item' 			=> esc_html( 'Add a Slide' ),
// 				'edit_item' 			=> esc_html( 'Edit Slide' ),
// 				'new_item' 				=> esc_html( 'New Slide' ),
// 				'view_item' 			=> esc_html( 'View Slide' ),
// 				'search_items' 			=> esc_html( 'Search in Slides' ),
// 				'not_found' 			=> esc_html( 'No Slide Project found' ),
// 				'not_found_in_trash' 	=> esc_html( 'No Slides found in trash' ),
// 				'parent_item_colon' 	=> '',
// 			),
// 			'public' 				=> true,
// 			'publicly_queryable' 	=> true,
// 			'show_ui' 				=> true,
// 			'show_in_rest'          => true,
// 			'query_var' 			=> true,
// 			'rewrite' 				=> array( 'slug' => '','with_front' => false ),
// 			'capability_type' 		=> 'post',
// 			'hierarchical' 			=> false,
// 			'supports' 				=> array( 'title', 'thumbnail', 'author', 'editor' , 'category' ),
// 			'has_archive'  			=> true,
// 			'menu_icon'   			=> 'dashicons-slides',
// 		)
// 	);


//     	register_taxonomy('slide-types','sliders',array(
// 		'hierarchical' 		=> true,	
// 		'show_ui' 			=> true,
// 		'show_admin_column' => true,
// 		'query_var' 		=> true,
// 		'has_archive'       => true,
// 		'show_in_rest'      => true,
// 		'rewrite' 			=> array( 'slug' => '', 'with_front' => false ),
// 		'labels' 			=> array(
// 			'name' 				=> esc_html( 'slide Types', 'taxonomy general name' ),
// 			'singular_name' 	=> esc_html( 'slide Type', 'taxonomy singular name' ),
// 			'search_items' 		=> esc_html( 'Search in slide Types' ),
// 			'all_items' 		=> esc_html( 'All slide Types' ),
// 			'most_used_items' 	=> null,
// 			'parent_item' 		=> null,
// 			'parent_item_colon' => null,
// 			'edit_item' 		=> esc_html( 'Edit slide Type' ),
// 			'update_item' 		=> esc_html( 'Update slide Type' ),
// 			'add_new_item' 		=> esc_html( 'Add New slide Type' ),
// 			'new_item_name' 	=> esc_html( 'New slide Type' ),
// 			'menu_name' 		=> esc_html( 'slide Types' ),
// 		),
// 	));

// }
// add_action( 'init', 'projects_init');

// function services_init() {
// 	register_post_type( 'services', array(
// 			'labels' 				=> array(
// 				'name' 					=> esc_html( 'Services', 'post type general name' ),
// 				'singular_name' 		=> esc_html( 'Service', 'post type singular name' ),
// 				'all_items' 			=> esc_html( 'All Services' ),
// 				'add_new' 				=> esc_html( 'Add Service', 'Services' ),
// 				'add_new_item' 			=> esc_html( 'Add a Service' ),
// 				'edit_item' 			=> esc_html( 'Edit Service' ),
// 				'new_item' 				=> esc_html( 'New Service' ),
// 				'view_item' 			=> esc_html( 'View Service' ),
// 				'search_items' 			=> esc_html( 'Search in Services' ),
// 				'not_found' 			=> esc_html( 'No Service Project found' ),
// 				'not_found_in_trash' 	=> esc_html( 'No Services found in trash' ),
// 				'parent_item_colon' 	=> '',
// 			),
// 			'public' 				=> true,
// 			'publicly_queryable' 	=> true,
// 			'show_ui' 				=> true,
// 			'show_in_rest'          => true,
// 			'query_var' 			=> true,
// 			'rewrite' 				=> array( 'slug' => '','with_front' => false ),
// 			'capability_type' 		=> 'post',
// 			'hierarchical' 			=> false,
// 			'supports' 				=> array( 'title', 'thumbnail', 'author', 'editor' , 'category' ),
// 			'has_archive'  			=> false,
// 			'menu_icon'   			=> 'dashicons-businessman',
// 			'translate' 			=> true,
// 		)
// 	);

// }
// // add_action( 'init', 'services_init');


// function portfolio_init() {
// 	register_post_type( 'portfolio', array(
// 			'labels' 				=> array(
// 				'name' 					=> esc_html( 'Portfolios', 'post type general name' ),
// 				'singular_name' 		=> esc_html( 'Portfolio', 'post type singular name' ),
// 				'all_items' 			=> esc_html( 'All Portfolios' ),
// 				'add_new' 				=> esc_html( 'Add Portfolio', 'Portfolios' ),
// 				'add_new_item' 			=> esc_html( 'Add a Portfolio' ),
// 				'edit_item' 			=> esc_html( 'Edit Portfolio' ),
// 				'new_item' 				=> esc_html( 'New Portfolio' ),
// 				'view_item' 			=> esc_html( 'View Portfolio' ),
// 				'search_items' 			=> esc_html( 'Search in Portfolios' ),
// 				'not_found' 			=> esc_html( 'No Portfolio Project found' ),
// 				'not_found_in_trash' 	=> esc_html( 'No Portfolios found in trash' ),
// 				'parent_item_colon' 	=> '',
// 			),
// 			'public' 				=> true,
// 			'publicly_queryable' 	=> true,
// 			'show_ui' 				=> true,
// 			'show_in_rest'          => true,
// 			'query_var' 			=> true,
// 			'rewrite' 				=> array( 'slug' => 'portfolio','with_front' => false ),
// 			'capability_type' 		=> 'post',
// 			'hierarchical' 			=> false,
// 			'supports' 				=> array( 'title', 'thumbnail', 'author', 'editor' , 'category' ),
// 			'has_archive'  			=> false,
// 			'menu_icon'   			=> 'dashicons-portfolio',
// 			'taxonomies'           => array('portfolio_types'),
// 		)
// 	);

//     register_taxonomy('portfolio_types','portfolio',array(
// 		'hierarchical' 		=> true,
// 		'show_ui' 			=> true,
// 		'show_admin_column' => true,
// 		'query_var' 		=> true,
// 		'has_archive'       => true,
// 		'show_in_rest'      => true,
// 		'rewrite' 			=> array( 'slug' => '', 'with_front' => false ),
// 		'labels' 			=> array(
// 			'name' 				=> esc_html( 'Portfolio Types', 'taxonomy general name' ),
// 			'singular_name' 	=> esc_html( 'Portfolio Type', 'taxonomy singular name' ),
// 			'search_items' 		=> esc_html( 'Search in Portfolio Types' ),
// 			'all_items' 		=> esc_html( 'All Portfolio Types' ),
// 			'most_used_items' 	=> null,
// 			'parent_item' 		=> null,
// 			'parent_item_colon' => null,
// 			'edit_item' 		=> esc_html( 'Edit Portfolio Type' ),
// 			'update_item' 		=> esc_html( 'Update Portfolio Type' ),
// 			'add_new_item' 		=> esc_html( 'Add New Portfolio Type' ),
// 			'new_item_name' 	=> esc_html( 'New Portfolio Type' ),
// 			'menu_name' 		=> esc_html( 'Portfolio Types' ),
// 		),
// 	));

// }
// add_action( 'init', 'portfolio_init');

?>