<?php
/* 
 * Main functions.php containing setup for theme
 * 
 * @author Fabian Frei
 * @package WordPress
 * @subpackage faesslerUndHorstFotoKanzlei
 */

add_action( 'after_setup_theme', 'fhThemeSetup' );

function fhThemeSetup() {
	add_theme_support( 'post-thumbnails' );
	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', 'Hauptmenü' );
	// Add support for a variety of post formats
	add_theme_support( 'post-formats', array( 'image', 'video' ) );
}

?>