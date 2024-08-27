<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/style.css', array(), filemtime(get_stylesheet_directory() . '/style.css'));
}

    add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );

    function add_extra_item_to_nav_menu( $items, $args ) {
        if (is_user_logged_in() && $args->theme_location === 'primary') {
            $items .= '<li class="menu-item"' . admin_url() . '"> admin </a></li>';
        }
        return $items;
    }