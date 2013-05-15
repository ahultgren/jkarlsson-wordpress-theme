<?php get_header(); ?>

	<?php if (have_posts()) : ?>
		
		<?php while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header>
					<h1 class="page-title">404! Not found :(</h1>
				</header>
				<section>
					<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
				</section>
			</article>

		<?php endwhile; ?>
		
	<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>