<?php get_header(); ?>
<?php the_post(); ?>

	<section class="page-content">

		<div class="row">
			<div class="column">

				<?php if (has_post_thumbnail()): ?>
				<div class="entry__content-media">
					<?php the_post_thumbnail('medium'); ?>
				</div>
				<?php endif; ?>

				<div class="event-content">

					<div class="event-title">
						<h2 class="display-1"><?php the_title(); ?></h2>
					</div>

					<?php the_content(); ?>

					<ul class="event-meta">
						<li><strong>Age: </strong>7-12 Years Old</li>
						<li><strong>Cost: </strong>150 USD</li>
						<li><strong>Date: </strong>Saturday, September 28, 2019</li>
						<li><strong>Time: </strong>8:00AM - 5:30PM</li>
						<li><strong>Place: </strong>1600 Amphitheatre Parkway, Mt. View</li>
					</ul>

				</div> <!-- end event-content -->


			</div>
		</div>

	</section>

<?php get_footer(); ?>