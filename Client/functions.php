<?php
/*
Theme Name: JGilme WordPress Demo
Author: JGilme
Author URI: http://www.dohmang.com/
Description: This is my demo theme for the WEB170 WordPress class.
Version: 1.0

License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/
function style_enqueue_style() {
    wp_enqueue_style( 'style', get_stylesheet_uri() ); 
}
add_action( 'wp_enqueue_scripts', 'style_enqueue_style' );

//register menus
register_nav_menus(array(
'main-menu' => _( 'Main' ),
));

//Post Thumbnails
add_theme_support( 'post-thumbnails' );

//Page Excerpts
add_post_type_support( 'page', 'excerpt' );

// Get My Title Tag
function get_my_title_tag() {
    
    global $post;
    
    if ( is_front_page() ) {  // for site’s Front Page
    
        bloginfo('description'); // retrieve the site tagline
    
    } 
    
    elseif ( is_page() || is_single() ) { // for your site’s Pages or Postings
    
        the_title(); // retrieve the page or posting title 
    
    } 

    else { // for everything else
        
        bloginfo('description'); // retrieve the site tagline
        
    }
    
    if ( $post->post_parent ) { // for your site’s Parent Pages
    
        echo ' | '; // separator with spaces
        echo get_the_title($post->post_parent); // retrieve the parent page title
        
    }

    echo ' | '; // separator with spaces
    bloginfo('name'); // retrieve the site name
    echo ' | '; // separator with spaces
    echo 'Seattle, WA.'; // write in the location
    
}

add_post_type_support( 'page', 'excerpt' );

register_sidebar($args);
$args = array(
	'name' => __('Sidebar 1'),
	//'description' => 'a sidebar',
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
    'after_title' => '</h3>'

);



?>