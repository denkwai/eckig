<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package eckig
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'content-card' ); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark"><h2 class="entry-title">', '</h2></a>' );
		endif;

		/* if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				eckig_posted_on();
				eckig_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; */?>
	</header><!-- .entry-header -->

	<?php eckig_post_thumbnail(); ?>

	<?php /*
	<footer class="entry-footer">
		<?php eckig_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	*/?>
</article><!-- #post-<?php the_ID(); ?> -->
