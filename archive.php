<?php get_header(); ?>

<!-- Content
 ================================================== -->
<div class="content-outer">

    <div id="page-content" class="row">
        <?php get_sidebar(); ?>
        <div id="primary" class="eight columns">
            <?php if (have_posts()): ?>
            <?php while (have_posts()): ?>
            <?php the_post(); ?>
            <article class="post">

                <div class="entry-header cf">
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <p class="post-meta">
                        <time class="date" datetime="2014-01-14T11:24"><?php the_time(); ?></time>
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
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/post-image/post-image-1300x500-01.jpg" alt="post-image" title="post-image">
                </div>

                <div class="post-content">

                    <p class="lead"><?php the_excerpt(); ?></p>

                    <p class="tags">
                        <span>Tagged in </span>:
                        <a href="#">orci</a>, <a href="#">lectus</a>, <a href="#">varius</a>, <a href="#">turpis</a>
                    </p>

<!--                    <div class="bio cf">-->
<!---->
<!--                        <div class="gravatar">-->
<!--                            <img src="--><?//= get_template_directory_uri(); ?><!--/assets/images/author-img.png" alt="">-->
<!--                        </div>-->
<!--                        <div class="about">-->
<!--                            <h5><a title="Posts by John Doe" href="#" rel="author">John Doe</a></h5>-->
<!--                            <p>Jon Doe is lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate-->
<!--                                cursus a sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate-->
<!--                                <a href="#">cursus</a> a sit <a href="#">amet mauris</a>. Morbi elit consequat ipsum.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <ul class="post-nav cf">-->
<!--                        <li class="prev"><a rel="prev" href="#"><strong>Previous Article</strong> Duis Sed Odio Sit Amet Nibh Vulputate</a></li>-->
<!--                        <li class="next"><a rel="next" href="#"><strong>Next Article</strong> Morbi Elit Consequat Ipsum</a></li>-->
<!--                    </ul>-->
                </div>
            </article> <!-- post end -->
            <?php endwhile; ?>
                <?php the_posts_pagination(); ?>
            <?php else: ?>
                <p>Нет записей</p>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
            <!-- Comments
================================================== -->

<?php get_footer(); ?>
