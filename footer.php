<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Quill
 */
?>

	</div>
	<?php if ( is_active_sidebar( 'sidebar-3' ) || is_active_sidebar( 'sidebar-4' ) || is_active_sidebar( 'sidebar-5' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<div style="color: white;" class="header-center">
				© <?php the_time('Y'); ?> <?php bloginfo('name'); ?><br />
			</div>
      <hr>
      <div class="header-center">
        <a class="social-twitter" href="https://twitter.com">
          <i class="fa fa-twitter fa-2x" class="icon-footer-style"></i>
        </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="social-facebook" href="https://www.facebook.com">
          <i class="fa fa-facebook fa-2x" class="icon-footer-style"></i>
        </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="social-youtube" href="http://www.youtube.com">
          <i class="fa fa-youtube fa-2x" class="icon-footer-style"></i>
        </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="social-instagram" href="https://instagram.com">
          <i class="fa fa-instagram fa-2x" class="icon-footer-style"></i>
        </a>
      </div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
