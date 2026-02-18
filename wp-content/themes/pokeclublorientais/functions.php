<?php

include_once __DIR__ . '/methods/partner_methods.php';
include_once __DIR__ . '/methods/event_methods.php';
include_once __DIR__ . '/methods/post_methods.php';
include_once __DIR__ . '/methods/admin_methods.php';



add_action('init', function () {}, 1);



add_action('wp_enqueue_scripts', function () {
    wp_register_style('css', '/wp-content/themes/pokeclublorientais/assets/css/index.css'); // importé 
    wp_register_script('js', '/wp-content/themes/pokeclublorientais/assets/scripts/index.js'); // non importé
    wp_enqueue_style('css');
    wp_enqueue_script('js');

    if (is_front_page()) {
        wp_register_style('home', '/wp-content/themes/pokeclublorientais/assets/css/home.css');
        wp_enqueue_style('home');
    }
    if (get_post_type() === 'post' && !is_front_page()) {
        wp_register_style('post', '/wp-content/themes/pokeclublorientais/assets/css/post.css');
        wp_enqueue_style('post');
    }

    if (is_page('articles')) {
        wp_register_style('home', '/wp-content/themes/pokeclublorientais/assets/css/home.css');
        wp_enqueue_style('home');
    }
});





