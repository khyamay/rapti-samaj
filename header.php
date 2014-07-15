<!DOCTYPE html>
<html>
	<head>
		<title>
			<?php 
			wp_title('-', true, 'right');
			bloginfo('title'); ?>
		</title>
		<meta name-"viewport" content="width=device-width" >
		<?php wp_head(); ?>
	</head>
	<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="container_12 clearfix">
	<div class="grid_4">
		<a href="<?php bloginfo('siteurl'); ?>"><img class="logo" src="<?php echo wp_get_attachment_url(58); ?>" alt="logo"></a>
		<h2 class="rapti"><?php bloginfo('name'); ?> </h2>
	</div>
		<div class="grid_8 omega">
			<ul class="nav">
				<?php 
					$args = array(
						'menu' => 'main_menu'
						);
					echo strip_tags(wp_nav_menu($args), '<a>');
				?>
			</ul>

		</div>
		<hr class="hr grid_12">
		