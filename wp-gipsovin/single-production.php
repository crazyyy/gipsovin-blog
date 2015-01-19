<?php get_header(); ?>
	
	<!-- section -->
	<section role="main">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class('product-page before-breake clearfix'); ?>>
			<!-- <h1 class="single-title inner-title"><?php the_title(); ?></h1> -->
			
			<table>
				<tr class="row-1">
					<td><?php the_field('top-left'); ?></td>
					<td><?php the_field('top-right'); ?></td>
				</tr>
				<!-- /.row-1 -->
			</table>
		</article>
	</section>

	<div class="full-width custom-article-product">
		<aside class="inner">
			<h2>Каталог виниловых покрытий «Durafort»</h2>
			<p>Ознакомьтесь со всей палитрой цветовых решений</p>
			<a href="" class="pdf-dl">Скачать каталог</a>
		</aside>
	</div><!-- full-width custom-article-product -->

	<section role="second">	
		<article id="post-<?php the_ID(); ?>" <?php post_class('product-page after-breake clearfix'); ?>>	
			<table>
				<tr class="row-3">
					<td><?php the_field('bottom-left'); ?></td>
					<td><?php the_field('bottom-right'); ?></td>
				</tr>
				<!-- /.row-3 -->
				<tr class="row-4">
					<td>
						<div class="wider wider-left">
							<h5>Сертификат пожарной безопасности</h5>
							<a href="<?php the_field('sertificate-firefigth'); ?>" class="pdf-dl">Скачать PDF</a>
						</div>
					</td>
					<td>
						<div class="wider wider-right">
							<h5>Сертификат соответствия</h5>
							<a href="<?php the_field('sertificate-specif'); ?>" class="pdf-dl">Скачать PDF</a>
						</div>
					</td>
				</tr>
				<!-- /.row-4 -->
			</table>


			<?php endwhile; else: ?>
				<h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
			<?php endif; ?>	
		</article>
		<!-- /article -->
		<?php get_template_part('relative-article'); ?>
	</section>
	<!-- /section -->
<?php get_footer(); ?>