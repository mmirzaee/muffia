<?php

/* ---------------------------------------------------------------------------
 * Child Theme URI | DO NOT CHANGE
 * --------------------------------------------------------------------------- */
define('CHILD_THEME_URI', get_stylesheet_directory_uri());


/* ---------------------------------------------------------------------------
 * Define | YOU CAN CHANGE THESE
 * --------------------------------------------------------------------------- */

// White Label --------------------------------------------
define('WHITE_LABEL', true);

// Static CSS is placed in Child Theme directory ----------
define('STATIC_IN_CHILD', false);


/* ---------------------------------------------------------------------------
 * Enqueue Style
 * --------------------------------------------------------------------------- */
add_action('wp_enqueue_scripts', 'mfnch_enqueue_styles', 101);
function mfnch_enqueue_styles()
{

    // Enqueue the parent rtl stylesheet
    if (is_rtl()) {
        wp_enqueue_style('mfn-rtl', get_template_directory_uri() . '/rtl.css');
    }

    // Enqueue the child stylesheet
    wp_dequeue_style('style');
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css');

}


/* ---------------------------------------------------------------------------
 * Load Textdomain
 * --------------------------------------------------------------------------- */
add_action('after_setup_theme', 'mfnch_textdomain');
function mfnch_textdomain()
{
    load_child_theme_textdomain('betheme', get_stylesheet_directory() . '/languages');
    load_child_theme_textdomain('mfn-opts', get_stylesheet_directory() . '/languages');
}


/* ---------------------------------------------------------------------------
 * Load Dependencies
 * --------------------------------------------------------------------------- */
require_once('vendor/autoload.php');

if (file_exists('vendor/cmb2/cmb2/init.php')) {
    require_once('vendor/cmb2/cmb2/init.php');
}


/* ---------------------------------------------------------------------------
 * Load Initials
 * --------------------------------------------------------------------------- */
require_once('initials/posttypes.php');
require_once('initials/taxonomies.php');
require_once('initials/metaboxes-posttypes.php');
require_once('initials/metaboxes-taxonomies.php');


