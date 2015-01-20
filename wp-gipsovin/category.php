<?php get_header(); ?>

	<h6 class="cat-title inner-title">Посление публикации</h6>
	<div class="full-width custom-article-category">
		<aside class="inner">
			<h2>Какая-то рекламная фраза про гипсовинил</h2>
			<p>избавляет от грязи в помещении и экономит время</p>
			<a href="" class="arrow-next">Профиль для монтажа</a>
		</aside>
	</div><!-- full-width custom-article-home -->
	
	<!-- section -->
	<section role="main" class="category-block">
		<?php get_template_part('search-include'); ?>
		<div class="loop-block clearfix">
			
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix looper'); ?>>

				<!-- post title -->
				<h2 class="looper-title inner-title">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h2>
				<!-- /post title -->

				<?php wpeExcerpt('wpeExcerpt40'); ?>
				
				<!-- post thumbnail -->
				<span rel="nofollow" class="feature-img" title="<?php the_title(); ?>">
					<?php if ( has_post_thumbnail()) :
						the_post_thumbnail('medium');	
					else: ?>
					<img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
					<?php endif; ?>
					<a href="<?php the_permalink(); ?>" class="show-more">Читать</a>
				</span>
				<!-- /post thumbnail -->
				<span class="tags"><?php the_tags( '', ' ', '<br />' ); ?></span>
				<span class="date"><?php the_time('d F Y'); ?></span>
			</article>
			<!-- /article -->
			
			<?php endwhile; else: ?>

			<!-- article -->
			<article>
				<h2 class="title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
			</article>
			<!-- /article -->

		<?php endif; ?>

		</div>
		<!-- /.loop-block -->

<!-- 		<?php get_template_part('pagination'); ?> -->
	
	</section>
	<!-- /section -->

<?php get_footer(); ?>