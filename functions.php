<?php

require_once('../../../wp-admin/includes/taxonomy.php');

//////////////////////////////////////////////////////////////////////////////
//                 Custom Menu Registration
//////////////////////////////////////////////////////////////////////////////

function register_menu() {
register_nav_menu('fb-kundendienst-menu', __( 'FB-Kundendienst Menu' ));
}
add_action( 'init', 'register_menu' );

//////////////////////////////////////////////////////////////////////////////
//                 Sidebar Widget Registration
//////////////////////////////////////////////////////////////////////////////

/**
* Register our sidebars and widgetized areas.
*
*/
function widgets_init() {

register_sidebar( array(
'name'          => 'sidebar',
'id'            => 'sidebar',
'before_widget' => '<div>',
    'after_widget'  => '</div>',
'before_title'  => '<h2 class="rounded">',
    'after_title'   => '</h2>',
) );

}
add_action( 'widgets_init', 'widgets_init' );

//////////////////////////////////////////////////////////////////////////////
//                 Custom Category Registration
//////////////////////////////////////////////////////////////////////////////

wp_create_category( 'fb-kundendienst-beschwerde' );
wp_create_category( 'fb-kundendienst-post' );

?>