<?php
add_action('after_setup_theme', 'theme_register_nav_menu');

function theme_register_nav_menu()
{
    register_nav_menu('top', 'Главное меню dz');
    register_nav_menu('bottom', 'Меню в футоре dz');
}