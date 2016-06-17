<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Fokus_Indosiar
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">

		<header class="entry-header">
			<?php featured_img(); ?>
			<h1><?php the_title(); ?></h1>
			<div class="entry-meta">
				<span class="item-meta"><?php fokus_indosiar_posted_on(); ?></span>
				<span class="item-viewed"> - <?php echo wpb_get_post_views(get_the_ID()); ?></span>
			</div>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php //fokus_indosiar_entry_footer(); ?>
		</footer><!-- .entry-footer -->

	</div>
</article><!-- #post-## -->
