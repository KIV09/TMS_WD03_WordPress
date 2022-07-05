<?php
add_action('after_setup_theme', 'theme_register_nav_menu');

function theme_register_nav_menu()
{
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
    return '<a href="' . get_permalink($post->ID) . '"> Read More</a>';
}