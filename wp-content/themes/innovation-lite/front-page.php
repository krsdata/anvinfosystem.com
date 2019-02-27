<?php
/*
	Innovation Lite Theme's Front Page
	Innovation Lite Theme's Front Page to Display the Home Page if Selected
	Copyright: 2015-2016, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Innovation Lite 1.0
*/
?>

<?php get_header(); ?>
<?php echo do_shortcode( '[sg_popup id="3"]' ); ?>
<!--- ============  MAIN SLIDE  =========== ------------>
<div class="flexslider main-slider" >
<ul class="slides">

<?php foreach (range(1, 4) as $opsinumber)  { ?>

<li class="slideitem" style="background-image:url('<?php echo esc_url(innovation_get_option('slide-back' . $opsinumber, get_template_directory_uri() . '/images/slide/slideback'. $opsinumber . '.jpg')); ?>');"></li>
<?php } ?>
</ul>
</div>
<div class="lsep"></div>
<!--- ============  END OF MAIN SLIDE  =========== ------------>





<!--- ============  PORTFOLIO  =========== ------------>
<div class="clear"></div>
<div id="portfolio-box-item">
	<h2 class="boxtoptitle" ><?php echo esc_attr(innovation_get_option('portfolioboxes-heading', 'A FEW FROM OUR PORTFOLIO')); ?></h2>
	<h4 class="boxtopdes" ><?php echo esc_textarea(innovation_get_option('portfolioboxes-heading-des', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua')); ?></h4>
  
    <div class="box90 poftfolioslider" >
    <ul class="grid-portfolio slides  cs-style-3">
    			<?php foreach (range(1,4 ) as $portfolioboxsnumber) { ?>
				<li>
					<a href="<?php echo esc_url(innovation_get_option('portfolioboxes-link' . $portfolioboxsnumber, '#' )); ?>">
						<div class="ourservices"><img src="<?php echo esc_url(innovation_get_option('portfolioboxes-image' . $portfolioboxsnumber, get_template_directory_uri() . '/images/pf'.  $portfolioboxsnumber . '.png')); ?>" />
                        
                        
							<h2 class="ftitle"><?php echo esc_attr(innovation_get_option('portfolioboxes-title' . $portfolioboxsnumber, 'OUR PROJECT '. $portfolioboxsnumber )); ?></h3>
							<span><?php echo esc_textarea(innovation_get_option('portfolioboxes-description' . $portfolioboxsnumber, 'Innovation Lite is a Professional Responsive Theme' )); ?></span>
                        </div>
                        </a>
					
				</li>
                <?php } ?>
	</ul>
    </div>
  
    
</div>
<div class="lsep"></div>
<!--- ============  END OF PORTFOLIO  =========== ------------>

<!--- ============  FEATURED BOXES  =========== ------------>
<div id="featured-box-item">
<h2 class="boxtoptitle" >Our Courses</h2>
	<?php get_template_part( 'featured-box' ); ?> 
</div>
<!--- ============  END OF FEATURED BOXES  =========== ------------>

<!--- ============  HEADING  =========== ------------>
<div id="heading-box-item" class="heading1container">
	<div class="heading1vcenter">
		<h1 id="heading1" ><?php echo html_entity_decode(esc_attr(innovation_get_option('heading_text1', 'WordPress is web <em>software you can use to create websites!</em> '))); ?></h1>
		<p class="heading-desc1"><?php echo html_entity_decode(esc_textarea(innovation_get_option('heading_des1', 'It is Amazing! <em>Over 60 million people</em> have chosen WordPress to power the place on the web.'))); ?></p>
		<div class="vcenter"><a href="<?php echo esc_url(innovation_get_option( 'heading_btn1_link', 'http://wordpress.org' )); ?>"><button><?php echo __('Learn More', 'innovation-lite'); ?></button></a></div>
</div>
</div>
<div class="lsep"></div>
<!--- ============  END OF HEADING  =========== ------------>


<!--- ============  STAFFS  =========== ------------>
<div class="clear"></div>
<div id="staff-box-item">
	
	
			<div id="grid-staff" class="main">


<div id="map" class="featured-box">

<h2 class="boxtoptitle" ><?php echo esc_attr(innovation_get_option('staffboxes-heading', 'WE ARE HERE')); ?></h2>
	<h4 class="boxtopdes" ><?php echo esc_textarea(innovation_get_option('staffboxes-heading-des', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua')); ?></h4>

		<!-- Google Map Script -->
		<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyAXqsCEkkyAS1LAuDD7eStpw2EDaeQkOWU'></script><div style='overflow:hidden;height:440px;width:100%;'><div id='gmap_canvas' style='height:440px;width:100%;'></div><div><small><a href="http://www.embedgooglemaps.com/en/">Generate your map here, quick and easy!									Give your customers directions									Get found</a></small></div><div><small><a href="http://freedirectorysubmissionsites.com/">freedirectorysubmissionsites.com is the most complete web directory list of 2016. Here you can find all directories that have high PR and are search engine friendly. Submitting a link to a link directory is a valuable SEO-strategy, even in 2016. You have to pay attention to the following: if the links you put on a directory are dofollow, otherwise they are of no value to your business.</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){
var myOptions = {
zoom:20,center:new google.maps.LatLng(18.615066,73.765385),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(18.615066,73.765385)});infowindow = new google.maps.InfoWindow({content:'<strong>ANV INFOSYSTEM</strong><br>2nd Floor, Mahalakshami Complex, Dange Chowk, Pune<br>'});google.maps.event.addListener(marker, 'click', function(){
infowindow.open(map,marker);});infowindow.open(map,marker);
}
google.maps.event.addDomListener(window, 'load', init_map);
</script>
		<!-- Google Map ID -->
		
</div>

<div id="map" class="featured-box">
	<h2 class="boxtoptitle" >Contact Us</h2>
	<?php echo do_shortcode( '[contact-form-7 id="301" title="Contact Us"]' ); ?>
</div>




				<!--<?php foreach (range(1, 3 ) as $staffboxsnumber ) { ?>
				<div class="view-staff" >
                	<div class="view-staff-name">
                    <h3><?php echo esc_attr(innovation_get_option('staffboxes-title' . $staffboxsnumber, 'OUR PROUD STAFF '. $staffboxsnumber )); ?></h3>
                    <p><?php echo esc_attr(innovation_get_option('staffboxes-description' . $staffboxsnumber, 'Service Executive' )); ?></p>
                    </div>
                    
					<div class="view-staff-back social-link">
						<a href="<?php echo esc_url(innovation_get_option('staffboxes-linka' .$staffboxsnumber, 'http://wordpress.org' )); ?>"></a>
						<a href="<?php echo esc_url(innovation_get_option('staffboxes-linkb' .$staffboxsnumber, 'http://wordpress.org' )); ?>"></a>
                        <a href="<?php echo esc_url(innovation_get_option('staffboxes-linkc' .$staffboxsnumber, 'http://wordpress.org' )); ?>"></a>
						<a class="profile-link" href="<?php echo esc_url(innovation_get_option('staffboxes-link' . $staffboxsnumber, '#' )); ?>">&rarr;</a>
					</div>
					<img src="<?php echo esc_url(innovation_get_option('staffboxes-image' . $staffboxsnumber, get_template_directory_uri() . '/images/stf'.  $staffboxsnumber . '.jpg')); ?>" />
				
                </div>
       			<?php } ?>-->
			</div>
  		
</div>

<!--- ============  END OF STAFFS  =========== ------------>
<div class="lsep"></div>
<?php get_template_part( 'fcontent' ); 
get_sidebar(); 
 get_footer(); ?>