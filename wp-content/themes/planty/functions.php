<?php
    add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
    function theme_enqueue_styles(){
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/style.css', array(), filemtime(get_stylesheet_directory() . '/style.css'));
}
function assets()
{
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/css/main.css', array(), '1.0');
}
add_action('wp_enqueue_scripts', 'assets');

function add_search_form($items, $args) {
    if( is_user_logged_in() && $args->menu_id == 'menu-1-0b6b78c' ){
    $items .= '<li><a href="http://localhost/planty/wp-admin" class="admin">Admin</a></li>'; 
    }
    else{
    }

  return $items;
}
add_filter('wp_nav_menu_items', 'add_search_form', 10, 2);

function montheme_supports()
{
    register_nav_menu('header', 'En tête du menu');
}
add_action('after_setup_theme', 'montheme_supports');
?>