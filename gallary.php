<?php 
/*
	Template Name: Gallary Page

*/
?>

<?php get_header(); ?>
<div id="intro" class="grid_12">
		<h2 class="main">यो भाग मा तपाई हरुले राप्ती समाज यू . के द्वारा आयोजना गरिएको भेटघाट क्रायेक्रम को सम्पूर्ण चित्र हरु हेर्न सक्नु हुने छ। 
		</h2>	
	</div>
	<hr class="hr grid_12">
	<div class="grid_12">
	<h2 class="latest">Picture Gallery </h2>
	<hr class="hr grid_4 alpha"><br>
	<?php if(have_posts() ) : while (have_posts() ): the_post(); ?>
	<?php the_content(); ?>
	<?php endwhile; endif; ?>
	</div>
	<hr class="hr grid_12">

<?php get_footer(); ?>
