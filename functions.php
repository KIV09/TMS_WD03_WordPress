<?php
add_action('after_setup_theme', 'theme_setup');
function theme_setup()
{
    add_theme_support("title-tag");
    add_theme_support( 'post-thumbnails' );

    add_image_size("article_image", 1300, 500, ["center", "center"]);
    add_image_size("list_image", 650, 300, ["center", "center"]);

    register_nav_menu('top', 'Header menu');
    register_nav_menu('bottom', 'Footer menu');
}

add_filter("show_admin_bar", "__return_false");

add_filter("excerpt_more", "exceptMore");
function exceptMore($more)
{
    global $post;
    return '<a href="' . get_permalink($post->ID) . '"> Read more</a>';
}

add_action("wp_enqueue_scripts", "scriptEnqueued");
function scriptEnqueued($handle)
{
    wp_deregister_script('jquery');
    wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', [], 111, true );
    wp_enqueue_script('jquery');


    wp_enqueue_script("dz-modernizr",
        get_template_directory_uri() . "/assets/js/modernizr.js");

    wp_enqueue_script("dz-jquery-min",
        get_template_directory_uri() . "/assets/js/jquery.min.js", [], 111, true);
    wp_enqueue_script("dz-jquery-minver",
        get_template_directory_uri() . "/assets/js/jquery-1.10.2.min.js", [], 111, true);
    wp_enqueue_script("dz-jquery-migrate",
        get_template_directory_uri() . "/assets/js/jquery-migrate-1.2.1.min.js", [], 111, true);
    wp_enqueue_script("dz-flex",
        get_template_directory_uri() . "/assets/js/jquery.flexslider.js", [], 111, true);
    wp_enqueue_script("dz-double",
        get_template_directory_uri() . "/assets/js/doubletaptogo.js", [], 111, true);
    wp_enqueue_script("dz-init",
        get_template_directory_uri() . "/assets/js/init.js", [], 111, true);

    wp_enqueue_style("dz-default", get_template_directory_uri() . "/assets/css/default.css");
    wp_enqueue_style("dz-layout", get_template_directory_uri() . "/assets/css/layout.css");
    wp_enqueue_style("dz-media-queries", get_template_directory_uri() . "/assets/css/media-queries.css");
}

add_action("widgets_init", "registerWidgetsArea");
function registerWidgetsArea()
{
    register_sidebar([
            'name' => 'Правая колонка тема dz',
            'id' => 'right-sidebar',
            'before_widget' => '<div class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="h6">',
            'after_title' => '</h3>',]
    );
    register_sidebar([
        'name' => 'Контакты тема dz',
        'id' => 'contact-sidebar',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="h6">',
        'after_title' => '</h3>',
    ]);
}

add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){
    return '
        <nav class="navigation %1$s" role="navigation">
            <div class="nav-links">%3$s</div>
        </nav>    
        ';
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

add_filter("get_comments_number", "commentNumber");
function commentNumber($number) {
    $comment = ' Comment';
    if ($number > 2) {
            $comment .= 's';
        }
    echo $number . $comment;
}

function newThemeComment($comment, $args, $depth) {

    ?>
    <li class="thread-alt depth-<?= $depth; ?> comment">

    <div class="avatar">
        <?= get_avatar($comment, 120); ?>
    </div>

    <div class="comment__content">

        <div class="comment-info">
            <div class="comment__author"><?= get_comment_author(); ?></div>

            <?php if (!$comment->comment_approved): ?>
                <div class="not-approved">Комментарий не подтвержден.</div>
            <?php endif; ?>

            <div class="comment-meta">
                <div class="comment-time"><?= get_comment_date(); ?></div>
                <div class="sep">
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
add_filter("wpseo_json_ld_output", "__return_false");

add_action("acf/init", "addOptionsPage");
function addOptionsPage()
{
    if (function_exists("acf_add_options_page")) {
        acf_add_options_page([
            "page_title" => "General settings of theme",
            "menu_title" => "Setting of theme",
            "menu_slug" => "main-options-theme",
        ]);
    }
}



