<?php get_header(); ?>
	
	<section id="content">

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h1 class="post-title">404! Not found :(</h1>
			<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
		</article>
	
	</section>
		
<?php get_sidebar(); ?>
<?php get_footer(); ?>