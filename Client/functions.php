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

?>