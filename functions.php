<?php
add_action('after_setup_theme', 'theme_setup');

function theme_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

    if(is_plugin_active('woocommerce/woocommerce.php')){
        add_theme_support('woocommerce');
    }

    add_image_size('article_image', width: 500, height: 500, crop: 300);

    register_nav_menu('top', 'Главное меню');
    register_nav_menu('bottom', 'Футер меню');
}

add_filter('navigation_markup_template', 'archivePagination', 10, 2,);
function archivePagination($tempalate, $class)
{
    return '<div class="post-list-nav">%3$s</div>';
}

add_filter('paginate_links_output', 'LinksOutput');
function LinksOutput($html)
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
    return '<a href="' . get_permalink($post->ID) . '"><br>Читать далее<br></a>';
}

add_action('wp_enqueue_scripts', 'scriptEnqueued');
function scriptEnqueued()
{
    wp_deregister_script('jquery');
    wp_register_script('dz-jquery', get_template_directory_uri() . '/assets/js/jquery-1.10.2.min.js', '[]', '111', 'true');
    wp_register_script('dz-jquery-migrate', get_template_directory_uri() . '/assets/js/jquery-migrate-1.2.1.min.js', '[]', '111', 'true');
    wp_enqueue_script('dz-jquery');
    wp_enqueue_script('dz-jquery-migrate');


    wp_enqueue_script('dz-modernizr', get_template_directory_uri() . '/assets/js/modernizr.js', '[]', '111', 'false');
    wp_enqueue_script('dz-flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js', '[]', '111', 'true');
    wp_enqueue_script('dz-slider', get_template_directory_uri() . '/assets/js/slider.js', ['dz-flexslider'], '111', 'true');
    wp_enqueue_script('dz-doubletaptogo', get_template_directory_uri() . '/assets/js/doubletaptogo.js', '[]', '111', 'true');
    wp_enqueue_script('dz-init', get_template_directory_uri() . '/assets/js/init.js', '[]', '111', 'true');

    wp_enqueue_style('dz-default', get_template_directory_uri() . '/assets/css/default.css');
    wp_enqueue_style('dz-layout', get_template_directory_uri() . '/assets/css/layout.css');
    wp_enqueue_style('dz-media-queries', get_template_directory_uri() . '/assets/css/media-queries.css');
    wp_enqueue_style('dz-slider', get_template_directory_uri() . '/assets/css/slider.css');
}

// Отключаем админ бар
//add_filter( 'show_admin_bar', '__return_false' );

add_action('widgets_init', 'registerWidgetsArea');
function registerWidgetsArea()
{
    register_sidebar([
        'name' => 'Правая колонка',
        'id' => 'right-sidebar',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="h6">',
        'after_title' => '</h3>',
    ]);
}

//add_filter('comments_number', 'commentNumber');
//function commentNumber($numder) {
//    $comment = 'комментари';
//    if ($numder % 100 >= 1 && $numder % 100 <= 4) {
//        if ($numder % 10 == 1) {
//            $comment .= 'й';
//        } else {
//            $comment .= 'я';
//        }
//    } else {
//        $comment .= 'ев';
//    }
//    return $numder;
//}

function dzComment($comment, $args, $depth)
{
    ?>
    <li class="thread-alt depth-<?= $depth; ?>">

    <div class="avatar">
        <?= get_avatar($comment, size: 120); ?>
    </div>

    <div class="comment-info">
        <cite><?= get_comment_author(); ?></cite>

            <?php if (!$comment->comment_approved): ?>
                <div class="not-approved">Комментарий не подтвержден!</div>
            <?php endif; ?>

            <div class="comment-meta">
                <time class="comment-time" datetime=" "><?= get_comment_date(); ?></time>
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
<?php endif; ?>
    <?php

}

function dzCommentEnd($comment, $args, $depth)
{
    ?>
    <?php if ($comment->children): ?>
    </ul>
<?php endif; ?>
    </li>
    <?php

}

add_filter('wpseo_json_ld_output', '__return_false');

add_action('acf/init', 'addOptionsPage');
function addOptionsPage (){
    if (function_exists('acf_add_options_page')){
        acf_add_options_page([
            'page_title' => 'Основные настройки темы',
            'menu_title' => 'Настройки темы',
            'menu_slug' => 'main-options-theme',
        ]);
    }
}

add_shortcode('menuFooter', 'menuShortcode');
function menuShortcode($atts)
{
    $atts = shortcode_atts([
        'name' => '',
        'location' => '',
    ], $atts);

    $args = [
        'container' => 'ul',
        'menu_class' => 'footer-nav',
        'depth' => 1,
        'echo' => false,
    ];

    if (empty($atts['location']) && empty($atts['name'])) {
        return '';
    } elseif (!empty($atts['location'])) {
        $args['theme_location'] = $atts['location'];
    } else {
        $args['menuFooter'] = $atts['name'];
    }

    return wp_nav_menu($args);
}

add_filter('acf/format_value', 'acfDoShortcode');
function acfDoShortcode($value)
{
    return !is_array($value) ? do_shortcode($value) : $value;
}

add_action('init', 'register_post_types');
function register_post_types()
{
    register_post_type('portfolio', [
        'label' => null,
        'labels' => [
            'name' => 'Портфолио',
            'singular_name' => 'Портфолио',
            'add_new' => 'Добавить портфолио',
            'add_new_item' => 'Добавление портфолио',
            'edit_item' => 'Редактирование портфолио',
            'new_item' => 'Новое портфолио',
            'view_item' => 'Смотреть портфолио',
            'search_items' => 'Искать портфолио',
            'not_found' => 'Не найдено',
            'not_found_in_trash' => 'Не найдено в корзине',
            'parent_item_colon' => '',
            'menu_name' => 'Портфолио',
        ],
        'public' => true,
        'show_in_rest' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-calendar-alt',
        'capability_type' => 'post',
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
        'taxonomies' => [],
        'has_archive' => true,
        'rewrite' => true,
        'query_var' => true,
    ]);

    register_taxonomy( 'portfolio_category', [ 'portfolio' ], [
        'label'                 => '',
        'labels'                => [
            'name'              => 'Категории портфолио',
            'singular_name'     => 'Категория портфолио',
            'search_items'      => 'Искать категорию',
            'view_item '        => 'Смотреть категорию',
            'edit_item'         => 'Редактировать портфолио',
            'update_item'       => 'Обновить категорию',
            'add_new_item'      => 'Добавить новую категорию',
            'new_item_name'     => 'Новая категория',
            'menu_name'         => 'Категории портфолио',
        ],
        'description'           => '',
        'public'                => true,
        'hierarchical'          => true,
        'rewrite'               => true,
        'show_in_rest'          => true,
    ] );
}

add_filter('woocommerce_enqueue_styles', 'reinit_woocommerce_styles');
function reinit_woocommerce_styles($styles){
    unset($styles['woocommerce-layout']);
    return $styles;
}
