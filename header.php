<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

    <!--- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->

    <!-- Script
    ================================================== -->
    <?php wp_head(); ?>

    <!-- Favicons
     ================================================== -->
    <link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/assets/favicon.ico" >

</head>

<body>

<!-- Header
================================================== -->
<header>

    <div class="row">

        <div class="twelve columns">

            <div class="logo">
                <a href="/"><img alt="" src="<?= get_template_directory_uri(); ?>/assets/images/logo.png"></a>
            </div>

            <nav id="nav-wrap">

                <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
                <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

                    <?php wp_nav_menu([
                        "theme_location" => "top",
                        "container" => "ul",
                        "menu_class" => "nav",
                        "menu_id" => "nav",
                    ]); ?>

            </nav> <!-- end #nav-wrap -->

        </div>

    </div>

</header> <!-- Header End -->