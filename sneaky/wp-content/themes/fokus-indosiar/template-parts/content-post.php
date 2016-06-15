<?php
/**
 * Template part for displaying article posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Fokus_Indosiar
 */

?>

<div class="item-post spacepad-15 col-xs-12 col-sm-4">
	<div class="item-list-thumb">
		<a href="<?php echo get_permalink(); ?>">
			<?php (has_post_thumbnail()) ? the_post_thumbnail('video_thumb') : ''; ?>
		</a>
	</div>
	<div class="item-list-desc">
		<div class="item-list-title ">
			<?php the_title(); ?>
			<div class="item-list-date"><?php echo get_the_date(); ?></div>
		</div>
		<div class="item-list-text">
			<?php the_excerpt(); ?>
		</div>
	</div>
	</a>
</div>