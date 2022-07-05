<?php
/*
Template Name: Page About
*/
?>

<?php get_header();?>

<!-- Page Title
   ================================================== -->
<div id="page-title">

    <div class="row">

        <div class="ten columns centered text-center">
            <h1>About Us<span>.</span></h1>

            <p>Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi
                enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu. </p>
        </div>

    </div>

</div> <!-- Page Title End-->

<!-- Content
================================================== -->
<div class="content-outer">

    <div id="page-content" class="row page">

        <div id="primary" class="eight columns">

            <section>

                <h1>Meet our talented team.</h1>

                <p class="lead">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                    nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate
                    cursus a sit amet mauris. Morbi accumsan ipsum velit. </p>

                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                    nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate
                    cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a
                    ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. </p>

                <div class="row">

                    <div id="team-wrapper" class="bgrid-halves cf">

                        <div class="column member">

                            <img src="<?= get_template_directory_uri(); ?>/assets/images/team/team-img-01.jpg" alt=""/>

                            <div class"member-name">
                            <h5>Naruto Uzumaki</h5>
                            <span>Creative Director</span>
                        </div>

                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                            nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>

                        <ul class="member-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>

                    </div>

                    <div class="column member">

                        <img src="<?= get_template_directory_uri(); ?>/assets/images/team/team-img-02.jpg" alt=""/>

                        <div class"member-name">
                        <h5>Sakura Haruno</h5>
                        <span>Lead Creative</span>
                    </div>

                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                        nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>

                    <ul class="member-social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>

                </div>

                <div class="column member">

                    <img src="<?= get_template_directory_uri(); ?>/assets/images/team/team-img-03.jpg" alt=""/>

                    <div class"member-name">
                    <h5>Sasuke Uchiha</h5>
                    <span>Lead Web Designer</span>
                </div>

                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                    nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>

                <ul class="member-social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>

        </div>

        <div class="column member">

            <img src="<?= get_template_directory_uri(); ?>/assets/images/team/team-img-03.jpg" alt=""/>

            <div class"member-name">
            <h5>Shikamaru Nara</h5>
            <span>Web Designer</span>
        </div>

        <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
            nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>

        <ul class="member-social">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-skype"></i></a></li>
        </ul>

    </div>

</div> <!-- Team wrapper End -->

</div> <!-- row End -->

</section> <!-- section end -->

</div> <!-- primary end -->

<div id="secondary" class="four columns end">

    <aside id="sidebar">

        <?php get_sidebar("contact")?>

    </aside>

</div> <!-- secondary End-->

</div> <!-- page-content End-->

</div> <!-- Content End-->

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
            <!--
            <li>
               <span>
               This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
               Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
               <a href="#">http://t.co/CGIrdxIlI3</a>
               </span>
               <b><a href="#">3 Days Ago</a></b>
            </li>
            -->
        </ul>

        <p class="align-center"><a href="#" class="button">Follow us</a></p>

    </div>

</section> <!-- Tweet Section End-->


<?php get_footer();?>
