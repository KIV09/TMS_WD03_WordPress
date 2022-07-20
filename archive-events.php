<?php get_header(); ?>

<section class="s-content page-content">

	<div class="row block-large-1-2 events-list">
		<?php if (have_posts()): ?>
			<?php while (have_posts()): ?>
            <?php the_post(); ?>

            <?php get_template_part( 'event_item' ); ?>

			<?php endwhile; ?>

		<?php else: ?>
			Событий нет
		<?php endif; ?>
	</div> <!-- end events-list -->

	<div class="row row-x-center">
		<?php global $wp_query; ?>
		<?php if ( $wp_query->max_num_pages > 1 ): ?>
			<div class="column large-4 load-more">
				<a class="btn btn--primary h-full-width" href="javascript:void(0);">Primary Button</a>
			</div>
		<?php endif; ?>
	</div>

</section>

<?php get_footer(); ?>