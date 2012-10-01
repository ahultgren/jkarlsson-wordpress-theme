<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" dir="ltr" lang="<?php echo substr(get_bloginfo('language'),0,2); ?>"> <![endif]-->
<!--[if IE 7]> <html class="no-js ie7 oldie" dir="ltr" lang="<?php echo substr(get_bloginfo('language'),0,2); ?>"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 oldie" dir="ltr" lang="<?php echo substr(get_bloginfo('language'),0,2); ?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" dir="ltr" lang="<?php echo substr(get_bloginfo('language'),0,2); ?>"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" />
    
    <?php wp_head(); ?>
    
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<script>window.jQuery || document.write('<script src="<?php bloginfo('stylesheet_directory'); ?>/js/libs/jquery-1.8.2.min.js"><\/script>')</script>
    
</head>

<body <?php body_class(); ?>>

<section id="page" class="hfeed">
		
    <header id="header">
			
		<?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'div'; ?>
		<<?php echo $heading_tag; ?> id="site-title">
			<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
		</<?php echo $heading_tag; ?>>
			
        <nav id="top-menu">
			<?php wp_nav_menu( array('theme_location' => 'main-menu') ); ?>
		</nav>
            
       	<?php get_search_form(); ?>
	
    </header>

	<section id="main">
