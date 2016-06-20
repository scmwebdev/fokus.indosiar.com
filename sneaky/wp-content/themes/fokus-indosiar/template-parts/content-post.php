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

				if(is_mobile()) {
					the_post_thumbnail('mainBanner_xs');
				} else {
					the_post_thumbnail('video_thumb');
				};

			// $getVideo = get_field('video_url');
			// $video = str_replace('player_only=false', 'player_only=true', $getVideo);
			// if($video) {
			// 	echo $video;
			// } else {
			// 	the_post_thumbnail('video_thumb');
			// }
			// if(!$videoURL) {

			// 	if(is_mobile()) {
			// 		the_post_thumbnail('mainBanner_xs')
			// 	} else {
			// 		the_post_thumbnail('video_thumb'))
			// 	};
			// 	// (has_post_thumbnail() ? '' : is_mobile() ? the_post_thumbnail('mainBanner_xs') : ;
			// } else {
				
			// 	echo $videoURL;
			// }
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