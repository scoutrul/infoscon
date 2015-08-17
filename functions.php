<?php 


// Enable thumbnails
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(800, 800, true); // Normal post thumbnails


// Add custom menus
register_nav_menus( array(
	'top_menu' => 'top_menu',
	'footer_menu_service' => 'footer_menu_service',
	'footer_menu_info' => 'footer_menu_info',
) );


show_admin_bar(false);


//  убираем левые классы из пунктов меню

add_filter('nav_menu_css_class', 'my_css_attributes_filter');
add_filter('nav_menu_item_id', 'my_css_attributes_filter');
add_filter('page_css_class', 'my_css_attributes_filter');
function my_css_attributes_filter( $var ) {
    $allow = array(
        'current-menu-item'
    );
    return is_array( $var ) ? array_intersect( $var, $allow ) : '';
}
