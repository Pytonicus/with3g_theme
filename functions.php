<?php

// Habilitar thumbnails:
function with3g_setup(){
    add_theme_support('post-thumbnails');
    add_image_size('novedad', 250, 250, true);
}
add_action('after_setup_theme', 'with3g_setup');

// Longitud de descripción:
function wpdocs_custom_excerpt_length( $length ) {
    return 100;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 100 );

// Menú de navegación:
function with3g_nav_menu(){
    register_nav_menus(array(
        'nav-menu' => __('Menu Navegación', 'with3g')
    ));
}
add_action('init', 'with3g_nav_menu');


function wpdocs_excerpt_more( $more ) {
    return '.....';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


// estilos:
function with3g_scripts_styles(){
    wp_enqueue_style('lato', 'https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap', array(), '1.0.0');
    wp_enqueue_style('merryweather', '"https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap', array(), '1.0.0');
    wp_enqueue_style('fontawesome', 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css', array(), '5.10');
    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0');
    wp_register_script('with3g_main', get_stylesheet_directory_uri(). '/main.js', array(),'1', true);
    wp_enqueue_script('with3g_main');
}

add_action('wp_enqueue_scripts', 'with3g_scripts_styles');

// widgets para el footer:
function with3g_widgets(){
    register_sidebar(array(
        'name' => 'Novedades',
        'id' => 'novedades'
    ));
    register_sidebar(array(
        'name' => 'Redes Sociales',
        'id' => 'social'
    ));
}
add_action('widgets_init', 'with3g_widgets');
