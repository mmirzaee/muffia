<?php

function muffia_post_types_init()
{

    // Posts

    $muffia_posts_labels = array(
        'name' => 'Products',
        'singular_name' => 'product',
        'add_new' => 'New product',
        'add_new_item' => 'Add New Product',
        'edit_item' => 'Edit Product',
        'new_item' => 'Add Product',
        'all_items' => 'Products',
        'menu_name' => 'Products'
    );

    $supports = array('title', 'tags', 'editor', 'custom-fields');

    $muffia_posts_args = array(
        'labels' => $muffia_posts_labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_rest' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'product'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => $supports,
        'taxonomies' => array('post_tag', 'products_cat'),
        'menu_icon' => 'dashicons-cart'
    );


    // Registering

    register_post_type('muffia_posts', $muffia_posts_args);


}

add_action('init', 'muffia_post_types_init');


// Unregister Post Pypes
function muffia_unregister_post_type($post_type, $slug = '')
{

    global $wp_post_types;

    if (isset($wp_post_types[$post_type])) {
        unset($wp_post_types[$post_type]);
        $slug = (!$slug) ? 'edit.php?post_type=' . $post_type : $slug;
        remove_menu_page($slug);
    }
}

function muffia_remove_builtin_posttype_menu()
{
    remove_menu_page('edit.php');
}

add_action('admin_menu', 'muffia_remove_builtin_posttype_menu');


function muffia_admin_init()
{
    muffia_unregister_post_type('post');
    muffia_unregister_post_type('client');
    muffia_unregister_post_type('slide');
    muffia_unregister_post_type('offer');
    muffia_unregister_post_type('portfolio');
    muffia_unregister_post_type('testimonial');
    muffia_unregister_post_type('template');
    muffia_unregister_post_type('layout');
}

add_action('admin_init', 'muffia_admin_init');
