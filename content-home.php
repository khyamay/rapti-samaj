	<div class="box grid_7 alpha">
	<h3><?php the_title(); ?></h3>
		<hr class="hr grid_4 alpha"><br>
			<?php the_content(); ?>
		</div>
		<div class="grid_5 omega">
			<h3>See the Pictures of this gathering here</h3>
			<hr class="hr grid_5 alpha">
			
			<div class="view view-fifth">
				<img src="<?php echo wp_get_attachment_url(59); ?>" />
				<div class="mask">
					<h2>Gallery</h2>
					<p>To see more pictures from gallery, please </p>
					<p><a href="<?php echo get_permalink(28); ?>" class="info">Click Here</a></p>
				</div>
			</div>	
		</div>


