<?php get_header(); ?>
<div id="intro" class="grid_12">
	<h2 class="main">यो भाग मा राप्ती समाज यू . के द्वारा संन्चालित सम्पूर्ण भेटघाट कर्येक्रम र बैठक को बारेमा सुनचा तथा जानकारी पाउनसक्नु हुनेछ।</h2>	
	<hr class="hr grid_12">
		<div class="grid_12">
			
				<?php 
					$args = array(
						'post_type' =>'post',
						'category_name'=> 'events'
						);
					$the_query = new WP_Query($args);
				?>
				<?php if(have_posts() ) : while ($the_query->have_posts() ): $the_query->the_post(); ?>
				  <?php  get_template_part('content', 'home'); ?>
				  <hr class="hr grid_12">
					<?php endwhile; endif; ?>					
				</div>
<?php get_footer(); ?>
