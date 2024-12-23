<?php
// Theme setup
function AcademiX_theme_setup() {
    // Add support for dynamic title tag
    add_theme_support('title-tag');

    // Add support for featured images
    add_theme_support('post-thumbnails');

    // Add support for menus
    add_theme_support('menus');

    // Register menus
    register_nav_menus(array(
        'primary_menu' => __('Primary Menu', 'AcademiX'),
        'footer_menu'  => __('Footer Menu', 'AcademiX'),
    ));
}
add_action('after_setup_theme', 'AcademiX_theme_setup');

// Enqueue theme styles and scripts
function AcademiX_enqueue_scripts() {
    // Enqueue the default stylesheet
    wp_enqueue_style('AcademiX-style', get_stylesheet_uri());
    
    // Enqueue the custom stylesheet
    wp_enqueue_style('AcademiX-custom-style', get_template_directory_uri() . '/custom.css');
}
add_action('wp_enqueue_scripts', 'AcademiX_enqueue_scripts');

// Ensure ReduxFramework exists before requiring it
if (!class_exists('ReduxFramework')) {
    require_once get_template_directory() . '/inc/redux-core/framework.php';
    require_once get_template_directory() . '/inc/theme-options.php';
    require_once get_template_directory() . '/redux-config.php';

}

// Check if $opt_name is defined before using Redux::setSection
if (isset($opt_name)) {
    Redux::setSection($opt_name, array(
        'title'  => 'General Settings',
        'id'     => 'general',
        'fields' => array(
            array(
                'id'    => 'primary_color',
                'type'  => 'color',
                'title' => 'Primary Theme Color',
                'default' => '#0073e6',
            ),
        )
    ));
}

// Ensure $redux_demo is defined before using it
if (isset($redux_demo)) {
    $primary_color = $redux_demo['primary_color'];
}


function AcademiX_register_footer_menus() {
    register_nav_menus(array(
        'footer-1' => __('Footer Menu 1', 'textdomain'),
        'footer-2' => __('Footer Menu 2', 'textdomain'),
        'footer-3' => __('Footer Menu 3', 'textdomain'),
    ));
}
add_action('after_setup_theme', 'AcademiX_register_footer_menus');
