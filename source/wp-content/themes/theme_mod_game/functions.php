<?php
    // functions helper
    include 'helpers/functions.php';

    /*
    * =================== START THEME OPTIONS PAGE ===================
    */
    if(function_exists('acf_add_options_page')) {
        acf_add_options_page(array(
            'page_title' => 'Site configs',
            'menu_title' => 'Site configs',
            'menu_slug' => '',
            'position' => 2,
            'icon_url' => false
        ));
    }
    /*
    * =================== END THEME OPTIONS PAGE ===================
    */

add_theme_support('post-thumbnails');
add_post_type_support( 'post', 'thumbnail' );

if (!function_exists('my_theme_register_menus')) {
    function my_theme_register_menus() {
        register_nav_menus([
            'left-menu' => __('Menu bên trái', 'my-theme'),
        ]);
    }

    add_action('init', 'my_theme_register_menus');
}

