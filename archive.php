<?php get_header(); ?>

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
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
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
                            <?php the_post_thumbnail("list_image"); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="post-content">

                    <p class="lead"><?php the_excerpt(); ?></p>

                    <p class="tags">
                        <?php the_tags("<span>Tagged in </span>:", ", ");?>
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
