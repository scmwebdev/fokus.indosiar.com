<?php
/**
 * Template part for displaying article posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Fokus_Indosiar
 */

$getVideo = get_field('video_url');
?>

<div class="item-post spacepad-15 col-xs-12 col-sm-4">
	<div class="item-post-thumb">
		<a href="<?php echo get_permalink(); ?>">

			<?php 

				if($getVideo) {
					echo '<div class="embed-responsive embed-responsive-16by9">';
					echo get_vidio();
					echo '</div>';
				} else {

					if(is_mobile()) {
						the_post_thumbnail('mainBanner_xs', array( 'class' => 'img-responsive imgTest'));
					} else {
						the_post_thumbnail('video_thumb', array( 'class' => 'img-responsive imgTest'));
					}
					
				}
					
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