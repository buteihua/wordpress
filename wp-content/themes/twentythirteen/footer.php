<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
		</div><!-- #main -->
		<footer id="colophon" style='line-height:50px;text-align:center;' class="site-footer" role="contentinfo">
			<?php get_sidebar( 'main' ); ?>
			<?php esc_attr_e( '(C)', 'twentythirteen' ); ?><a href="<?php echo esc_url( home_url('/') ); ?>"  title="<?php echo esc_attr( get_bloginfo('name', 'display') ); ?>">
		        <?php echo esc_textarea( 'Copyright 北京飓风行动网络科技有限公司', 'twentythirteen' ); ?>
	</a>
		</footer><!-- #colophon -->
	</div><!-- #page -->
	
	<?php wp_footer(); ?>
</body>
</html>
