<?php get_header(); ?>
    <!-- Content
    ================================================== -->
    <div class="content-outer">

        <div id="page-content" class="row portfolio">

            <section class="entry cf">
                <div id="primary" class="eight columns portfolio-list">
                    <h1>Our Portfolio.</h1>
                    <div id="portfolio-wrapper" class="bgrid-halves cf">
                        <?php if (have_posts()): ?>
                            <?php while (have_posts()): ?>
                                <?php the_post(); ?>
                                <div class="columns portfolio-item">
                                    <div class="item-wrap">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php if (has_post_thumbnail()): ?>
                                                <?php the_post_thumbnail('post-thumbnail'); ?>
                                            <?php endif; ?>
                                            <div class="overlay"></div>
                                            <div class="link-icon"><i class="fa fa-link"></i></div>
                                        </a>
                                        <div class="portfolio-item-meta">
                                            <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                            <p><?php the_excerpt(); ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php else:?>
                            Портфолио нет!
                        <?php endif; ?>
                    </div>
                </div> <!-- primary end-->
            </section> <!-- end section -->

        </div> <!-- #page-content end-->

    </div> <!-- content End-->
<?php get_footer(); ?>