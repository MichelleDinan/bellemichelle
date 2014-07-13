<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div class="eleven columns postList filter" role="main">

	<?php if ( have_posts() ) : ?>

		<h1><?php printf( __( 'Search Results for: %s', 'bellemichelle' ), '<span>' . get_search_query() . '</span>' ); ?></h1>

		<div class="postContainer">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>
		</div><!-- End .postContainer -->

		<?php twentytwelve_content_nav( 'nav-below' ); ?>

	<?php else : ?>

		<article class="post">
			<div class="postContent">
				<h1><?php _e( 'Nothing Found', 'bellemichelle' ); ?></h1>
				<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'b' ); ?></p>
				<?php get_search_form(); ?>
			</div><!-- End .postContent -->
		</article>

	<?php endif; ?>

	</div><!-- End role main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>