<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eckig
 */

 $hide_menu = FALSE;

 if ( $args['hide_menu'] ) {
	 $hide_menu = $args['hide_menu'];
 }
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php

	wp_enqueue_style('theme', get_template_directory_uri() . '/css/theme.css');

	wp_enqueue_style('fonts-lato', get_template_directory_uri() . '/fonts/Lato/Lato.css', false, '1.1', 'all');

	wp_enqueue_style('global', get_template_directory_uri() . '/css/global.css', false, '1.1', 'all');

	wp_head();

	wp_enqueue_style('header', get_template_directory_uri() . '/css/views/header.css');

	?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'eckig' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$eckig_description = get_bloginfo( 'description', 'display' );
			if ( $eckig_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $eckig_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->


<?php
if ( !$hide_menu ) {
?>
<nav id="site-navigation" class="main-navigation">
	<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" title="<?php esc_html_e( 'Primary Menu', 'eckig' ); ?>"></button>
	<?php
		get_template_part( 'template-parts/menu-main' );
	?>
</nav><!-- #site-navigation -->
<?php
}
?>