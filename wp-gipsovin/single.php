<?php get_header(); ?>
	
	<!-- section -->
	<section role="main">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
		
			<h1 class="single-title inner-title"><?php the_title(); ?></h1>
			
			<?php the_content(); ?>

			<span class="tags"><?php the_tags( '', ' ', '<br />' ); ?></span>
			<span class="date"><?php the_time('d F Y'); ?></span>
			<?php endwhile; else: ?>
				<h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
			<?php endif; ?>	
		</article>
		<!-- /article -->
		<?php get_template_part('relative-article'); ?>
	</section>
	<!-- /section -->
<?php get_footer(); ?>