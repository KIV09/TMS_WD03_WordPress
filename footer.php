<!-- Footer
================================================== -->
<footer class="s-footer">

    <div class="row s-footer__top">
        <div class="column">
            <ul class="s-footer__social">
                <li><a href="<?= get_template_directory_uri(); ?>/#0"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                <li><a href="<?= get_template_directory_uri(); ?>/#0"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="<?= get_template_directory_uri(); ?>/#0"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                <li><a href="<?= get_template_directory_uri(); ?>/#0"><i class="fab fa-vimeo-v" aria-hidden="true"></i></a></li>
                <li><a href="<?= get_template_directory_uri(); ?>/#0"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="<?= get_template_directory_uri(); ?>/#0"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                <li><a href="<?= get_template_directory_uri(); ?>/#0"><i class="fab fa-skype" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div> <!-- end footer__top -->

    <div class="row s-footer__bottom">

        <div class="large-6 tab-full column s-footer__info">
            <h3 class="h6">About Keep It Simple</h3>

            <p>
                Lorem ipsum Ullamco commodo laboris sit dolore commodo aliquip incididunt fugiat esse dolor
                aute fugiat minim eiusmod do velit labore fugiat officia ad sit culpa labore in consectetur
                sint cillum sint consectetur voluptate adipisicing Duis
            </p>

            <p>
                Lorem ipsum Sed nulla deserunt voluptate elit occaecat culpa cupidatat sit irure sint
                sint incididunt cupidatat esse in Ut sed commodo tempor consequat culpa fugiat incididunt.
            </p>
        </div>

        <div class="large-6 tab-full column">
            <div class="row">
                <div class="large-8 tab-full column">

                    <h3 class="h6">Photostream</h3>

                    <ul class="photostream group">
                        <li><a href="<?= get_template_directory_uri(); ?>/#0"><img alt="thumbnail" src="<?= get_template_directory_uri(); ?>/images/thumb.jpg"></a></li>
                        <li><a href="<?= get_template_directory_uri(); ?>/#0"><img alt="thumbnail" src="<?= get_template_directory_uri(); ?>/images/thumb.jpg"></a></li>
                        <li><a href="<?= get_template_directory_uri(); ?>/#0"><img alt="thumbnail" src="<?= get_template_directory_uri(); ?>/images/thumb.jpg"></a></li>
                        <li><a href="<?= get_template_directory_uri(); ?>/#0"><img alt="thumbnail" src="<?= get_template_directory_uri(); ?>/images/thumb.jpg"></a></li>
                        <li><a href="<?= get_template_directory_uri(); ?>/#0"><img alt="thumbnail" src="<?= get_template_directory_uri(); ?>/images/thumb.jpg"></a></li>
                        <li><a href="<?= get_template_directory_uri(); ?>/#0"><img alt="thumbnail" src="<?= get_template_directory_uri(); ?>/images/thumb.jpg"></a></li>
                        <li><a href="<?= get_template_directory_uri(); ?>/#0"><img alt="thumbnail" src="<?= get_template_directory_uri(); ?>/images/thumb.jpg"></a></li>
                        <li><a href="<?= get_template_directory_uri(); ?>/#0"><img alt="thumbnail" src="<?= get_template_directory_uri(); ?>/images/thumb.jpg"></a></li>
                    </ul>

                </div>

                <div class="large-4 tab-full column">
                    <h3  class="h6">Navigate</h3>

                    <?php wp_nav_menu([
                        'theme_location' => 'bottom',
                        'container' => 'ul',
                        'menu_class' => 's-footer__list s-footer-list--nav group',
                        'depth' => 1
                    ]); ?>

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


<!-- Java Script
================================================== -->
<script src="<?= get_template_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/main.js"></script>

</body>

</html>