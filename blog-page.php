<?php
/*
Template Name: Страница на Blog
*/
?>

<?php get_header(); ?>
    <!-- Content
    ================================================== -->
    <div class="content-outer">

    <div id="page-content" class="row">

        <div id="primary" class="eight columns">
        <?php if (have_posts()): ?>
                <?php while (have_posts()): ?>
            <?php the_post(); ?>
            <?php $posts = get_posts([
                'numberposts' => 3,
            ]); ?>
            <?php foreach ($posts

                           as $post): ?>
                <?php setup_postdata($post); ?>
                <article class="post">

                    <div class="entry-header cf">

                        <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                        </h1>

                        <p class="post-meta">

                            <time class="date" datetime="2014-01-14T11:24"><?php the_time('d.m.Y.'); ?></time>
                            /

                            <span class="categories">
                            <?php
                            $categories = get_the_category();
                            ?>
                                <?php foreach ($categories as $category): ?>

                                    <a href="<?php echo get_term_link($category); ?>"><?php echo $category->name; ?></a> /
                                <?php endforeach; ?>
                     <a href="#"><?php the_author(); ?></a>
                     </span>

                        </p>

                    </div>

                    <div class="post-thumb">
                        <a href="<?= get_template_directory_uri(); ?>single.html" title=""><img
                                    src="<?= get_template_directory_uri(); ?>/assets/images/post-image/post-image-1300x500-01.jpg"
                                    alt="post-image" title="post-image"></a>
                    </div>

                    <div class="post-content">
                        <?php the_excerpt(); ?>
                        <!-- <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                            nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh
                            vulputate
                            cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor
                            a
                            ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. </p>
                            -->

                    </div>

                </article> <!-- post end -->
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
            <article class="post">

                <div class="entry-header cf">

                    <h1><a href="<?= get_template_directory_uri(); ?>single.html" title="">Proin gravida nibh vel
                            velit auctor aliquet Aenean sollicitudin auctor.</a></h1>

                    <p class="post-meta">

                        <time class="date" datetime="2014-01-14T11:24">Jan 14, 2013</time>
                        /
                        <span class="categories">
                     <a href="#">Design</a> /
                     <a href="#">User Inferface</a> /
                     <a href="#">Web Design</a>
                     </span>

                    </p>

                </div>

                <div class="post-thumb">
                    <a href="<?= get_template_directory_uri(); ?>single.html" title=""><img
                                src="<?= get_template_directory_uri(); ?>/assets/images/post-image/post-image-1300x500-02.jpg"
                                alt="post-image" title="post-image"></a>
                </div>

                <div class="post-content">

                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                        nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh
                        vulputate
                        cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor
                        a
                        ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. </p>

                </div>

            </article> <!-- post end -->

            <article class="post">

                <div class="entry-header cf">

                    <h1><a href="<?= get_template_directory_uri(); ?>single.html" title="">Proin gravida nibh vel
                            velit auctor aliquet Aenean sollicitudin auctor.</a></h1>

                    <p class="post-meta">

                        <time class="date" datetime="2014-01-14T11:24">Jan 14, 2014</time>
                        /
                        <span class="categories">
                     <a href="#">Design</a> /
                     <a href="#">User Inferface</a> /
                     <a href="#">Web Design</a>
                     </span>

                    </p>

                </div>

                <div class="post-thumb">
                    <a href="<?= get_template_directory_uri(); ?>single.html" title=""><img
                                src="<?= get_template_directory_uri(); ?>/assets/images/post-image/post-image-1300x500-03.jpg"
                                alt="post-image" title="post-image"></a>
                </div>

                <div class="post-content">

                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                        nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh
                        vulputate
                        cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor
                        a
                        ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. </p>

                </div>

            </article> <!-- post end -->

            <!-- Pagination -->
            <nav class="col full pagination">
                <?php endwhile; ?>
                <!-- page nav -->
                <?php the_posts_pagination(); ?>
                <ul>
                    <li><span class="page-numbers prev inactive">Prev</span></li>
                    <li><span class="page-numbers current">1</span></li>
                    <li><a href="#" class="page-numbers">2</a></li>
                    <li><a href="#" class="page-numbers">3</a></li>
                    <li><a href="#" class="page-numbers">4</a></li>
                    <li><a href="#" class="page-numbers">5</a></li>
                    <li><a href="#" class="page-numbers">6</a></li>
                    <li><a href="#" class="page-numbers">7</a></li>
                    <li><a href="#" class="page-numbers">8</a></li>
                    <li><a href="#" class="page-numbers">9</a></li>
                    <li><a href="#" class="page-numbers next">Next</a></li>
                </ul>
                <?php else: ?>
                <p>Нет записи</p>
            <?php endif; ?>
            </nav>

        </div> <!-- Primary End-->

        <div id="secondary" class="four columns end">

            <aside id="sidebar">
                <?php get_sidebar(); ?>
                <!--
                    <div class="widget widget_search">
                        <h5>Search</h5>
                        <form action="#">

                            <input class="text-search" type="text"
                                   onfocus="if (this.value == 'Search here...') { this.value = ''; }"
                                   onblur="if(this.value == '') { this.value = 'Search here...'; }"
                                   value="Search here...">
                            <input type="submit" class="submit-search" value="">

                        </form>
                    </div>

                    <div class="widget widget_text">
                        <h5 class="widget-title">Text Widget</h5>
                        <div class="textwidget">Proin gravida nibh vel velit auctor aliquet.
                            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
                            nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus
                            a sit amet mauris. Morbi accumsan ipsum velit.
                        </div>
                    </div>

                    <div class="widget widget_categories">
                        <h5 class="widget-title">Categories</h5>
                        <ul class="link-list cf">
                            <li><a href="#">Designs</a></li>
                            <li><a href="#">Internet</a></li>
                            <li><a href="#">Typography</a></li>
                            <li><a href="#">Photography</a></li>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Other Stuff</a></li>
                        </ul>
                    </div>

                    <div class="widget widget_tag_cloud">
                        <h5 class="widget-title">Tags</h5>
                        <div class="tagcloud cf">
                            <a href="#">drupal</a>
                            <a href="#">joomla</a>
                            <a href="#">ghost</a>
                            <a href="#">wordpress</a>
                        </div>
                    </div>

                    <div class="widget widget_photostream">
                        <h5>Photostream</h5>
                        <ul class="photostream cf">
                            <li><a href="#"><img src="<?= get_template_directory_uri(); ?>/assets/images/thumb.jpg"
                                                 alt="thumbnail"></a></li>
                            <li><a href="#"><img src="<?= get_template_directory_uri(); ?>/assets/images/thumb.jpg"
                                                 alt="thumbnail"></a></li>
                            <li><a href="#"><img src="<?= get_template_directory_uri(); ?>/assets/images/thumb.jpg"
                                                 alt="thumbnail"></a></li>
                            <li><a href="#"><img src="<?= get_template_directory_uri(); ?>/assets/images/thumb.jpg"
                                                 alt="thumbnail"></a></li>
                            <li><a href="#"><img src="<?= get_template_directory_uri(); ?>/assets/images/thumb.jpg"
                                                 alt="thumbnail"></a></li>
                            <li><a href="#"><img src="<?= get_template_directory_uri(); ?>/assets/images/thumb.jpg"
                                                 alt="thumbnail"></a></li>
                            <li><a href="#"><img src="<?= get_template_directory_uri(); ?>/assets/images/thumb.jpg"
                                                 alt="thumbnail"></a></li>
                            <li><a href="#"><img src="<?= get_template_directory_uri(); ?>/assets/images/thumb.jpg"
                                                 alt="thumbnail"></a></li>
                        </ul>
                    </div>

                </aside>

            </div>  Secondary End-->

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

    </section> <!-- Tweets Section End-->

<?php get_footer(); ?>