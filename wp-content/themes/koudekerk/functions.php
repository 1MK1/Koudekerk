<?php

function koudekerk_resources(){

    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'koudekerk_resources');

add_theme_support( 'infinite-scroll', array(
    'container' => 'content',
    'footer' => 'page',
) );