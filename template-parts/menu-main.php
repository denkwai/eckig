
<?php
	/**
	 * Template part for main menu with search
	 *
	 * @package eckig
	 */

	wp_enqueue_style('main-menu', get_template_directory_uri() . '/css/components/nav-card.css');

	wp_nav_menu(
		array(
			'theme_location' => 'menu-1',
			'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s<li class="nav-card nav-card--double nav-card--search">' . get_search_form( FALSE ) . '</li></ul>',
			'menu_id'        => 'primary-menu',
			'walker'         => new AWP_Menu_Walker()
		)
	);
?>