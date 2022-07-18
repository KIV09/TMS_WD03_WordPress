<!-- Header
================================================== -->
<?php get_header(); ?>

<!-- Intro Section
================================================== -->
<?php if (is_front_page()): ?>
    <?php $slider = get_field('slider'); ?>
    <?php if (!empty($slider)): ?>
        <section id="intro">

            <!-- Flexslider Start-->
            <div id="intro-slider" class="flexslider">

                <ul class="slides">
                    <?php foreach ($slider as $slide): ?>
                        <!-- Slide -->
                        <li>
                            <div class="row">
                                <div class="twelve columns">
                                    <div class="slider-text">
                                        <h1><?= $slide['title']; ?><span>.</span></h1>
                                        <p><?= $slide['text']; ?></p>
                                    </div>
                                    <div class="slider-image">
                                        <?= wp_get_attachment_image($slide['image'], 'large'); ?>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>

                    <!-- Slide -->


                </ul>

            </div> <!-- Flexslider End-->

        </section> <!-- Intro Section End-->
    <?php endif; ?>
<?php endif; ?>
<!-- Info Section
================================================== -->
<section id="info">
    <?php get_header(); ?>
    <?php $constructor = get_field('constructor_home', get_the_ID()); ?>
    <?php if (!empty($constructor)): ?>
    <div class="row">

        <div class="bgrid-quarters s-bgrid-halves">
<?php foreach ($constructor as $item): ?>
            <?php if ($item['acf_fc_layout'] == 'title_block'): ?>
            <div class="columns">
                <h2><?= $item['title']; ?></h2>
                <?php elseif ($item['acf_fc_layout'] == 'text_block'): ?>
                <p><?= $item['text']; ?>
                </p>
            </div>
    <?php endif; ?>

<?php endforeach; ?>
            <!--
            <div class="columns">
                <h2>Responsive.</h2>

                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                </p>
            </div>

            <div class="columns s-first">
                <h2>HTML5 + CSS3.</h2>

                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                </p>
            </div>

            <div class="columns">
                <h2>Free of Charge.</h2>

                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                </p>
            </div>
            -->

        </div>

    </div>
    <?php endif; ?>
</section> <!-- Info Section End-->

<!-- Works Section
================================================== -->
<section id="works">

    <div class="row">

        <div class="twelve columns align-center">
            <h1>Some of our recent works.</h1>
        </div>

        <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-halves">

            <div class="columns portfolio-item">
                <div class="item-wrap">
                    <a href="<?= get_template_directory_uri(); ?>/portfolio.html">
                        <img alt="" src="<?= get_template_directory_uri(); ?>/assets/images/portfolio/geometrics.jpg">
                        <div class="overlay"></div>
                        <div class="link-icon"><i class="fa fa-link"></i></div>
                    </a>
                    <div class="portfolio-item-meta">
                        <h5><a href="<?= get_template_directory_uri(); ?>/portfolio.html">Geometrics</a></h5>
                        <p>Illustration</p>
                    </div>
                </div>
            </div>

            <div class="columns portfolio-item">
                <div class="item-wrap">
                    <a href="<?= get_template_directory_uri(); ?>/portfolio.html">
                        <img alt="" src="<?= get_template_directory_uri(); ?>/assets/images/portfolio/console.jpg">
                        <div class="overlay"></div>
                        <div class="link-icon"><i class="fa fa-link"></i></div>
                    </a>
                    <div class="portfolio-item-meta">
                        <h5><a href="<?= get_template_directory_uri(); ?>/portfolio.html">Console</a></h5>
                        <p>Web Development</p>
                    </div>
                </div>
            </div>

            <div class="columns portfolio-item s-first">
                <div class="item-wrap">
                    <a href="<?= get_template_directory_uri(); ?>/portfolio.html">
                        <img alt="" src="<?= get_template_directory_uri(); ?>/assets/images/portfolio/camera-man.jpg">
                        <div class="overlay"></div>
                        <div class="link-icon"><i class="fa fa-link"></i></div>
                    </a>
                    <div class="portfolio-item-meta">
                        <h5><a href="<?= get_template_directory_uri(); ?>/portfolio.html">Camera Man</a></h5>
                        <p>Photography</p>
                    </div>
                </div>
            </div>

            <div class="columns portfolio-item">
                <div class="item-wrap">
                    <a href="<?= get_template_directory_uri(); ?>/portfolio.html">
                        <img alt=""
                             src="<?= get_template_directory_uri(); ?>/assets/images/portfolio/into-the-light.jpg">
                        <div class="overlay"></div>
                        <div class="link-icon"><i class="fa fa-link"></i></div>
                    </a>
                    <div class="portfolio-item-meta">
                        <h5><a href="<?= get_template_directory_uri(); ?>/portfolio.html">Into The Light</a></h5>
                        <p>Branding</p>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section> <!-- Works Section End-->

