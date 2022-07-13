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
                        </div>
                    </article> <!-- post end -->
                <?php endwhile; ?>
                <?php the_posts_pagination(); ?>
            <?php else: ?>
                <p>Нет записей</p>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>

        </div>
        <div id="secondary" class="four columns end">
            <aside id="sidebar">
                <?php get_sidebar("right-sidebar")?>
            </aside>
        </div>




</div> <!-- Content End-->

<?php get_footer(); ?>
