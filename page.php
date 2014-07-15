<?php get_header(); ?>
<p>This is page.php</p>

<?php 

	$args = array(
		'post_type' =>'work'

		);
	$the_query = new WP_Query($args);


?>
<?php if(have_posts() ) : while ($the_query->have_posts() ): $the_query->the_post(); ?>
	<h3><?php the_title(); ?></h3>
	<?php the_content(); ?>
<?php endwhile; else: ?>
<?php endif; ?>
<?php get_footer(); ?>
