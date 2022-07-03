<?php get_header(); ?>
<?php the_post(); ?>

<div class="content-outer">

    <div id="page-content" class="row">

        <div id="primary" class="eight columns">

            <article class="post">

                <div class="entry-header cf">

                    <h1><?php the_title();?></h1>

                    <p class="post-meta">

                        <time class="date" datetime=" "><?php the_date();?></time>
                        /
                        <span class="categories">
                     <?php $categories = get_the_category() ?>
                            <?php foreach ($categories as $category): ?>
                                <a href="<?= get_term_link($category); ?>"><?= $category->name; ?></a>
                            <?php endforeach;?>
                     </span>

                    </p>

                </div>
                <?php if (has_post_thumbnail()):?>
                <div class="post-thumb">
                    <?php the_post_thumbnail('lager');?>
                </div>
                <?php endif;?>
                <div class="post-content">

                    <?php the_content(); ?>

                    <p class="tags">
                        <?php the_tags('<span>Tagged in </span>:',',');?>
                    </p>

                    <div class="bio cf">

                        <div class="gravatar">
                            <?= get_avatar(get_the_author()); ?>
                        </div>
                        <div class="about">
                            <?php the_author(); ?>
                            <?= get_the_author_meta('description'); ?>
                        </div>

                    </div>

                    <ul class="post-nav cf">
                        <?= get_previous_post_link('<li class="prev">%link</li>', '<strong class="h6">Previous Article</strong>%title') ?>
                        <?= get_next_post_link('<li class="next">%link</li>', '<strong class="h6">Next Article</strong>%title') ?>
                    </ul>

                </div>

            </article> <!-- post end -->

            <?php comments_template(); ?>
        </div>

        <div id="secondary" class="four columns end">

            <?php get_sidebar(); ?> <!-- Sidebar End -->

        </div> <!-- Comments End -->

    </div>

</div> <!-- Content End-->

<?php get_footer(); ?>
