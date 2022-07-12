<?php get_header(); ?>
    <!-- Intro Section
  ================================================== -->
<?php $slider = get_field('slider'); ?>

<?php if (!empty($slider)): ?>
    <section id="intro">
<?php endif; ?>
    <!-- Flexslider Start-->
    <div id="intro-slider" class="flexslider">

        <ul class="slides">

            <?php foreach ($slider as $slide): ?>
                <!-- Slide -->
                <li>
                    <div class="row">
                        <div class="twelve columns">
                            <div class="slider-text">
                                <h1><?= $slide['title']; ?></h1>
                                <?= $slide['text']; ?>
                            </div>
                            <div class="slider-image">
                                <?= wp_get_attachment_image($slide['image'], 'post-thumbnails'); ?>
                            </div>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>

        </ul>

    </div> <!-- Flexslider End-->

    </section> <!-- Intro Section End-->
    <!-- Info Section
    ================================================== -->
    <section id="info">

        <div class="row">

            <div class="bgrid-quarters s-bgrid-halves">

                <div class="columns">
                    <h2>Clean & Modern.</h2>

                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                    </p>
                </div>

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

            </div>

        </div>

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
                        <a href="portfolio.html">
                            <img alt=""
                                 src="<?= get_template_directory_uri(); ?>/assets/images/portfolio/geometrics.jpg">
                            <div class="overlay"></div>
                            <div class="link-icon"><i class="fa fa-link"></i></div>
                        </a>
                        <div class="portfolio-item-meta">
                            <h5><a href="portfolio.html">Geometrics</a></h5>
                            <p>Illustration</p>
                        </div>
                    </div>
                </div>

                <div class="columns portfolio-item">
                    <div class="item-wrap">
                        <a href="portfolio.html">
                            <img alt="" src="<?= get_template_directory_uri(); ?>/assets/images/portfolio/console.jpg">
                            <div class="overlay"></div>
                            <div class="link-icon"><i class="fa fa-link"></i></div>
                        </a>
                        <div class="portfolio-item-meta">
                            <h5><a href="portfolio.html">Console</a></h5>
                            <p>Web Development</p>
                        </div>
                    </div>
                </div>

                <div class="columns portfolio-item s-first">
                    <div class="item-wrap">
                        <a href="portfolio.html">
                            <img alt=""
                                 src="<?= get_template_directory_uri(); ?>/assets/images/portfolio/camera-man.jpg">
                            <div class="overlay"></div>
                            <div class="link-icon"><i class="fa fa-link"></i></div>
                        </a>
                        <div class="portfolio-item-meta">
                            <h5><a href="portfolio.html">Camera Man</a></h5>
                            <p>Photography</p>
                        </div>
                    </div>
                </div>

                <div class="columns portfolio-item">
                    <div class="item-wrap">
                        <a href="portfolio.html">
                            <img alt=""
                                 src="<?= get_template_directory_uri(); ?>/assets/images/portfolio/into-the-light.jpg">
                            <div class="overlay"></div>
                            <div class="link-icon"><i class="fa fa-link"></i></div>
                        </a>
                        <div class="portfolio-item-meta">
                            <h5><a href="portfolio.html">Into The Light</a></h5>
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
            <?php $posts = get_posts(args: [
                'numberposts' => 3,
            ]
            );
            ?>

            <?php foreach ($posts as $post): ?>
                <?php setup_postdata($post); ?>
                <!-- Entry -->
                <article class="row entry">

                    <div class="entry-header">
                        <div class="ten columns entry-title pull-right">
                            <?php the_post_thumbnail(); ?>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        </div>

                        <div class="two columns post-meta end">
                            <p>
                                <time datetime="2014-01-31" class="post-date" pubdate=""><?php the_date(); ?></time>
                                <span class="dauthor"><?php the_author(); ?></span>
                            </p>
                        </div>

                    </div>

                    <div class="ten columns offset-2 post-content">
                        <?php the_excerpt(); ?>
                    </div>

                </article> <!-- Entry End -->
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>


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

    <!-- Tweets Section
    ================================================== -->
    <section id="tweets">

        <div class="row">

            <div class="tweeter-icon align-center">
                <i class="fa fa-twitter"></i>
            </div>

            <ul id="twitter" class="align-center">
                <li>
               <span>
               This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
               Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
               <a href="#">http://t.co/CGIrdxIlI3</a>
               </span>
                    <b><a href="#">2 Days Ago</a></b>
                </li>
                <!--
                <li>
                   <span>
                   This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                   Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
                   <a href="#">http://t.co/CGIrdxIlI3</a>
                   </span>
                   <b><a href="#">3 Days Ago</a></b>
                </li>
                -->
            </ul>

            <p class="align-center"><a href="#" class="button">Follow us</a></p>

        </div>

    </section> <!-- Tweet Section End-->

<?php get_footer(); ?>