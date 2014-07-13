<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div class="eleven columns post" role="main">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', get_post_format() ); ?>

			<nav class="prevNext">
				<span class="prev"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '<strong>Prev:</strong> ', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?></span>
				<span class="next"><?php next_post_link( '%link', '<span class="meta-nav">' . _x( '<strong>Next:</strong> ', 'Next post link', 'twentytwelve' ) . '</span> %title' ); ?></span>
			</nav><!-- .nav-single -->

			<?php comments_template( '', true ); ?>

		<?php endwhile; // end of the loop. ?>
	</div><!-- End role main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>