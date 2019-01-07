<?php

// Products
function muffia_products_metabox()
{
    $prefix = 'muffia_product_';

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
        'name' => 'slides',
        'desc' => 'Upload an image or enter an URL.',
        'id' => 'muffia_product_slide_images',
        'type' => 'file_list',
        'query_args' => array('type' => 'image'), // Only images attachment
        'preview_size' => array(200, 80), // Default: array( 50, 50 )
        'options' => array(
            'url' => true, // Hide the text input for the url
        ),
    ));

}

add_action('cmb2_admin_init', 'muffia_products_metabox');
