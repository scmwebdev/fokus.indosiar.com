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
		<div class="<?php echo (is_mobile()) ? 'container' : 'container-fluid'; ?>">
			<div class="post-wrapper">
				<?php get_berita() ?>
			</div>
		</div>
	</main>
</div>


<?php get_footer(); ?>