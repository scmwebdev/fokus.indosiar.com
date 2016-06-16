<?php
/**
 * The is the template file for homepage.
 *
 *
 * @package Fokus_Indosiar
 */

get_header(); ?>

<div id="primary" class="content-area frontpage clearfix">
	<main id="main" class="site-main" role="main">
		<div class="container-fluid no-spacepad-side">
			<div id="main-gallery-<?php echo (is_mobile()) ? 'mobile' : 'desktop' ?>" class="content-header clearfix item-post">
				<?php top_stories(); ?>
				<?php if (!is_mobile()) { ?>
				<div class="list-thumb clearfix" id="gallery-thumb">
					<?php top_stories_thumb(); ?>
				</div>
				<?php } ?>
			</div>
			<div class="content">
				<div class="container spacepad-15">
					<h2 class="segment-title uppercase"> Latest News</h2>
					<div class="content-container post-list post-list-latest row">
						<?php get_custom_post('post', 4, 6) ?>
					</div>
				</div>
			</div>
		</div>
	</main>
</div>
<?php get_footer(); ?>