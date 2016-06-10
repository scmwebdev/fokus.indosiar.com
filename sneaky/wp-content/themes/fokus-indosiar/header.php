<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fokus_Indosiar
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
<div id="page" class="site page-<?php echo strtolower(get_the_title()); ?>">
	<div class="site-header-line">
		<span class="red"></span>
		<span class="green"></span>
		<span class="blue"></span>
	</div>
	<div class="<?php echo (is_mobile()) ? '' : 'container-fluid'; ?>">
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<div class="logo-container">
                <h1>
                    <a href="/"><img src="http://www.indosiar.com/assets/img/logo-indosiar.png" style="max-height: 70px;"></a>
                    <span class="sr-only">Indosiar</span>
                </h1>
            </div>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'fokus-indosiar' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
