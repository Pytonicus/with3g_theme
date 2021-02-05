<?php

// Menú de navegación:
function with3g_nav_menu(){
    register_nav_menus(array(
        'nav-menu' => __('Menu Navegación', 'with3g')
    ));
}

add_action('init', 'with3g_nav_menu');

// estilos:
function with3g_scripts_styles(){
    wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css2?family=Roboto&display=swap', array(), '1.0.0');
    wp_enqueue_style('fontawesome', 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css', array(), '5.10');
    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0');
    wp_register_script('with3g_main', get_stylesheet_directory_uri(). '/main.js', array(),'1', true);
    wp_enqueue_script('with3g_main');
}

add_action('wp_enqueue_scripts', 'with3g_scripts_styles');