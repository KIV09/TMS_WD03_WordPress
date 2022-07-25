<?php get_header(); ?>
    <!-- Content
    ================================================== -->
    <div class="content-outer">

        <div id="page-content" class="row portfolio">

            <section class="entry cf">

                <div id="secondary"  class="four columns entry-details">

                    <h1>Our Portfolio.</h1>

                    <p class="lead">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                        nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh.</p>

                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                        nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate
                        cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a
                        ornare odio.</p>

                </div> <!-- Secondary End-->
                <div id="primary" class="eight columns portfolio-list">
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
                                    <?php $taxonomies = get_the_terms(get_the_ID(), 'portfolio_category') ?>
                                    <?php foreach ($taxonomies as $taxonomy): ?>
                                        <li>
                                            <a href="<?= get_term_link($taxonomy); ?>"><?= $taxonomy->name; ?></a>
                                        </li>
                                    <?php endforeach; ?>
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