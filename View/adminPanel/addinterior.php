<?php
	ob_start();
?>
<?php
include("../../Helper/connect.php");

$InteriorTitle = $_POST['InteriorTitle'];
$InteriorAlias = $_POST['InteriorAlias'];


// Seo tools
$Keywords = $_POST['Keywords'];
$MetaTitle = $_POST['MetaTitle'];
$MetaDescription = $_POST['MetaDescription'];
$altTag = $_POST['altTag'];

    $errMsg = '';
  

    
    if($errMsg == ''){
            $ad= $link->insert("interior_master",array("InteriorTitle"=>$InteriorTitle,"Alias"=>$InteriorAlias,"Keywords"=>$Keywords,"altTag"=>$altTag,"MetaDescription"=>$MetaDescription,"MetaTitle"=>$MetaTitle));
    }

    if($ad) {
        if ($_FILES['GalleryImage1']['size'] > 0) {
            $result = addImage('GalleryImage1',$InteriorAlias);
            if($result)
            {
                $link->where('PK_interior',$ad);
                    $a1=$link->update("interior_master",array("GalleryImage1"=>$result));
                    if($a1)
                    {		
                        echo "successfully uploded";
                    }	
                    else {
                        echo "failed";
                    }
            }
            
        }
        if ($_FILES['GalleryImage2']['size'] > 0) {
            $result = addImage('GalleryImage1',$InteriorAlias);
            if($result)
            {
                $link->where('PK_interior',$ad);
                    $a1=$link->update("interior_master",array("GalleryImage2"=>$result));
                    if($a1)
                    {		
                    }	
                    else {
                        //echo $ad;
                    }
            }
            
        }
        if ($_FILES['GalleryImage3']['size'] > 0) {
            $result = addImage('GalleryImage3',$InteriorAlias);
            if($result)
            {
                $link->where('PK_interior',$ad);
                    $a1=$link->update("interior_master",array("GalleryImage3"=>$result));
                    if($a1)
                    {		
                    }	
                    else {
                        //echo $ad;
                    }
            }
            
        }
        if ($_FILES['GalleryImage4']['size'] > 0) {
            $result = addImage('GalleryImage4',$InteriorAlias);
            if($result)
            {
                $link->where('PK_interior',$ad);
                    $a1=$link->update("interior_master",array("GalleryImage4"=>$result));
                    if($a1)
                    {		
                    }	
                    else {
                        //echo $ad;
                    }
            }
            
        }
    
     
    }
    header('location:Interior.php');

    function  addImage($imageName,$InteriorAlias){
		$target_dir = "../../uploads/interior-".$InteriorAlias."-";
		$target_file = $target_dir . basename($_FILES[$imageName]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
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




?>