<?php
/**
 * The is the template file for homepage.
 *
 *
 * @package Fokus_Indosiar
 */

get_header(); ?>

<div id="primary" class="content-area frontpage">
	<main id="main" class="site-main" role="main">
		<div class="container-fluid no-spacepad-side">
			<div class="content-header clearfix item-post">
				<?php get_custom_post('header', 4, 6, 'top_stories', 'yes'); ?>
				<div class="list_thumb" id="frontpage-header-gallery">
					<?php get_thumb('galleryThumb', 4, 6, 'top_stories', 'yes') ?>
				</div>
			</div>
			<div class="content">
				this is content
			</div>
		</div>
	</main>
</div>N
<?php get_footer(); ?>