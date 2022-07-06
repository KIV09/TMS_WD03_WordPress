<?php get_header(); ?>

	<!-- Content
	   ================================================== -->
	<div class="s-content">

		<div class="row">

			<div id="main" class="s-content__main large-8 column">

				<section class="page-content">

					<?php if (have_posts()): ?>
                        <?php while (have_posts()): the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; ?>
                    <?php endif; ?>

				</section> <!-- end page -->

			</div> <!-- end main -->

			<div id="sidebar" class="s-content__sidebar large-4 column">

				<?php get_sidebar(); ?>

			</div> <!-- end sidebar -->

		</div> <!-- end row -->

	</div> <!-- end content-wrap -->

<?php get_footer(); ?>