<?php
require_once 'include/acf.php';
add_action('after_setup_theme', 'theme_register_nav_menu');

function theme_register_nav_menu()
{
    add_theme_support('post-thumbnails');
    register_nav_menu('top', 'Главное меню dz');
    register_nav_menu('bottom', 'Меню в футоре dz');
}

add_action('wp_enqueue_scripts', 'scriptEnqueued');
function scriptEnqueued($handle)
{
    wp_enqueue_script('new-theme-modernizr', get_template_directory_uri() . '/assets/js/modernizr.js', []);
    wp_enqueue_script('new-theme-link', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
    wp_enqueue_script('new-theme-main', get_template_directory_uri() . 'js/jquery-1.10.2.min.js', []);
    wp_enqueue_script('new-theme-jquery-migrate', get_template_directory_uri() . '/assets/js/jquery-migrate-1.2.1.min.js', []);
    wp_enqueue_script('new-theme-flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js', []);
    wp_enqueue_script('new-theme-doubletaptogo', get_template_directory_uri() . '/assets/js/doubletaptogo.js', []);
    wp_enqueue_script('new-theme-init', get_template_directory_uri() . '/assets/js/init.js', []);

    wp_enqueue_style('new-theme-default', get_template_directory_uri() . '/assets/css/default.css', []);
    wp_enqueue_style('new-theme-layout', get_template_directory_uri() . '/assets/css/layout.css', []);
    wp_enqueue_style('new-theme-media-queries', get_template_directory_uri() . '/assets/css/media-queries.css', []);

}

add_filter('show_admin_bar', '__return_false');


add_action('widgets_init', 'registerWidgetsArea');
function registerWidgetsArea()
{
    register_sidebar([
        'name' => 'Домашняя колонка',
        'id' => 'sidebar',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="h6">',
        'after_title' => '</h3>',
    ]);
    register_sidebar([
        'name' => 'Контакты колонка',
        'id' => 'sidebar-contact',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="h6">',
        'after_title' => '</h3>',
    ]);
}

add_filter('navigation_markup_template', 'archivePagination', 10, 2);
function archivePagination($template, $class)
{
    return '<div class="post-list-nav">%3$s</div>';
}

add_filter('paginate_links_output', 'linksOutput');
function linksOutput($html)
{
    global $wp_query, $paged;
    $pages = explode("\n", $html);

    $html = '';
    if ($paged >= 1) {
        $html = array_shift($pages);
    }
    if ($paged < $wp_query->max_num_pages) {
        $html .= array_pop($pages);
    }
    return $html;
}

add_filter('excerpt_more', 'excerptMore');
function excerptMore($more)
{
    global $post;
    return '<a class="more-link" href="' . get_permalink($post->ID) . '">
 Read More<i class="fa fa-arrow-circle-o-right"></i></a>';

}


function commentNumber($number)
{
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

function newThemeComment($comment, $args, $depth)
{
    ?>
    <li class="thread-alt depth- <?php $depth ?>">

    <div class="avatar">
        <?= get_avatar($comment, 120); ?>
    </div>


    <div class="comment-info">
        <cite><?= get_comment_author(); ?></cite>
        <?php if (!$comment->comment_approved): ?>
            <div class="not-approved"> коммент не подтвержден</div>
        <?php endif; ?>
        <div class="comment-meta">
            <time class="comment-time" datetime="2014-01-14T24:05"><?= get_comment_date(); ?></time>
            <span class="sep">/</span>
            <?php
            comment_reply_link(array_merge($args, [
                'depth' => $depth,
                'max_depth' => $args['max_depth']
            ]));
            ?>
        </div>
    </div>

    <div class="comment-text">
        <?php comment_text(); ?>

    </div>


    <?php if ($comment->children): ?>
    <ul class="children">
<? endif; ?>


    <?php
}

function newThemeCommentEnd($comment, $args, $depth)
{
    ?>
    <?php if ($comment->children): ?>

    </ul>
<? endif; ?>

    </li>
    <?php
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

add_action( 'init', 'register_post_types' );
function register_post_types(){
    register_post_type( 'portfolio', [
        'label'  => null,
        'labels' => [
            'name'               => 'Портфолио',
            'singular_name'      => 'Портфолио',
            'add_new'            => 'Добавить Портфолио',
            'add_new_item'       => 'Добавление Портфолио',
            'edit_item'          => 'Редактирование Портфолио',
            'new_item'           => 'Новое Портфолио',
            'view_item'          => 'Смотреть Портфолио',
            'search_items'       => 'Искать Портфолио',
            'not_found'          => 'Не найдено',
            'not_found_in_trash' => 'Не найдено в корзине',
            'parent_item_colon'  => '',
            'menu_name'          => 'Портфолио',
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

    register_taxonomy( 'portfolio_category', [ 'portfolio' ], [
        'label'                 => '',
        'labels'                => [
            'name'              => 'Категории Портфолио',
            'singular_name'     => 'Категория Портфолио',
            'search_items'      => 'Искать категорию',
            'view_item '        => 'Смотреть категорию',
            'edit_item'         => 'Редактировать Портфолио',
            'update_item'       => 'Обновить категорию',
            'add_new_item'      => 'Добавить новую категорию',
            'new_item_name'     => 'Новая категория',
            'menu_name'         => 'Категории Портфолио',
        ],
        'description'           => '',
        'public'                => true,
        'hierarchical'          => true,
        'rewrite'               => true,
        'show_in_rest'          => true,
    ] );
}