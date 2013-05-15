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