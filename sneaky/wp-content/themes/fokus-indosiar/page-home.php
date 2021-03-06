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
				<?php

					$mainGallery = new TopStories();
					$mainGallery->fetch_post('top_stories', 'yes', 'frontpage', 'header');

				?>
				<?php if (!is_mobile()) { ?>
				<div class="list-thumb clearfix" id="gallery-thumb">
					<?php
						$mainGalleryThumb = new TopStories();
						$mainGalleryThumb->fetch_post('top_stories', 'yes', 'frontpage', 'headerthumbnails');
					?>
				</div>
				<?php } ?>
			</div>
			<div class="content">
				<div class="container-fluid spacepad-15">
					<h2 class="segment-title uppercase"> Latest News</h2>
					<div class="content-container post-list post-list-latest post-wrapper row">
						<?php 

							$latestPost = new Item('post', 4, 6);
							$latestPost->latest_post();

						?>
					</div>					
					<!-- <div class="load-more-btn">
						<button type="button" class="btn btn-primary"><a class="next-link" href="">Load More</a></button>
					</div> -->
				</div>
			</div>
		</div>
	</main>
</div>
<?php get_footer(); ?>