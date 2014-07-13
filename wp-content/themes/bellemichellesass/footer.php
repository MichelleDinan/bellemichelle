<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Belle Michelle
 */
?>

	</div><!-- #content -->

	<div class="row">
	<footer id="colophon" class="large-12 columns site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'bellemichelle' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'bellemichelle' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'bellemichelle' ), 'Belle Michelle', '<a href="http://www.michelledinan.com" rel="designer">Michelle Dinan</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	</div><!-- .row -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
