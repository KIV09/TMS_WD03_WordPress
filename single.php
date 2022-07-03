<?php get_header(); ?>
<?php the_post(); ?>

	<!-- Content
		================================================== -->
	<div class="s-content">

		<div class="row">

			<div id="main" class="s-content__main large-8 column">

				<article class="entry">

					<header class="entry__header">

						<h2 class="entry__title h1">
							<?php the_title(); ?>
						</h2>

						<div class="entry__meta">
							<ul>
								<li><?php the_date(); ?></li>

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

					</header> <!-- entry__header -->

                    <?php if (has_post_thumbnail()): ?>
					<div class="entry__content-media">
						<?php the_post_thumbnail('article_image'); ?>
					</div>
                    <?php endif; ?>

					<div class="entry__content">
						<?php the_content(); ?>
					</div> <!-- entry__content -->

					<p class="entry__tags">
						<?php the_tags('<span>Tagged in </span>: ', ', '); ?>
					</p>

					<ul class="entry__post-nav h-group">

                        <?= get_previous_post_link(
                                '<li class="prev">%link</li>',
                                '<strong class="h6">Previous Article</strong> %title'
                        ); ?>
                        <?= get_next_post_link(
                                '<li class="next">%link</li>',
                                '<strong class="h6">Next Article</strong> %title'
                        ); ?>

					</ul>


                    <div class="author">
                        <?= get_avatar(get_the_author()); ?>
                        <?php the_author(); ?>
                        <?= get_the_author_meta('description'); ?>
                    </div>

				</article> <!-- end entry -->

				<?php comments_template(); ?>

			</div> <!-- end main -->


			<div id="sidebar" class="s-content__sidebar large-4 column">

				<?php get_sidebar(); ?>

			</div> <!-- end sidebar -->

		</div> <!-- end row -->

	</div> <!-- end content-wrap -->

<?php get_footer(); ?>