<?php get_header(); ?>
	
	<!-- section -->
	<section role="main" class="clearfix search-container">
		<?php get_template_part('search-include'); ?>
		<h1 class="search-title inner-title"><?php echo get_search_query(); ?></h1>
		<h6 class="search-count">Получено <?php echo sprintf(  $wp_query->found_posts ); ?> результатов поиска...</h6>
		
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<div class="container">
				<h3 class="container-title"><?php the_title(); ?></h3>
				<span class="relative-feature-image"><?php if ( has_post_thumbnail()) :
						the_post_thumbnail('medium');	
					else: ?>
					<img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" /><?php endif; ?><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="show-more">Читать</a></span>
				<?php wpeExcerpt('wpeExcerpt40'); ?>
			</div><!-- container -->
		<?php endwhile; else: ?>

			<!-- article -->
			<article>
				<h2 class="title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
			</article>
			<!-- /article -->

		<?php endif; ?>
		
		<?php get_template_part('pagination'); ?>
	
	</section>
	<!-- /section -->
	
<?php get_footer(); ?>