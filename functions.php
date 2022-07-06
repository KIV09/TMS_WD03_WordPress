<?php
add_action( 'after_setup_theme', 'theme_setup' );

function theme_setup() {
    add_theme_support('title-tag');
	add_theme_support('post-thumbnails');

	add_image_size('article_image', 500, 300, ['left', 'top']);

	register_nav_menu( 'top', 'Главное меню' );
	register_nav_menu( 'bottom', 'Меню в футере' );
}

add_filter( 'navigation_markup_template', 'archivePagination', 10, 2 );
function archivePagination( $template, $class ) {
	return '<div class="post-list-nav">%3$s</div>';
}

add_filter( 'paginate_links_output', 'linksOutput' );
function linksOutput( $html ) {
	global $wp_query, $paged;

	$pages = explode( "\n", $html );

	$html = '';
	if ( $paged >= 1 ) {
		$html = array_shift( $pages );
	}
	if ( $paged < $wp_query->max_num_pages ) {
		$html .= array_pop( $pages );
	}

	return $html;
}

add_filter( 'excerpt_more', 'excerptMore' );
function excerptMore( $more ) {
	global $post;

	return ' <a href="' . get_permalink( $post->ID ) . '">Читать далее</a>';
}

add_action( 'my_action', 'myFunction' );
function myFunction() {
	echo 'Hello World!';
}

add_action( 'wp_enqueue_scripts', 'scriptEnqueued' );
function scriptEnqueued() {
	wp_deregister_script('jquery');
	wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', [], 111, true );
	wp_enqueue_script('jquery');


	wp_enqueue_script( 'new_theme-jquery-migrate', get_template_directory_uri() . '/js/jquery-migrate-1.2.1.min.js', ['jquery']);



	wp_enqueue_script( 'new_theme-modernizr', get_template_directory_uri() . '/js/modernizr.js', [], 111, false );
	wp_enqueue_script( 'new_theme-all', get_template_directory_uri() . '/js/fontawesome/all.min.js', [], 111, false );

	wp_enqueue_script( 'new_theme-main', get_template_directory_uri() . '/js/main.js', [], 111, true );

	wp_enqueue_style( 'new_theme-base', get_template_directory_uri() . '/css/base.css' );
	wp_enqueue_style( 'new_theme-main', get_template_directory_uri() . '/css/main.css' );
}

add_filter( 'show_admin_bar', '__return_false' );

add_action( 'widgets_init', 'registerWidgetsArea' );
function registerWidgetsArea() {
	register_sidebar([
		'name' => 'Правая колонка',
		'id' => 'right-sidebar',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="h6">',
		'after_title' => '</h3>',
	]);
	register_sidebar([
		'name' => 'Контакты',
		'id' => 'contact-sidebar',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="h6">',
		'after_title' => '</h3>',
	]);
}


add_filter('comment_text', 'commentNumber');
function commentNumber($number) {
	$comment = 'комментари';
	if ($number % 100 >= 1 && $number % 100 <= 4) {
		if ($number % 10 == 1) {
			$comment .= 'й';
		} else {
			$comment .= 'я';
		}
	} else {
		$comment .= 'ев';
	}

	return $number . ' ' . $comment;
}

function newThemeComment($comment, $args, $depth) {

?>
	<li class="thread-alt depth-<?= $depth; ?> comment">

		<div class="comment__avatar">
			<?= get_avatar($comment, 120); ?>
		</div>

		<div class="comment__content">

			<div class="comment__info">
				<div class="comment__author"><?= get_comment_author(); ?></div>

                <?php if (!$comment->comment_approved): ?>
                    <div class="not-approved">Комментарий не подтвержден.</div>
                <?php endif; ?>

				<div class="comment__meta">
					<div class="comment__time"><?= get_comment_date(); ?></div>
					<div class="comment__reply">
						<?php
                        comment_reply_link(array_merge($args, [
                            'depth' => $depth,
                            'max_depth' => $args['max_depth']
                        ]));
                        ?>
					</div>
				</div>
			</div>

			<div class="comment__text">
				<?php comment_text(); ?>
			</div>

		</div>

		<?php if ($comment->children): ?>
			<ul class="children">
		<?php endif; ?>

	<?php
}

function newThemeCommentEnd($comment, $args, $depth) {
	?>
	<?php if ($comment->children): ?>
		</ul>
	<?php endif; ?>

	</li>
	<?
}

add_filter('wpseo_json_ld_output', '__return_false');