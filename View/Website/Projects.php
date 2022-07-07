<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<?php
include("header.php");
include("../../Helper/connect.php");

$exce = mysqli_query($con,"select * from project_master where isDeleted = 0");
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
$query_for_pagniation = "select * from project_master where isDeleted=0 LIMIT {$offset},{$rows_to_be_displayed}";
$exce_for_pagination = mysqli_query($con, $query_for_pagniation);


?>

<div class="website-wrapper" id="all_wrapper">
	<div class="container main_wrapper  wide  has_header_type1   topbar_transparent   contentheader_center  cheader_center ">
		<?php include("subheader.php"); ?>

		<div class="pre_search_wrapper"></div>
		<div class="container content_wrapper">
			<div class="row">
				<div class="wpestate_header_image full_screen_no parallax_effect_yes" style="background-image:url(https://madrid.wpresidence.net/wp-content/uploads/2021/11/about-us-photo.jpeg); height:450px; ">
					<div class="wpestate_header_image_overlay" style="background-color:#2e2525;opacity:0.6;background-image:url();"></div>
					<div class="heading_over_image_wrapper">
						<h1 class="heading_over_image">Madrid Real Estate Team</h1>
						<div class="subheading_over_image">Professional agents at your service</div>
					</div>
				</div>
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
					<h1 class="entry-title">Project Details</h1>

					<div id="listing_ajax_container_agent">
						<?php
						// $sql = mysqli_query($con, "select * from project_master where isDeleted=0 ");
						foreach ($exce_for_pagination as $pro) {
						?>

							<div class="col-md-4 listing_wrapper">
								<div class="agent_unit">

									<div class="agent-unit-img-wrapper" data-link="SingleProject.php?pid=<?php echo $pro["PK_Project"]; ?>">
									<a href="SingleProject.php?pid=<?php echo $pro["PK_Project"]; ?>"><img style="width:525px;height:380px" alt="<?php echo $pro['ThumbnailImageURL']; ?>" src="<?php echo $pro['ThumbnailImageURL']; ?>" class="lazyload img-responsive wp-post-image" alt="" loading="lazy" srcset="" sizes="(max-width: 500px) 100vw, 500px" /></a>

									</div>
									<a style="margin-left:93%;" href="<?php echo $pro['BrochureURL']; ?>" target="_blank"><i class="fas fa-download"></i></a>




									<h4> <a href="SingleProject.php?pid=<?php echo $pro["PK_Project"]; ?>">
											<?php echo $pro['ProjectName'] ?></a>
									</h4>





									<div class="agent_position">
										<?php echo $pro['ProjectType'] ?>
									</div>

									<div class="agent_card_content"><?php echo $pro['ShortDescription'] ?><a href="https://lasvegas.wpresidence.net/estate_agent/michaela-finney/" class="unit_more_x">...</a></div>

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

				<li class="<?php if ($Pageid == $i) echo 'active'; ?>"> <a id="hover" href="projects.php?page_id=<?php echo $i;?>"><?php echo $i; ?></a>
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