<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Fokus_Indosiar
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('section-item item-article'); ?>>

		<header class="section-header entry-header">
			<div class="container">
				<div class="breadcrumb spacepad-15">
					<a href="#">
						<span><i class="fa fa-arrow-left">&nbsp;</i></span>
						<span>Berita</span>
					</a>
				</div>
				<?php featured_img(); ?>
				<h1><?php the_title(); ?></h1>
				<div class="entry-meta">
					<span class="item-meta"><?php fokus_indosiar_posted_on(); ?></span>
					<span class="item-viewed"> - <?php echo wpb_get_post_views(get_the_ID()); ?></span>
				</div>
			</div>
		</header><!-- .entry-header -->

		<div class="section-content entry-content">
			<div class="container">
				<?php the_content(); ?>	
			</div>
		</div><!-- .entry-content -->

		<footer class="section-footer entry-footer">
			<?php //fokus_indosiar_entry_footer(); ?>
		</footer><!-- .entry-footer -->

	
</article><!-- #post-## -->
