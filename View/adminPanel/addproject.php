<?php
	ob_start();
?>
<?php
include("../../Helper/connect.php");

	$project_name=$_POST['ProjectName'];
	$ProjectStatus=(int)$_POST['ProjectStatus'];
	$project_alias=$_POST['ProjectAlias'];
	$project_shortDes = $_POST['ProjectShortDescription'];
	$project_longdesc = $_POST['ProjectLongDescription'];
	$project_type = $_POST["ProjectType"];
	// SEO tool
	$project_keywords = $_POST["Keywords"];
	$project_HiTag =$_POST["HiTag"];
	$project_TwitterTag =$_POST["TwitterTag"];
	$project_ProjectOgTitle =$_POST["ProjectOgTitle"];
	$project_ProjectOgTag =$_POST["ProjectOgTag"];
	$project_Metatitle = $_POST["MetaTitle"];
	$project_MetaDescription=$_POST["MetaDescription"];
	$project_altTag=$_POST["altTag"];

	$errMsg = '';
	$status = '';
	//add status code instead of name
	if($ProjectStatus == 'In Progress'){
		$status = 7;

	} else if ($ProjectStatus == 'Completed') {
		$status = 5;
	} 

	  $ad= $link->insert("project_master", array("ProjectName"=>$project_name,"Alias"=>$project_alias,"ShortDescription"=>$project_shortDes,"LongDescription"=>$project_longdesc,"ProjectType"=>$project_type,"FK_Status"=>$status,"Keywords"=>$project_keywords,"HiTag"=>$project_HiTag,"MetaTitle"=>$project_Metatitle,"MetaDescription"=>$project_MetaDescription,"altTag"=>$project_altTag,"ProjectOgTitle"=>$project_ProjectOgTitle,"ProjectOgTag"=>$project_ProjectOgTag,"TwitterTag"=>$project_TwitterTag,));
	
		if($ad) {
		
			if ($_FILES['ProjectBrochureURL']['size'] > 0) {
				$result = addImage('ProjectBrochureURL',$project_alias);
				if($result)
				{
					$link->where('PK_Project',$ad);
						$a1=$link->update("project_master",array("BrochureURL"=>$result));
						if($a1)
						{		
							echo "successfully uploded";
						}	
						else {
							echo "failed";
						}
				}
				
			}
			if ($_FILES['ThumbnailImageURL']['size'] > 0) {
				$result = addImage('ThumbnailImageURL',$project_alias);
				if($result)
				{
					$link->where('PK_Project',$ad);
						$a1=$link->update("project_master",array("ThumbnailImageURL"=>$result));
						if($a1)
						{		
							echo "successfully uploded";
						}	
						else {
							echo "failed";
						}
				}
				
			}
			if ($_FILES['FloorPlantImageURL']['size'] > 0) {
				$result = addImage('FloorPlantImageURL',$project_alias);
				if($result)
				{
					$link->where('PK_Project',$ad);
						$a1=$link->update("project_master",array("FloorPlantImageURL"=>$result));
						if($a1)
						{		
							echo "successfully uploded";
						}	
						else {
							echo "failed";
						}
				}
				
			}
			if ($_FILES['ProjectImage1']['size'] > 0) {
				

				$result = addImage('ProjectImage1',$project_alias);
				if($result)
				{
					$link->where('PK_Project',$ad);
						$a1=$link->update("project_master",array("ProjectImage1"=>$result));
						if($a1)
						{		
							echo "successfully uploded";
						}	
						else {
							echo "failed";
						}
				}
				
			}
			if ($_FILES['ProjectImage2']['size'] > 0) {
				$result = addImage('ProjectImage2',$project_alias);
				if($result)
				{
					$link->where('PK_Project',$ad);
						$a1=$link->update("project_master",array("ProjectImage2"=>$result));
						if($a1)
						{		
							echo "successfully uploded";
						}	
						else {
							echo "failed";
						}
				}
				
			}
			if ($_FILES['ProjectImage3']['size'] > 0) {
				$result = addImage('ProjectImage3',$project_alias);
				if($result)
				{
					$link->where('PK_Project',$ad);
						$a1=$link->update("project_master",array("ProjectImage3"=>$result));
						if($a1)
						{		
							echo "successfully uploded";
						}	
						else {
							echo "failed";
						}
				}
				
			}
			if ($_FILES['ProjectImage4']['size'] > 0) {
				$result = addImage('ProjectImage4',$project_alias);
				if($result)
				{
					$link->where('PK_Project',$ad);
						$a1=$link->update("project_master",array("ProjectImage4"=>$result));
						if($a1)
						{		
							echo "successfully uploded";
						}	
						else {
							echo "failed";
						}
				}
				
			}
			if ($_FILES['ProjectImage5']['size'] > 0) {
				$result = addImage('ProjectImage5',$project_alias);
				if($result)
				{
					$link->where('PK_Project',$ad);
						$a1=$link->update("project_master",array("ProjectImage5"=>$result));
						if($a1)
						{		
							echo "successfully uploded";
						}	
						else {
							echo "failed";
						}
				}
				
			}
			if ($_FILES['ProjectImage6']['size'] > 0) {
				$result = addImage('ProjectImage6',$project_alias);
				if($result)
				{
					$link->where('PK_Project',$ad);
						$a1=$link->update("project_master",array("ProjectImage6"=>$result));
						if($a1)
						{		
							echo "successfully uploded";
						}	
						else {
							echo "failed";
						}
				}
				
			}
	
		}


function  addImage($imageName,$project_alias){
	
		$target_dir = "../../uploads/project-".$project_alias."-";
		// echo $target_dir;
		$target_file = $target_dir . basename($_FILES[$imageName]["name"]);
		// echo $target_file;
          $final_img_path =   "uploads/project-".$project_alias."-".basename($_FILES[$imageName]["name"]);
		  echo $final_img_path;
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// echo $imageFileType;
		// Check if image file is a actual image or fake image
		$check = filesize($_FILES[$imageName]["tmp_name"]);
		echo $check;
		if($check !== false) {
			// echo "File is an image - " . $check["mime"] . ".";
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
			&& $imageFileType != "gif" && $imageFileType !="pdf") {
			echo "Sorry, only JPG, JPEG, PDF, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
			
			if (move_uploaded_file($_FILES[$imageName]["tmp_name"], $target_file)) {
				return $final_img_path ;
				
			}
		}
}



		header('location:projects.php');

?>