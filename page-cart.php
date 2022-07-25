<?php
/*
Template Name: Шаблон корзины 2
*/
?>
<?php get_header();?>

<!-- Content
================================================== -->
<div class="content-outer">

    <div id="page-content" class="row">

        <div id="primary" class="eight columns">

            <article class="post">

                <?php if (have_posts()): ?>
                    <?php while (have_posts()): the_post(); ?>
                        <?php the_content();?>
                    <?php endwhile; ?>
                <?php endif; ?>

            </article> <!-- end page -->

        </div> <!-- end main -->

    </div> <!-- end row -->

</div> <!-- end content-wrap -->

<?php get_footer();?>
