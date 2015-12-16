<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FundMyKulture
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header id="header" class="fixed">
		<div class="logo fs-medium">LOGO</div>
		<div class="col-50 t-left">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="fs-medium ml10"><span class="logo-home"></span>Accueil</a>
			</div>
	<!--<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><div class="brand fs-medium"><?php bloginfo( 'name' ); ?></div></a>-->
	<div class="col-50 t-right">
		<span class="logo-search"></span>Recherche</span><input type="text" class="fs-medium" placeholder="Rechercher">
		<span class="fs-medium ml10 mr10"><span class="logo-login"></span>Se connecter</span>
		</div>
		</header>



	<div id="content" class="site-content">