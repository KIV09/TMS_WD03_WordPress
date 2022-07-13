<!-- footer
================================================== -->

<!-- Tweets Section
================================================== -->
<section id="tweets">

    <div class="row">
        <?php $call_action = get_field("call_action", "options"); ?>
        <div class="tweeter-icon align-center">
            <?= wp_get_attachment_image($call_action["icon"], "icon_image"); ?>
        </div>

        <ul id="twitter" class="align-center">
            <li>
               <span>
                <?= $call_action["text"]; ?>
               <a href="<?= $call_action["link"]; ?>"><?= $call_action["link"]; ?></a>
               </span>
                <b><?= $call_action["date"]; ?></b>
            </li>
        </ul>

        <p class="align-center"><a href="<?= $call_action["link"]; ?>" class="button">Visit</a></p>

    </div>

</section> <!-- Tweet Section End-->

<footer>


    <div class="row">

        <div class="twelve columns">

            <?php wp_nav_menu([
                "theme_location" => "bottom",
                "container" => "ul",
                "menu_class" => "footer-nav",
                "depth" => 1,
            ]); ?>
            <?php if ($socials = get_field("socials", "options")): ?>
            <ul class="footer-social">
                <?php foreach ($socials as $social): ?>
                    <li><a href="<?= $social["social_link"]; ?>"><i class="fa fa-<?= strtolower($social["social_name"]); ?>" aria-hidden="true"></i></a></li>
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
        <?php wp_footer(); ?>

</body>

</html>