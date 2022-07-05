<?php
add_action('after_setup_theme', 'theme_setup');

function theme_setup()
{
    add_theme_support('post-thumbnails');
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
    wp_enqueue_script('dz-doubletaptogo', get_template_directory_uri() . '/assets/js/doubletaptogo.js', '[]', '111', 'true');
    wp_enqueue_script('dz-init', get_template_directory_uri() . '/assets/js/init.js', '[]', '111', 'true');

    wp_enqueue_style('dz-default', get_template_directory_uri() . '/assets/css/default.css');
    wp_enqueue_style('dz-layout', get_template_directory_uri() . '/assets/css/layout.css');
    wp_enqueue_style('dz-media-queries', get_template_directory_uri() . '/assets/css/media-queries.css');
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