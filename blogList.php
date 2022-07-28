<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<?php
include("header.php");
include("Helper/connect.php");

$exce = mysqli_query($con,"select * from blog_master where isDeleted = 0 and FK_Status = 10");
// For Pagination
$Total_no_of_rows = mysqli_num_rows($exce);
$rows_to_be_displayed = "6";
$no_of_pages = ceil($Total_no_of_rows / $rows_to_be_displayed);

if (isset($_GET["page_id"])) {
    $Pageid = $_GET["page_id"];
} else {

    $Pageid = 1;
}
$offset  = ($Pageid - 1) * $rows_to_be_displayed;
// offset- The number after which need to fetch the rows.
$query_for_pagniation = "select * from blog_master where isDeleted=0 and FK_Status = 10 LIMIT {$offset},{$rows_to_be_displayed}";
$exce_for_pagination = mysqli_query($con, $query_for_pagniation);


?>

<div class="website-wrapper" id="all_wrapper">
	<div class="container main_wrapper  wide  has_header_type1   topbar_transparent   contentheader_center  cheader_center ">
		<?php include("subHeader.php"); ?>

		<div class="pre_search_wrapper"></div>
		<div class="container content_wrapper">
			<div class="row">
				<!-- <div class="wpestate_header_image full_screen_no parallax_effect_yes" style="background-image:url(https://madrid.wpresidence.net/wp-content/uploads/2021/11/interior_grey_bg-e1636449434931.jpeg); height:450px; ">
					<div class="wpestate_header_image_overlay" style="background-color:#2e2525;opacity:0.6;background-image:url();"></div>
					<div class="heading_over_image_wrapper">
						<h1 class="heading_over_image">Real Estate Blog</h1>
						<div class="subheading_over_image">Read about the latest industry news</div>
					</div>
				</div> -->
				<div class="col-xs-12 col-md-12 breadcrumb_container">
					<ol class="breadcrumb">
						<li><a href="https://lasvegas.wpresidence.net/">Home</a></li>
						<li class="active">Agents List</li>
					</ol>
				</div>
				<div class=" col-md-12 rightmargin ">
					<span class="entry-title listing_loader_title">Your search results</span>
					<div class="spinner" id="listing_loader">
						<div class="rect1"></div>
						<div class="rect2"></div>
						<div class="rect3"></div>
						<div class="rect4"></div>
						<div class="rect5"></div>
					</div>
					<div id="listing_ajax_container"></div>
					<h1 class="entry-title">Blog Details</h1>

					<div id="listing_ajax_container_agent">
						<?php
						// $sql = mysqli_query($con, "select * from project_master where isDeleted=0 ");
						foreach ($exce_for_pagination as $pro) {
						?>

<div class="col-md-4  listing_wrapper blog2v">
									<div class="property_listing_blog" data-link="https://lasvegas.wpresidence.net/2016/03/04/top-10-best-appreciating-condos-in-las-vegas/">
										<div class="blog_unit_image"><a href="https://lasvegas.wpresidence.net/2016/03/04/top-10-best-appreciating-condos-in-las-vegas/"><img width="525" height="328" src="<?php echo $pro['BlogThumbImage']?>" class="lazyload img-responsive wp-post-image" alt="" loading="lazy" data-original="https://las-vegas.b-cdn.net/wp-content/uploads/2016/03/portrait__interior9-525x328.jpg" /></div>
										<div><h4><a href="SingleBlog?pid=<?php echo $pro["PK_BlogID"]; ?>">
												<?php echo $pro['BlogTitle'] ;?></a>
										</h4></div>
										<div class="blog_unit_meta">
										<a href="SingleBlog?pid=<?php echo $pro["PK_BlogID"]; ?>">								
										<?php echo $pro['BlogDate'] ?></a>
										</div>
										<div class="listing_details the_grid_view">
										
											<a href="SingleBlog?pid=<?php echo $pro["PK_BlogID"]; ?>">				
											<span style="display:inline-block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 49ch;"><?php echo $pro['BlogDescription'] ;?></span></a>
											</div>
										<a class="read_more" href="SingleBlog?pid=<?php echo $pro["PK_BlogID"]; ?>"> Continue reading<i class="fas fa-angle-right"></i> </a>
										
									</div>
</div>
						<?php
						}
						?>


					</div>

					<ul class="pagination pagination_nojax">

<style>
	#hover:hover {
		cursor: pointer;
	}
</style>

<?php

for ($i = 1; $i <= $no_of_pages; $i++) {
?>

				<li class="<?php if ($Pageid == $i) echo 'active'; ?>"> <a id="hover" href="blogList?page_id=<?php echo $i;?>"><?php echo $i; ?></a>
		<li>
	<?php } ?>



</ul>





				</div>

			</div>

		</div>
		<?php include("subFooter.php"); ?>

	</div>
	<?php include("footer.php"); ?>

</html>