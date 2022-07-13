<!-- footer
================================================== -->
<footer>

    <div class="row">

        <div class="twelve columns">

            <?php $footer_menu = get_field('footer_menu', 'options'); ?>
            <?= $footer_menu['menu']; ?>

            <?php if ($socials = get_field('socials', 'options')): ?>
            <ul class="footer-social">
                <?php foreach ($socials as $social): ?>
                <li>
                    <a href="<?= $social['social_link']; ?>">
                        <i class="fa fa-<?= strtolower($social['social_name']); ?>"></i></a>
                </li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>

            <ul class="copyright">
                <li>Copyright &copy; 2014 Sparrow</li>
                <li>Design by <a href="http://www.styleshout.com/">Styleshout</a></li>
            </ul>

        </div>

        <div id="go-top" style="display: block;"><a title="Back to Top" href="#">Go To Top</a></div>

    </div>

</footer> <!-- Footer End-->

<!-- Java Script
================================================== -->
<?php wp_footer();?>

</body>

</html>