<!-- Journal Section
================================================== -->
<section id="journal">

    <div class="row">
        <div class="twelve columns align-center">
            <h1>Our latest posts and rants.</h1>
        </div>
    </div>

    <div class="blog-entries">
        <?php $posts = get_posts([
            'numberposts' => 3,
        ]); ?>
        <?php foreach ($posts

                       as $post): ?>
            <?php setup_postdata($post); ?>
            <!-- Entry -->
            <article class="row entry">

                <div class="entry-header">

                    <div class="permalink">
                        <a href="<?php the_permalink(); ?>"><i class="fa fa-link"></i></a>
                    </div>

                    <div class="ten columns entry-title pull-right">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    </div>

                    <div class="two columns post-meta end">
                        <p>
                            <time datetime="2014-01-31" class="post-date" pubdate=""><?php the_time('j F Y'); ?></time>
                            <span class="dauthor"><?php the_author(); ?></span>
                        </p>
                    </div>

                </div>

                <div class="ten columns offset-2 post-content">
                    <!--
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                    deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate.
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.
                    <a class="more-link" href="<?= get_template_directory_uri(); ?>/single.html">Read More<i
                            class="fa fa-arrow-circle-o-right"></i></a></p>
                            -->
                    <?php the_excerpt(); ?>
                </div>

            </article> <!-- Entry End -->
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
        <!-- Entry -->
        <article class="row entry">

            <div class="entry-header">

                <div class="permalink">
                    <a href="<?= get_template_directory_uri(); ?>/single.html"><i class="fa fa-link"></i></a>
                </div>

                <div class="ten columns entry-title pull-right">
                    <h3><a href="<?= get_template_directory_uri(); ?>/single.html">Nemo enim ipsam voluptatem quia
                            voluptas sit aspernatur aut odit aut fugit sed.</a></h3>
                </div>

                <div class="two columns post-meta end">
                    <p>
                        <time datetime="2014-01-29" class="post-date" pubdate="">Jan 30, 2014</time>
                        <span class="dauthor">By John Doe</span>
                    </p>
                </div>

            </div>

            <div class="ten columns offset-2 post-content">
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                    deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate.
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.
                    <a class="more-link" href="<?= get_template_directory_uri(); ?>/single.html">Read More<i
                                class="fa fa-arrow-circle-o-right"></i></a></p>
            </div>

        </article> <!-- Entry End -->

        <!-- Entry -->
        <article class="row entry">

            <div class="entry-header">

                <div class="permalink">
                    <a href="<?= get_template_directory_uri(); ?>/single.html"><i class="fa fa-link"></i></a>
                </div>

                <div class="ten columns entry-title pull-right">
                    <h3><a href="<?= get_template_directory_uri(); ?>/blog-single.html">Quis autem vel esse eum iure
                            reprehenderit qui in ea voluptate velit esse.</a></h3>
                </div>

                <div class="two columns post-meta end">
                    <p>
                        <time datetime="2014-01-28" class="post-date" pubdate="">Jan 28, 2014</time>
                        <span class="dauthor">By Naruto Uzumaki</span>
                    </p>
                </div>

            </div>

            <div class="ten columns offset-2 post-content">
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                    deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate.
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.
                    <a class="more-link" href="<?= get_template_directory_uri(); ?>/single.html">Read More<i
                                class="fa fa-arrow-circle-o-right"></i></a></p>
            </div>

        </article> <!-- Entry End -->

    </div> <!-- Entries End -->

</section> <!-- Journal Section End-->

<!-- Call-To-Action Section
================================================== -->
<section id="call-to-action">

    <div class="row">

        <div class="eight columns offset-1">

            <h1><a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">Host This Template on Dreamhost.</a></h1>
            <p>Looking for an awesome and reliable webhosting? Try <a
                        href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT"><span>DreamHost</span></a>.
                Get <span>$50 off</span> when you sign up with the promocode <span>STYLESHOUT</span>.
                <!-- Simply type	the promocode in the box labeled “Promo Code” when placing your order. --></p>

        </div>

        <div class="three columns action">

            <a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT" class="button">Sign Up Now</a>

        </div>

    </div>

</section> <!-- Call-To-Action Section End-->


<!-- footer
================================================== -->
<?php get_footer(); ?>

