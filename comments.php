<div id="comments">

    <h3><?php get_comments_number(); ?></h3>

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

