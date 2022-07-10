<?php
/*
Template Name: Шаблон конструктор
*/
?>

<?php get_header(); ?>

<?php $constructor = get_field('constructor_fields', get_the_ID()); ?>
<?php if (!empty($constructor)): ?>
	<div class="s-content">

		<div class="row">

			<div id="main" class="s-content__main large-8 column">

				<section class="page-content">

		<?php foreach ($constructor as $item): ?>

			<?php if ($item['acf_fc_layout'] == 'title_block'): ?>
				<!-- title block -->
				<h2 class="page-content__title h1">
					<?= $item['title']; ?>
				</h2>

			<?php elseif ($item['acf_fc_layout'] == 'big_text_block'): ?>
				<!-- block big text -->
				<p class="lead">
					<?= $item['big_text']; ?>
				</p>

			<?php elseif ($item['acf_fc_layout'] == 'text_block'): ?>
				<!-- block text -->
				<?= $item['text']; ?>

			<?php elseif ($item['acf_fc_layout'] == 'columns_block'): ?>
				<!-- block columns -->
				<div class="row block-large-1-<?= $item['columns_row_count']; ?> block-tab-full">

			<?php foreach ( $item['columns'] as $column ): ?>
				<div class="column">
					<?= $column['column']; ?>
				</div>
			<?php endforeach; ?>


				</div>

			<?php endif; ?>

		<?php endforeach; ?>

				</section> <!-- end page -->

			</div> <!-- end main -->


			<div id="sidebar" class="s-content__sidebar large-4 column">

				<div class="widget widget--search">
					<h3 class="h6">Search</h3>
					<form action="#0">
						<input type="text" value="Search here..." onblur="if(this.value == '') { this.value = 'Search here...'; }" onfocus="if (this.value == 'Search here...') { this.value = ''; }" class="text-search">
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

	</div>
<?php endif; ?>

<?php get_footer(); ?>