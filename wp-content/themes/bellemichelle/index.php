<?php get_header(); ?>

	<div class="eleven columns postList" role="main">
		<?php if ( have_posts() ) : ?>
			<div class="postContainer">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
				<?php endwhile; ?>
			</div><!-- End .postContainer -->

			<?php twentytwelve_content_nav( 'nav-below' ); ?>

		<?php else : ?>
			<div class="postContainer">
				<article id="post-0" class="post no-results not-found">
	
				<?php if ( current_user_can( 'edit_posts' ) ) :
					// Show a different message to a logged-in user who can add posts.
				?>
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'No posts to display', 'bellemichelle' ); ?></h1>
					</header>
	
					<div class="entry-content">
						<p><?php printf( __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'bellemichelle' ), admin_url( 'post-new.php' ) ); ?></p>
					</div><!-- .entry-content -->
	
				<?php else :
					// Show the default message to everyone else.
				?>
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'bellemichelle' ); ?></h1>
					</header>
	
					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'bellemichelle' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				<?php endif; // end current_user_can() check ?>
	
				</article>	
			</div><!-- End .postContainer -->
		<?php endif; // end have_posts() check ?>
	</div><!-- End role main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>