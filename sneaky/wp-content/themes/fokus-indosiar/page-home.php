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
			<?php get_custom_post('header', 4, 6, 'top_stories', 'yes'); ?>
			<div class="content">
				this is content
			</div>
		</div>
	</main>
</div>
<?php get_footer(); ?>