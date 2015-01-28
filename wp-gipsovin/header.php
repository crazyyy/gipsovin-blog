<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

    <!-- dns prefetch -->
    <link href="//www.google-analytics.com" rel="dns-prefetch">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,300,700,600&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>

    <!-- meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <!-- icons -->
    <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

    <!-- css + javascript -->
    <?php wp_head(); ?>
    <script>
    !function(){
        // configure legacy, retina, touch requirements @ conditionizr.com
        conditionizr()
    }()
    </script>
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <!--[if lt IE 9]>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <![endif]-->
</head>
<body <?php body_class(); ?>>
<!--[if lt IE 10]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="container">
    <header>
        <div class="inner">
            <!-- logo -->
            <div class="logo">
                <?php if ( is_front_page() || is_home() ) { ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
                <? } else { ?>
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo-color.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
                    </a>
                <?php } ?>
            </div><!-- logo -->
            <!-- /logo -->
            <?php if ( is_front_page() || is_home() ) { ?>
            <h1 class="site-title">гипсовиниловые панели</h1>
            <? } else { ?>
            <h1 class="site-title"><a href="<?php echo home_url(); ?>">гипсовиниловые панели</a></h1>
            <?php } ?>

            <a href="tel:+380968195263" class="phone phone-top">(096) 819-52-63</a>
            <a href="tel:+380633711909" class="phone phone-bottom">(063) 371-19-09</a>

            <nav class="headernav" role="navigation">
                <?php wpeHeadNav(); ?>
            </nav>
        </div><!-- inner -->
    </header>
