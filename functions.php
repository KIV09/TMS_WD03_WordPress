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

	wp_enqueue_script( 'new_theme-flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', [], 111, true );
	wp_enqueue_script( 'new_theme-slider', get_template_directory_uri() . '/js/slider.js', ['new_theme-flexslider'], 111, true );

	wp_enqueue_script( 'fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js' );

	wp_enqueue_style( 'new_theme-base', get_template_directory_uri() . '/css/base.css' );
	wp_enqueue_style( 'new_theme-main', get_template_directory_uri() . '/css/main.css' );

	wp_enqueue_style( 'new_theme-slider', get_template_directory_uri() . '/css/slider.css' );

	wp_enqueue_style( 'fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css' );
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

add_action('acf/init', 'addOptionsPage');
function addOptionsPage() {
    if (function_exists('acf_add_options_page')) {
	    acf_add_options_page( [
		    'page_title' => 'Основные настройки темы',
		    'menu_title' => 'Настройки темы',
		    'menu_slug'  => 'main-options-theme'
	    ] );
    }
}

add_shortcode('menu', 'menuShortcode');
function menuShortcode($atts) {
    $atts = shortcode_atts([
        'name' => '',
        'location' => ''
    ], $atts);

    $args = [
	    'container' => 'ul',
	    'menu_class' => 's-footer__list s-footer-list--nav group',
	    'depth' => 1,
        'echo' => false
    ];

    if (empty($atts['location']) && empty($atts['name'])) {
        return '';
    } elseif (!empty($atts['location'])) {
        $args['theme_location'] = $atts['location'];
    } else {
        $args['menu'] = $atts['name'];
    }

    return wp_nav_menu($args);
}

add_filter('acf/format_value', 'acfDoShortcode');
function acfDoShortcode($value) {
    return !is_array($value) ? do_shortcode($value) : $value;
}

add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type( 'events', [
		'label'  => null,
		'labels' => [
			'name'               => 'События',
			'singular_name'      => 'Событие',
			'add_new'            => 'Добавить событие',
			'add_new_item'       => 'Добавление события',
			'edit_item'          => 'Редактирование события',
			'new_item'           => 'Новое событие',
			'view_item'          => 'Смотреть событие',
			'search_items'       => 'Искать событие',
			'not_found'          => 'Не найдено',
			'not_found_in_trash' => 'Не найдено в корзине',
			'parent_item_colon'  => '',
			'menu_name'          => 'События',
		],
		'public'              => true,
		'show_in_rest'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-calendar-alt',
		'capability_type'     => 'post',
		'supports'            => [ 'title', 'editor', 'thumbnail', 'excerpt' ],
		'taxonomies'          => [],
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
	] );

	register_taxonomy( 'events_category', [ 'events' ], [
		'label'                 => '',
		'labels'                => [
			'name'              => 'Категории событий',
			'singular_name'     => 'Категория событий',
			'search_items'      => 'Искать категорию',
			'view_item '        => 'Смотреть категорию',
			'edit_item'         => 'Редактировать событие',
			'update_item'       => 'Обновить категорию',
			'add_new_item'      => 'Добавить новую категорию',
			'new_item_name'     => 'Новая категория',
			'menu_name'         => 'Категории событий',
		],
		'description'           => '',
		'public'                => true,
		'hierarchical'          => true,
		'rewrite'               => true,
		'show_in_rest'          => true,
	] );
}