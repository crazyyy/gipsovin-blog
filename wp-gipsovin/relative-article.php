<aside class="relative-article clearfix">
	<h6 class="relative-block-title">еще по теме...</h6>
	<?php query_posts("showposts=2&cat=1"); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="container">
		<h3 class="container-title"><?php the_title(); ?></h3>
		<span class="relative-feature-image"><?php if ( has_post_thumbnail()) :
				the_post_thumbnail('medium');	
			else: ?>
			<img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" /><?php endif; ?><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="show-more">Читать</a></span>
		<?php wpeExcerpt('wpeExcerpt40'); ?>
	</div><!-- container -->

	<?php endwhile; endif; ?>
	<?php wp_reset_query(); ?>
</aside><!-- relative-article -->