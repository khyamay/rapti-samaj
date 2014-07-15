<?php get_header(); ?>
<div class="clear"></div>
	<div id="intro" class="grid_12">
		<h2 class="main">स्वागत छ हजुर हरु लाई यो राप्ती समाज यू . के को वेब साइटमा, यो वेब साइटमा तपाई हरुले युक मा बस्ने सम्पूर्ण राप्ती बसी हरु को बारेमा जानकरी तथा भबिस्य मा हुने सम्पूर्ण कार्येक्रमको बारेमा थाहा पाउन सक्नुहुने छ। धन्यवाद। 
		</h2>	
	</div>
	<hr class="hr grid_12">
	<div class="grid_4 omega">
		<h2 class="latest">Latest News</h2>
		<hr class="hr">


<?php 

	$args = array(
		'post_type' =>'post',
		'category_name'=>'latest' 

		);
	$the_query = new WP_Query($args);


?>
<?php if(have_posts() ) : while ($the_query->have_posts() ): $the_query->the_post(); ?>
	<h3 class="main"><?php the_title(); ?></a></h3>
	<?php the_content(); ?>
<?php endwhile; else: ?>
<?php endif; ?>
</div>


<div class="grid_8 omega">
		<div class="grid_4 alpha">
			<div class="view view-fifth">
				<img src="<?php echo wp_get_attachment_url(64); ?>" height="200" width="300" alt="event"/>
				<div class="mask">
					<h2>Events</h2>
					<p>To find out more events </p>
					<p><a href="<?php echo get_permalink(22); ?>" class="info">Click Here</a></p>
				</div>
			</div>
		</div>
		<div class="grid_4 omega">
			<div class="view view-fifth">
				<img src="<?php echo wp_get_attachment_url(59); ?>" height="200" width="300" alt="event" />
				<div class="mask">
					<h2>Gallery</h2>
					<p>To see more pictures from gallery, please </p>
					<p><a href="<?php echo get_permalink(28); ?>" class="info">Click Here</a></p>
				</div>
			</div>	
		</div>
	</div>
	<div class="grid_8 omega end">
		<div class="grid_4 alpha">
			<div class="view view-fifth">
				<img src="<?php echo wp_get_attachment_url(65); ?>" height="200" width="300" alt="rapti" />
				<div class="mask">
					<h2>About Us</h2>
					<p>To find out more about us please </p>
					<p><a href="<?php echo get_permalink(24); ?>" class="info">Click Here</a></p>
				</div>
			</div>
		</div>
		<div class="grid_4 omega">
			<div class="view view-fifth">
				<img src="<?php echo wp_get_attachment_url(63); ?>" height="200" width="300" alt="contact" />
				<div class="mask">
					<h2>Contact</h2>
					<p>To contact us please </p>
					<p><a href="<?php echo get_permalink(26); ?>" class="info">Click Here</a></p>
				</div>
			</div>
		</div>
	</div>
<hr class="hr grid_12">
<?php get_footer(); ?>
