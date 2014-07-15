<?php 
/*
	Template Name: About Page

*/
?>

<?php get_header(); ?>
<div id="intro" class="grid_12">
		<h2 class="main">यो भाग मा तपाई हरुले राप्ती समाज यू . के को बारेमा सम्पूर्ण जानकारी पाउन सक्नुहुनेछ।
		</h2>	
	</div>
	<hr class="hr grid_12">
	<div class="grid_12">
		<h2 class="latest">Mission</h2>
		<hr class="hr grid_2 alpha"><br>
		<?php 
			$args = array(
				'post_type' =>'post',
				'category_name' =>'main'
				);
			$the_query = new WP_Query($args);
			?>
			<?php if(have_posts() ) : while ($the_query->have_posts() ): $the_query->the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</div>
	
	<div class="grid_12">
		<h3 class="latest">प्रस्तावना</h3>
		<hr class="hr grid_2 alpha"><br>
		<p>२००४ साल अक्टोबर महिनfमा ब्रिटिश सरकारले गोर्खा भु . पु सैनिकहरुलाई बेलायता बसोबास गर्न पाउने नयाँ नियमको घोषणा गरे लगतै गोर्खालिहरु नयाँ जीवनको खोजिमा बेलायतामा आउने प्रक्रिया सुरुभयो। यसै क्रममा नेपालको राप्ती अञ्चलबाट पनि बेलायतको फोक्स्टोन वरीपरी निकै धेरै राप्ती बासिहरुको बसोबास सुरु भयो। तर यहाँको व्यस्तताको कारण एक आपसमा भेट्घाट हुन नसकेको र कतिपय गाउलेहरु एक आपसमा परिचय पनि हुन नसकेको अवस्था थियो। यसै समस्या लाई मध्यनजर गरी १७ नोवेम्बर २००७ का दिन फोक्स्टोन वरीपरिका राप्ती बासिहरुले मेसिङ्को आयोजना गरी फोक्स्टोन कमिनिटी हलमा जम्माभएका थियौ। सो भेला मा छलफल गरी श्री टिका बहादुर सिंह ठकुरिको अध्यक्षतामा ७ जनाको कार्य समिती गठन गरी यस संस्थालाई राप्ती सम्प्रक समिती नामकरण गरिएको थियो, जसमा ३ जना सल्लाह्कार ज्यूहरु श्री गंगा बहादुर मल्ल, श्री चन्द्र बहादुर शाही र श्री  भगीरथ योगी ज्यू लाई मनोनयन गरिएको थियो।<p> <br>  

		<p>उक्त भेलाले राप्ती अञ्चलबाट धेरै दसक पछी मात्र ब्रिटिश आर्मिमा क्याप्टेन पद प्राप्त गरन सफ्ल हुनुभएका श्री गंगा बहादुर मल्लज्यूलाई हाम्रो समाजको तर्फबाट फूलमाला दीइ बधाई  दीएको थियो  र उहाले यसरी बधाई दिएकोमा आभार प्रकट गर्दै हाम्रो समाजको लागि £३६५-०० प्रदान गरी हाम्रो समाजको बैंकमा खाता खोलिएको थियो। </p> <br>

		<p>यसै क्रममा राप्ती अञ्चलबाट बेलायतभरी छरिएर बस्नु भएका साथीहरुसँग पनि सम्प्रक हुँदै गयो र उहाहरुले पनि यस् संस्था प्रती चासो राखी साथ दिनु भएको कारण सन २००८ सालमा यो संस्थालाई राप्ती समाज यू . के मा परिणत् गरियो र अहिले यस् संस्थाले हरेक बर्षामा एकपटक समर भेटघाट तथा बि बि क्यू (SUMMER BBQ) गर्दै आएको छ। </p><br>

		<p>स्मरण रहोस्, यो संस्था गोर्खा सैनिकहरु (भु पु तथा कार्यरत) र उहा हरुको परिवारको लागि मात्र सिमित नभई हाल बेलायतामा कार्यरत सम्पूर्ण राप्ती अञ्चलबासी सरकारी, गैरसरकारी तथा विद्यार्थीहरु र उहाहरु को परिवार हरुको लागि दु:ख र सुखमा साथ दिनको निम्ती स्थापना भयको संस्था हो र यस संस्थाको सम्पूर्ण सुबिध प्रप्तिको लागि सदश्यताको आबश्यक पर्दछ। विसत्रित जानकारीको लागि समाजका सचिब श्री केशर बहादुर रोका ज्यु लाई ०७९१२७५६००७ मा संपर्क गर्न सक्नुहुनेछ। </p><br>
	</div>
	<hr class="hr grid_12">
	<div class="grid_12">
		<h3 class="intro">सन् 2009 अगस्त 8 का दिन वार्षिक बि. बि. क्यु. साथै कार्य समितिलाई बिगठन गरी नयाँ कार्येसमिती गठन गरिएको थियो र गठन भएको कार्येसमिती एस प्रकारको रहेकको छ। </h3>
	<hr class="hr grid_12 alpha">
		<h3 class="latest">नयाँ कार्येसमिती </h3>
		<hr class="hr grid_2 alpha"><br>
			<?php 
			$args = array(
				'post_type' =>'members',
				);
			$the_query = new WP_Query($args);
			?>
			<?php if(have_posts() ) : while ($the_query->have_posts() ): $the_query->the_post(); ?>
			<?php  get_template_part('content', 'about'); ?>
			<?php endwhile; endif; ?>
</div>
<div class="grid_12 alpha">
	<h3 class="latest alpha">सल्लाकार ज्यूहरु</h3>
		<hr class="hr grid_2 alpha"><br>	
				<?php 
				$args = array(
				'post_type' =>'advisor',
				);
				$the_query = new WP_Query($args);
				?>
				<?php if(have_posts() ) : while ($the_query->have_posts() ): $the_query->the_post(); ?>
			<div class="grid_3">
			<img class="frame" src="<?php the_field('url'); ?>" height="150" width="150">
				<h2 class="name"><?php the_field('name'); ?> </h2>
				</div>
			<?php endwhile; endif; ?>
			
</div>
<div class="grid_12 alpha">
	 <h3 class="latest">एरिया कमिती मेम्बरहरु </h3>
	  	<hr class="hr grid_3 alpha"><br>
	  		<table>	
	  			<tr>
		  			<?php 
					$args = array(
					'post_type' =>'areamembers',
					'order' => 'ASC'
					);
					$the_query = new WP_Query($args);
					?>
					<?php if(have_posts() ) : while ($the_query->have_posts() ): $the_query->the_post(); ?>
					<td><?php the_field('number'); ?></td>
					<td><?php the_field('name'); ?> </td>
					<td><?php the_field('places'); ?></td>
				</tr>
				<?php endwhile; endif; ?>
			</table>
</div>
<hr class="hr grid_12 alpha">
<?php get_footer(); ?>
