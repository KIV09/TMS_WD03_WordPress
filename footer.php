<!-- footer
================================================== -->

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
        </ul>

        <p class="align-center"><a href="#" class="button">Follow us</a></p>

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