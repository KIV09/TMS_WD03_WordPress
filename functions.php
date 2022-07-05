<?php

add_action('after_setup_theme', 'theme_register_nav_menu');

function theme_register_nav_menu()
{
    register_nav_menu('top', 'Главное меню');
    register_nav_menu('bottom', 'Меню для футера');

    add_theme_support('post-thumbnails', array('post'));
    add_image_size('article_image', '500', '500', ['left']);
}

add_action('wp_enqueue_scripts', 'scriptEnqueued');

function scriptEnqueued($handle)
{
    wp_deregister_script('jquery');
    wp_enqueue_script("jquery", get_template_directory_uri() . "/assets/js/jquery-1.10.2.min.js", [], 111, true);
    wp_enqueue_script('jquery');

    wp_enqueue_script('dz-modernizr', get_template_directory_uri() . "/assets/js/modernizr.js", [], 111, false);
    wp_enqueue_script('dz-jquery-migrate', get_template_directory_uri() . "/assets/js/jquery-migrate-1.2.1.min.js", ['jquery']);
    wp_enqueue_script('dz-flexslider', get_template_directory_uri() . "/assets/js/jquery.flexslider.js", [], 111, true);
    wp_enqueue_script('dz-doubletaptogo', get_template_directory_uri() . "/assets/js/doubletaptogo.js", [], 111, true);
    wp_enqueue_script('dz-init', get_template_directory_uri() . "/assets/js/init.js", [], 111, true);

    wp_enqueue_script("dz-jquery-min", get_template_directory_uri() . "/assets/js/jquery.min.js", [], 111, true);

    wp_enqueue_style('dz-default', get_template_directory_uri() . "/assets/css/default.css");
    wp_enqueue_style('dz-layout', get_template_directory_uri() . "/assets/css/layout.css");
    wp_enqueue_style('dz-media-queries', get_template_directory_uri() . "/assets/css/media-queries.css");
}

add_action('widgets_init', 'registerWidgetsArea');

function registerWidgetsArea()
{
    register_sidebar([
        'name' => 'Правая колонка для блога',
        'id' => 'blog-right-sidebar',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="h6">',
        'after_title' => '</h3>',
    ]);
}

add_filter('navigation_markup_template', 'archivePagination', 10, 2);

function archivePagination($template, $class)
{
    return '<nav class="col full pagination">%3$s</nav>';

}

add_filter('excerpt_more', 'excerptMore');
function excerptMore($more)
{
    global $post;
    return ' <a href="' . get_permalink($post->ID) . '">  </a>';
}

function newThemeComment($comment, $args, $depth)
{
    ?>
    <li class="thread-alt depth-<?= $depth; ?>">
        <div class="avatar">
            <?= get_avatar($comment, 50); ?>
        </div>
        <div class="comment-info">
            <cite><?= get_comment_author(); ?></cite>

            <div class="comment-meta">
                <time class="comment-time" datetime="2014-01-14T24:05"><?= get_comment_date(); ?></time>
                <span class="sep">/</span> <!--<a class="reply" href="#">Reply</a>-->
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
