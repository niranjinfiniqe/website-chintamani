<?php
	ob_start();
?>
<?php
include("../../Helper/connect.php");

	$BlogTitle=$_POST['BlogTitle'];
	$BlogOwner=$_POST['BlogOwner'];
	$BlogDate=$_POST['BlogDate'];
	$BlogAlias = $_POST['BlogAlias'];
	$ReadingTime = $_POST["ReadingTime"];
	$BlogStatus = $_POST["BlogStatus"];
	$DisplayOrder = $_POST["DisplayOrder"];
    $BlogDescription = $_POST["BlogDescription"];
	// SEO tool
	$MetaTitle = $_POST["MetaTitle"];
	$MetaDescription =$_POST["MetaDescription"];
	$altTag =$_POST["altTag"];
	$BlogOgTitle =$_POST["BlogOgTitle"];
	$BlogOgTag =$_POST["BlogOgTag"];
	$TwitterTag = $_POST["TwitterTag"];
	$HiTag=$_POST["HiTag"];
	$Keywords=$_POST["Keywords"];

	$errMsg = '';
	$status = '';

	if($BlogDate === ""  ){
		date_default_timezone_set('Asia/Kolkata');
		$date = date('d-m-y');
		$BlogDate = $date;
	}

	if($errMsg == ''){
	  $ad= $link->insert("blog_master", array("BlogTitle"=>$BlogTitle,"BlogOwner"=>$BlogOwner,"BlogDate"=>$BlogDate,"BlogAlias"=>$BlogAlias,"ReadingTime"=>$ReadingTime,"FK_Status"=>$BlogStatus,"BlogDescription"=>$BlogDescription,"DisplayOrder"=>$DisplayOrder,"MetaTitle"=>$MetaTitle,"MetaDescription"=>$MetaDescription,"altTag"=>$altTag,"BlogOgTitle"=>$BlogOgTitle,"BlogOgTag"=>$BlogOgTag,"TwitterTag"=>$TwitterTag,"HiTag"=>$HiTag,"Keywords"=>$Keywords));
	}

//   Code to add images to database
if ($ad) {

	if ($_FILES['BlogThumbImage']['size'] > 0) {
		// echo $ad;

		// $pimage="product_image".$ad.'.'.$ext;	

		$result = addImage('BlogThumbImage');
		if ($result) {
			echo "hello";
			$link->where('PK_BlogID', $ad);
			$a1 = $link->update("blog_master", array("BlogThumbImage" => $result));
			if ($a1) {
				echo "successfully uploaded";
			} else {
				echo "failed";
			}
		}
	}


	if ($_FILES['BlogImage']['size'] > 0) {
		$result = addImage('BlogImage');
		if ($result) {
			$link->where('PK_BlogID', $ad);
			$a1 = $link->update("blog_master", array("BlogImage" => $result));
			if ($a1) {
				echo "successfully uploaded";
			} else {
				echo "failed";
			}
		}
	}


}
	

function  addImage($imageName){
		$target_dir = "../../uploads/blog";
		$target_file = $target_dir . basename($_FILES[$imageName]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); // to check whether the image is png,jpeg 
		// Check if image file is a actual image or fake image
		$check = getimagesize($_FILES[$imageName]["tmp_name"]);
		if($check !== false) {
			echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
		} else {
			echo "File is not an image.";
			$uploadOk = 0;
		}

		
		if (file_exists($target_file)) {
			echo "Sorry, file already exists.";
			$uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif") {
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
			
			if (move_uploaded_file($_FILES[$imageName]["tmp_name"], $target_file)) {
				return $target_file;
			}
		}
}

header('location:blogs.php');

	

?>