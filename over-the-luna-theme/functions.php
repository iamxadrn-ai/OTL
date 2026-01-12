<?php

if (!defined('ABSPATH')) {
    exit;
}

function otl_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus([
        'primary' => __('Primary Menu', 'over-the-luna'),
    ]);
}
add_action('after_setup_theme', 'otl_theme_setup');

function otl_enqueue_assets() {
    wp_enqueue_style('otl-style', get_stylesheet_uri(), [], '1.0');
}
add_action('wp_enqueue_scripts', 'otl_enqueue_assets');

function otl_register_cpts() {
    register_post_type('rental', [
        'labels' => [
            'name' => __('Rentals', 'over-the-luna'),
            'singular_name' => __('Rental', 'over-the-luna'),
        ],
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-palmtree',
        'supports' => ['title', 'editor', 'thumbnail'],
        'rewrite' => ['slug' => 'inventory'],
        'show_in_rest' => true,
    ]);

    register_post_type('package', [
        'labels' => [
            'name' => __('Packages', 'over-the-luna'),
            'singular_name' => __('Package', 'over-the-luna'),
        ],
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-buddicons-buddypress-logo',
        'supports' => ['title', 'editor', 'thumbnail'],
        'rewrite' => ['slug' => 'packages'],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'otl_register_cpts');

function otl_register_taxonomies() {
    $event_labels = [
        'name' => __('Event Types', 'over-the-luna'),
        'singular_name' => __('Event Type', 'over-the-luna'),
    ];

    register_taxonomy('event_type', ['rental', 'package'], [
        'labels' => $event_labels,
        'public' => true,
        'hierarchical' => true,
        'show_in_rest' => true,
    ]);

    register_taxonomy('rental_type', ['rental'], [
        'labels' => [
            'name' => __('Rental Types', 'over-the-luna'),
            'singular_name' => __('Rental Type', 'over-the-luna'),
        ],
        'public' => true,
        'hierarchical' => true,
        'show_in_rest' => true,
    ]);

    register_taxonomy('package_tier', ['package'], [
        'labels' => [
            'name' => __('Package Tiers', 'over-the-luna'),
            'singular_name' => __('Package Tier', 'over-the-luna'),
        ],
        'public' => true,
        'hierarchical' => true,
        'show_in_rest' => true,
    ]);
}
add_action('init', 'otl_register_taxonomies');

function otl_get_phone() {
    return '201-254-7400';
}
