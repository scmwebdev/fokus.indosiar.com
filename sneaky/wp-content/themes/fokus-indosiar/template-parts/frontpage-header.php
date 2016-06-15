<div class="content-theatre clearfix" data-postid="<?php echo get_the_ID(); ?>">
	<div class="leftCol col-sm-5 no-spacepad-side">
		<div class="column-container">
			<h2 class="title"><?php the_title(); ?></h2>
			<p class="desc"><?php the_excerpt(); ?></p>
			<button type="button" class="btn">
				<a href="<?php the_permalink(); ?>">Baca</a>
			</button>
		</div>
	</div>
	<div class="rightCol col-sm-7 no-spacepad-side">
		<div class="column-container">
			<?php the_post_thumbnail('mainBanner_lg', array( 'class' => 'fullwidth')); ?>
		</div>
	</div>
</div>