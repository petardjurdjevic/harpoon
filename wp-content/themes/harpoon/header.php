<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Harpoon
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link href="//db.onlinewebfonts.com/c/51306d3fc35b0ef5d870bbb2ab35b77f?family=Futura+Std+Condensed" rel="stylesheet" type="text/css"/>
    <link href="//db.onlinewebfonts.com/c/1ab182ad4ec96315828f4a1afdf6bcdb?family=Futura+Std" rel="stylesheet" type="text/css"/> 

	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />

	<script src="https://kit.fontawesome.com/yourcode.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'harpoon' ); ?></a>

	<!--<header id="masthead" class="site-header">
		
	</header> #masthead -->

	<div id="content" class="site-content">
