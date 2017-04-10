<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header id="masthead" class="site-header page-sized" role="banner">
        <?php if ( is_front_page() ) : ?>
            <h1 class="site-title">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/logo-couleur.png" width="70%" alt="<?php bloginfo( 'name' ); ?>" />
                </a>
            </h1>
        <?php else : ?>
            <p class="site-title">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/logo-couleur.png" width="70%" alt="<?php bloginfo( 'name' ); ?>" />
                </a>
            </p>
        <?php endif; ?>

        <hr class="separator" />
	</header><!-- #masthead -->

	<div class="site-content-contain">
		<div id="content" class="site-content">
