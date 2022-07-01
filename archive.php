<?php get_header(); ?>

<!-- Page Title
   ================================================== -->
<div id="page-title">

    <div class="row">

        <div class="ten columns centered text-center">
            <h1>Our Blog<span>.</span></h1>

            <p>Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi
                enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu. </p>
        </div>

    </div>

</div> <!-- Page Title End-->

<!-- Content
================================================== -->
<div class="content-outer">

    <div id="page-content" class="row">

        <div id="primary" class="eight columns">

            <?php if (have_posts()): ?>

                <?php while (have_posts()): ?>
                    <?php the_post(); ?>


                    <article class="post">

                        <div class="entry-header cf">

                            <h1><a href="<?php the_permalink(); ?>"
                                   title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>

                            <p class="post-meta">

                                <time class="date" datetime="2014-01-14T11:24"><?php the_time('M j, Y'); ?></time> /

                                <span class="categories">
                                <?php
                                $categories = get_the_category();
                                ?>
                                <?php foreach ($categories as $category): ?>
                                    <a href="<?= get_term_link($category); ?>"><?php echo $category->name; ?></a> /
                                <?php endforeach; ?>
                                </span>

                            </p>

                        </div>

                        <div class="post-thumb">
                            <a href="<?php the_permalink(); ?>" >
                                <?= get_the_post_thumbnail();?>
                            </a>
                        </div>

                        <div class="post-content">

                            <?php the_excerpt(); ?>

                        </div>

                    </article> <!-- post end -->


                <?php endwhile; ?>

                <!-- Pagination -->

                <?php the_posts_pagination(); ?>

                <!--<nav class="col full pagination">
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
                </nav> -->

            <?php else: ?>
                <p>Нет записей</p>
            <?php endif; ?>

        </div> <!-- Primary End-->

        <div id="secondary" class="four columns end">

            <aside id="sidebar">

                 <?php get_sidebar()?>

                <div class="widget widget_search">
                    <h5>Search</h5>
                    <form action="#">

                        <input class="text-search" type="text"
                               onfocus="if (this.value == 'Search here...') { this.value = ''; }"
                               onblur="if(this.value == '') { this.value = 'Search here...'; }" value="Search here...">
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
                        <li><a href="#"><img src="images/thumb.jpg" alt="thumbnail"></a></li>
                        <li><a href="#"><img src="images/thumb.jpg" alt="thumbnail"></a></li>
                        <li><a href="#"><img src="images/thumb.jpg" alt="thumbnail"></a></li>
                        <li><a href="#"><img src="images/thumb.jpg" alt="thumbnail"></a></li>
                        <li><a href="#"><img src="images/thumb.jpg" alt="thumbnail"></a></li>
                        <li><a href="#"><img src="images/thumb.jpg" alt="thumbnail"></a></li>
                        <li><a href="#"><img src="images/thumb.jpg" alt="thumbnail"></a></li>
                        <li><a href="#"><img src="images/thumb.jpg" alt="thumbnail"></a></li>
                    </ul>
                </div>

            </aside>

        </div> <!-- Secondary End-->

    </div>

</div> <!-- Content End-->

<?php get_footer(); ?>
