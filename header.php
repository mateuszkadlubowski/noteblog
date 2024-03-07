<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <!-- @todo favicon -->
    <!--    <link rel="icon" type="image/png" sizes="32x32" href="-->
    <? //= get_stylesheet_directory_uri(); ?><!--/assets/image/favicon/favicon-32x32.png">-->
    <!--    <link rel="icon" type="image/png" sizes="16x16" href="-->
    <? //= get_stylesheet_directory_uri(); ?><!--/assets/image/favicon/favicon-16x16.png">-->
    <!--    <link rel="shortcut icon" href="-->
    <? //= get_stylesheet_directory_uri(); ?><!--/assets/img/favicon/favicon.ico" type="image/x-icon"/>-->
    <!--    <meta name="theme-color" content="#ffee32">-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300&display=swap"
          rel="stylesheet">
    <!-- @todo delete not used fonts -->
    <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
<header class="header">
        <div class="navbar">
            <a href="<?= get_site_url(); ?>" class="navbar__logo">
                <img src="<?= assets('/img/logo-light.svg') ?>" alt="<?=__('Mateusz Kadłubowski - noteblog logo', 'nb')?>">
            </a>
            <nav class="navbar__nav" aria-label="<?=__('Główne menu', 'nb')?>">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'navbar__list',
                ));
                ?>
        </div>
</header>
<?php

