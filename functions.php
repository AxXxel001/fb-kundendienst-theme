<?php

require_once(WP_CONTENT_DIR . '/../wp-admin/includes/taxonomy.php');

//////////////////////////////////////////////////////////////////////////////
//                 Custom Menu Registration
//////////////////////////////////////////////////////////////////////////////

function register_menu()
{
    register_nav_menu('fb-kundendienst-menu', __('FB-Kundendienst Menu'));
}

add_action('init', 'register_menu');

//////////////////////////////////////////////////////////////////////////////
//                 Sidebar Widget Registration
//////////////////////////////////////////////////////////////////////////////

/**
 * Register our sidebars and widgetized areas.
 *
 */
function widgets_init()
{

    register_sidebar(array(
        'name' => 'Sidebar on BlogPosts page',
        'id' => 'sidebar_blogposts',
        'before_widget' => '<div>',
        'after_widget' => '</div>'
    ));
    register_sidebar(array(
        'name' => 'Sidebar on Single Post page',
        'id' => 'sidebar_single',
        'before_widget' => '<div>',
        'after_widget' => '</div>'
    ));
}

add_action('widgets_init', 'widgets_init');

//////////////////////////////////////////////////////////////////////////////
//                 Custom Category Registration
//////////////////////////////////////////////////////////////////////////////

wp_create_category('fb-kundendienst-beschwerde');
wp_create_category('fb-kundendienst-post');

//////////////////////////////////////////////////////////////////////////////
//                     Declare WooCommerce Support
//////////////////////////////////////////////////////////////////////////////

add_action('after_setup_theme', 'woocommerce_support');
function woocommerce_support()
{
    add_theme_support('woocommerce');
}

?>