<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<?php
include("header.php");
include("Helper/connect.php");
//form 
if (isset($_POST['name']) && isset($_POST['EmailId']) &&  isset($_POST['phone_number']) &&  isset($_POST['message'])) {


	$name = $_POST['name'];
	$EmailId = $_POST['EmailId'];
	$phone_number = $_POST['phone_number'];
	$message = $_POST['message'];



	// Performing insert query execution
	$sql = mysqli_query($con, "INSERT INTO inquiry (first_name,EmailId,phone_number,project_message,FK_Status) VALUES ('$name',
		'$EmailId','$phone_number','$message','1')");
}
?>

<?php
$pid = $_GET['pid'];
$pro = $link->rawQueryOne("select * from project_master where PK_Project=?", array($_REQUEST['pid']));
// echo $pro;





?>


<div class="" id="all_wrapper">
	<div class="container main_wrapper  wide  has_header_type1   topbar_transparent   contentheader_center  cheader_center ">
	
		<?php include("subHeader.php"); ?>
		<div class="pre_search_wrapper"></div>
		<div class="container content_wrapper">
			<div class="row">
			<div  class="wpestate_header_image full_screen_no parallax_effect_yes" style="background-image:url(https://madrid.wpresidence.net/wp-content/uploads/2021/11/about-us-photo.jpeg); height:450px;margin-top:-40px;margin-bottom:20px ">
					<div class="wpestate_header_image_overlay" style="background-color:#2e2525;opacity:0.6;background-image:url();"></div>
					<div class="heading_over_image_wrapper">
						<h1 class="heading_over_image">Madrid Real Estate Team</h1>
						<div class="subheading_over_image">Professional agents at your service</div>
					</div>
				</div>
				<!-- <div id="gmap_wrapper" class=" with_open_street " data-post_id="57" data-cur_lat="" data-cur_long="" style="height:450px">
					<div id="googleMap" class="" style="height:450px"></div>
					<div class="tooltip"> click to enable zoom</div>
					<div id="gmap-loading">
						loading...
						<div class="new_prelader"></div>
					</div>
					<div id="gmap-noresult">
						We didn&#039;t find any results
					</div>
					<div class="gmap-controls  with_open_street  ">
						<div id="openmap"><i class="fas fa-angle-down"></i>open map</div>
						<div id="gmap-control">
							<span id="map-view"><i class="far fa-image"></i>View</span>
							<span id="map-view-roadmap" class="map-type">Roadmap</span>
							<span id="map-view-satellite" class="map-type">Satellite</span>
							<span id="map-view-hybrid" class="map-type">Hybrid</span>
							<span id="map-view-terrain" class="map-type">Terrain</span>
							<span id="geolocation-button"><i class="fas fa-map-marker-alt"></i>My Location</span>
							<span id="gmap-full"><i class="fas fa-arrows-alt"></i>Fullscreen</span>
							<span id="gmap-prev"><i class="fas fa-chevron-left"></i>Prev</span>
							<span id="gmap-next">Next<i class="fas fa-chevron-right"></i></span>
						</div>
						<div id="gmapzoomplus"><i class="fas fa-plus"></i> </div>
						<div id="gmapzoomminus"><i class="fas fa-minus"></i></div>
					</div>
				</div> -->
				<div class="col-xs-12 col-md-12 breadcrumb_container">
					<ol class="breadcrumb">
						<li><a href="https://lasvegas.wpresidence.net/">Home</a></li>
						<li class="active">Michaela Finney</li>
					</ol>
				</div>
				<div class=" col-md-9 rightmargin ">
					<span class="entry-title listing_loader_title">Your search results</span>
					<div class="spinner" id="listing_loader">
						<div class="rect1"></div>
						<div class="rect2"></div>
						<div class="rect3"></div>
						<div class="rect4"></div>
						<div class="rect5"></div>
					</div>
					<div id="listing_ajax_container">

					</div>
					<div id="content_container">
						<div class="container_agent">
							<div class="single-content single-agent">
								<div class="wpestate_agent_details_wrapper">
									<div class="col-md-5 agentpic-wrapper">
										<div class="agent-listing-img-wrapper" data-link="https://lasvegas.wpresidence.net/estate_agent/michaela-finney/">
											<div class="agentpict" style="background-image:url('<?php echo $pro['ThumbnailImageURL'] ?>')"> </div>
										</div>
										<div class="agent_unit_social_single">
											<a href="#" target="_blank" rel="noopener"><i class="fab fa-facebook-f"></i></a> <a href="#" target="_blank" rel="noopener"><i class="fab fa-twitter"></i></a> <a href="#" target="_blank" rel="noopener"><i class="fab fa-linkedin"></i></a> <a href="#" target="_blank" rel="noopener"><i class="fab fa-pinterest"></i></a> <a href="#" target="_blank" rel="noopener"><i class="fab fa-instagram"></i></a>
										</div>
									</div>
									<div class="col-md-7 agent_details">
										<h3><a href=""><?php echo $pro['ProjectName'] ?></a></h3>
										<div class="agent_position"><?php echo $pro['ProjectType'] ?></div>
										<div class="agent_detail agent_phone_class"><i class="fas fa-phone"></i><a href="tel:(305) 555-4555">(305) 555-4555</a></div>
										<div class="agent_detail agent_mobile_class"><i class="fas fa-mobile"></i></i><a href="tel:(305) 555-4555">(305) 555-4555</a></div>
										<div class="agent_detail agent_email_class"><i class="far fa-envelope"></i><a href="https://lasvegas.wpresidence.net/cdn-cgi/l/email-protection#016c68626960646d41766463726875642f6f6475"><span class="__cf_email__" data-cfemail="e08d89838881858ca097858293899485ce8e8594">[email&#160;protected]</span></a></div>
										<div class="agent_detail agent_skype_class"><i class="fab fa-skype"></i>michaela.roja</div>
										<div class="agent_detail agent_web_class"><i class="fas fa-desktop"></i><a href="http://website.net/" target="_blank">website.net</a></div>
									</div>
									<div class="row custom_details_container">
										<a class="wpresidence_button send_email_agent" href="#show_contact">
											Send Email </a>
										<a class="wpresidence_button wpresidence_button_inverse realtor_call" href="tel:(305) 555-4555 ">
											<i class="fas fa-phone"></i>
											Call <span class="agent_call_no">(305) 555-4555</span></a>
										<a class="wpresidence_button wpresidence_button_inverse realtor_whatsapp" href="https://api.whatsapp.com/send?phone=(305)%20555-4555&amp;text=Hello%20I'm%20interested%20in%20one%20of%20your%20listings.">
											<i class="fab fa-whatsapp"></i>
											WhatsApp</a>
										<a class="wpresidence_button wpresidence_button_inverse realtor_whatsapp" href="<?php echo $pro['BrochureURL'] ?>" target="_blank">
											<i class="fas fa-download"></i>
											Download Brochure</a>

										<div class="custom_parameter_wrapper">
											<div class="col-md-4">
												<span class="custom_parameter_label">
													Location </span>
												<span class="custom_parameter_value">
													18 years as Expert Realtor at Madrid Realty </span>
											</div>
											<div class="col-md-4">
												<span class="custom_parameter_label">
													Office Address</span>
												<span class="custom_parameter_value">
													Best Realtor in Madrid from 2000-2018 </span>
											</div>
											<div class="col-md-4">
												<span class="custom_parameter_label">
													Office Hours </span>
												<span class="custom_parameter_value">
													9 AM - 5 PM, Monday - Saturday </span>
											</div>
										
										</div>
									
									</div>
								</div>
								<div class="agent_content col-md-12">
									<h4>About Me </h4>
									<p><?php echo $pro['LongDescription'] ?></p>

								</div>

							</div>
					
						</div>

					</div>
				</div>
				
				<div class="clearfix visible-xs"></div>
				<div class="col-xs-12 col-md-3 widget-area-sidebar" id="primary" style="margin-top: -1px;">
					<div id="primary_sidebar_wrapper">
						<ul class="xoxo">
							<li id="ag_ag_dev_search_widget-1" class="widget-container advanced_search_sidebar ag_ag_dev_search_widget boxed_widget">
								<h3 class="widget-title-sidebar">For More Inquiry</h3>
								<form method="post" action="">
									<input type="text" name="name" class="form-control" placeholder="Name" required />
									<input type="email" name="EmailId" class="form-control" placeholder="email id" required />
									<input type="tel" name="phone_number" class="form-control" placeholder="Phone number" required />
									<textarea placeholder="Enter your query here..." type="text" name="message" class="form-control" rows="3" cols="50" required></textarea>
									<button type="submit" class="wpresidence_button" id="advanced_submit_widget" name="submit">Submit</button>
								</form>
							</li>
							<li id="footer_latest_widget-2" class="widget-container latest_listings">
								<?php
								//  include("latestlisting.php");
								   ?>


								<?php

								?>

								<?php

								?>

					</div>

					</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

</div>
</div>
</div>
<?php include("subFooter.php"); ?>
</div>
<?php include("footer.php"); ?>


</html>