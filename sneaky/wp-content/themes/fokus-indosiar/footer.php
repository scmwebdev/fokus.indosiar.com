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
		<div class="site-info container spacepad-15">
			<div class="widget-area widget-footer col-xs-12 no-spacepad-side">
		        <?php dynamic_sidebar( 'footer-list-1' ); ?>
		    </div><!-- #more-info .widget-area -->
		</div><!-- .site-info -->
		<hr class="no-margin">
		<div class="site-info container spacepad-15 ad-info">
			<div class="copyright col-sm-7">
				<span class="small">Copyright&nbsp;<i class="fa fa-copyright">&nbsp;</i>2015 PT INDOSIAR VISUAL MANDIRI</span>	
			</div>
			<div class="site-info-extra col-sm-3 hidden-xs" id="extra">
				<div class="text-right">
					Tautan Luar <i class="fa fa-chevron-down"></i>	
				</div>
				<div class="site-info-extra-content">
					<ul class="nodots">
						<li>target</li>
						<li>target</li>
						<li>target</li>
					</ul>
				</div>
				
			</div>
		</div>
	</footer><!-- #colophon -->
	<!--</div>  page container -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
