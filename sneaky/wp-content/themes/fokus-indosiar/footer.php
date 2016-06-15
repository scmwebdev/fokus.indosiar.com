<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fokus_Indosiar
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<div class="widget-area widget-footer col-xs-12 col-sm-4" id="perusahaan">
			        <?php dynamic_sidebar( 'footer-list-1' ); ?>
			    </div><!-- #more-info .widget-area -->
			</div><!-- .site-info -->
	</footer><!-- #colophon -->
	<!--</div>  page container -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
