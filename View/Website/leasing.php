<?php
include ("../../Helper/connect.php");
?>

<!DOCTYPE html>
<html lang="en-US">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <div class="website-wrapper" id="all_wrapper" >
         <div class="container main_wrapper  wide  has_header_type1   topbar_transparent   contentheader_center  cheader_center " style="background:pink">
            <?php include ('header.php'); ?> 
                     
            <!-- Breadcrumb -->
            <div class="pre_search_wrapper"></div>
            <div class="container content_wrapper">
               <div class="row" >
                  <div class="col-xs-12 col-md-12 breadcrumb_container" style="background:pink">
                     <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Leasing Properties</li>
                     </ol>
                  </div>
                  <div class="col-md-9 rightmargin">
                     <h1 class="entry-title title_prop">Properties on Lease</h1>
                     <div class="single-content"></div>
                     <div class="listing_filters_head">
                        <input type="hidden" id="page_idx" value="93">
                        <div class="dropdown listing_filter_select filter_action_category">
                           <div data-toggle="dropdown" id="a_filter_action" class="filter_menu_trigger" data-value="Types"> Types <span class="caret caret_filter"></span> </div>
                           <ul class="dropdown-menu filter_menu" role="menu" aria-labelledby="a_filter_action">
                              <li role="presentation" data-value="all">Types</li>
                              <li role="presentation" data-value="rentals">Rentals</li>
                              <li role="presentation" data-value="sales">Sales</li>
                           </ul>
                        </div>
                        <div class="dropdown listing_filter_select filter_category">
                           <div data-toggle="dropdown" id="a_filter_categ" class="filter_menu_trigger" data-value="Categories"> Categories <span class="caret caret_filter"></span> </div>
                           <ul class="dropdown-menu filter_menu" role="menu" aria-labelledby="a_filter_categ">
                              <li role="presentation" data-value="all">Categories</li>
                              <li role="presentation" data-value="apartments">Apartments</li>
                              <li role="presentation" data-value="condos">Condos</li>
                              <li role="presentation" data-value="duplexes">Duplexes</li>
                              <li role="presentation" data-value="houses">Houses</li>
                              <li role="presentation" data-value="villas">Villas</li>
                           </ul>
                        </div>
                        <div class="dropdown listing_filter_select filter_area">
                           <div data-toggle="dropdown" id="a_filter_areas" class="filter_menu_trigger" data-value="Areas">Areas<span class="caret caret_filter"></span> </div>
                           <ul id="filter_area" class="dropdown-menu filter_menu" role="menu" aria-labelledby="a_filter_areas">
                              <li role="presentation" data-value="all">Areas</li>
                              <li role="presentation" data-value="downtown" data-parentcity="las-vegas">Downtown</li>
                              <li role="presentation" data-value="downtown-east" data-parentcity="las-vegas">Downtown East</li>
                              <li role="presentation" data-value="meadows-village" data-parentcity="las-vegas">Meadows Village</li>
                              <li role="presentation" data-value="the-strip" data-parentcity="las-vegas">The Strip</li>
                              <li role="presentation" data-value="winchester" data-parentcity="las-vegas">Winchester</li>
                           </ul>
                        </div>
                        <div class="dropdown listing_filter_select order_filter ">
                           <div data-toggle="dropdown" id="a_filter_order" class="filter_menu_trigger" data-value="1"> Price High to Low <span class="caret caret_filter"></span> </div>
                           <ul id="filter_order" class="dropdown-menu filter_menu" role="menu" aria-labelledby="a_filter_order">
                              <li role="presentation" data-value="1">Price High to Low</li>
                              <li role="presentation" data-value="2">Price Low to High</li>
                              <!-- <li role="presentation" data-value="3">Newest first</li>
                              <li role="presentation" data-value="4">Oldest first</li>
                              <li role="presentation" data-value="11">Newest Edited</li>
                              <li role="presentation" data-value="12">Oldest Edited </li> -->
                              <li role="presentation" data-value="0">Default</li>
                           </ul>
                        </div>
                        <div class="listing_filter_select listing_filter_views grid_filter_wiew">
                           <div id="grid_view" class="icon_selected">
                              <i class="fas fa-th"></i>
                           </div>
                        </div>
                        <div class="listing_filter_select listing_filter_views list_filter_wiew" >
                           <div id="list_view" class="">
                              <i class="fas fa-bars"></i>
                           </div>
                        </div>
                     </div>
                     <div class="spinner" id="listing_loader"  > 
                        <div class="new_prelader"></div>
                     </div>
                     <div id="listing_ajax_container" class="" >

                     <?php
