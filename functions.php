<?php
add_action( 'after_setup_theme', 'theme_register_nav_menu' );

function theme_register_nav_menu() {
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
	wp_enqueue_script( 'new_theme-modernizr', get_template_directory_uri() . '/js/modernizr.js', [], 111, false );
	wp_enqueue_script( 'new_theme-all', get_template_directory_uri() . '/js/fontawesome/all.min.js', [], 111, false );
	wp_enqueue_script( 'new_theme-jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', [], 111, true );
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
}