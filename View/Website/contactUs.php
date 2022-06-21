<!DOCTYPE html>
<html lang="en-US">
   <head>
      <!-- <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
      <link rel="pingback" href="https://lasvegas.wpresidence.net/xmlrpc.php" />
      <meta name="google-signin-client_id" content="13759604714-0t7p0dh546nvkefuvt58ojmj6dcr82ld.apps.googleusercontent.com">
      <meta name="google-signin-scope" content="https://www.googleapis.com/auth/analytics.readonly"> -->
      <title>Contact Us &#8211; WpResidence Real Estate Theme Demo</title>
      <!-- <meta name='robots' content='noindex, nofollow' />
      <link rel='dns-prefetch' href='//fonts.googleapis.com' />
      <link href='https://fonts.gstatic.com' crossorigin rel='preconnect' />
      <link rel="alternate" type="application/rss+xml" title="WpResidence Real Estate Theme Demo &raquo; Feed" href="https://lasvegas.wpresidence.net/feed/" />
      <link rel="alternate" type="application/rss+xml" title="WpResidence Real Estate Theme Demo &raquo; Comments Feed" href="https://lasvegas.wpresidence.net/comments/feed/" />
      <link rel="alternate" type="application/rss+xml" title="WpResidence Real Estate Theme Demo &raquo; Contact Us Comments Feed" href="https://lasvegas.wpresidence.net/contact-us-3/feed/" /> -->
      <!-- <style type="text/css">
         img.wp-smiley,
         img.emoji {
         display: inline !important;
         border: none !important;
         box-shadow: none !important;
         height: 1em !important;
         width: 1em !important;
         margin: 0 0.07em !important;
         vertical-align: -0.1em !important;
         background: none !important;
         padding: 0 !important;
         }
      </style> -->
      <!-- <style type="text/css" id="wp-custom-css">
         @media only screen and (max-width: 1023px){
         .page-id-7 .has_header_type1 #google_map_prop_list_sidebar {
         margin-top: 25px!important;
         }
         }
         #google_map_prop_list_wrapper #gmap-control i {
         background-color: #af9d91;
         }		
      </style>
   </head> -->
   <?php include('header.php'); ?>
   <div id="gmap_wrapper" class=" contact_map  with_open_street " data-post_id="5707" data-cur_lat="" data-cur_long="" style="height:450px">
      <div class="contact_map_container">
         <h4>How To Find Us</h4>
         <div class="agent_detail contact_detail"><i class="fas fa-phone"></i><a href="tel:(305) 555-4446">(305) 555-4446</a></div>
         <div class="agent_detail contact_detail"><i class="far fa-envelope"></i><a href="/cdn-cgi/l/email-protection#aedccbcfc2cbdddacfdacbeec7c0cd80cdc1c3"><span class="__cf_email__" data-cfemail="d2a0b7b3beb7a1a6b3a6b792bbbcb1fcb1bdbf">[email&#160;protected]</span></a></div>
         <div class="agent_detail contact_detail"><i class="fas fa-home"></i></i>10845 Griffith Peak Dr, Las Vegas, NV 89135</div>
         <h4>Opening Hours</h4>
         <div class="agent_detail contact_detail">Monday-Friday <span>10:00 - 18:00</span></div>
         <div class="agent_detail contact_detail">Saturday <span>10:00 - 14:00</span></div>
         <div class="agent_detail contact_detail">Sunday <span>Closed</span></div>
      </div>
      <div id="googleMap" class=" contact_map " style="height:450px"></div>
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
   </div>
   <div class="search_wrapper search_wr_1 page_without_search    adv_force_location3 with_search_on_end  with_search_form_float " id="search_wrapper" data-postid="5707"></div>
   </div>
   <div class="pre_search_wrapper"></div>
      <div class="container content_wrapper">
         <div class="row">
            <div class="col-xs-12 col-md-12 breadcrumb_container">
               <ol class="breadcrumb">
                  <li><a href="https://lasvegas.wpresidence.net/">Home</a></li>
                  <li class="active">Contact Us</li>
               </ol>
            </div>
            <div class="col-md-9 rightmargin">
               <span class="entry-title listing_loader_title">Your search results</span>
               <div class="spinner" id="listing_loader">
                  <div class="rect1"></div>
                  <div class="rect2"></div>
                  <div class="rect3"></div>
                  <div class="rect4"></div>
                  <div class="rect5"></div>
               </div>
               <div id="listing_ajax_container"></div>
               <div class="contact-wrapper row">
                  <div class=" contact_page_company_details">
                     <div class="company_headline ">
                        <h3>Real Estate Agency</h3>
                        <div class='company_headlin_addr'>10845 Griffith Peak Dr, Las Vegas, NV 89135</div>
                        <div class="header_social">
                           <a href="#" rel="noopener"><i class="fab fa-facebook-f"></i></a> <a href="#" rel="noopener"><i class="fab fa-twitter"></i></a> <a href="#" rel="noopener"><i class="fab fa-google-plus-g"></i></a> <a href="#" rel="noopener"><i class="fab fa-linkedin-in"></i></a> <a href="#" rel="noopener"><i class="fab fa-pinterest-p"></i></a> <a href="#" rel="noopener"><i class="fab fa-instagram"></i></a> 
                        </div>
                     </div>
                     <div class="agent_detail contact_detail"><span>Phone:</span> <a href="tel:(305) 555-4446">(305) 555-4446</a></div>
                     <div class="agent_detail contact_detail"><span>Mobile:</span><a href="tel:(305) 555-4555">(305) 555-4555</a></div>
                     <div class="agent_detail contact_detail"><span>Email:</span><a href="/cdn-cgi/l/email-protection#512334303d34222530253411383f327f323e3c"><span class="__cf_email__" data-cfemail="e79582868b829493869382a78e8984c984888a">[email&#160;protected]</span></a></div>
                     <div class="agent_detail contact_detail"><span>Skype:</span>realestate</div>
                  </div>
                  <div class="company_headline_content">
                     <p>Whether you’re looking for property for sale in New York area or property for rent, WP Residence makes searching easy. Use our unique geolocation mapping feature to root-out your ideal villa, townhouse or apartment and contact the owners direct. We will help you find your dream house in just a few seconds.</p>
                     <p>We offer our clients a wealth of knowledge regarding all aspects of purchasing or selling a home. Whether it is helping you search for your dream home, discussing new New York real estate developments, or assisting with the sale of your property, we would love the opportunity to help. Please feel free to contact us with any questions!</p>
                  </div>
                  <div class=" contact_page_company_picture">
                     <img src="https://beijing.wpresidence.net/wp-content/uploads/2021/10/team2.jpg" class="contact-comapany-logo img-responsive" alt="company logo" />
                  </div>
               </div>
               <div class="single-content contact-content">
                  <div class="agent_contanct_form ">
                     <h4 id="show_contact">Contact Us</h4>
                     <div class="alert-box error">
                        <div class="alert-message" id="alert-agent-contact"></div>
                     </div>
                     <div class="schedule_wrapper" style="display: none;">
                        <input name="schedule_day" class="schedule_day form-control" type="text" placeholder="Day" aria-required="true" class="form-control">
                        <select name="schedule_hour" id="schedule_hour" class="form-control">
                           <option value="0">Time</option>
                           <option value="7:00">7:00</option>
                           <option value="7:15">7:15</option>
                           <option value="7:30">7:30</option>
                           <option value="7:45">7:45</option>
                           <option value="8:00">8:00</option>
                           <option value="8:15">8:15</option>
                           <option value="8:30">8:30</option>
                           <option value="8:45">8:45</option>
                           <option value="9:00">9:00</option>
                           <option value="9:15">9:15</option>
                           <option value="9:30">9:30</option>
                           <option value="9:45">9:45</option>
                           <option value="10:00">10:00</option>
                           <option value="10:15">10:15</option>
                           <option value="10:30">10:30</option>
                           <option value="10:45">10:45</option>
                           <option value="11:00">11:00</option>
                           <option value="11:15">11:15</option>
                           <option value="11:30">11:30</option>
                           <option value="11:45">11:45</option>
                           <option value="12:00">12:00</option>
                           <option value="12:15">12:15</option>
                           <option value="12:30">12:30</option>
                           <option value="12:45">12:45</option>
                           <option value="13:00">13:00</option>
                           <option value="13:15">13:15</option>
                           <option value="13:30">13:30</option>
                           <option value="13:45">13:45</option>
                           <option value="14:00">14:00</option>
                           <option value="14:15">14:15</option>
                           <option value="14:30">14:30</option>
                           <option value="14:45">14:45</option>
                           <option value="15:00">15:00</option>
                           <option value="15:15">15:15</option>
                           <option value="15:30">15:30</option>
                           <option value="15:45">15:45</option>
                           <option value="16:00">16:00</option>
                           <option value="16:15">16:15</option>
                           <option value="16:30">16:30</option>
                           <option value="16:45">16:45</option>
                           <option value="17:00">17:00</option>
                           <option value="17:15">17:15</option>
                           <option value="17:30">17:30</option>
                           <option value="17:45">17:45</option>
                           <option value="18:00">18:00</option>
                           <option value="18:15">18:15</option>
                           <option value="18:30">18:30</option>
                           <option value="18:45">18:45</option>
                           <option value="19:00">19:00</option>
                           <option value="19:15">19:15</option>
                           <option value="19:30">19:30</option>
                           <option value="19:45">19:45</option>
                        </select>
                     </div>
                     <div class="contact_form_flex_wrapper">
                        <input name="contact_name" id="agent_contact_name" type="text" placeholder="Your Name" aria-required="true" class="form-control">
                        <input type="text" name="email" class="form-control" id="agent_user_email" aria-required="true" placeholder="Your Email">
                        <input type="text" name="phone" class="form-control" id="agent_phone" placeholder="Your Phone">
                     </div>
                     <textarea id="agent_comment" name="comment" class="form-control" cols="45" rows="8" aria-required="true"></textarea>
                     <div class="gpr_wrapper"><input type="checkbox" role="checkbox" aria-checked="false" id="wpestate_agree_gdpr" class="wpestate_agree_gdpr" name="wpestate_agree_gdpr" />
                        <label for="wpestate_agree_gdpr">I consent to the <a target="_blank" href="https://lasvegas.wpresidence.net/">GDPR Terms</a></label>
                     </div>
                     <input type="submit" class="wpresidence_button agent_submit_class " id="agent_submit" value="Send Email">
                     <input name="prop_id" type="hidden" id="agent_property_id" value="0">
                     <input name="prop_id" type="hidden" id="agent_id" value="0">
                     <input type="hidden" name="contact_ajax_nonce" id="agent_property_ajax_nonce" value="a099dc64f1" />
                  </div>
               </div>
            </div>
            <div class="clearfix visible-xs"></div>
            <div class="col-xs-12 col-md-3 widget-area-sidebar" id="primary">
               <div id="primary_sidebar_wrapper">
                  <ul class="xoxo">
                     <li id="multiple_currency_widget-1" class="widget-container multiple_currency_widget">
                        <h3 class="widget-title-sidebar">Change Currency</h3>
                        <div class="dropdown form-control">
                           <div data-toggle="dropdown" id="sidebar_currency_list" class="sidebar_filter_menu">USD <span class="caret caret_sidebar"></span></div>
                           <input type="hidden" name="filter_curr[]" value="">
                           <ul id="list_sidebar_curr" class="dropdown-menu filter_menu list_sidebar_currency" role="menu" aria-labelledby="sidebar_currency_list">
                              <li role="presentation" data-curpos="after" data-coef="1" data-value="USD" data-symbol="USD" data-pos="-1">USD </li>
                              <li role="presentation" data-curpos="after" data-coef="1.74" data-value="USD" data-symbol="USD" data-pos="0">USD </li>
                              <li role="presentation" data-curpos="before" data-coef="2.44" data-value="EGB" data-symbol="EGB" data-pos="1">EGB </li>
                              <li role="presentation" data-curpos="before" data-coef="1.33" data-value="YEN" data-symbol="YEN" data-pos="2">YEN </li>
                           </ul>
                        </div>
                        <input type="hidden" id="wpestate_change_currency" value="18bda2d373" /> 
                     </li>
                     <li id="measurement_unit_widget-1" class="widget-container measurement_unit_widget">
                        <h3 class="widget-title-sidebar">Change Measurement</h3>
                        <div class="dropdown form-control">
                           <div data-toggle="dropdown" id="sidebar_measure_unit_list" class="sidebar_filter_menu">square feet - ft<sup>2</sup> <span class="caret caret_sidebar"></span></div>
                           <input type="hidden" name="filter_curr[]" value="">
                           <ul id="list_sidebar_measure_unit" class="dropdown-menu filter_menu list_sidebar_measure_unit" role="menu" aria-labelledby="sidebar_currency_list">
                              <li role="presentation" data-value="ft">square feet - ft<sup>2</sup></li>
                              <li role="presentation" data-value="m">square meters - m<sup>2</sup></li>
                              <li role="presentation" data-value="ac">acres - ac</li>
                              <li role="presentation" data-value="yd">square yards - yd<sup>2</sup></li>
                              <li role="presentation" data-value="ha">hectares - ha</li>
                           </ul>
                        </div>
                        <input type="hidden" id="wpestate_change_measure" value="eea4cca5f9" /> 
                     </li>
                     <li id="advanced_search_widget-1" class="widget-container advanced_search_sidebar boxed_widget">
                        <h3 class="widget-title-sidebar">Advanced Search</h3>
                        <form role="search" method="get" action="https://lasvegas.wpresidence.net/advanced-search/">
                           <input type="hidden" id="wpestate_regular_search_nonce" name="wpestate_regular_search_nonce" value="36209ecc5d" /><input type="hidden" name="_wp_http_referer" value="/contact-us-3/" /><input type="text" id="sidebar-adv_location_" class="form-control adv_locations_search" name="adv_location" placeholder="Enter an address, state, city, area or zip code" value=""><script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">
                              //<![CDATA[
                              jQuery(document).ready(function(){
                                 var availableTags = ["Las Vegas","Downtown","The Strip","Meadows Village","Downtown East","Winchester","Nevada",];
                                 jQuery(".adv_locations_search").autocomplete({
                                       source: availableTags,
                                       change: function() {
                                          wpestate_show_pins();
                                       }
                                 });
                              });
                              //]]>
                           </script>
                           <div class="dropdown form-control ">
                              <div data-toggle="dropdown" id="sidebar-bedrooms" class=" sidebar_filter_menu  " xx maca cacaall Bedrooms data-value="all">Bedrooms
                                 <span class="caret  caret_sidebar "></span>
                              </div>
                              <input type="hidden" doithere name="bedrooms" value="">
                              <ul id="sidebar-search-bedrooms" class="dropdown-menu filter_menu" role="menu" aria-labelledby="sidebar-bedrooms">
                                 <li role="presentation" data-value="all">Bedrooms</li>
                                 <li data-value="1" value="1">1</li>
                                 <li data-value="2" value="2">2</li>
                                 <li data-value="3" value="3">3</li>
                                 <li data-value="4" value="4">4</li>
                                 <li data-value="5" value="5">5</li>
                                 <li data-value="6" value="6">6</li>
                                 <li data-value="7" value="7">7</li>
                                 <li data-value="8" value="8">8</li>
                                 <li data-value="9" value="9">9</li>
                                 <li data-value="10" value="10">10</li>
                              </ul>
                           </div>
                           <div class="dropdown form-control ">
                              <div data-toggle="dropdown" id="sidebar-rooms" class=" sidebar_filter_menu  " xx maca cacaall Rooms data-value="all">Rooms
                                 <span class="caret  caret_sidebar "></span>
                              </div>
                              <input type="hidden" doithere name="rooms" value="">
                              <ul id="sidebar-search-rooms" class="dropdown-menu filter_menu" role="menu" aria-labelledby="sidebar-rooms">
                                 <li role="presentation" data-value="all">Rooms</li>
                                 <li data-value="1" value="1">1</li>
                                 <li data-value="2" value="2">2</li>
                                 <li data-value="3" value="3">3</li>
                                 <li data-value="4" value="4">4</li>
                                 <li data-value="5" value="5">5</li>
                                 <li data-value="6" value="6">6</li>
                                 <li data-value="7" value="7">7</li>
                                 <li data-value="8" value="8">8</li>
                                 <li data-value="9" value="9">9</li>
                                 <li data-value="10" value="10">10</li>
                              </ul>
                           </div>
                           <div class="dropdown form-control ">
                              <div data-toggle="dropdown" id="sidebar-adv_categ" class=" sidebar_filter_menu  " xxmaca cacaall Categories data-value="all">Categories
                                 <span class="caret  caret_sidebar "></span>
                              </div>
                              <input type="hidden" name="filter_search_type[]" value="">
                              <ul id="sidebar-categlist" class="dropdown-menu filter_menu" role="menu" aria-labelledby="sidebar-adv_categ">
                                 <li role="presentation" data-value="all">Categories</li>
                                 <li role="presentation" data-value="apartments">Apartments</li>
                                 <li role="presentation" data-value="condos">Condos</li>
                                 <li role="presentation" data-value="duplexes">Duplexes</li>
                                 <li role="presentation" data-value="houses">Houses</li>
                                 <li role="presentation" data-value="villas">Villas</li>
                              </ul>
                           </div>
                           <div class="dropdown form-control ">
                              <div data-toggle="dropdown" id="sidebar-adv_actions" class=" sidebar_filter_menu  " xxmaca cacaall Types data-value="all">Types
                                 <span class="caret  caret_sidebar "></span>
                              </div>
                              <input type="hidden" name="filter_search_action[]" value="">
                              <ul id="sidebar-actionslist" class="dropdown-menu filter_menu" role="menu" aria-labelledby="sidebar-adv_actions">
                                 <li role="presentation" data-value="all">Types</li>
                                 <li role="presentation" data-value="rentals">Rentals</li>
                                 <li role="presentation" data-value="sales">Sales</li>
                              </ul>
                           </div>
                           <input type="text" id="sidebar-min-property-size" name="min-property-size" placeholder="Min Property Size" value="" class="advanced_select form-control">
                           <div class="adv_search_slider">
                              <p>
                                 <label for="amount">Price range:</label>
                                 <span id="amount_wd" class="wpresidence_slider_price">0 $ to 5.600.000 $</span>
                              </p>
                              <div id="slider_price_widget"></div>
                              <input type="hidden" id="price_low_widget" name="price_low" value="0" />
                              <input type="hidden" id="price_max_widget" name="price_max" value="5600000" />
                           </div>
                           <div class="adv_extended_options_text" id="adv_extended_options_text_widget">More Search Options</div>
                           <div class="extended_search_check_wrapper">
                              <span id="adv_extended_close_widget" class="adv_extended_close_button"><i class="fas fa-times"></i></span>
                              <div class="extended_search_checker">
                                 <input type="checkbox" id="central-airwidget" name="central-air" name-title="Central Air" value="1">
                                 <label for="central-airwidget">Central Air</label>
                              </div>
                              <div class="extended_search_checker">
                                 <input type="checkbox" id="chair-accessiblewidget" name="chair-accessible" name-title="Chair Accessible" value="1">
                                 <label for="chair-accessiblewidget">Chair Accessible</label>
                              </div>
                              <div class="extended_search_checker">
                                 <input type="checkbox" id="elevatorwidget" name="elevator" name-title="Elevator" value="1">
                                 <label for="elevatorwidget">Elevator</label>
                              </div>
                              <div class="extended_search_checker">
                                 <input type="checkbox" id="equipped-kitchenwidget" name="equipped-kitchen" name-title="Equipped Kitchen" value="1">
                                 <label for="equipped-kitchenwidget">Equipped Kitchen</label>
                              </div>
                              <div class="extended_search_checker">
                                 <input type="checkbox" id="fireplacewidget" name="fireplace" name-title="Fireplace" value="1">
                                 <label for="fireplacewidget">Fireplace</label>
                              </div>
                              <div class="extended_search_checker">
                                 <input type="checkbox" id="garage-attachedwidget" name="garage-attached" name-title="Garage Attached" value="1">
                                 <label for="garage-attachedwidget">Garage Attached</label>
                              </div>
                              <div class="extended_search_checker">
                                 <input type="checkbox" id="gymwidget" name="gym" name-title="Gym" value="1">
                                 <label for="gymwidget">Gym</label>
                              </div>
                              <div class="extended_search_checker">
                                 <input type="checkbox" id="heatingwidget" name="heating" name-title="Heating" value="1">
                                 <label for="heatingwidget">Heating</label>
                              </div>
                              <div class="extended_search_checker">
                                 <input type="checkbox" id="hot-bathwidget" name="hot-bath" name-title="Hot Bath" value="1">
                                 <label for="hot-bathwidget">Hot Bath</label>
                              </div>
                              <div class="extended_search_checker">
                                 <input type="checkbox" id="media-roomwidget" name="media-room" name-title="Media Room" value="1">
                                 <label for="media-roomwidget">Media Room</label>
                              </div>
                              <div class="extended_search_checker">
                                 <input type="checkbox" id="natural-gaswidget" name="natural-gas" name-title="Natural Gas" value="1">
                                 <label for="natural-gaswidget">Natural Gas</label>
                              </div>
                              <div class="extended_search_checker">
                                 <input type="checkbox" id="poolwidget" name="pool" name-title="Pool" value="1">
                                 <label for="poolwidget">Pool</label>
                              </div>
                              <div class="extended_search_checker">
                                 <input type="checkbox" id="ventilationwidget" name="ventilation" name-title="Ventilation" value="1">
                                 <label for="ventilationwidget">Ventilation</label>
                              </div>
                              <div class="extended_search_checker">
                                 <input type="checkbox" id="washer-and-dryerwidget" name="washer-and-dryer" name-title="Washer and dryer" value="1">
                                 <label for="washer-and-dryerwidget">Washer and dryer</label>
                              </div>
                              <div class="extended_search_checker">
                                 <input type="checkbox" id="waterwidget" name="water" name-title="Water" value="1">
                                 <label for="waterwidget">Water</label>
                              </div>
                              <div class="extended_search_checker">
                                 <input type="checkbox" id="wifiwidget" name="wifi" name-title="WiFi" value="1">
                                 <label for="wifiwidget">WiFi</label>
                              </div>
                           </div>
                           <button class="wpresidence_button" id="advanced_submit_widget">Search</button>
                        </form>
                     </li>
                     <li id="property_categories-1" class="widget-container property_categories">
                        <h3 class="widget-title-sidebar">Our Listings</h3>
                        <div class="category_list_widget">
                           <ul>
                              <li><a href="https://lasvegas.wpresidence.net/property_category/apartments/">Apartments</a><span class="category_no">(2)</span></li>
                              <li><a href="https://lasvegas.wpresidence.net/property_category/condos/">Condos</a><span class="category_no">(1)</span></li>
                              <li><a href="https://lasvegas.wpresidence.net/property_category/duplexes/">Duplexes</a><span class="category_no">(2)</span></li>
                              <li><a href="https://lasvegas.wpresidence.net/property_category/houses/">Houses</a><span class="category_no">(3)</span></li>
                              <li><a href="https://lasvegas.wpresidence.net/property_category/villas/">Villas</a><span class="category_no">(6)</span></li>
                           </ul>
                        </div>
                     </li>
                     <li id="footer_latest_widget-1" class="widget-container latest_listings">
                        <h3 class="widget-title-sidebar">Latest Listings</h3>
                        <script type="text/javascript">
                           //<![CDATA[
                           jQuery(document).ready(function(){
                              estate_sidebar_slider_carousel();
                           });
                           //]]>
                        </script>
                        <div class="latest_listings list_type">
                           <div class="widget_latest_internal" data-link="https://lasvegas.wpresidence.net/estate_property/villa-with-amazing-panoramic-view/">
                              <div class="widget_latest_listing_image"> <a href="https://lasvegas.wpresidence.net/estate_property/villa-with-amazing-panoramic-view/"><img src="https://lasvegas.wpresidence.net/wp-content/uploads/2021/10/house8-105x70.jpg" alt="slider-thumb" data-original="https://lasvegas.wpresidence.net/wp-content/uploads/2021/10/house8-105x70.jpg" class="lazyload img_responsive" height="70" width="105" /></a> </div>
                              <div class="listing_name "><span class=widget_latest_title><a href="https://lasvegas.wpresidence.net/estate_property/villa-with-amazing-panoramic-view/">Villa with Amazing View</a></span> <span class=widget_latest_price>5.500.000 $ <span class="price_label"></span></span> </div>
                           </div>
                           <div class="widget_latest_internal" data-link="https://lasvegas.wpresidence.net/estate_property/townhouse-for-sale/">
                              <div class="widget_latest_listing_image"> <a href="https://lasvegas.wpresidence.net/estate_property/townhouse-for-sale/"><img src="https://lasvegas.wpresidence.net/wp-content/uploads/2021/11/home2-105x70.jpg" alt="slider-thumb" data-original="https://lasvegas.wpresidence.net/wp-content/uploads/2021/11/home2-105x70.jpg" class="lazyload img_responsive" height="70" width="105" /></a> </div>
                              <div class="listing_name "><span class=widget_latest_title><a href="https://lasvegas.wpresidence.net/estate_property/townhouse-for-sale/">Townhouse for Sale</a></span> <span class=widget_latest_price>210.000 $ <span class="price_label"></span></span> </div>
                           </div>
                           <div class="widget_latest_internal" data-link="https://lasvegas.wpresidence.net/estate_property/townhouse-for-rent-2/">
                              <div class="widget_latest_listing_image"> <a href="https://lasvegas.wpresidence.net/estate_property/townhouse-for-rent-2/"><img src="https://lasvegas.wpresidence.net/wp-content/uploads/2021/09/interior-4-105x70.jpg" alt="slider-thumb" data-original="https://lasvegas.wpresidence.net/wp-content/uploads/2021/09/interior-4-105x70.jpg" class="lazyload img_responsive" height="70" width="105" /></a> </div>
                              <div class="listing_name "><span class=widget_latest_title><a href="https://lasvegas.wpresidence.net/estate_property/townhouse-for-rent-2/">Townhouse for Rent</a></span> <span class=widget_latest_price>100 $ <span class="price_label">/ sq. ft.</span></span> </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <?php include("subfooter.php"); ?>
   </div> 
   <?php include('footer.php'); ?>
</html>