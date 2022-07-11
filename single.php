<?php get_header(); ?>
<?php the_post(); ?>

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
<?php if (has_post_thumbnail()): ?>
    <div class="post-thumb">
        <?php the_post_thumbnail(''); ?>
    </div>
<?php endif; ?>

    <div class="post-content">
        <?php the_content(); ?>

        <p class="tags">
            <?php the_tags('<span>Tagged in </span>: ', ', '); ?>
        </p>

        <div class="bio cf">

            <div class="gravatar">
                <?= get_avatar(get_the_author()); ?>
            </div>
            <div class="about">
                <h5><a title="<?php the_author(); ?>" href="#" rel="author"><?php the_author(); ?></a></h5>
                <p><?= get_the_author_meta('description'); ?></p>
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
        <?php comments_template(); ?>
               <!-- Comments
               ================================================== -->

    </div>

    <div id="secondary" class="four columns end">

        <aside id="sidebar">
            <?php get_sidebar(); ?>



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