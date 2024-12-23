<?php
if ( ! class_exists( 'Redux' ) ) {
    return;
}

// Redux Framework configuration
$opt_name = 'theme_options'; // Option name for storing settings

Redux::setArgs( $opt_name, array(
    'opt_name'             => $opt_name,
    'display_name'         => 'Theme Options',
    'menu_title'           => 'Theme Options',
    'page_title'           => 'Theme Options',
    'menu_type'            => 'menu', // Or 'submenu' for a child menu
    'allow_sub_menu'       => true,
    'menu_icon'            => 'dashicons-admin-generic', // Dashicon class
    'admin_bar'            => true,
    'admin_bar_icon'       => 'dashicons-admin-generic',
    'customizer'           => true,
    'page_permissions'     => 'manage_options',
    'save_defaults'        => true,
    'update_notice'        => true,
    'footer_credit'        => 'Custom Footer Text',
) );

// Add sections and fields
Redux::setSection( $opt_name, array(
    'title'  => 'General Settings',
    'id'     => 'general',
    'desc'   => 'Basic theme settings.',
    'icon'   => 'el el-home', // Elusive Icon
    'fields' => array(
        array(
            'id'       => 'logo',
            'type'     => 'media',
            'title'    => 'Logo',
            'desc'     => 'Upload your logo here.',
        ),
        array(
            'id'       => 'footer_text',
            'type'     => 'text',
            'title'    => 'Footer Text',
            'default'  => '© 2024 My Theme. All Rights Reserved.',
        ),
        array(
            'id'       => 'color_scheme',
            'type'     => 'color',
            'title'    => 'Primary Color',
            'default'  => '#333333',
        ),
    ),
) );
