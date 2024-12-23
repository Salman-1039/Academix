<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
<div class="logo">
        <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo">
        </a>
    </div>

<div class="auth-buttons">
    <a href="#login" class="btn login-btn">Login</a>
    <a href="#register" class="btn register-btn">Register Now</a>
   </div>

    <!-- Primary Menu -->
    <?php
    if (has_nav_menu('primary_menu')) {
        wp_nav_menu(array(
            'theme_location' => 'primary_menu',
            'container'      => 'nav',
            'container_class'=> 'primary-menu-container',
            'menu_class'     => 'primary-menu',
        ));
    } else {
        echo '<p>Please set up the primary menu in Appearance > Menus.</p>';
    }
    ?>
</header>
