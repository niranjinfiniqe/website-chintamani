<!DOCTYPE html>
<html lang="en-US">
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
		<?php
include ("header.php");
include ("Helper/connect.php");
//form
if (isset($_POST['name']) && isset($_POST['EmailId']) && isset($_POST['phone_number']) && isset($_POST['message']))
{

    $name = $_POST['name'];
    $EmailId = $_POST['EmailId'];
    $phone_number = $_POST['phone_number'];
    $message = $_POST['message'];

    // Performing insert query execution
    $sql = mysqli_query($con, "INSERT INTO inquiry (first_name,EmailId,phone_number,project_message,FK_Status) VALUES ('$name','$EmailId','$phone_number','$message','1')");
}
?>
        	<div class="website-wrapper" id="all_wrapper">
				<div class="container main_wrapper  wide  has_header_type1   topbar_transparent   contentheader_center  cheader_center ">
					<?php include ("subHeader.php"); ?>
                	<div class="header_media  mobile_header_media_sticky_yes header_mediatype_1 with_search_1 header_media_non_elementor"></div>
					<div class="pre_search_wrapper"></div>
					<div  class="container content_wrapper">
						<div data-elementor-type="wp-page" data-elementor-id="18618" class="elementor elementor-18618">
							<section   class="elementor-section elementor-top-section elementor-element elementor-element-5c20f880 elementor-section-content-middle elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="5c20f880" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
								<div class="elementor-container elementor-column-gap-no">
									<div  class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7fe0a5e4" data-id="7fe0a5e4" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
										<div     class="elementor-widget-wrap elementor-element-populated">
										<video style="border-radius:3% ;"   autoplay loop muted >
												<source src="https://bun.filedit.ch/hRBFonLZePFAbCIejjFE.mp4" type="video/mp4">
												<!-- <source src="movie.ogg" type="video/ogg"> -->
												Your browser does not support the video tag.
												</video>
											<section    class="elementor-section elementor-inner-section elementor-element elementor-element-22ec8b6 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="22ec8b6" data-element_type="section">
												<div class="elementor-container elementor-column-gap-no">
													<div  class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-7b3e991" data-id="7b3e991" data-element_type="column">
														<div  class="elementor-widget-wrap elementor-element-populated">
															<div  class="elementor-element elementor-element-3ebcc151 elementor-absolute elementor-widget elementor-widget-WpResidence_Search_Form_Builder" data-id="3ebcc151" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="WpResidence_Search_Form_Builder.default">
																<div  class="elementor-widget-container">
																	<div   class="search_wrapper search_wr_elementor search_wr_elementor_shadow_ ">
																		<div class="search_wrapper_color"></div>
																		<div class="wpestate-adv-holder">
																			<form action="leasing.php" method="POST" >

																		

																				 <div class="elementor-field-group elementor-column form-group elementor-field-group-a5cfa26 elementor-col-15">
																					<label for="form-field-a5cfa26" class="elementor-field-label">Location</label>
																					<div class="dropdown form-control ">
																						<div data-toggle="dropdown" id="adv_actions" class=" filter_menu_trigger  " xxmaca cacaall Property type data-value=">Choose location">Choose location
																							<span class="caret  caret_filter "></span>
																						</div>
																						<input type="hidden" name="Location" value=""/>
																						<ul id="" class="dropdown-menu filter_menu" role="menu" aria-labelledby="adv_actions">
																							<li role="presentation" data-value="Andheri">Andheri</li>
																						
																							<li role="presentation" data-value="Goregaon">Goregaon</li>
																							<li role="presentation" data-value="Chakala">Chakala</li>
																	
																						
																						</ul>
																					</div>
																				</div>
																				
																				
																		
																				<div class="elementor-field-group elementor-column form-group elementor-field-group-a5cfa26 elementor-col-15">
																					<label for="form-field-a5cfa26" class="elementor-field-label">Price Range</label>
																					<div class="dropdown form-control ">
																						<div data-toggle="dropdown" id="adv_actions" class=" filter_menu_trigger  " xxmaca cacaall Property type data-value="all">choose price range
																							<span class="caret  caret_filter "></span>
																						</div>
																						<input type="hidden" name="Price" value="">
																						<ul id="" class="dropdown-menu filter_menu" role="menu" aria-labelledby="adv_categ">
																							<li role="presentation" data-value="100000-200000">100k-200k</li>
																							<li role="presentation" data-value="200000-300000">200k-300k</li>
																							<li role="presentation" data-value="200000-300000">200k-300k</li>
																							<li role="presentation" data-value="300000-400000">300k-400k</li>
																						</ul>
																					</div>
																				</div>
																				<div class="elementor-field-group elementor-column form-group elementor-field-group-356a11b elementor-col-15">
																					<label for="form-field-356a11b" class="elementor-field-label">Capacity</label>
																					<div class="dropdown form-control ">
																						<div data-toggle="dropdown" id="adv_categ" class=" filter_menu_trigger  " xxmaca cacaall Property category data-value="all">choose capacity
																							<span class="caret  caret_filter "></span>
																						</div>
																						<input type="hidden" name="Packs" value="">
																						<ul id="" class="dropdown-menu filter_menu" role="menu" aria-labelledby="adv_categ">
																							<li role="presentation" data-value="5-10">5-10</li>
																							<li role="presentation" data-value="10-15">10-15</li>
																							<li role="presentation" data-value="15-20">15-20</li>
																							<li role="presentation" data-value="20-25">20-25</li>
																							<li role="presentation" data-value="25-30">25-30</li>
																							<li role="presentation" data-value="30-35">30-35</li>
																							<li role="presentation" data-value="35-40">35-40</li>
																						</ul>
																					</div>
																				</div>
																				<div class="elementor-field-group elementor-column form-group elementor-field-group-356a11b elementor-col-15">
																					<label for="form-field-356a11b" class="elementor-field-label">Square feet</label>
																					<div class="dropdown form-control ">
																						<div data-toggle="dropdown" id="adv_categ" class=" filter_menu_trigger  " xxmaca cacaall Property category data-value="all">choose sq ft
																							<span class="caret  caret_filter "></span>
																						</div>
																						<input type="hidden" name="BuildUpArea" value="">
																						<ul id="" class="dropdown-menu filter_menu" role="menu" aria-labelledby="adv_categ">
																							<li role="presentation" data-value="5-10">5-10</li>
																							<li role="presentation" data-value="10-15">10-15</li>
																							<li role="presentation" data-value="15-20">15-20</li>
																							<li role="presentation" data-value="20-25">20-25</li>
																							<li role="presentation" data-value="25-30">25-30</li>
																							<li role="presentation" data-value="30-35">30-35</li>
																							<li role="presentation" data-value="35-40">35-40</li>
																						</ul>
																					</div>
																				</div>
																				<div   type="submit" name="submit"  class=" elemenentor_submit_wrapper elementor-field-group form-group  form_field_show_labels_true  elementor-column elementor-col-30">
																					<button class="wpresidence_button  search_button_use_hover_effect_no" >
																						<div class="elementor-icon">
																							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Capa_1" x="0px" y="0px" viewBox="0 0 52.966 52.966" style="enable-background:new 0 0 52.966 52.966;" xml:space="preserve">
																								<path d="M51.704,51.273L36.845,35.82c3.79-3.801,6.138-9.041,6.138-14.82c0-11.58-9.42-21-21-21s-21,9.42-21,21s9.42,21,21,21  c5.083,0,9.748-1.817,13.384-4.832l14.895,15.491c0.196,0.205,0.458,0.307,0.721,0.307c0.25,0,0.499-0.093,0.693-0.279  C52.074,52.304,52.086,51.671,51.704,51.273z M21.983,40c-10.477,0-19-8.523-19-19s8.523-19,19-19s19,8.523,19,19  S32.459,40,21.983,40z"></path>
																								<g></g>
																								<g></g>
																								<g></g>
																								<g></g>
																								<g></g>
																								<g></g>
																								<g></g>
																								<g></g>
																								<g></g>
																								<g></g>
																								<g></g>
																								<g></g>
																								<g></g>
																								<g></g>
																								<g></g>
																							</svg>
																						</div>
																						<a style="text-decoration:none;color:white;">	Search</a>
																					</button>
																				</div>
																			
																			</form>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
										</div>
									</div>
								</div>
							</section>
							<section class="elementor-section elementor-top-section elementor-element elementor-element-6be5a0bc elementor-section-stretched elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="6be5a0bc" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
								<div class="elementor-container elementor-column-gap-no">
									<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-73e943a" data-id="73e943a" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
										<div class="elementor-widget-wrap elementor-element-populated"></div>
									</div>
									<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f08a7" data-id="f08a7" data-element_type="column">
										<div class="elementor-widget-wrap elementor-element-populated">
											<section class="elementor-section elementor-inner-section elementor-element elementor-element-2509675 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2509675" data-element_type="section">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-27792c4" data-id="27792c4" data-element_type="column">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-dd728bd elementor-invisible elementor-widget elementor-widget-heading" data-id="dd728bd" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="heading.default">
																<div class="elementor-widget-container">
																	<p class="elementor-heading-title elementor-size-default">WHO WE ARE</p>
																</div>
															</div>
															<div class="elementor-element elementor-element-fcc2da1 elementor-invisible elementor-widget elementor-widget-heading" data-id="fcc2da1" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="heading.default">
																<div class="elementor-widget-container">
																	<h2 class="elementor-heading-title elementor-size-default">We help clients buy and sell houses since 1989</h2>
																</div>
															</div>
															<div class="elementor-element elementor-element-4032be52 elementor-invisible elementor-widget elementor-widget-text-editor" data-id="4032be52" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="text-editor.default">
																<div class="elementor-widget-container">
																	<p>With over $2 Billion in sales, due to our unparalleled results, expertise and dedication, we rank amongst the top 6 agencies in Las Vegas. Our agency is the industry’s top luxury producer.</p>
																</div>
															</div>
															<div class="elementor-element elementor-element-27d20a7 elementor-mobile-align-center elementor-invisible elementor-widget elementor-widget-button" data-id="27d20a7" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="button.default">
																<div class="elementor-widget-container">
																	<div class="elementor-button-wrapper">
																		<a href="aboutUs.php" class="elementor-button-link elementor-button elementor-size-sm" role="button">
																		<span class="elementor-button-content-wrapper">
																		<span class="elementor-button-text">More about us</span>
																		</span>
																		</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
										</div>
									</div>
								</div>
							</section>
							<section class="elementor-section elementor-top-section elementor-element elementor-element-71e88615 elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default" data-id="71e88615" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
								<div class="elementor-container elementor-column-gap-no">
									<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6afc0bbb" data-id="6afc0bbb" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
										<div class="elementor-widget-wrap elementor-element-populated">
											<section class="elementor-section elementor-inner-section elementor-element elementor-element-3a269cb7 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3a269cb7" data-element_type="section">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4b5a8609" data-id="4b5a8609" data-element_type="column">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-17b2724 elementor-invisible elementor-widget elementor-widget-heading" data-id="17b2724" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="heading.default">
																<div class="elementor-widget-container">
																	<p class="elementor-heading-title elementor-size-default">POPULAR AREAS</p>
																</div>
															</div>
															<div class="elementor-element elementor-element-1f5a3596 elementor-invisible elementor-widget elementor-widget-heading" data-id="1f5a3596" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="heading.default">
																<div class="elementor-widget-container">
																	<h2 class="elementor-heading-title elementor-size-default">Explore most <br>popular areas</h2>
																</div>
															</div>
														</div>
													</div>
													<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-494e1c0b" data-id="494e1c0b" data-element_type="column">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-73c61b00 elementor-invisible elementor-widget elementor-widget-Wpresidence_Grids" data-id="73c61b00" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:65}" data-widget_type="Wpresidence_Grids.default">
																<div class="elementor-widget-container">
																	<div class="row elementor_wpresidece_grid">
																		<div class="col-md-6 col-sm-12 elementor_residence_grid">
																			<div class="listing_wrapper elementor_places_wrapper">
																				<div class="property_listing places_wrapper_type_1 places_listing" data-link="https://lasvegas.wpresidence.net/property_area/winchester/" style="background-image: url(https://las-vegas.b-cdn.net/wp-content/uploads/2022/03/city_category3.jpeg);">
																					<div class="places_cover" data-link="https://lasvegas.wpresidence.net/property_area/winchester/"></div>
																					<h4><a href="https://lasvegas.wpresidence.net/property_area/winchester/">
																						Goregaon </a>
																					</h4>
																					<!-- <div class="property_location">
																						4 listings 
																					</div> -->
																				</div>
																			</div>
																		</div>
																		<div class="col-md-6 col-sm-12 elementor_residence_grid">
																			<div class="listing_wrapper elementor_places_wrapper">
																				<div class="property_listing places_wrapper_type_1 places_listing" data-link="https://lasvegas.wpresidence.net/property_area/meadows-village/" style="background-image: url(https://las-vegas.b-cdn.net/wp-content/uploads/2022/03/city_category2.jpeg);">
																					<div class="places_cover" data-link="https://lasvegas.wpresidence.net/property_area/meadows-village/"></div>
																					<h4><a href="https://lasvegas.wpresidence.net/property_area/meadows-village/">
																						Andheri </a>
																					</h4>
																					<!-- <div class="property_location">
																						3 listings 
																					</div> -->
																				</div>
																			</div>
																		</div>
																		
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
											<section class="elementor-section elementor-inner-section elementor-element elementor-element-e1f8de8 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e1f8de8" data-element_type="section">
												<div class="elementor-container elementor-column-gap-wide">
													<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-0884b88 elementor-invisible" data-id="0884b88" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:50}">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-dc1bdf6 elementor-widget__width-initial elementor-widget elementor-widget-counter" data-id="dc1bdf6" data-element_type="widget" data-widget_type="counter.default">
																<div class="elementor-widget-container">
																	<style>/*! elementor - v3.6.4 - 13-04-2022 */
																		.elementor-counter .elementor-counter-number-wrapper{display:-webkit-box;display:-ms-flexbox;display:flex;font-size:69px;font-weight:600;line-height:1}.elementor-counter .elementor-counter-number-prefix,.elementor-counter .elementor-counter-number-suffix{-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;white-space:pre-wrap}.elementor-counter .elementor-counter-number-prefix{text-align:right}.elementor-counter .elementor-counter-number-suffix{text-align:left}.elementor-counter .elementor-counter-title{text-align:center;font-size:19px;font-weight:400;line-height:2.5}
																	</style>
																	<div class="elementor-counter">
																		<div class="elementor-counter-number-wrapper">
																			<span class="elementor-counter-number-prefix"></span>
																			<span class="elementor-counter-number" data-duration="2000" data-to-value="5" data-from-value="0">0</span>
																			<span class="elementor-counter-number-suffix">K</span>
																		</div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-5f13a69 elementor-widget__width-initial elementor-widget elementor-widget-heading" data-id="5f13a69" data-element_type="widget" data-widget_type="heading.default">
																<div class="elementor-widget-container">
																	<h2 class="elementor-heading-title elementor-size-default">Active <br> Listings</h2>
																</div>
															</div>
														</div>
													</div>
													<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5e829b7 elementor-invisible" data-id="5e829b7" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:60}">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-efc3a71 elementor-widget__width-initial elementor-widget elementor-widget-counter" data-id="efc3a71" data-element_type="widget" data-widget_type="counter.default">
																<div class="elementor-widget-container">
																	<div class="elementor-counter">
																		<div class="elementor-counter-number-wrapper">
																			<span class="elementor-counter-number-prefix"></span>
																			<span class="elementor-counter-number" data-duration="2000" data-to-value="9" data-from-value="0">0</span>
																			<span class="elementor-counter-number-suffix">K</span>
																		</div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-e26d66a elementor-widget__width-initial elementor-widget elementor-widget-heading" data-id="e26d66a" data-element_type="widget" data-widget_type="heading.default">
																<div class="elementor-widget-container">
																	<h2 class="elementor-heading-title elementor-size-default">Sold <br> listings</h2>
																</div>
															</div>
														</div>
													</div>
													<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1e69f7f elementor-invisible" data-id="1e69f7f" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:70}">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-57c7089 elementor-widget__width-initial elementor-widget elementor-widget-counter" data-id="57c7089" data-element_type="widget" data-widget_type="counter.default">
																<div class="elementor-widget-container">
																	<div class="elementor-counter">
																		<div class="elementor-counter-number-wrapper">
																			<span class="elementor-counter-number-prefix"></span>
																			<span class="elementor-counter-number" data-duration="2000" data-to-value="9" data-from-value="1">1</span>
																			<span class="elementor-counter-number-suffix">K</span>
																		</div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-356180f elementor-widget__width-initial elementor-widget elementor-widget-heading" data-id="356180f" data-element_type="widget" data-widget_type="heading.default">
																<div class="elementor-widget-container">
																	<h2 class="elementor-heading-title elementor-size-default">Clients<br> we've served</h2>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
										</div>
									</div>
								</div>
							</section>
							<section class="elementor-section elementor-top-section elementor-element elementor-element-6554ff99 elementor-section-height-min-height elementor-section-stretched animated-fast elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="6554ff99" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;none&quot;}">
								<div class="elementor-container elementor-column-gap-default">
									<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2b39ea64" data-id="2b39ea64" data-element_type="column">
										<div class="elementor-widget-wrap elementor-element-populated">
											<section class="elementor-section elementor-inner-section elementor-element elementor-element-1a2cf34b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1a2cf34b" data-element_type="section">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-52b7a60e" data-id="52b7a60e" data-element_type="column">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-1a1a4ac elementor-invisible elementor-widget elementor-widget-heading" data-id="1a1a4ac" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="heading.default">
																<div class="elementor-widget-container">
																	<p class="elementor-heading-title elementor-size-default">RECENT PROPERTIES</p>
																</div>
															</div>
															<div class="elementor-element elementor-element-1fba92f6 elementor-invisible elementor-widget elementor-widget-heading" data-id="1fba92f6" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="heading.default">
																<div class="elementor-widget-container">
																	<h2 class="elementor-heading-title elementor-size-default">Explore the latest <br>properties available</h2>
																</div>
															</div>
														</div>
													</div>
													<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2f244220" data-id="2f244220" data-element_type="column">
														<div class="elementor-widget-wrap"></div>
													</div>
												</div>
											</section>
											<section class="elementor-section elementor-inner-section elementor-element elementor-element-2ef9a123 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2ef9a123" data-element_type="section">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-126c2d86" data-id="126c2d86" data-element_type="column">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-7bdb98af elementor-invisible elementor-widget elementor-widget-WpResidence_Items_List" data-id="7bdb98af" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="WpResidence_Items_List.default">
																<div class="elementor-widget-container">
																	<div id="wpestate_sh_anime_557" class="article_container wpestate_anime wpestate_latest_listings_sh bottom-estate_property " data-type="estate_property" data-category_ids="" data-action_ids="" data-city_ids="" data-area_ids="" data-state_ids="" data-status_ids="" data-number="6" data-row-number="3" data-card-version="" data-align="vertical" data-show_featured_only="no" data-random_pick="no" data-featured_first="no" data-sort-by="0" data-page="1">
																	<?php
