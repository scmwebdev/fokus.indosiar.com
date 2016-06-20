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
			<h1 class="col-xs-12"><?php the_title(); ?></h1>
			<div class="post-wrapper">
				<?php get_berita() ?>
			</div>
		</div>
	</main>
</div>


<?php get_footer(); ?>