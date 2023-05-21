<?php


define('THEMEURL', get_stylesheet_directory_uri());
define('THEMEDIR', __DIR__);
define('ASSETSURL', THEMEURL . '/assets');
define('ASSETSDIR', THEMEDIR . '/assets');
define('ASSETS_VERSION', '0.0.1');



function register_my_menus() {
    register_nav_menus(
        array(
            'pre_header' => ( 'pre_header' ),
            'header' => __( 'header' ),
            'footer' => __( 'footer' )
        )
    );
}
add_action( 'init', 'register_my_menus' );

if (function_exists('acf_add_options_page')) {

    acf_add_options_page([
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false,
    ]);
}

function register_styles() {
    wp_register_style( 'style', THEMEURL . '/style.css', '', ASSETS_VERSION);
    wp_register_style('style.lg',  THEMEURL . '/style.lg.css', '', ASSETS_VERSION, '(min-width: 1024px)');
}

function register_scripts() {
    wp_register_script('main', ASSETSURL . '/js/main.js', '', ASSETS_VERSION, true);
}

function enqueue_scripts() {
    wp_enqueue_script('main');
    wp_enqueue_style('style');
    wp_enqueue_style('style.lg');
}
//function enqueue_styles() {
//
//}


function my_acf_blocks_init() {

    if( function_exists('acf_register_block') ) {

        /***  coures Block   ***/
        acf_register_block([
            'name'              => 'hero-block',
            'title'             => __('Course Block'),
            'description'       => __('A custom course block.'),
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'render_template' => plugin_dir_path( __FILE__ ) . 'template-parts/blocks/course/index.php',
            'enqueue_style' => get_template_directory_uri() . 'template-parts/blocks/course/style.css',
        ]);
    }
}