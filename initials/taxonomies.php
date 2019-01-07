<?php

function muffia_taxonomies_init()
{

    // Gallery Category

    $muffia_products_cat_labels = array(
        'name' => 'Products Category',
        'singular_name' => 'Category',
        'edit_item' => 'Edit Product Category',
        'menu_name' => 'Product Categories'
    );

    $muffia_products_cat_args = array(
        'hierarchical' => true,
        'labels' => $muffia_products_cat_labels,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
    );


    // Registering
    register_taxonomy('products_cat', 'muffia_products', $muffia_products_cat_args);

}

add_action('init', 'muffia_taxonomies_init', 0);
