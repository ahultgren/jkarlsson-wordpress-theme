<?php get_header(); ?>

	<?php if (have_posts()) : ?>
		
		<?php while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header>
					<h1 class="page-title"><?php the_title(); ?></h1>
				</header>
				<section>
					<?php the_content(); ?>
				</section>
			</article>

		<?php endwhile; ?>
		
	<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>