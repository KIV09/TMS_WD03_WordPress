<?php get_header(); ?>


    <!-- Content
	================================================== -->
    <div class="s-content">

        <div class="row">

            <div id="main" class="s-content__main large-8 column">
				<?php
				$posts = get_posts( [
						'numberposts' => 4
					]
				);
				?>


        <?php foreach ($posts as $post): ?>
            <?php setup_postdata($post); ?>

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

        <?php endforeach;?>

                <?php wp_reset_postdata(); ?>






            </div> <!-- end main -->


            <div id="sidebar" class="s-content__sidebar large-4 column">

				<?php get_sidebar(); ?>

            </div> <!-- end sidebar -->

        </div> <!-- end row -->

    </div> <!-- end content-wrap -->


<?php get_footer(); ?>