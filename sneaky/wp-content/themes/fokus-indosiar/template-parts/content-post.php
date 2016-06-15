<?php
/**
 * Template part for displaying article posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Fokus_Indosiar
 */

?>

<div class="item-list list-page col-xs-12 col-sm-4">
	<a href="<?php echo get_permalink(); ?>">
	
		<?php
				echo '<div class="item-list-thumb">';
				if (has_post_thumbnail()) {
					the_post_thumbnail(); 
				} else {
					noimage();
				}
				echo '</div>';

		?>
	</a>
	<div class="item-list-desc">
		<div class="item-list-desc-title ">
			<?php the_title(); ?>
			<div class="item-list-desc-date"><?php echo get_the_date(); ?></div>
		</div>
		<div class="item-list-desc-text">
			<?php the_excerpt(); ?>
		</div>
	</div>
	</a>
</div>