$sql = $link->rawQuery("select * from leasing_master where isDeleted=0 and PK_lease limit 6");

foreach ($sql as $pro)
{
?>
																		<div   class="col-md-4 shortcode-col listing_wrapper " data-org="6" data-main-modal="https://las-vegas.b-cdn.net/wp-content/uploads/2021/10/house8-800x467.jpg" data-modal-title="Villa with Amazing View" data-modal-link="" data-listid="139">
																			<div class="property_listing property_card_default " data-link="">
																				<div class="listing-unit-img-wrapper">
																					<div class="prop_new_details">
																						<div class="prop_new_details_back"></div>
																						<div class="property_media"> <i class="fas fa-video"></i> <i class="fas fa-camera"></i> 6</div>
																						<div class="property_location_image"> <span class="property_marker"></span><a href="https://lasvegas.wpresidence.net/property_area/downtown/" rel="tag">Downtown</a>, <a href="https://lasvegas.wpresidence.net/property_city/las-vegas/" rel="tag">Las Vegas</a></div>
																						<div class="featured_gradient"></div>
																					</div>
																					<a href="" target="_self"><img width="525" height="328" src="https://las-vegas.b-cdn.net/wp-content/uploads/2021/10/house8-525x328.jpg" class="lazyload img-responsive wp-post-image" alt="" data-original="https://las-vegas.b-cdn.net/wp-content/uploads/2021/10/house8-525x328.jpg" /></a> 
																					<div class="tag-wrapper">
																						<div class="featured_div">Featured</div>
																						<div class="status-wrapper">
																							<div class="action_tag_wrapper Sales ">Sales</div>
																						</div>
																					</div>
																				</div>
																				<div class="property-unit-information-wrapper">
																					<h4>
																					<a href="estate_property.php?leaseID=<?php echo $pro["PK_lease"]; ?>">
																					<?php echo $pro['Lease_Name']; ?></a>
																						
																						</h4>
																					<div class="listing_unit_price_wrapper"> <?php echo $pro["Price"]; ?> <span class="price_label"></span></div>
																					<div class="listing_details the_grid_view"> <?php echo $pro['ShortDescription'] ?> <a href="" class="unit_more_x"> ...</a> </div>
																					<div class="listing_details the_list_view"> Beautiful, updated, ground level Co-op apartment in the desirable Bay Terrace neighborhood. This home features hard <a href="" class="unit_more_x"> ...</a> </div>
																					<div class="property_listing_details">
																						<span class="inforoom">
																						<svg xmlns="http://www.w3.org/2000/svg" style="width:12px" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z"/></svg>
																							
																							<?php echo $pro["Location"]; ?>
																						</span>
																						<span class="infobath">
																						    
																						    
																						    
																						   
																							
																				<i class="fas fa-restroom"></i>
																							<?php echo $pro["Packs"]; ?>
																						</span>
																						<span class="infosize">
																							<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
																								<path fill-rule="evenodd" clip-rule="evenodd" d="M0.500145 0H0.000160627V5.50004H1.0001V1.70713L5.14654 5.85362L5.85368 5.14647L1.70724 0.999979H5.50011V3.21257e-05L0.500145 0ZM14.5 0H15V5.50004H14.0001V1.70713L9.85362 5.85362L9.14648 5.14647L13.2929 0.999979H9.50005V3.21257e-05L14.5 0ZM15 15H9.50002V14.0001H13.2929L9.14644 9.85357L9.85359 9.14641L14 13.2929V9.49999H15L15 15ZM0.499984 15H0V9.49996H0.999935V13.2929L5.14638 9.14638L5.85352 9.85353L1.70708 14H5.49995V15L0.499984 15Z" fill="black" />
																							</svg>
																							<?php echo $pro["CarpetArea"]; ?> ft<sup>2</sup>
																						</span>
																					
																					</div>
																					
																				</div>
																			</div>
																		</div>

																		<?php
}
?>
																
															
															
															
																	
																		<div class="wpestate_listing_sh_loader">
																			<div class="new_prelader"></div>
																		</div>
																		<div class="listinglink-wrapper_sh_listings">
																			<a href="leasing.php"><span class="wpresidence_button wpestate_item_list_sh">load more listings </span></a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
										</div>
									</div>
								</div>
							</section>
							<section class="elementor-section elementor-top-section elementor-element elementor-element-63abc592 elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default" data-id="63abc592" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
								<div class="elementor-container elementor-column-gap-no">
									<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-67f9b6ff" data-id="67f9b6ff" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
										<div class="elementor-widget-wrap elementor-element-populated">
											<section class="elementor-section elementor-inner-section elementor-element elementor-element-6636255a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6636255a" data-element_type="section">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3644d43d" data-id="3644d43d" data-element_type="column">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-96da1ee elementor-invisible elementor-widget elementor-widget-heading" data-id="96da1ee" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="heading.default">
																<div class="elementor-widget-container">
																	<p class="elementor-heading-title elementor-size-default">OUR SERVICES</p>
																</div>
															</div>
															<div class="elementor-element elementor-element-4e7f2f62 elementor-invisible elementor-widget elementor-widget-heading" data-id="4e7f2f62" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="heading.default">
																<div class="elementor-widget-container">
																	<h2 class="elementor-heading-title elementor-size-default">Top real estate <br>services available</h2>
																</div>
															</div>
														</div>
													</div>
													<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-6afb72d4" data-id="6afb72d4" data-element_type="column">
														<div class="elementor-widget-wrap"></div>
													</div>
												</div>
											</section>
											<section class="elementor-section elementor-inner-section elementor-element elementor-element-184a5953 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="184a5953" data-element_type="section">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3ce6edd3 elementor-invisible" data-id="3ce6edd3" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:100,&quot;background_background&quot;:&quot;classic&quot;}">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-67fdb8a elementor-view-stacked elementor-shape-square elementor-widget elementor-widget-icon" data-id="67fdb8a" data-element_type="widget" data-widget_type="icon.default">
																<div class="elementor-widget-container">
																	<div class="elementor-icon-wrapper">
																		<div class="elementor-icon">
																			<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 512 512">
																				<title>evaluating 2</title>
																				<path d="M86.485,143.253H344.646a6,6,0,0,0,0-12H86.485a6,6,0,0,0,0,12Z"></path>
																				<path d="M344.646,192.86H168.627a6,6,0,0,0,0,12H344.646a6,6,0,1,0,0-12Z"></path>
																				<path d="M255.463,254.467H168.627a6,6,0,0,0,0,12h86.836a6,6,0,1,0,0-12Z"></path>
																				<path d="M213.219,316.073H86.485a6,6,0,0,0,0,12H213.219a6,6,0,0,0,0-12Z"></path>
																				<path d="M212.045,377.68H86.485a6,6,0,0,0,0,12h125.56a6,6,0,1,0,0-12Z"></path>
																				<path d="M108.428,268.507c-.052,0-.1-.008-.155-.008s-.1.006-.154.008a15.8,15.8,0,0,1-15.634-15.78,6,6,0,0,0-12,0,27.831,27.831,0,0,0,21.788,27.128v7.623a6,6,0,0,0,12,0v-7.623a27.786,27.786,0,0,0-6-54.917,15.788,15.788,0,1,1,15.789-15.788,6,6,0,1,0,12,0,27.831,27.831,0,0,0-21.789-27.128v-6.631a6,6,0,0,0-12,0v6.631a27.786,27.786,0,0,0,6,54.916,15.785,15.785,0,0,1,.155,31.569Z"></path>
																				<path d="M397.584,262.847V68.806a29.5,29.5,0,0,0-29.469-29.47H291.453A35.387,35.387,0,0,0,256.637,10H174.5a35.317,35.317,0,0,0-34.821,29.336H63.016a29.5,29.5,0,0,0-29.469,29.47V452.128A29.5,29.5,0,0,0,63.016,481.6H285.973v-.843A123.329,123.329,0,1,0,397.584,262.847ZM157.991,28.833A23.178,23.178,0,0,1,174.5,22h82.142a23.337,23.337,0,0,1,0,46.673H174.5a23.339,23.339,0,0,1-16.5-39.84ZM63.016,469.6a17.489,17.489,0,0,1-17.469-17.469V68.806a17.49,17.49,0,0,1,17.469-17.47h76.662A35.387,35.387,0,0,0,174.5,80.673h82.142a35.349,35.349,0,0,0,34.821-29.337h76.657a17.489,17.489,0,0,1,17.469,17.47V259.122A123.3,123.3,0,0,0,271.87,469.6ZM355.107,490A111.346,111.346,0,1,1,466.453,378.654,111.472,111.472,0,0,1,355.107,490Z"></path>
																				<path d="M397.8,343.12l-58.342,58.341-27.049-27.049a6,6,0,0,0-8.486,8.484l31.292,31.292a6,6,0,0,0,8.486,0L406.288,351.6a6,6,0,1,0-8.485-8.484Z"></path>
																			</svg>
																		</div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-5114b7ba elementor-widget elementor-widget-spacer" data-id="5114b7ba" data-element_type="widget" data-widget_type="spacer.default">
																<div class="elementor-widget-container">
																	<style>/*! elementor - v3.6.4 - 13-04-2022 */
																		.e-container.e-container--row .elementor-spacer-inner{width:var(--spacer-size)}.e-container.e-container--column .elementor-spacer-inner,.elementor-column .elementor-spacer-inner{height:var(--spacer-size)}
																	</style>
																	<div class="elementor-spacer">
																		<div class="elementor-spacer-inner"></div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-1f755e2e elementor-widget elementor-widget-heading" data-id="1f755e2e" data-element_type="widget" data-widget_type="heading.default">
																<div class="elementor-widget-container">
																	<h2 class="elementor-heading-title elementor-size-default">Sell your home</h2>
																</div>
															</div>
															<div class="elementor-element elementor-element-3e18cae1 elementor-widget elementor-widget-spacer" data-id="3e18cae1" data-element_type="widget" data-widget_type="spacer.default">
																<div class="elementor-widget-container">
																	<div class="elementor-spacer">
																		<div class="elementor-spacer-inner"></div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-56fdefe2 elementor-widget elementor-widget-spacer" data-id="56fdefe2" data-element_type="widget" data-widget_type="spacer.default">
																<div class="elementor-widget-container">
																	<div class="elementor-spacer">
																		<div class="elementor-spacer-inner"></div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-5922e526 elementor-widget elementor-widget-text-editor" data-id="5922e526" data-element_type="widget" data-widget_type="text-editor.default">
																<div class="elementor-widget-container">
																	<p>We sell your home at the best market price.</p>
																</div>
															</div>
														</div>
													</div>
													<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-29468d06 elementor-invisible" data-id="29468d06" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:100,&quot;background_background&quot;:&quot;classic&quot;}">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-1cc30b4e elementor-view-stacked elementor-shape-square elementor-widget elementor-widget-icon" data-id="1cc30b4e" data-element_type="widget" data-widget_type="icon.default">
																<div class="elementor-widget-container">
																	<div class="elementor-icon-wrapper">
																		<div class="elementor-icon">
																			<svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 512 512" width="512" height="512">
																				<path d="M471.982,417.008Q472,416.5,472,416a32.036,32.036,0,0,0-32-32V236l28.8-21.6a8,8,0,0,0-.08-12.859L400,151.322V64a8,8,0,0,0,8-8V24a8,8,0,0,0-8-8H320a8,8,0,0,0-8,8V56a8,8,0,0,0,8,8V92.861l-59.28-43.32a8,8,0,0,0-9.44,0l-208,152A8,8,0,0,0,43.2,214.4L72,236V384a32.036,32.036,0,0,0-32,32q0,.5.018,1.008A32,32,0,0,0,48,480H464a32,32,0,0,0,7.982-62.992ZM328,32h64V48H328Zm8,72V64h48v75.63L335.243,104ZM256,65.908,450.555,208.084l-18.628,13.971L260.706,97.53a8,8,0,0,0-9.412,0L80.073,222.055,61.445,208.084ZM32,448a16.019,16.019,0,0,1,15.76-16l.019,0c.409.057.818.106,1.235.133a8,8,0,0,0,8.023-10.716A15.727,15.727,0,0,1,56,416a16.019,16.019,0,0,1,16-16v64H48A16.019,16.019,0,0,1,32,448Zm344,16H280V288h96Zm16,0V280a8,8,0,0,0-8-8H272a8,8,0,0,0-8,8V464H88V236.074L256,113.892,424,236.074V464Zm72,0H440V400a16.019,16.019,0,0,1,16,16,15.727,15.727,0,0,1-1.037,5.421,8,8,0,0,0,8.023,10.716c.417-.027.826-.076,1.235-.133l.019,0a16,16,0,0,1-.24,32Z"></path>
																				<path d="M224,272H128a8,8,0,0,0-8,8V392a8,8,0,0,0,8,8h96a8,8,0,0,0,8-8V280A8,8,0,0,0,224,272Zm-8,56H184V288h32Zm-48-40v40H136V288Zm-32,56h32v40H136Zm48,40V344h32v40Z"></path>
																				<circle cx="304" cy="368" r="8" transform="translate(-152.323 508.032) rotate(-67.5)"></circle>
																			</svg>
																		</div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-2625b2f2 elementor-widget elementor-widget-spacer" data-id="2625b2f2" data-element_type="widget" data-widget_type="spacer.default">
																<div class="elementor-widget-container">
																	<div class="elementor-spacer">
																		<div class="elementor-spacer-inner"></div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-f8bc9c elementor-widget elementor-widget-heading" data-id="f8bc9c" data-element_type="widget" data-widget_type="heading.default">
																<div class="elementor-widget-container">
																	<h2 class="elementor-heading-title elementor-size-default">Home loans</h2>
																</div>
															</div>
															<div class="elementor-element elementor-element-2544b175 elementor-widget elementor-widget-spacer" data-id="2544b175" data-element_type="widget" data-widget_type="spacer.default">
																<div class="elementor-widget-container">
																	<div class="elementor-spacer">
																		<div class="elementor-spacer-inner"></div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-16efb2ea elementor-widget elementor-widget-spacer" data-id="16efb2ea" data-element_type="widget" data-widget_type="spacer.default">
																<div class="elementor-widget-container">
																	<div class="elementor-spacer">
																		<div class="elementor-spacer-inner"></div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-3559292a elementor-widget elementor-widget-text-editor" data-id="3559292a" data-element_type="widget" data-widget_type="text-editor.default">
																<div class="elementor-widget-container">
																	<p>We offer you free consultancy to get a loan.</p>
																</div>
															</div>
														</div>
													</div>
													<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1564ec47 elementor-invisible" data-id="1564ec47" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:100,&quot;background_background&quot;:&quot;classic&quot;}">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-4d126611 elementor-view-stacked elementor-shape-square elementor-widget elementor-widget-icon" data-id="4d126611" data-element_type="widget" data-widget_type="icon.default">
																<div class="elementor-widget-container">
																	<div class="elementor-icon-wrapper">
																		<div class="elementor-icon">
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Capa_1" x="0px" y="0px" width="33.441px" height="33.441px" viewBox="0 0 33.441 33.441" style="enable-background:new 0 0 33.441 33.441;" xml:space="preserve">
																				<g>
																					<g>
																						<path d="M11.452,5.3l7.317,4.225c0.203,0.116,0.461,0.046,0.578-0.155l0.211-0.366c0.117-0.201,0.047-0.46-0.154-0.577    l-7.318-4.225c-0.202-0.117-0.461-0.047-0.577,0.154l-0.211,0.366C11.181,4.924,11.25,5.183,11.452,5.3z"></path>
																						<path d="M5.115,16.277l7.318,4.226c0.202,0.116,0.461,0.047,0.577-0.154l0.211-0.365c0.117-0.201,0.048-0.461-0.154-0.577    l-7.318-4.225c-0.202-0.117-0.461-0.047-0.577,0.154l-0.211,0.366C4.843,15.901,4.912,16.16,5.115,16.277z"></path>
																						<path d="M30.92,21.44l-14.646-7.591l1.969-3.41c0.116-0.201,0.047-0.461-0.153-0.577l-6.588-3.803    c-0.201-0.116-0.461-0.046-0.577,0.155l-4.648,8.05c-0.115,0.201-0.046,0.461,0.155,0.577l6.587,3.802    c0.201,0.117,0.461,0.047,0.576-0.154l1.97-3.41l13.896,8.889c0.196,0.125,0.451,0.063,0.567-0.139l1.057-1.83    C31.2,21.8,31.126,21.548,30.92,21.44z"></path>
																						<path d="M33.23,22.509l-0.731-0.422c-0.2-0.117-0.461-0.047-0.577,0.154l-1.269,2.195c-0.115,0.201-0.046,0.461,0.155,0.576    l0.731,0.422c0.201,0.117,0.46,0.048,0.577-0.154l1.268-2.195C33.501,22.884,33.432,22.624,33.23,22.509z"></path>
																						<path d="M17.418,25.114h-0.881c0.111-0.124,0.185-0.284,0.185-0.464v-0.696c0-0.383-0.313-0.697-0.696-0.697H2.09    c-0.384,0-0.697,0.314-0.697,0.697v0.696c0,0.18,0.074,0.34,0.186,0.464H0.697C0.312,25.114,0,25.429,0,25.812v2.787    c0,0.383,0.313,0.697,0.697,0.697H17.42c0.385,0,0.696-0.314,0.696-0.697V25.81C18.116,25.429,17.803,25.114,17.418,25.114z     M16.427,28.335H1.752c-0.403,0-0.733-0.33-0.733-0.732v-0.734c0.001-0.402,0.33-0.734,0.733-0.732h14.675    c0.405,0,0.735,0.33,0.734,0.731l0.001,0.735C17.161,28.005,16.832,28.335,16.427,28.335z"></path>
																					</g>
																				</g>
																				<g></g>
																				<g></g>
																				<g></g>
																				<g></g>
																				<g></g>
																				<g></g>
																				<g></g>
																				<g></g>
																				<g></g>
																				<g></g>
																				<g></g>
																				<g></g>
																				<g></g>
																				<g></g>
																				<g></g>
																			</svg>
																		</div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-117ed39a elementor-widget elementor-widget-spacer" data-id="117ed39a" data-element_type="widget" data-widget_type="spacer.default">
																<div class="elementor-widget-container">
																	<div class="elementor-spacer">
																		<div class="elementor-spacer-inner"></div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-2c0bfbef elementor-widget elementor-widget-heading" data-id="2c0bfbef" data-element_type="widget" data-widget_type="heading.default">
																<div class="elementor-widget-container">
																	<h2 class="elementor-heading-title elementor-size-default">Legal services</h2>
																</div>
															</div>
															<div class="elementor-element elementor-element-108bfdf elementor-widget elementor-widget-spacer" data-id="108bfdf" data-element_type="widget" data-widget_type="spacer.default">
																<div class="elementor-widget-container">
																	<div class="elementor-spacer">
																		<div class="elementor-spacer-inner"></div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-274894bf elementor-widget elementor-widget-spacer" data-id="274894bf" data-element_type="widget" data-widget_type="spacer.default">
																<div class="elementor-widget-container">
																	<div class="elementor-spacer">
																		<div class="elementor-spacer-inner"></div>
																	</div>
																</div>
															</div>
															<div class="elementor-element elementor-element-f92dd4e elementor-widget elementor-widget-text-editor" data-id="f92dd4e" data-element_type="widget" data-widget_type="text-editor.default">
																<div class="elementor-widget-container">
																	<p>Expert legal help for all related property items.</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
										</div>
									</div>
								</div>
							</section>
							<section class="elementor-section elementor-top-section elementor-element elementor-element-c8121bb elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default" data-id="c8121bb" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
								<div class="elementor-container elementor-column-gap-no">
									<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-532a272" data-id="532a272" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
										<div class="elementor-widget-wrap elementor-element-populated">
											<section class="elementor-section elementor-inner-section elementor-element elementor-element-d9f3368 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d9f3368" data-element_type="section">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-40c7340" data-id="40c7340" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-675e03a elementor-invisible elementor-widget elementor-widget-heading" data-id="675e03a" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="heading.default">
																<div class="elementor-widget-container">
																	<h2 class="elementor-heading-title elementor-size-default">Send us a message today</h2>
																</div>
															</div>
															<div class="elementor-element elementor-element-2324c00 elementor-button-align-stretch elementor-invisible elementor-widget elementor-widget-WpResidence_Contact_Form_Builder" data-id="2324c00" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="WpResidence_Contact_Form_Builder.default">
																<div class="elementor-widget-container">
																	
																<form class="elementor-form" method="post" action="">
																		<div class="elementor-form-fields-wrapper elementor-labels-above">
																			<div class="elementor-field-group elementor-column form-group elementor-field-group-name elementor-col-100"><label for="form-field-name" class="elementor-field-label">Name</label><input type="text" name="name" id="form-field-name" class="elementor-field form-control elementor-size-sm elementor-field-textual" placeholder="Name"></div>

																			<div class="elementor-field-group elementor-column form-group elementor-field-group-email elementor-field-required elementor-col-100"><label for="form-field-email" class="elementor-field-label">Email*</label><input type="email" name="EmailId" id="form-field-email" class="elementor-field form-control elementor-size-sm elementor-field-textual" required="required" placeholder="Email"></div>
																			
																			<div class="elementor-field-group elementor-column form-group elementor-field-group-321f593 elementor-col-100"><label for="form-field-321f593" class="elementor-field-label">Phone Number</label><input type="tel" class="form-control elementor-field-textual elementor-field elementor-size-sm" name="phone_number" id="form-field-321f593" rows="4" placeholder="Phone Number"/></div>

																			<div class="elementor-field-group elementor-column form-group elementor-field-group-message elementor-col-100"><label for="form-field-message" class="elementor-field-label">Message</label><textarea class="form-control elementor-field-textual elementor-field elementor-size-sm" name="message" id="form-field-message" rows="4" placeholder="Message"></textarea></div>

																			<div class="elementor-column elementor-col-100">
																				<button type="submit" class="wpresidence_button wpresidence_button_elementor elementor-button elementor-size-md" name="submit">
																				Submit </button>
																			</div>
																		</div>
																	</form>
																</div>
															</div>
														</div>
													</div>
													<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1014365" data-id="1014365" data-element_type="column">
														<div class="elementor-widget-wrap elementor-element-populated">
															<section class="elementor-section elementor-inner-section elementor-element elementor-element-2ccfe24 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2ccfe24" data-element_type="section">
																<div class="elementor-container elementor-column-gap-default">
																	<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-ec6913a" data-id="ec6913a" data-element_type="column">
																		<div class="elementor-widget-wrap elementor-element-populated">
																			<div class="elementor-element elementor-element-924f82a elementor-invisible elementor-widget elementor-widget-heading" data-id="924f82a" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="heading.default">
																				<div class="elementor-widget-container">
																					<p class="elementor-heading-title elementor-size-default">CONTACT</p>
																				</div>
																			</div>
																			<div class="elementor-element elementor-element-58d4984 elementor-invisible elementor-widget elementor-widget-heading" data-id="58d4984" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="heading.default">
																				<div class="elementor-widget-container">
																					<h2 class="elementor-heading-title elementor-size-default">Get in touch with us to plan your next transaction</h2>
																				</div>
																			</div>
																			<div class="elementor-element elementor-element-480fe50 elementor-invisible elementor-widget elementor-widget-text-editor" data-id="480fe50" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="text-editor.default">
																				<div class="elementor-widget-container">
																					<p>Our experts and developers would love to contribute their expertise and insights and help you today. Contact us to help you plan your next transaction, either buying or selling a home.</p>
																				</div>
																			</div>
																			<div class="elementor-element elementor-element-51b5e88 elementor-mobile-align-center elementor-invisible elementor-widget elementor-widget-button" data-id="51b5e88" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="button.default">
																				<div class="elementor-widget-container">
																					<div class="elementor-button-wrapper">
																						<a href="contactUs.php" class="elementor-button-link elementor-button elementor-size-sm" role="button">
																						<span class="elementor-button-content-wrapper">
																						<span class="elementor-button-text">Contact us</span>
																						</span>
																						</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</section>
														</div>
													</div>
												</div>
											</section>
										</div>
									</div>
								</div>
							</section>
