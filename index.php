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

		<nav class="pagination" role="navigation">
			<div class="previous-page">
				<?php next_posts_link('&laquo; Previous') ?>
			</div>
			<div class="next-page">
				<?php previous_posts_link('Next &raquo;') ?>
			</div>
		</nav>

	<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>