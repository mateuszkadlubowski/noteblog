<?php

function nb_theme_setup()
{
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'primary' => __('Menu główne', 'nb'),
    ));
}

add_action('after_setup_theme', 'nb_theme_setup');

function nb_theme__assets()
{
    //  wp_enqueue_style('style.css', get_stylesheet_uri(), array(), true, 'all');
    wp_enqueue_style('main.css', get_template_directory_uri() . '/assets/css/main.css', [], true, 'all');
//    wp_enqueue_style('slick.css', get_template_directory_uri() . '/css/slick.css', array(), true, 'all');
    //  wp_enqueue_style('bootstrap.css', get_template_directory_uri() . '/css/bootstrap.css', array(), true, 'all');
    //  wp_enqueue_script('bootstrap.min.js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), false, true);
    // wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery', 'slick'), false, true);
    //  wp_enqueue_script('slick', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), false, true);
}

add_action('wp_enqueue_scripts', 'nb_theme__assets');

add_filter('use_block_editor_for_post', '__return_false');