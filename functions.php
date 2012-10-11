<?php 

/* ----- Enables post and comment RSS feed links to head ----- */

add_theme_support('automatic-feed-links');


/* ----- Register thumbnails ----- */

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 250, 167, true );
	// add_image_size( 'custom', 300, 300, true );
}


/* ----- Register sidebars ----- */

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
	    'name' => 'Sidebar',
		'before_widget' => '<aside id="%1$s" class="widget wide %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
}


/* ----- Register menus ----- */

if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		  'main-menu' => 'Main menu',
		)
	);
}


/* ----- Function that programatically posts a post ----- */

function create_post( $data ){
	global $user_ID;
	$new_post = array(
		'post_title' => $data['title'],
		'post_content' => $data['content'],
		'post_status' => 'publish',
		'post_date' => date('Y-m-d H:i:s'),
		'post_author' => 1,
		'post_type' => $data['post_type'],
		'post_category' => array(0)
	);
	$post_id = wp_insert_post($new_post);
	return $post_id;
}


/* ----- Excerpt ----- */

function new_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'new_excerpt_length' );


/* ----- Include jQuery from Google ----- */

add_action( 'wp_enqueue_scripts', 'skl_enqueue_scripts', 10 );
function skl_enqueue_scripts(){
	if( !is_admin() ){
		wp_deregister_script('jquery');
	 	wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js', false, '1.8.2');
	 	wp_register_script('modernizr', get_bloginfo('stylesheet_directory') . '/js/libs/modernizr-2.5.3.min.js');

	 	wp_enqueue_script('jquery');
	 	wp_enqueue_script('modernizr');
	}
}


/* ----- Prevent stylesheet from being cached ----- */

function stylesheet_url(){
	echo get_bloginfo('stylesheet_url') . '?' . filemtime(get_stylesheet_directory() . '/style.css');
}