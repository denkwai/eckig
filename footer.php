<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eckig
 */

wp_enqueue_style('footer', get_template_directory_uri() . '/css/views/footer.css', false, '1.1', 'all');
?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			Cezary Stawecki © 2021
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
