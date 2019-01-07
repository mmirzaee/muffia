<?php

function muffia_taxonomies_init()
{

    // Gallery Category

    $muffia_products_cat_labels = array(
        'name' => 'دسته‌های گالری',
        'singular_name' => 'دسته گالری',
        'edit_item' => 'ویرایش دسته گالری',
        'menu_name' => 'دسته‌های گالری'
    );

    $muffia_products_cat_args = array(
        'hierarchical' => true,
        'labels' => $muffia_products_cat_labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'products-cat'),
    );


    // Registering
    register_taxonomy('products_cat', 'products', $muffia_products_cat_args);

}

add_action('init', 'muffia_taxonomies_init', 0);
