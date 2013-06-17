<?php
	
/*  Enables post and comment RSS feed links to head
----------------------------------------------------------------------------- */

add_theme_support('automatic-feed-links');


/*  Register thumbnails
----------------------------------------------------------------------------- */

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 250, 167, true );
	// add_image_size( 'custom', 300, 300, true );
}


/*  Register sidebars
----------------------------------------------------------------------------- */

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'Sidebar',
		'before_widget' => '<section id="%1$s" class="widget wide %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
}


/*  Register menus
----------------------------------------------------------------------------- */

if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
			'main-menu' => 'Main menu',
		)
	);
}


/*  Include scripts
----------------------------------------------------------------------------- */

add_action( 'wp_enqueue_scripts', 'skl_enqueue_scripts', 1 );
function skl_enqueue_scripts(){
	if( !is_admin() ){
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', false);
		wp_register_script('modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.6.2.min.js');

		wp_enqueue_script('jquery');
		wp_enqueue_script('modernizr');
	}
}


/* ----- Function that automagically creates a post type ----- */

function post_type_factory ($slug, $singular, $plural = '') {
	if($plural === '') {
		$plural = $singular . 's';
	}

	$labels = array(
		'name' => __($plural),
		'singular_name' => __($singular),
		'add_new' => __('Add New'),
		'add_new_item' => __('Add New ' . $singular),
		'edit_item' => __('Edit ' . $singular),
		'new_item' => __('New ' . $singular),
		'all_items' => __('All ' . $plural),
		'view_item' => __('View ' . $singular),
		'search_items' => __('Search ' . $plural),
		'not_found' => 'No ' . $plural . ' found',
		'not_found_in_trash' => __('No ' . $plural . ' found in Trash'), 
		'parent_item_colon' => __(''),
		'menu_name' => __($plural)
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'rewrite' => array('slug' => $slug),
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields')
	);

	register_post_type($slug, $args);
}