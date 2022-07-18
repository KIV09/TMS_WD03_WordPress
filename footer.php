<!-- Tweets Section
    ================================================== -->
<section id="tweets">

    <div class="row">
        <?php $section = get_field('tweets_section', 'options'); ?>
        <div class="tweeter-icon align-center">
            <i class="fa fa-<?= $section['icon']; ?>"></i>
        </div>

        <ul id="twitter" class="align-center">
            <li>
               <span>
               <?= $section['text']; ?>
               </span>
                <b><a href="#"><?= $section['date']; ?></a></b>
            </li>
        </ul>

        <p class="align-center"><a href="<?= $section['button_link']; ?>" class="button"><?= $section['button_name']; ?></a></p>

    </div>

</section> <!-- Tweets Section End-->

<footer>

    <div class="row">

        <div class="twelve columns">
            <?php wp_nav_menu([
                'theme_location' => 'bottom',
                'container' => 'ul',
                'menu_class' => 'footer-nav',
                'depth' => 1,
            ]); ?>
            <!--
            <ul class="footer-nav">
                <li><a href="#">Home.</a></li>
                <li><a href="#">Blog.</a></li>
                <li><a href="#">Portfolio.</a></li>
                <li><a href="#">About.</a></li>
                <li><a href="#">Contact.</a></li>
                <li><a href="#">Features.</a></li>
            </ul>
            -->
            <?php if ($socials = get_field('socials_home', 'options')): ?>
                <ul class="footer-social">
                    <?php foreach ($socials as $social): ?>
                        <li>
                            <a href="<?= $social['social_link_home']; ?>">
                                <i class="fa fa-<?= strtolower($social['social_name_home']); ?>"></i>
                            </a>
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
==================================================
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?= get_template_directory_uri(); ?>/js/jquery-1.10.2.min.js"><\/script>')</script>
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/assets/js/jquery-migrate-1.2.1.min.js"></script>

<script src="<?= get_template_directory_uri(); ?>/assets/js/jquery.flexslider.js"></script>
<script src="<?= get_template_directory_uri(); ?>/assets/js/doubletaptogo.js"></script>
<script src="<?= get_template_directory_uri(); ?>/assets/js/init.js"></script>  -->

</body>

</html>