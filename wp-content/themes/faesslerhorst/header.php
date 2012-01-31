<?php
/**
* The Header for our theme.
*
* Displays all of the <head> section and everything up till <div id="main">
*
* @package WordPress
* @subpackage faesslerUndHorstFotoKanzlei
* @since faesslerUndHorstFotoKanzlei 0.001
*/
?>
<!doctype html>

<!--[if lt IE 7]><html class="no-js ie6 oldie" lang=de><![endif]-->
<!--[if IE 7]><html class="no-js ie7 oldie" lang=de><![endif]-->
<!--[if IE 8]><html class="no-js ie8 oldie" lang=de><![endif]-->

<!--[if gt IE 8]><!--> <html class=no-js lang=de> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" >

<title><?php bloginfo( 'name' ); ?></title>
<meta name=description content="">
<meta name=author content="">
<link type="text/css" rel=stylesheet href="http://fonts.googleapis.com/css?family=Open+Sans:300,400">
<meta name=viewport content="width=device-width,initial-scale=1">
<link rel=stylesheet href='<?php echo get_template_directory_uri(); ?>/css/style.css'>
<script src="<?php echo get_template_directory_uri(); ?>/js/libs/modernizr-2.0.6.min.js"></script>
<?php wp_head(); ?>
</head>
