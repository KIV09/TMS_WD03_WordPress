<?php get_header(); ?>

<section class="s-content page-content">

	<div class="row block-large-1-2 events-list">
		<?php if (have_posts()): ?>
			<?php while (have_posts()): ?>
            <?php the_post(); ?>
			<div class="column events-list__item">
			<h3 class="display-1 events-list__item-title">
				<a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a>
			</h3>

			<?php the_excerpt(); ?>

			<ul class="events-list__meta">
				<li class="events-list__meta-date">Saturday, September 28, 2019</li>
				<li class="events-list__meta-time">8:00AM - 5:30PM</li>
				<li class="events-list__meta-location">1600 Amphitheatre Parkway, Mt. View</li>
			</ul>
		</div>
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