$sql = $link->rawQuery("select * from leasing_master where isDeleted=0 and FK_Status=8 ");

foreach ($sql as $lease)
{

?>
                     <div class="col-md-6 listing_wrapper" data-modal-title="<?php echo $lease['Lease_Name'] ?>" data-modal-link="" data-listid="139">
                        <div class="property_listing  property_card_default"  data-link="">
                           <div class="listing-unit-img-wrapper">
                              <div class="prop_new_details">
                                 <div class="prop_new_details_back"></div>
                                 <div class="property_media">
                                    <i class="fas fa-video"></i>
                                    <i class="fas fa-camera"></i> 6
                                 </div>
                                 <div class="property_location_image">
                                    <span class="property_marker"></span><a href="estate_property.php?leaseID=<?php echo $lease["PK_lease"]; ?>">Downtown</a>, <a href="estate_property.php?leaseID=<?php echo $lease["PK_lease"]; ?>" rel="tag">Las Vegas</a>
                                 </div>
                                 <div class="featured_gradient"></div>
                              </div>
                              <a href="estate_property.php?leaseID=<?php echo $lease["PK_lease"]; ?>" target="_self"><img width="525" height="328" src="https://las-vegas.b-cdn.net/wp-content/uploads/2021/10/house8-525x328.jpg" class="lazyload img-responsive wp-post-image" alt="" loading="lazy" data-original="https://las-vegas.b-cdn.net/wp-content/uploads/2021/10/house8-525x328.jpg" /></a> 
                              <div class="tag-wrapper">
                                 <div class="featured_div">Featured</div>
                                 <div class="status-wrapper">
                                    <div class="action_tag_wrapper Sales ">Sales</div>
                                 </div>
                              </div>
                           </div>
                           <div class="property-unit-information-wrapper" style ="background:pink">
                              <h4>
                                 <a href="estate_property.php?leaseID=<?php echo $lease["PK_lease"]; ?>">
                                 <?php echo $lease['Lease_Name'] ?></a>
                              </h4>
                              <div class="listing_unit_price_wrapper">
                              <?php echo $lease['Price'] ?> <span class="price_label"></span>
                              </div>
                              <div class="listing_details the_grid_view">
                              <?php echo $lease['ShortDescription'] ?><a href="estate_property.php?leaseID=<?php echo $lease["PK_lease"]; ?>" class="unit_more_x"> ...</a> 
                              </div>
                              <div class="listing_details the_list_view">
                              <?php echo $lease['ShortDescription'] ?> <a href=estate_property.php?leaseID=<?php echo $lease["PK_lease"]; ?>" class="unit_more_x"> ...</a> 
                              </div>
                              <div class="property_listing_details" style="background:yellow">
                                 <span class="inforoom">
                                    <svg viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M17.6702 6.14728V1.12908C17.6699 0.829675 17.5496 0.542695 17.3354 0.33099C17.1213 0.119457 16.831 0.000335493 16.5282 0H2.47158C2.16874 0.000336053 1.87846 0.119457 1.66432 0.33099C1.45018 0.542691 1.32986 0.829671 1.32952 1.12908V6.14728C0.945097 6.26691 0.60909 6.50432 0.369977 6.82507C0.131029 7.14598 0.00152709 7.5336 0 7.93211V12.0755C0.000339918 12.2751 0.080557 12.4665 0.223311 12.6076C0.366066 12.7486 0.55964 12.8281 0.76136 12.8282H1.22057V14.2473C1.22074 14.4469 1.30113 14.6383 1.44388 14.7794C1.58664 14.9204 1.78004 14.9998 1.98193 15H3.12177C3.32349 14.9998 3.51706 14.9204 3.65981 14.7794C3.80257 14.6383 3.88279 14.4469 3.88313 14.2473V12.8282H15.1166V14.2473C15.1169 14.4469 15.1971 14.6383 15.3399 14.7794C15.4826 14.9204 15.6762 14.9998 15.8779 15H17.0178C17.2197 14.9998 17.4132 14.9204 17.5558 14.7792C17.6986 14.6383 17.779 14.4469 17.7791 14.2473V12.8282H18.2386C18.4405 12.8281 18.6339 12.7486 18.7767 12.6076C18.9194 12.4665 18.9997 12.2751 19 12.0755V7.93211C18.9985 7.53358 18.869 7.14581 18.6299 6.8249C18.3909 6.50416 18.0547 6.26673 17.6701 6.14712L17.6702 6.14728ZM2.09091 1.12908C2.09108 0.921244 2.26137 0.75289 2.4716 0.752722H16.5282H16.528C16.7382 0.75289 16.9085 0.921244 16.9087 1.12908V6.05051H15.8486C15.8938 5.92987 15.9174 5.80252 15.9188 5.67415V4.56457C15.9184 4.26517 15.7979 3.97819 15.584 3.76649C15.3698 3.55478 15.0796 3.43566 14.7767 3.4355H10.8716C10.5689 3.43566 10.2787 3.55478 10.0645 3.76649C9.85039 3.97819 9.7299 4.26517 9.72956 4.56457V5.67415C9.73092 5.80252 9.75472 5.92987 9.79975 6.05051H9.20001C9.24522 5.92987 9.26884 5.80252 9.2702 5.67415V4.56457C9.26986 4.26517 9.14937 3.97819 8.93523 3.76649C8.72127 3.55478 8.43082 3.43566 8.12814 3.4355H4.22271C3.91987 3.43566 3.62959 3.55478 3.41562 3.76649C3.20148 3.97819 3.08099 4.26517 3.08065 4.56457V5.67415C3.08201 5.80252 3.10563 5.92987 3.15084 6.05051H2.09071L2.09091 1.12908ZM10.4912 5.67415V4.56457C10.4914 4.35674 10.6618 4.18822 10.8719 4.18822H14.777C14.9872 4.18822 15.1575 4.35674 15.1576 4.56457V5.67415C15.1575 5.88182 14.9872 6.05034 14.777 6.05051H10.8719C10.6618 6.05034 10.4914 5.88182 10.4912 5.67415ZM3.84249 5.67415V4.56457C3.84266 4.35674 4.01295 4.18822 4.22318 4.18822H8.12861C8.33883 4.18822 8.50912 4.35674 8.50929 4.56457V5.67415C8.50912 5.88182 8.33883 6.05034 8.12861 6.05051H4.22318C4.01295 6.05034 3.84266 5.88182 3.84249 5.67415ZM3.12276 14.2473H1.98223V12.8282H3.12207L3.12276 14.2473ZM17.0188 14.2473H15.8781V12.8282H17.0179L17.0188 14.2473ZM18.2394 12.0755H0.761433V10.4636H18.2385L18.2394 12.0755ZM0.761433 9.71087V7.93211C0.761773 7.63271 0.882265 7.34573 1.0964 7.13402C1.31037 6.92232 1.60082 6.8032 1.90349 6.80303H17.0965C17.3993 6.8032 17.6896 6.92232 17.9038 7.13402C18.1177 7.34572 18.2382 7.6327 18.2386 7.93211V9.71087H0.761433Z" fill="black" />
                                    </svg>
                                    5
                                 </span>
                                 <span class="infobath">
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M16.372 6.77159H2.53438V1.63184C2.53354 1.37184 2.63335 1.12199 2.81207 0.936247C2.99079 0.750676 3.23399 0.644246 3.48909 0.640102C3.74421 0.635959 3.99065 0.734387 4.17509 0.91396C3.89895 1.3071 3.76845 1.78725 3.80671 2.26912C3.84511 2.75098 4.0499 3.20341 4.38476 3.54597L4.40691 3.56697V3.56683C4.58353 3.72469 4.85001 3.71597 5.01637 3.54683L7.22045 1.30054C7.38683 1.13111 7.39538 0.858973 7.23979 0.678968L7.21961 0.656825C6.88039 0.312537 6.43155 0.103389 5.95426 0.0669636C5.47696 0.0306777 5.00261 0.169536 4.617 0.458534C4.31422 0.159961 3.90814 -0.00489934 3.48693 0.000110949C3.06558 0.00496801 2.66328 0.17911 2.36738 0.484683C2.07134 0.790256 1.90566 1.20254 1.90634 1.63182V6.77158H0.627967C0.461442 6.77172 0.301926 6.83929 0.184187 6.95929C0.0664469 7.07929 0.000279897 7.24186 0 7.41157V8.14285C0.000280363 8.31242 0.0664434 8.47514 0.184187 8.59513C0.30193 8.71513 0.46145 8.78256 0.627967 8.78284H0.650394V10.9773V10.9771C0.650955 11.6177 0.822947 12.2458 1.14786 12.7942C1.47278 13.3426 1.93828 13.7901 2.49409 14.0889C2.49381 14.0956 2.491 14.102 2.491 14.1087V15.36C2.49128 15.5297 2.55745 15.6923 2.67519 15.8123C2.79293 15.9323 2.95259 15.9997 3.11897 16H3.95733C4.12386 15.9997 4.28337 15.9323 4.40111 15.8123C4.51885 15.6923 4.58502 15.5297 4.5853 15.36V14.4971H12.3725V15.36C12.3727 15.5297 12.439 15.6923 12.5566 15.8123C12.6743 15.9323 12.834 15.9997 13.0005 16H13.8389H13.8387C14.0052 15.9997 14.1648 15.9323 14.2825 15.8123C14.4002 15.6923 14.4665 15.5297 14.4667 15.36V14.1087L14.4665 14.1081H14.4667C15.0328 13.8134 15.5082 13.3652 15.8404 12.8127C16.1726 12.2603 16.3489 11.6251 16.3497 10.9771V8.78286H16.3722H16.372C16.5386 8.78258 16.6982 8.71515 16.8158 8.59515C16.9336 8.47515 16.9999 8.31243 17 8.14287V7.41158C16.9999 7.24187 16.9336 7.0793 16.8158 6.95931C16.6982 6.83931 16.5386 6.77173 16.372 6.77159H16.372ZM5.80343 0.699629C6.10565 0.699058 6.39958 0.800344 6.63957 0.987773L4.70968 2.95462C4.50055 2.67605 4.40145 2.32775 4.43186 1.97849C4.46228 1.62921 4.61983 1.30419 4.87381 1.0675C5.12766 0.83064 5.4593 0.699516 5.80343 0.699626L5.80343 0.699629ZM3.11912 15.36L3.12332 14.3505C3.3947 14.4316 3.6749 14.4785 3.95749 14.4896V15.3601L3.11912 15.36ZM13.8388 15.36H13.0006V14.4919C13.2842 14.4835 13.5658 14.4395 13.8388 14.3605V15.36ZM15.7218 10.9773H15.7219C15.7211 11.7409 15.423 12.473 14.8932 13.0129C14.3635 13.5529 13.6452 13.8564 12.896 13.8573H12.6926C12.6905 13.8573 12.6887 13.856 12.6866 13.856C12.6845 13.856 12.6827 13.8572 12.6806 13.8573H4.27757C4.27546 13.8573 4.27364 13.856 4.27154 13.856C4.26944 13.856 4.26761 13.8572 4.26551 13.8573H4.10431C3.35509 13.8565 2.63672 13.5529 2.107 13.0129C1.57713 12.473 1.27915 11.7409 1.27843 10.9773V8.78302H15.7218L15.7218 10.9773ZM16.3497 8.14288L0.628144 8.14302V7.41173H16.3723L16.3726 8.14302L16.3497 8.14288Z" fill="black" />
                                    </svg>
                                    3
                                 </span>
                                 <span class="infosize">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M0.500145 0H0.000160627V5.50004H1.0001V1.70713L5.14654 5.85362L5.85368 5.14647L1.70724 0.999979H5.50011V3.21257e-05L0.500145 0ZM14.5 0H15V5.50004H14.0001V1.70713L9.85362 5.85362L9.14648 5.14647L13.2929 0.999979H9.50005V3.21257e-05L14.5 0ZM15 15H9.50002V14.0001H13.2929L9.14644 9.85357L9.85359 9.14641L14 13.2929V9.49999H15L15 15ZM0.499984 15H0V9.49996H0.999935V13.2929L5.14638 9.14638L5.85352 9.85353L1.70708 14H5.49995V15L0.499984 15Z" fill="black" />
                                    </svg>
                                    <?php echo $lease["CarpetArea"];?>ft<sup>2</sup>
                                 </span>
                              </div>
                           </div>
                        </div>
                     </div>
                  
                  <?php
}
?></div>

                     <ul class="pagination pagination_nojax">
                        <li class="roundleft"><a href='https://lasvegas.wpresidence.net/properties-standard-list/'><i class="fas fa-angle-left"></i></a></li>
                        <li class="active"><a href="https://lasvegas.wpresidence.net/properties-standard-list/">1</a>
                        <li>
                        <li><a href="https://lasvegas.wpresidence.net/properties-standard-list/page/2/">2</a>
                        <li>
                        <li class="roundright"><a href='https://lasvegas.wpresidence.net/properties-standard-list/page/2/'><i class="fas fa-angle-right"></i></a>
                        <li>
                        <li class="roundright"><a href='https://lasvegas.wpresidence.net/properties-standard-list/page/2/'><i class="fa fa-angle-double-right"></i></a>
                        <li>
                     </ul>
                     <!-- <div class="single-content"></div> -->
                  </div>
                  <div class="clearfix visible-xs" style="background:pink"></div>
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
                              <input type="hidden" id="wpestate_change_currency" value="3406526ee8" /> 
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
                              <input type="hidden" id="wpestate_change_measure" value="4eb37b4917" /> 
                           </li>
                           <li id="advanced_search_widget-1" class="widget-container advanced_search_sidebar boxed_widget">
                              <h3 class="widget-title-sidebar">Advanced Search</h3>
                              <form role="search" method="get" action="https://lasvegas.wpresidence.net/advanced-search/">
                                 <input type="hidden" id="wpestate_regular_search_nonce" name="wpestate_regular_search_nonce" value="9f03c42894" /><input type="hidden" name="_wp_http_referer" value="/properties-standard-list/" /><input type="text" id="sidebar-adv_location_" class="form-control adv_locations_search" name="adv_location" placeholder="Enter an address, state, city, area or zip code" value=""><script data-cfasync="false" src="https://lasvegas.wpresidence.net/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">
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
                                    <div class="widget_latest_listing_image"> <a href="https://lasvegas.wpresidence.net/estate_property/villa-with-amazing-panoramic-view/"><img src="https://las-vegas.b-cdn.net/wp-content/uploads/2021/10/house8-105x70.jpg" alt="slider-thumb" data-original="https://las-vegas.b-cdn.net/wp-content/uploads/2021/10/house8-105x70.jpg" class="lazyload img_responsive" height="70" width="105" /></a> </div>
                                    <div class="listing_name "><span class=widget_latest_title><a href="https://lasvegas.wpresidence.net/estate_property/villa-with-amazing-panoramic-view/">Villa with Amazing View</a></span> <span class=widget_latest_price>5.500.000 $ <span class="price_label"></span></span> </div>
                                 </div>
                                 <div class="widget_latest_internal" data-link="https://lasvegas.wpresidence.net/estate_property/townhouse-for-sale/">
                                    <div class="widget_latest_listing_image"> <a href="https://lasvegas.wpresidence.net/estate_property/townhouse-for-sale/"><img src="https://las-vegas.b-cdn.net/wp-content/uploads/2021/11/home2-105x70.jpg" alt="slider-thumb" data-original="https://las-vegas.b-cdn.net/wp-content/uploads/2021/11/home2-105x70.jpg" class="lazyload img_responsive" height="70" width="105" /></a> </div>
                                    <div class="listing_name "><span class=widget_latest_title><a href="https://lasvegas.wpresidence.net/estate_property/townhouse-for-sale/">Townhouse for Sale</a></span> <span class=widget_latest_price>210.000 $ <span class="price_label"></span></span> </div>
                                 </div>
                                 <div class="widget_latest_internal" data-link="https://lasvegas.wpresidence.net/estate_property/townhouse-for-rent-2/">
                                    <div class="widget_latest_listing_image"> <a href="https://lasvegas.wpresidence.net/estate_property/townhouse-for-rent-2/"><img src="https://las-vegas.b-cdn.net/wp-content/uploads/2021/09/interior-4-105x70.jpg" alt="slider-thumb" data-original="https://las-vegas.b-cdn.net/wp-content/uploads/2021/09/interior-4-105x70.jpg" class="lazyload img_responsive" height="70" width="105" /></a> </div>
                                    <div class="listing_name "><span class=widget_latest_title><a href="https://lasvegas.wpresidence.net/estate_property/townhouse-for-rent-2/">Townhouse for Rent</a></span> <span class=widget_latest_price>100 $ <span class="price_label">/ sq. ft.</span></span> </div>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <?php include ('footer.php'); ?>
</html>
