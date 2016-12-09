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



//kill meta tags
remove_action('wp_head','feed_links_extra', 3);
remove_action('wp_head','adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
remove_action('wp_head', 'print_emoji_detection_script', 7 );
remove_action('wp_print_styles', 'print_emoji_styles' );
remove_action('wp_head','rel_canonical');
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_generator' );


//all in one seo pack, kill meta tags
add_filter('aioseop_prev_link', '__return_empty_string' );
add_filter('aioseop_next_link', '__return_empty_string' );
//