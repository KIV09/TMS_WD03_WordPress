<?php get_header(); ?>

    <!-- Content
     ================================================== -->
    <div class="content-outer">

        <div id="page-content" class="row">

            <div id="primary" class="eight columns">
                <?php
                $posts = get_post();
                setup_postdata($post);
                ?>
                <article class="post">

                    <div class="entry-header cf">
                        <h1><?php the_title(); ?></h1>
                        <p class="post-meta">
                            <time class="date" datetime="2014-01-14T11:24"><?= get_the_date(); ?></time>
                            /
                            <span class="categories">
                                <?php $categories = get_the_category() ?>
                                <?php foreach ($categories as $category): ?>
                                <a href="<?= get_term_link($category); ?>"><?= $category->name; ?></a> /
                                <?php endforeach; ?>
                            </span>
                        </p>
                    </div>

                    <div class="post-thumb">
                        <?php if (has_post_thumbnail()): ?>
                            <div class="entry__content-media">
                                <?php the_post_thumbnail('article_image'); ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="post-content">

                        <p class="lead"><?php the_content(); ?></p>

                        <p class="tags">
                            <?php the_tags("<span>Tagged in </span>:", ", ");?>
                        </p>

                        <div class="bio cf">

                            <div class="gravatar">
                                <?= get_avatar(get_the_author()); ?>
                            </div>
                            <div class="about">
                                <h5><a title="Posts by Author" href="#" rel="author"><?php the_author(); ?></a></h5>
                                <p><?= get_the_author_meta("description"); ?></p>
                            </div>

                        </div>

                        <ul class="post-nav cf">
                            <?= get_previous_post_link(
                                '<li class="prev">%link</li>',
                                '<strong class="h6">Previous Article</strong> %title'
                            ); ?>
                            <?= get_next_post_link(
                                '<li class="next">%link</li>',
                                '<strong class="h6">Next Article</strong> %title'
                            ); ?>
                        </ul>

                    </div>

                </article> <!-- post end -->
                <?php wp_reset_postdata(); ?>
                <!-- Comments
    ================================================== -->
                <?php comments_template(); ?>

            </div>

            <div id="secondary" class="four columns end">

                <aside id="sidebar">

                    <?php get_sidebar("right-sidebar")?>

                </aside> <!-- Sidebar End -->

            </div> <!-- Comments End -->

        </div>

    </div> <!-- Content End-->

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