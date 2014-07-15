<?php 
/*
	Template Name: Contact Page

*/
?>

<?php get_header(); ?>
<div id="intro" class="grid_12">
		<h2 class="main">यो भागमा, तपाई हरु लाई कुनै जानकारी चाहियो वा सल्लाह र सुजाब पठाउनु पर्यो भने कृपया यो भाग प्रयोग गर्नु होला। 
		</h2>	
	</div>
		<hr class="hr grid_12">
	<div class="grid_12">
		<h2 class="main"> Contact Us</h2>

<?php if(have_posts() ) : while (have_posts() ): the_post(); ?>
	<?php the_content(); ?>
<?php endwhile; endif; ?>
	<hr class="hr grid_12">
	<div id="intro" class="grid_12">
		<h2 class="main">अथवा निम्न व्येक्तिहरु लाई सम्पर्क गर्न सक्नु हुनेछ।</h2>
	</div>
	<hr class="hr grid_12">
		
	<div class="grid_12">

		<div id="con" class="grid_4">
			<img class="frame1" src="http://www.raptisamaj.co.uk/images/chasme.BMP" title="img1" height="150" width="150">
			<p>Website Designer</p>
			<p>Ratna Bahadur Gharti Magar</p>
			<p>Mobile No: 006737145227</p>
			<p>Email: ratna_gharti@yahoo.com</p>
		</div>
		<div id="con" class="grid_4 omega">
			<img class="frame1" src="http://www.raptisamaj.co.uk/images/Keshar%20Roka.JPG" title="img1" height="150" width="150">
			<p>Secretary of RSU</p>
			<p>Keshar Bahadhur Roka</p>
			<p>Mobile No: 07912756007</p>
			<p>Email: rokakb@yahoo.co.uk</p>
		</div>
		<div id="con" class="grid_4 omega">
			<img class="frame1" src="http://www.raptisamaj.co.uk/images/Dhan%20Kmr%20Budha%20Brecon.jpg" title="img1" height="150" width="150">
			<p>Area Rep Brecon</p>
			<p>Dhan Kumar Budha</p>
			<p>Mobile No: 07877827004</p>
			<p>Email: dbmagar@btinternet.com</p>
		</div>
		<div id="con" class="grid_4">
			<img class="frame1" src="http://www.mnit.ac.in/new/PortalProfile/images/faculty/noimage.jpg" title="img1" height="150" width="150">
			<p>Area Rep Swindon</p>
			<p>Raj Kumar Budha</p>
			<p>Mobile No: N/A</p>
			<p>Email: N/A</p>
		</div>
		<div id="con" class="grid_4 omega">
			<img class="frame1" src="http://www.raptisamaj.co.uk/images/Ash%20B%20Pun.jpg" title="img1" height="150" width="150">
			<p>Area Rep Newcastle</p>
			<p>Ash Bahadur Pun</p>
			<p>Mobile No: 07828150883</p>
			<p>Email: pun_ash@hotmail.com</p>
		</div>
		<div id="con" class="grid_4 omega">
			<img class="frame1" src="http://www.mnit.ac.in/new/PortalProfile/images/faculty/noimage.jpg" title="img1" height="150" width="150">
			<p>Area Rep Aldhershot</p>
			<p>Mrs Basanti Budha</p>
			<p>Mobile No: N/A</p>
			<p>Email: N/A</p>
		</div>
		
		<div id="con" class="grid_4 ">
			<img class="frame1" src="http://www.raptisamaj.co.uk/images/jhuplal%20bath,%20Bramkot.jpg" title="img1" height="150" width="150">
			<p>Area Rep Bramkot</p>
			<p>Jhuplal Batha</p>
			<p>Mobile No: 07824643265</p>
			<p>Email: jhups_bm@hotmail.com</p>
		</div>
		<div id="con" class="grid_4 omega">
			<img class="frame1" src="http://www.mnit.ac.in/new/PortalProfile/images/faculty/noimage.jpg" title="img1" height="150" width="150">
			<p>Area Rep London</p>
			<p>Bir Prasad Gharti Magr</p>
			<p>Mobile No: N/A</p>
			<p>Email: N/A</p>
		</div>
		<div id="con" class="grid_4 omega">
			<img class="frame1" src="http://www.raptisamaj.co.uk/images/Lal%20Rana.JPG" title="img9" height="150" width="150">
			<p>Area Rep Maidstone</p>
			<p>Lal Bahadur Pun</p>
			<p>Mobile No: 07971299825</p>
			<p>Email: lalrana69@hotmail.com</p>
		</div>
	</div>
		<hr class="hr grid_12">
		
<?php  ?>
<?php get_footer(); ?>
