<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<?php
include("header.php");
include("Helper/connect.php");
$pid = $_GET['pid'];
$pro = $link->rawQueryOne("select * from blog_master where PK_BlogID=?", array($_REQUEST['pid']));
if ($link->count > 0) {
	$blog_id = $pro['PK_BlogID'];
}




// Logic for next and previous button


$Blog_id_arr = array();
$fetch_all_data_query = mysqli_query($con, "SELECT PK_BlogID  from blog_master WHERE isDeleted = 0 AND FK_Status = 10");

while ($row = mysqli_fetch_assoc($fetch_all_data_query)) {
	array_push($Blog_id_arr, $row['PK_BlogID']);
}



for ($i = 0; $i < count($Blog_id_arr); $i++) {
	if ($pid == $Blog_id_arr[$i]) {
		$next = $Blog_id_arr[$i + 1];
		$previous = $Blog_id_arr[$i - 1];
	}
}



?>


<?php include("subHeader.php"); ?>
<div class="container content_wrapper">

	<div id="post" class="row post-169 post type-post status-publish format-standard has-post-thumbnail hentry category-selling-properties category-real-estate tag-real-estate-2 tag-selling-your-home">
		<div class="col-xs-12 col-md-12 breadcrumb_container">
			<ol class="breadcrumb">
				<li><a href="https://lasvegas.wpresidence.net/">Home</a></li>
				<li><a href="https://lasvegas.wpresidence.net/category/selling-properties/">Buying Properties</a>, <a href="https://lasvegas.wpresidence.net/category/real-estate/">Real Estate</a></li>

			</ol>
		</div>
		<div class=" col-md-9 rightmargin single_width_blog">
			<span class="entry-title listing_loader_title">Your search results</span>
			<div class="spinner" id="listing_loader">
				<div class="rect1"></div>
				<div class="rect2"></div>
				<div class="rect3"></div>
				<div class="rect4"></div>
				<div class="rect5"></div>
			</div>
			<div id="listing_ajax_container"></div>
			<div class="single-content single-blog">

				<div id="carousel-example-generic" class="carousel slide post-carusel" data-ride="carousel" data-interval="false">
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
					</ol>
					<div class="carousel-inner">
						<div class="item  active ">
							<a href="https://las-vegas.b-cdn.net/wp-content/uploads/2021/09/interior38.jpg" rel="prettyPhoto" title="" class="prettygalery">
								<img width="800" height="533" src="<?php echo $pro['BlogThumbImage'] ?>" alt="" class="img-responsive lightbox_trigger" />
							</a>
							<div class="carousel-caption"></div>
						</div>
					</div>
					<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
						<i class="demo-icon icon-left-open-big"></i>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
						<i class="demo-icon icon-right-open-big"></i>
					</a>
				</div>
				<h1 class="entry-title single-title"><?php echo $pro['BlogTitle'] ?></h1>
				<div class="meta-info">
					<div class="meta-element"> <i class="far fa-calendar-alt meta_icon firsof"></i>Posted by <?php echo $pro['BlogOwner'] ?> on <?php echo $pro['BlogDate'] ?> </div>
					<div class="meta-element"> <i class="far fa-file meta_icon"></i> <a href="https://lasvegas.wpresidence.net/category/selling-properties/">Buying Properties</a>, <a href="https://lasvegas.wpresidence.net/category/real-estate/">Real Estate</a></div>
					<!-- <div class="meta-element"> <i class="far fa-comment meta_icon"></i> 0 </div> -->
				</div>


				<div>
					<a href="https://las-vegas.b-cdn.net/wp-content/uploads/2021/09/interior38.jpg"><img width="800" height="533" src="<?php echo $pro['BlogImage'] ?>" alt="" sizes="(max-width: 800px) 100vw, 800px" /></a>

				</div>

				<p><?php echo $pro['BlogDescription'] ?> </p>


				<div class="prop_social_single">
					<a href="https://www.facebook.com/sharer.php?u=https://lasvegas.wpresidence.net/2014/05/27/these-were-the-most-expensive-las-vegas-condos/&amp;t=These+were+the+most+expensive+Las+Vegas+condos" target="_blank" class="share_facebook" rel="noreferrer"><i class="fab fa-facebook-f"></i></a>
					<a href="https://twitter.com/intent/tweet?text=These+were+the+most+expensive+Las+Vegas+condos+https%3A%2F%2Flasvegas.wpresidence.net%2F2014%2F05%2F27%2Fthese-were-the-most-expensive-las-vegas-condos%2F" class="share_tweet" target="_blank" rel="noreferrer"><i class="fab fa-twitter"></i></a>
					<a href="https://pinterest.com/pin/create/button/?url=https://lasvegas.wpresidence.net/2014/05/27/these-were-the-most-expensive-las-vegas-condos/&amp;media=https://lasvegas.wpresidence.net/wp-content/uploads/2021/11/house6.jpeg&amp;description=These+were+the+most+expensive+Las+Vegas+condos" target="_blank" class="share_pinterest" rel="noreferrer"> <i class="fab fa-pinterest-p"></i> </a>
					<a href="https://api.whatsapp.com/send?text=These+were+the+most+expensive+Las+Vegas+condos+https%3A%2F%2Flasvegas.wpresidence.net%2F2014%2F05%2F27%2Fthese-were-the-most-expensive-las-vegas-condos%2F" class="" rel="noreferrer"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
					<a href="https://lasvegas.wpresidence.net/cdn-cgi/l/email-protection#9bfef6faf2f7dbfef6faf2f7b5f8f4f6a4e8eef9f1fef8efa6cff3fee8feb0ecfee9feb0eff3feb0f6f4e8efb0fee3ebfef5e8f2edfeb0d7fae8b0cdfefcfae8b0f8f4f5fff4e8bdfaf6eba0f9f4ffe2a6f3efefebe8bea8dabea9ddbea9ddf7fae8edfefcfae8b5ecebe9fee8f2fffef5f8feb5f5feefbea9dda9abaaafbea9ddabaebea9dda9acbea9ddeff3fee8feb6ecfee9feb6eff3feb6f6f4e8efb6fee3ebfef5e8f2edfeb6f7fae8b6edfefcfae8b6f8f4f5fff4e8bea9dd" class="social_email"> <i class="far fa-envelope"></i></a>
				</div>
			</div>
			<div id="comments">
				<div id="respond" class="comment-respond">

				</div>
			</div>
			<div class="related_posts">
				<!-- <h3>Related Posts</h3> -->
				<div class="col-md-6  listing_wrapper blog2v">

				</div>

			</div>

		</div>

		<div class="clearfix visible-xs"></div>
		<div class="col-xs-12 col-md-3 widget-area-sidebar" id="primary">
			<div id="primary_sidebar_wrapper">
				<ul class="xoxo">

					<li id="footer_latest_widget-1" class="widget-container latest_listings">
						<?php include("latestlisting.php");  ?>

					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
</div>
<?php include("subFooter.php"); ?>
</div>

<div class="navigational_links">

<?php if($pid != $Blog_id_arr[0]){

?>

	<div class="nav-prev-wrapper">
		<div class="nav-prev">
			

			<a href="SingleBlog.php?pid=<?php echo $previous; ?>" rel="prev">Previous</a> <i class="fas fa-angle-left"></i>


		</div>
	</div>
	<?php } ?>

	<?php if($pid != end($Blog_id_arr))
	{ ?>

	<div class="nav-next-wrapper">
		<div class="nav-next">
			<i class="fas fa-angle-right"></i>


			<a href="SingleBlog?pid=<?php echo $next; ?>" rel="next">Next</a>

		</div>
	</div>
	<?php } ?>
</div>
<?php include("footer.php"); ?>

</html>