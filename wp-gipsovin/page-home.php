<?php /* Template Name: Home Page Template */ get_header(); ?>

	<aside class="inner home-slider">
		<h2>современный интерьер</h2>
		<h5>новейшие МАТЕРИАЛЫ</h5>
		<a href="#" class="question">Чем выгоден гипсовинил</a>
	</aside>
	<!-- /.inner home-slider -->

	<aside class="inner home-fourblock">

	<?php if( have_rows('head-four-blocks') ): ?>
		<ul class="clearfix">
		<?php while( have_rows('head-four-blocks') ): the_row();

			// vars
			$title = get_sub_field('block-title');
			$content = get_sub_field('block-inner');
			?>

			<li>
				<h6><?php echo $title; ?></h6>
				<p><?php echo $content; ?></p>
			</li>

		<?php endwhile; ?>

		</ul>

	<?php endif; ?>

	</aside>
	<!-- /.inner home-fourblock -->

	<!-- section -->
	<section role="main">
		<h1 class="title"><?php the_title(); ?></h1>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php the_content(); ?>
			<a href="<?php the_field('read-more-first'); ?>" class="show-more">Читать</a>
		</article>
		<!-- /article -->
	<?php endwhile; ?>
	<?php else: ?>
		<!-- article -->
		<article>
			<h2 class="title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
		</article>
		<!-- /article -->
	<?php endif; ?>
	</section>
	<!-- /section -->

	<div class="full-width custom-article-home">
    <aside class="inner">
      <h2><?php the_field('ad-title'); ?></h2>
      <p><?php the_field('ad-content'); ?></p>
      <a href="<?php the_field('ad-link'); ?>" class="arrow-next"><?php the_field('ad-link-href'); ?></a>
    </aside>
	</div><!-- full-width custom-article-home -->

	<section>
		<h2 class="title"><?php the_field('block-tow-title'); ?></h2>
		<!-- /.title -->
		<?php the_field('block-two-text'); ?>
		<a href="<?php the_field('read-more-second'); ?>" class="show-more">Читать</a>
	</section>

<?php get_footer(); ?>
