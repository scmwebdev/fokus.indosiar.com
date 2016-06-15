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
				<?php top_stories(); ?>
				<div class="list-thumb clearfix" id="frontpage-header-gallery">
					<?php top_stories_thumb(); ?>
				</div>
			</div>
			<div class="content">
				<div class="container no-spacepad-side spacepad-15">
					<h2 class="title title__upper"> Latest News</h2>
				</div>
				<div class="content-container">
					<?php ?>
				</div>
			</div>
		</div>
	</main>
</div>N
<?php get_footer(); ?>