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
	<div class="item-post-thumb">
		<a href="<?php echo get_permalink(); ?>">
			<?php 
				(has_post_thumbnail() ? '' : is_mobile() ? the_post_thumbnail('mainBanner_xs') : the_post_thumbnail('video_thumb'));
			?>
		</a>
	</div>
	<div class="item-post-desc">
		<div class="item-post-title ">
			<div class="title"><?php the_title(); ?></div>
			<div class="item-post-date"><?php echo get_the_date(); ?></div>
		</div>
		<div class="item-post-text">
			<?php the_excerpt(); ?>
		</div>
	</div>
	</a>
</div>