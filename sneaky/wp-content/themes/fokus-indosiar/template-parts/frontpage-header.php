<?php if (!is_mobile()) { ?>

<div class="content-theatre clearfix" data-postid="<?php echo get_the_ID(); ?>">
	<div class="gallery-col leftCol col-sm-5 no-spacepad-side">
		<div class="column-container">
			<h2 class="title"><?php the_title(); ?></h2>
			<p class="desc"><?php the_excerpt(); ?></p>
			<button type="button" class="btn">
				<a href="<?php the_permalink(); ?>">Baca</a>
			</button>
		</div>
	</div>
	<div class="gallery-col rightCol col-sm-7 no-spacepad-side" >
		<div class="column-container" style="background: url(<?php $get_thumb = the_post_thumbnail_url($query->ID); ?>);background-size:cover;display:block;height:inherit;">
			<?php // the_post_thumbnail('mainBanner_lg', array( 'class' => 'fullwidth')); ?>
		</div>
	</div>
</div>


<?php } else { ?>

<div class="content-theatre clearfix">
	<div class="column-container">
		<?php 
			(!has_post_thumbnail() ? '' : is_mobile() ? the_post_thumbnail('mainBanner_xs') : the_post_thumbnail('mainBanner_lg', array( 'class' => 'fullwidth')));
			//the_post_thumbnail('mainBanner_lg', array( 'class' => 'fullwidth')); 
		?>
	</div>
	<div class="leftCol no-spacepad-side">
		<div class="column-container">
			<h2 class="title"><?php the_title(); ?></h2>
			<p class="desc"><?php the_excerpt(); ?></p>
			<button type="button" class="btn">
				<a href="<?php the_permalink(); ?>">Baca</a>
			</button>
		</div>
	</div>
</div>


<?php } ?>