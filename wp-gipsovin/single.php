<?php get_header(); ?>
	
	<!-- section -->
	<section role="main">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
		
			<h1 class="single-title inner-title"><?php the_title(); ?></h1>
			
			<?php the_content(); ?>

			<span class="date"><?php the_time('d F Y'); ?> <?php the_time('H:i'); ?></span>
			
			<?php the_tags( __( 'Tags: ', 'wpeasy' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
			
			<?php endwhile; else: ?>
				<h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
			<?php endif; ?>	
		</article>
		<!-- /article -->
	</section>
	<!-- /section -->
<?php get_footer(); ?>