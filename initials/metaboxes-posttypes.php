<?php

// Products
function muffia_products_metabox()
{
    /**
     * Initiate the metabox
     */
    $cmb = new_cmb2_box(array(
        'id' => 'product_metabox',
        'title' => 'Product Data',
        'object_types' => array('muffia_products',), // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
    ));

    $cmb->add_field(array(
        'name' => 'Slides',
        'id' => 'muffia_product_slide_images',
        'type' => 'file_list',
        'query_args' => array('type' => 'image'), // Only images attachment
    ));

    $cmb->add_field(array(
        'name' => 'PDF',
        'id' => 'muffia_product_spec',
        'type' => 'file',
        'query_args' => array('type' => 'application/pdf'), // Only pdf attachment
    ));

}

add_action('cmb2_admin_init', 'muffia_products_metabox');
