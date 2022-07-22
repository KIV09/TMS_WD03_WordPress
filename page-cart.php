<?php
/*
Template Name: Шаблон корзины
*/
?>

<?php get_header(); ?>

	<!-- Content
	   ================================================== -->
	<div class="s-content">

		<div class="row">

			<div id="main" class="s-content__main large-12 column">

				<section class="page-content">

					<?php if (have_posts()): ?>
						<?php while (have_posts()): the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; ?>
					<?php endif; ?>

				</section> <!-- end page -->

			</div> <!-- end main -->

		</div> <!-- end row -->

	</div> <!-- end content-wrap -->

<?php get_footer(); ?>