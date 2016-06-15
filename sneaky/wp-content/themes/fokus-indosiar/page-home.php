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
			<div id="main-gallery-<?php echo (is_mobile()) ? 'content-mobile' : 'content-desktop' ?>" class="content-header  clearfix item-post">
				<?php top_stories(); ?>
				<?php if (!is_mobile()) { ?>
				<div class="list-thumb clearfix" id="frontpage-header-gallery">
					<?php top_stories_thumb(); ?>
				</div>
				<?php } ?>
			</div>
			<!-- <div class="content">
				<div class="container no-spacepad-side spacepad-15">
					<h2 class="title title__upper"> Latest News</h2>
					<div class="content-container post-list row">
						<?php get_custom_post('post', 4, 6) ?>
					</div>
				</div>
			</div> -->
		</div>
	</main>
</div>
<?php get_footer(); ?>