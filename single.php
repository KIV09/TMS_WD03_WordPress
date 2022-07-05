<?php get_header(); ?>

<?php the_post(); ?> <!--//предоставляет информацию о посте конкретном -->

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

                <article class="post">

                    <div class="entry-header cf">

                        <h1><?php the_title(); ?></h1>

                        <p class="post-meta">

                            <time class="date" datetime="2014-01-14T11:24"><?php the_time('M j, Y'); ?></time>
                            /
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

                    <?php if (has_post_thumbnail()): ?>
                        <div class="post-thumb">
                            <?= get_the_post_thumbnail();?>
                        </div>
                    <?php endif; ?>

                    <div class="post-content">

                        <?php the_content(); ?>

                        <!-- <p class="tags">
                            <span>Tagged in </span>:
                            <a href="#">orci</a>, <a href="#">lectus</a>, <a href="#">varius</a>, <a href="#">turpis</a>
                        </p> -->

                        <p class="tags">
                            <?php the_tags('<span>Tagged in </span>: ', ', '); ?>
                        </p>

                        <div class="bio cf">

                            <div class="gravatar">
                                <!--<img src="images/author-img.png" alt="">-->
                                <?= get_avatar(get_the_author());?>
                            </div>
                            <div class="about">
                                <h5><a title="Posts by <?php the_author();?>" href="#" rel="author"><?php the_author();?></a></h5>
                                <?= get_the_author_meta('description'); ?>
                            </div>

                        </div>

                        <ul class="post-nav cf">
                            <!--<li class="prev"><a rel="prev" href="#"><strong>Previous Article</strong> Duis Sed Odio Sit Amet Nibh Vulputate</a></li>
                            <li class="next"><a rel="next" href="#"><strong>Next Article</strong> Morbi Elit Consequat Ipsum</a></li>-->

                            <?= get_previous_post_link('<li class="prev">%link</li>',
                                '<strong >Previous Article</strong> %title'); ?>

                            <?= get_next_post_link('<li class="next">%link</li>',
                                '<strong >Next Article</strong> %title');?>
                        </ul>

                    </div>

                </article> <!-- post end -->

                <!-- Comments
                ================================================== -->

                <?php comments_template();?>

            </div>

            <div id="secondary" class="four columns end">

                <aside id="sidebar">

                    <div class="widget widget_search">
                        <h5>Search</h5>
                        <form action="#">

                            <input class="text-search" type="text" onfocus="if (this.value == 'Search here...') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Search here...'; }" value="Search here...">
                            <input type="submit" class="submit-search" value="">

                        </form>
                    </div>

                    <div class="widget widget_text">
                        <h5 class="widget-title">Text Widget</h5>
                        <div class="textwidget">Proin gravida nibh vel velit auctor aliquet.
                            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
                            nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus
                            a sit amet mauris. Morbi accumsan ipsum velit. </div>
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

                </aside> <!-- Sidebar End -->

            </div> <!-- Comments End -->

        </div>

    </div> <!-- Content End-->

<?php get_footer(); ?>