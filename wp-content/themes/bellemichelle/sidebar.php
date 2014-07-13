<?php
/**
 * The sidebar containing the main widget area.
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div class="five columns sideBar" role="complementary">
			<div class="about">
				<a class="profilePic" href="<?php bloginfo('url'); ?>/about"><img src="<?php bloginfo('template_directory'); ?>/images/profilecircle.png" alt="Michelle Dinan" /></a>
				
				<ul class="social">
					<li class="facebook"><a href="http://www.facebook.com/BelleMichelleBlog" title="Facebook page"><span>Facebook</span></a></li>
					<li class="twitter"><a href="http://www.twitter.com/michelledinan" title="Twitter profile"><span>Twitter</span></a></li>
					<li class="instagram"><a href="http://www.instagram.com/michelledinan" title="Instagram profile"><span>Instagram</span></a></li>
					<li class="gplus"><a href="https://plus.google.com/101690710945392008078" title="Google Plus profile" rel="author"><span>Google Plus</span></a></li>
					<li class="email"><a href="mailto:&#109;&#105;&#99;&#104;&#101;&#108;&#108;&#101;&#64;&#98;&#101;&#108;&#108;&#101;&#109;&#105;&#99;&#104;&#101;&#108;&#108;&#101;&#46;&#99;&#111;&#109;?subject=Message%20From%20Belle%20Michelle" title="Email me"><span>Email me</span></a></li>
				</ul>
				
				<p><strong>Girl geek</strong> living in Bournemouth blogging about food, fitness and anything else that makes her happy...</p>
				<a class="buttonLink" href="<?php bloginfo('url'); ?>/about">Read more</a>
			</div>
			
			<?php /*
			<div class="facebookPage">
				<div class="fb-like-box" data-href="https://www.facebook.com/Bellemichelleblog" data-width="292" data-show-faces="false" data-header="false" data-stream="false" data-show-border="false"></div>
				
				<a href="http://www.bloglovin.com/en/blog/10254601" title="Follow Belle Michelle on Bloglovin"><img src="http://www.bloglovin.com/widget/subscribers.php?id=10254601&lang=en" alt="Follow on Bloglovin" border="0"></a>
			</div>
			*/?>
			
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>