<!--======================================================================Blog Section Starts=======================-->
							<!-- <section class="elementor-section elementor-top-section elementor-element elementor-element-3613e20 elementor-section-height-min-height elementor-section-stretched animated-fast elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="3613e20" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;none&quot;}">
								<div class="elementor-container elementor-column-gap-default">
									<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8311871" data-id="8311871" data-element_type="column">
										<div class="elementor-widget-wrap elementor-element-populated">
											<section class="elementor-section elementor-inner-section elementor-element elementor-element-3b75951 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3b75951" data-element_type="section">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ce7716e" data-id="ce7716e" data-element_type="column">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-4588f96 elementor-invisible elementor-widget elementor-widget-heading" data-id="4588f96" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="heading.default">
																<div class="elementor-widget-container">
																	<p class="elementor-heading-title elementor-size-default">BLOG ARTICLES</p>
																</div>
															</div>
															<div class="elementor-element elementor-element-23b6b55 elementor-invisible elementor-widget elementor-widget-heading" data-id="23b6b55" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="heading.default">
																<div class="elementor-widget-container">
																	<h2 class="elementor-heading-title elementor-size-default">The most recent <br>local real estate news</h2>
																</div>
															</div>
														</div>
													</div>
													<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-e288ff0" data-id="e288ff0" data-element_type="column">
														<div class="elementor-widget-wrap"></div>
													</div>
												</div>
											</section>

											<section class="elementor-section elementor-inner-section elementor-element elementor-element-0994559 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0994559" data-element_type="section">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-1e6eefe" data-id="1e6eefe" data-element_type="column">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-880f14b elementor-invisible elementor-widget elementor-widget-Wpresidence_Blog_Post_List" data-id="880f14b" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="Wpresidence_Blog_Post_List.default">
																<div class="elementor-widget-container">
																	<div class="article_container  wpestate_latest_listings_sh bottom-post blogs_wrapper" data-category_ids="" data-number="4" data-row-number="4" data-card-version="3" data-sort-by="0" data-page="1">
																	<?php
																	   $sql = $link->rawQuery("select * from blog_master where isDeleted=0");
																		
																		 foreach ($sql as $blog)	
																		{
																		
																		?>
																		<div  class="col-md-3 shortcode-col  listing_wrapper blog3v">
																			<div class="property_listing_blog" data-link="">


																				<div class="featured_gradient"></div>
																				<div class="blog_unit_image" style="background-image:url(https://las-vegas.b-cdn.net/wp-content/uploads/2016/03/portrait__interior9-525x328.jpg);"></div>
																				<div class="blog_unit_content_v3">
																					<div class="blog_unit_meta">
																						Mar 04, 2016 
																					</div>
																					<h4>
																						<a href="" class="blog_unit_title"><?php echo $blog['BlogTitle'] ?></a>
																					</h4>
																					<a class="read_more" href="Singleblog.php?pid=<?php echo $blog["PK_BlogID"]; ?>"> Continue reading<i class="fas fa-angle-right"></i> </a>
																				</div>
																			
																			
																			</div>
																		
																			</div>
																			<?php
																			}
																			?>
																		
																		<div class="wpestate_listing_sh_loader">
																			<div class="new_prelader"></div>
																		</div>
																		
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>

											<section class="elementor-section elementor-inner-section elementor-element elementor-element-0994559 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0994559" data-element_type="section">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-1e6eefe" data-id="1e6eefe" data-element_type="column">
														<div class="elementor-widget-wrap elementor-element-populated">
															<div class="elementor-element elementor-element-880f14b elementor-invisible elementor-widget elementor-widget-Wpresidence_Blog_Post_List" data-id="880f14b" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:50}" data-widget_type="Wpresidence_Blog_Post_List.default">
																<div class="elementor-widget-container">
																	<div class="article_container  wpestate_latest_listings_sh bottom-post blogs_wrapper" data-category_ids="" data-number="4" data-row-number="4" data-card-version="3" data-sort-by="0" data-page="1">
																		<?php
																			$sql = $link->rawQuery("select * FROM blog_master WHERE isDeleted=0 AND FK_Status in(Select PK_status from status_master where STATUS='Published') LIMIT 4");
																			foreach ($sql as $blog)
																			{

																		?>
																			<div  class="col-md-3 shortcode-col  listing_wrapper blog3v">
																				<div class="property_listing_blog" data-link="">
																					<div class="featured_gradient"></div>
																					<div class="blog_unit_image" style="background-image:url(https://las-vegas.b-cdn.net/wp-content/uploads/2016/03/portrait__interior9-525x328.jpg);"></div>
																					<div class="blog_unit_content_v3">
																						<div class="blog_unit_meta">
																							Mar 04, 2016 
																						</div>
																						<h4>
																							<a href="" class="blog_unit_title"><?php echo $blog['BlogTitle'] ?></a>
																						</h4>
																						<a class="read_more" href="Singleblog.php?pid=<?php echo $blog["PK_BlogID"]; ?>"> Continue reading<i class="fas fa-angle-right"></i> </a>
																					</div>
																				</div>
																			</div>
																		<?php
																			}
																		?>
																	</div> 
																	<div class="wpestate_listing_sh_loader">
																		<div class="new_prelader"></div>
																	</div>
																	<div class="listinglink-wrapper_sh_listings">
																		<a href="blogList.php"><span class="wpresidence_button wpestate_item_list_sh blog_list_loader"> load articles </span></a>
																	</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
										</div>
									</div>
								</div>
							</section> -->
<!--=======================================Blog Section End===========================================================-->
						</div>
					</div>
				</div>
            	<?php include ("subFooter.php"); ?>
			</div>
        <?php include ("footer.php"); ?>
</html>
