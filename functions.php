<?php
add_action('after_setup_theme', 'theme_register_nav_menu');
function theme_register_nav_menu()
{
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

