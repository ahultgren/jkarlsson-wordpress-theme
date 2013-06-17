<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="<?php echo substr(get_bloginfo('language'), 0, 2); ?>"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="<?php echo substr(get_bloginfo('language'), 0, 2); ?>"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="<?php echo substr(get_bloginfo('language'), 0, 2); ?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php echo substr(get_bloginfo('language'), 0, 2); ?>"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" media="all" href="<?php echo get_stylesheet_directory_uri(); ?>/normalize.css" />
	<link rel="stylesheet" media="all" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" />

	<?php wp_head(); ?>

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
</head>
<body <?php body_class(); ?>>
	<header class="site-header" role="banner">
		<?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'div'; ?>

		<<?php echo $heading_tag; ?> class="site-title">
			<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
		</<?php echo $heading_tag; ?>>

		<nav class="site-nav" role="navigation">
			<?php wp_nav_menu( array('theme_location' => 'main-menu') ); ?>
		</nav>

	</header>
		<main class="main" role="main">