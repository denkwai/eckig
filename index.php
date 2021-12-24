<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package eckig
 */

get_header('menuless', [ 'hide_menu' => TRUE ]);

wp_enqueue_style('index', get_template_directory_uri() . '/css/views/index.css');
?>

	<main id="primary" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s<li class="nav-card nav-card--double nav-card--search">' . get_search_form( FALSE ) . '</li></ul>',
					'menu_id'        => 'primary-menu',
					'walker'         => new AWP_Menu_Walker()
				)
			);

			

			/* Start the Loop */
			// while ( have_posts() ) :
			// 	the_post();

			// 	/*
			// 	 * Include the Post-Type-specific template for the content.
			// 	 * If you want to override this in a child theme, then include a file
			// 	 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
			// 	 */
			// 	// ORIGINAL CODE
			// 	// get_template_part( 'template-parts/content', get_post_type() );

			// 	// NEW TEMPLATE
			// 	get_template_part( 'template-parts/content-card', get_post_type() );

			// endwhile;

			// the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
// ORIGINAL CODE
// get_sidebar();
get_footer();
