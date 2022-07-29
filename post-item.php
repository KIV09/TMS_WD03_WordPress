<article class="entry">

	<header class="entry__header">

		<?php the_post_thumbnail('article_image'); ?>
		<h2 class="entry__title h1">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_title(); ?>
			</a>
		</h2>

		<div class="entry__meta">
			<ul>
				<li><?php the_time('d.m.Y'); ?></li>
				<?php
				$categories = get_the_terms(get_the_ID(), 'category');
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

</article>