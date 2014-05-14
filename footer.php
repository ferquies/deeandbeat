<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Dee&Beat
 */
?>

	</div><!-- #content -->
	<?php if(!($_SERVER['REQUEST_URI'] == "/deeandbeat/")) { ?>
	<?php if(is_home() && !(wp_is_mobile())) : ?>
		<footer id="colophon" class="site-footer" role="contentinfo" style="margin-top: 450px;">
	<?php else : ?>
		<footer id="colophon" class="site-footer" role="contentinfo">
	<?php endif; ?>
		<?php get_sidebar( 'footer' ); ?>
		<div class="site-info">
			<div class="site-copyright">&copy; <?php echo date('Y'); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
			<div class="site-credit"><?php _e( 'Powered by ', 'graphy' ); ?><a href="<?php echo esc_url( __( 'http://wordpress.org/', 'graphy' ) ); ?>">WordPress</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php } ?>

<script type="text/javascript">
       	$(window).load(function() {
		$('#content').masonry({
       			itemSelector: '.box'
		});
	});
</script>

<?php wp_footer(); ?>

</body>
</html>