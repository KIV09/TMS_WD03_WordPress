<!-- Footer
================================================== -->
<footer class="s-footer">

    <?php if ($socials = get_field('socials', 'options')): ?>
    <div class="row s-footer__top">
        <div class="column">
            <ul class="s-footer__social">
                <?php foreach ($socials as $social): ?>
                <li>
                    <a href="<?= $social['social_link']; ?>">
<i class="fab fa-<?= strtolower($social['social_name']); ?>" aria-hidden="true"></i>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div> <!-- end footer__top -->
    <?php endif; ?>

    <?php $left_column = get_field('left_column', 'options'); ?>
    <div class="row s-footer__bottom">

        <div class="large-6 tab-full column s-footer__info">
            <h3 class="h6"><?= $left_column['title']; ?></h3>

            <?= $left_column['text']; ?>
        </div>

        <div class="large-6 tab-full column">
            <div class="row">

                <?php $middle_column = get_field('middle_column', 'options'); ?>
                <div class="large-8 tab-full column">

                    <h3 class="h6"><?= $middle_column['title']; ?></h3>

                    <ul class="photostream group">

                        <?php foreach ($middle_column['gallery'] as $picture): ?>
                        <li>
        <a href="<?= wp_get_attachment_image_url($picture, 'large'); ?>" data-fancybox="gallery">
            <?= wp_get_attachment_image($picture, 'thumbnail'); ?>
        </a>
                        </li>
                        <?php endforeach;?>

                    </ul>

                </div>

    <?php $right_column = get_field('right_column', 'options'); ?>
    <div class="large-4 tab-full column">
        <h3  class="h6"><?= $right_column['title']; ?></h3>

        <?= $right_column['menu']; ?>
    </div>
            </div>
        </div>

        <div class="ss-copyright">
            <span>© Copyright Keep It Simple 2019</span>
            <span>Design by <a href="<?= get_template_directory_uri(); ?>/https://www.styleshout.com/">StyleShout</a></span>
        </div>

    </div> <!-- end footer__bottom -->


    <div class="ss-go-top">
        <a class="smoothscroll" title="Back to Top" href="<?= get_template_directory_uri(); ?>/#top">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0l8 9h-6v15h-4v-15h-6z"/></svg>
        </a>
    </div> <!-- end ss-go-top -->

</footer> <!-- end Footer-->

<?php wp_footer(); ?>

</body>

</html>