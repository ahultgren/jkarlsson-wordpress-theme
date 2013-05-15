<?php get_header(); ?>

	<?php if (have_posts()) : ?>
		
		<?php while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header>
					<h2 class="post-title"><?php the_title(); ?></h2>
					<time datetime="<?php the_time('Y-m-d'); ?>" class="post-date"><?php the_time('j F, Y'); ?></time>
				</header>
				<section>
					<?php the_content(); ?>
				</section>
			</article>

		<?php endwhile; ?>

	<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>