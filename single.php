<?php get_header(); ?>

    <!-- Content
     ================================================== -->
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
                            <time class="date" datetime="2014-01-14T11:24"><?php the_time(); ?></time>
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
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/post-image/post-image-1300x500-01.jpg" alt="post-image" title="post-image">
                    </div>

                    <div class="post-content">

                        <p class="lead"><?php the_excerpt(); ?></p>

                        <p class="tags">
                            <span>Tagged in </span>:
                            <a href="#">orci</a>, <a href="#">lectus</a>, <a href="#">varius</a>, <a href="#">turpis</a>
                        </p>

                        <div class="bio cf">

                            <div class="gravatar">
                                <img src="<?= get_template_directory_uri(); ?>/assets/images/author-img.png" alt="">
                            </div>
                            <div class="about">
                                <h5><a title="Posts by John Doe" href="#" rel="author">John Doe</a></h5>
                                <p>Jon Doe is lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate
                                    cursus a sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate
                                    <a href="#">cursus</a> a sit <a href="#">amet mauris</a>. Morbi elit consequat ipsum.</p>
                            </div>

                        </div>

                        <ul class="post-nav cf">
                            <li class="prev"><a rel="prev" href="#"><strong>Previous Article</strong> Duis Sed Odio Sit Amet Nibh Vulputate</a></li>
                            <li class="next"><a rel="next" href="#"><strong>Next Article</strong> Morbi Elit Consequat Ipsum</a></li>
                        </ul>

                    </div>

                </article> <!-- post end -->
                <?php wp_reset_postdata(); ?>
                <!-- Comments
    ================================================== -->
                <div id="comments">

                    <h3>5 Comments</h3>

                    <!-- commentlist -->
                    <ol class="commentlist">

                        <li class="depth-1">

                            <div class="avatar">
                                <img width="50" height="50" class="avatar" src="<?= get_template_directory_uri(); ?>/assets/images/user-01.png" alt="">
                            </div>

                            <div class="comment-info">
                                <cite>Itachi Uchiha</cite>

                                <div class="comment-meta">
                                    <time class="comment-time" datetime="2014-01-14T23:05">Jan 14, 2013 @ 23:05</time>
                                    <span class="sep">/</span><a class="reply" href="#">Reply</a>
                                </div>
                            </div>

                            <div class="comment-text">
                                <p>Adhuc quaerendum est ne, vis ut harum tantas noluisse, id suas iisque mei. Nec te inani ponderum vulputate,
                                    facilisi expetenda has et. Iudico dictas scriptorem an vim, ei alia mentitum est, ne has voluptua praesent.</p>
                            </div>

                        </li>

                        <li class="thread-alt depth-1">

                            <div class="avatar">
                                <img width="50" height="50" class="avatar" src="<?= get_template_directory_uri(); ?>/assets/images/user-03.png" alt="">
                            </div>

                            <div class="comment-info">
                                <cite>John Doe</cite>

                                <div class="comment-meta">
                                    <time class="comment-time" datetime="2014-01-14T24:05">Jan 14, 2013 @ 24:05</time>
                                    <span class="sep">/</span><a class="reply" href="#">Reply</a>
                                </div>
                            </div>

                            <div class="comment-text">
                                <p>Sumo euismod dissentiunt ne sit, ad eos iudico qualisque adversarium, tota falli et mei. Esse euismod
                                    urbanitas ut sed, et duo scaevola pericula splendide. Primis veritus contentiones nec ad, nec et
                                    tantas semper delicatissimi.</p>
                            </div>

                            <ul class="children">

                                <li class="depth-2">

                                    <div class="avatar">
                                        <img width="50" height="50" class="avatar" src="<?= get_template_directory_uri(); ?>/assets/images/user-03.png" alt="">
                                    </div>

                                    <div class="comment-info">
                                        <cite>Kakashi Hatake</cite>

                                        <div class="comment-meta">
                                            <time class="comment-time" datetime="2014-01-14T25:05">Jan 14, 2013 @ 25:05</time>
                                            <span class="sep">/</span><a class="reply" href="#">Reply</a>
                                        </div>
                                    </div>

                                    <div class="comment-text">
                                        <p>Duis sed odio sit amet nibh vulputate
                                            cursus a sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate
                                            cursus a sit amet mauris</p>
                                    </div>

                                    <ul class="children">

                                        <li class="depth-3">

                                            <div class="avatar">
                                                <img width="50" height="50" class="avatar" src="<?= get_template_directory_uri(); ?>/assets/images/user-03.png" alt="">
                                            </div>

                                            <div class="comment-info">
                                                <cite>John Doe</cite>

                                                <div class="comment-meta">
                                                    <time class="comment-time" datetime="2014-01-14T25:15">Jan 14, 2013 @ 25:15</time>
                                                    <span class="sep">/</span><a class="reply" href="#">Reply</a>
                                                </div>
                                            </div>

                                            <div class="comment-text">
                                                <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est
                                                    etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                                            </div>

                                        </li>

                                    </ul>

                                </li>

                            </ul>

                        </li>

                        <li class="depth-1">

                            <div class="avatar">
                                <img width="50" height="50" class="avatar" src="<?= get_template_directory_uri(); ?>/assets/images/user-02.png" alt="">
                            </div>

                            <div class="comment-info">
                                <cite>Hinata Hyuga</cite>

                                <div class="comment-meta">
                                    <time class="comment-time" datetime="2014-01-14T25:15">Jan 14, 2013 @ 25:15</time>
                                    <span class="sep">/</span><a class="reply" href="#">Reply</a>
                                </div>
                            </div>

                            <div class="comment-text">
                                <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                            </div>

                        </li>

                    </ol> <!-- Commentlist End -->


                    <!-- respond -->
                    <div class="respond">

                        <h3>Leave a Comment</h3>

                        <!-- form -->
                        <form name="contactForm" id="contactForm" method="post" action="">
                            <fieldset>

                                <div class="cf">
                                    <label for="cName">Name <span class="required">*</span></label>
                                    <input name="cName" type="text" id="cName" size="35" value="" />
                                </div>

                                <div class="cf">
                                    <label for="cEmail">Email <span class="required">*</span></label>
                                    <input name="cEmail" type="text" id="cEmail" size="35" value="" />
                                </div>

                                <div class="cf">
                                    <label for="cWebsite">Website</label>
                                    <input name="cWebsite" type="text" id="cWebsite" size="35" value="" />
                                </div>

                                <div class="message cf">
                                    <label  for="cMessage">Message <span class="required">*</span></label>
                                    <textarea name="cMessage"  id="cMessage" rows="10" cols="50" ></textarea>
                                </div>

                                <button type="submit" class="submit">Submit</button>

                            </fieldset>
                        </form> <!-- Form End -->

                    </div> <!-- Respond End -->

                </div>  <!-- Comments End -->

            </div>

            <div id="secondary" class="four columns end">

                <aside id="sidebar">

                    <div class="widget widget_search">
                        <h5>Search</h5>
                        <form action="#">

                            <input class="text-search" type="text" onfocus="if (this.value == 'Search here...') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Search here...'; }" value="Search here...">
                            <input type="submit" class="submit-search" value="">

                        </form>
                    </div>

                    <div class="widget widget_text">
                        <h5 class="widget-title">Text Widget</h5>
                        <div class="textwidget">Proin gravida nibh vel velit auctor aliquet.
                            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
                            nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus
                            a sit amet mauris. Morbi accumsan ipsum velit. </div>
                    </div>

                    <div class="widget widget_categories">
                        <h5 class="widget-title">Categories</h5>
                        <ul class="link-list cf">
                            <li><a href="#">Designs</a></li>
                            <li><a href="#">Internet</a></li>
                            <li><a href="#">Typography</a></li>
                            <li><a href="#">Photography</a></li>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Other Stuff</a></li>
                        </ul>
                    </div>

                    <div class="widget widget_tag_cloud">
                        <h5 class="widget-title">Tags</h5>
                        <div class="tagcloud cf">
                            <a href="#">drupal</a>
                            <a href="#">joomla</a>
                            <a href="#">ghost</a>
                            <a href="#">wordpress</a>
                        </div>
                    </div>

                    <div class="widget widget_photostream">
                        <h5>Photostream</h5>
                        <ul class="photostream cf">
                            <li><a href="#"><img src="<?= get_template_directory_uri(); ?>/assets/images/thumb.jpg" alt="thumbnail"></a></li>
                            <li><a href="#"><img src="<?= get_template_directory_uri(); ?>/assets/images/thumb.jpg" alt="thumbnail"></a></li>
                            <li><a href="#"><img src="<?= get_template_directory_uri(); ?>/assets/images/thumb.jpg" alt="thumbnail"></a></li>
                            <li><a href="#"><img src="<?= get_template_directory_uri(); ?>/assets/images/thumb.jpg" alt="thumbnail"></a></li>
                            <li><a href="#"><img src="<?= get_template_directory_uri(); ?>/assets/images/thumb.jpg" alt="thumbnail"></a></li>
                            <li><a href="#"><img src="<?= get_template_directory_uri(); ?>/assets/images/thumb.jpg" alt="thumbnail"></a></li>
                            <li><a href="#"><img src="<?= get_template_directory_uri(); ?>/assets/images/thumb.jpg" alt="thumbnail"></a></li>
                            <li><a href="#"><img src="<?= get_template_directory_uri(); ?>/assets/images/thumb.jpg" alt="thumbnail"></a></li>
                        </ul>
                    </div>

                </aside> <!-- Sidebar End -->

            </div> <!-- Comments End -->

        </div>

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


<?php get_footer(); ?>