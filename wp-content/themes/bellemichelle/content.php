<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_single() ) : ?>
			<?php the_post_thumbnail('large'); ?>
		<?php else : ?>
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
		<?php endif; // is_single() ?>

		<div class="postContent">
			<time datetime="<?php the_time('c'); ?>"><?php the_time('jS F Y'); ?></time>

			<span class="commentLink">
				<?php /* if ( comments_open() ) : ?>
					<?php disqus_count('dropthatmuffin'); ?>
				<?php endif; // comments_open() ?>

				<?php edit_post_link( __( 'Edit', 'bellemichelle' ), '<span class="edit-link">', '</span>' ); */ ?>
			</span>

			<?php if ( is_single() ) : ?>
				<?php//<div class="shareThings"></div> ?>
				<h1><?php the_title(); ?></h1>
			<?php else : ?>
				<h2>
					<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'bellemichelle' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h2>
			<?php endif; // is_single() ?>

			<span class="categoryLink">
				<?php
				$category = get_the_category();
				if($category[0]){
					echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
				}
				?>
			</span>

			<?php if ( is_search() ) : // Only display Excerpts for Search ?>
				<div>
					<?php the_excerpt(); ?>
				</div>
			<?php else : ?>
				<?php the_content( __( 'Read more', 'bellemichelle' ) ); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'bellemichelle' ), 'after' => '</div>' ) ); ?>
			<?php endif; ?>
		</div><!-- End .postContent -->
	</article><!-- #post -->
