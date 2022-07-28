<?php
/*
Template Name: Single Product Template
*/
?>

<?php get_header(); ?>
<?php the_post(); ?>
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

                </article>
                <?php wp_reset_postdata(); ?>
            </div>

            <div id="secondary" class="four columns end">

            </div>

        </div>

    </div>

<?php get_footer(); ?>