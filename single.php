<?php get_header(); ?>
	
    <section id="content">
		
		<?php if (have_posts()) : ?>
		
			<?php while (have_posts()) : the_post(); ?>
            
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="post-title"><?php the_title(); ?></h1>
					<time datetime="<?php the_time('Y-m-d'); ?>" class="post-date"><?php the_time('F j, Y'); ?></time>
					<?php the_content('Läs mer &raquo;'); ?>
				</article>
                
			<?php endwhile; ?>
            
		<?php else : ?>
        
			<h1 class="post-title">Kunde inte hittas</h2>
			<div class="entry">
				<p>Tyvärr, du letar efter något som inte längre finns. Prova att använda menyn eller söka.</p>
			</div>

		<?php endif; ?>
	
    </section>
		
<?php get_sidebar(); ?>
<?php get_footer(); ?>