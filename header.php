<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- script
    ================================================== -->
    <?php wp_head(); ?>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri(); ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri(); ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri(); ?>/favicon-16x16.png">
    <link rel="manifest" href="<?= get_template_directory_uri(); ?>/site.webmanifest">

</head>

<body id="top">

<!-- preloader
================================================== -->
<div id="preloader">
    <div id="loader" class="dots-fade">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

<!-- Header
================================================== -->
<header class="s-header">

    <div class="row">

        <div class="s-header__content column">
            <h1 class="s-header__logotext">
                <a href="<?= get_template_directory_uri(); ?>/index.html" title=""><?php do_action('my_action'); ?></a>
            </h1>
            <p class="s-header__tagline">Put your awesome tagline here.</p>
        </div>

    </div> <!-- end row -->

    <nav class="s-header__nav-wrap">

        <div class="row">

            <?php wp_nav_menu([
                    'theme_location' => 'top',
                    'container' => 'ul',
                    'menu_class' => 's-header__nav',
            ]); ?>

        </div>

    </nav> <!-- end #nav-wrap -->

    <a class="header-menu-toggle" href="<?= get_template_directory_uri(); ?>/#0" title="Menu"><span>Menu</span></a>

</header> <!-- Header End -->