    <footer>
        <div class="inner">
            <div class="footer-phone-block clearfix">
                <a href="tel:+380968195263" class="footer-phone footer-phone-top">(096) 819-52-63</a>
                <a href="tel:+380633711909" class="footer-phone footer-phone-bottom">(063) 371-19-09</a>
                <p class="top">Звоните</p>
                <p>Наши телефоны постоянно доступны для консультаций</p>
            </div>
            <!-- /.footer-phone-block -->
            <form method="get" name="searchform" action="<?php bloginfo('url'); ?>/">
                <input type="text" name="s" placeholder="Искать...">
                <button type="submit"></button>
            </form>
            <?php wpeFootNav(); ?>
        </div><!-- inner -->
    </footer>
</div><!-- container -->
<div class="home-back" ></div>
<?php wp_footer(); ?>
<script>
    $(".home-back").backstretch("<?php echo get_template_directory_uri(); ?>/img/home-slide.jpg");
    $(".custom-article-home").backstretch("<?php echo get_template_directory_uri(); ?>/img/custom-article-home.jpg");
    $(".custom-article-category").backstretch("<?php echo get_template_directory_uri(); ?>/img/custom-article-category.jpg");
	$(".custom-article-product").backstretch("<?php echo get_template_directory_uri(); ?>/img/custom-article-product.jpg");
</script>
</body>
</html>