<?php get_header(); ?>

    <div class="s-content">

        <div class="row">

            <div id="main" class="s-content__main large-8 column">

				<?php if ( have_posts() ): ?>

					<?php while ( have_posts() ): ?>
						<?php the_post(); ?>

                        <article class="entry">

                            <header class="entry__header">

                                <h2 class="entry__title h1">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php the_title(); ?>
                                    </a>
                                </h2>

                                <div class="entry__meta">
                                    <ul>
                                        <li><?php the_time(); ?></li>
										<?php
										$categories = get_the_category();
										?>
										<?php foreach ( $categories as $category ): ?>
                                            <li>
                                                <a href="<?php echo get_term_link( $category ); ?>">
													<?php echo $category->name; ?>
                                                </a>
                                            </li>
										<?php endforeach; ?>

                                        <li><?php the_author(); ?></li>
                                    </ul>
                                </div>

                            </header>

                            <div class="entry__content">
								<?php the_excerpt(); ?>
                            </div>

                        </article> <!-- end entry -->

					<?php endwhile; ?>

                    <!-- page nav -->
					<?php the_posts_pagination(); ?>

				<?php else: ?>

                    <p>Нет записей</p>

				<?php endif; ?>

            </div> <!-- end main -->


            <div id="sidebar" class="s-content__sidebar large-4 column">
                <?php get_sidebar(); ?>

                <div class="widget widget--search">
                    <h3 class="h6">Search</h3>
                    <form action="#0">
                        <input type="text" value="Search here..."
                               onblur="if(this.value == '') { this.value = 'Search here...'; }"
                               onfocus="if (this.value == 'Search here...') { this.value = ''; }" class="text-search">
                        <input type="submit" value="" class="submit-search">
                    </form>
                </div>

                <div class="widget widget--categories">
                    <h3 class="h6">Categories.</h3>
                    <ul>
                        <li><a href="#0" title="">Wordpress</a> (2)</li>
                        <li><a href="#0" title="">Ghost</a> (14)</li>
                        <li><a href="#0" title="">Joomla</a> (5)</li>
                        <li><a href="#0" title="">Drupal</a> (3)</li>
                        <li><a href="#0" title="">Magento</a> (2)</li>
                        <li><a href="#0" title="">Uncategorized</a> (9)</li>
                    </ul>
                </div>

                <div class="widget widget_text group">
                    <h3 class="h6">Widget Text.</h3>

                    <p>
                        Lorem ipsum Ullamco commodo laboris sit dolore commodo aliquip incididunt fugiat esse dolor
                        aute fugiat minim eiusmod do velit labore fugiat officia ad sit culpa labore in consectetur
                        sint cillum sint consectetur voluptate adipisicing Duis irure magna ut sit amet reprehenderit.
                    </p>
                </div>

                <div class="widget widget_tags">
                    <h3 class="h6">Post Tags.</h3>

                    <div class="tagcloud group">
                        <a href="#0">Corporate</a>
                        <a href="#0">Onepage</a>
                        <a href="#0">Agency</a>
                        <a href="#0">Multipurpose</a>
                        <a href="#0">Blog</a>
                        <a href="#0">Landing Page</a>
                        <a href="#0">Resume</a>
                    </div>
                </div>

                <div class="widget widget_popular">
                    <h3 class="h6">Popular Post.</h3>

                    <ul class="link-list">
                        <li><a href="#0">Sint cillum consectetur voluptate.</a></li>
                        <li><a href="#0">Lorem ipsum Ullamco commodo.</a></li>
                        <li><a href="#0">Fugiat minim eiusmod do.</a></li>
                    </ul>
                </div>

            </div> <!-- end sidebar -->

        </div> <!-- end row -->

    </div> <!-- end content-wrap -->

<?php get_footer(); ?>