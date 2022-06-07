<?php
	ob_start();
?>
<?php
include("../../Helper/connect.php");

    $leaseProjectName = $_POST['LeaseProjectName'];
    $shortDescription = $_POST['ProjectShortDescription'];
    $price = $_POST['Price'];
    $location = $_POST['Location'];
    $projectAlias = $_POST['ProjectAlias'];
    $longDescription = $_POST['ProjectLongDescription'];
    $area = $_POST['Area'];
    $parkingSpace = $_POST['ParkingSpace'];
    $aminities = $_POST['Aminities'];

    $errMsg = '';
    $aminitiesId = 0;
    $locationId = 0;

    //add Aminities ID
    if($aminities == 'Commercial'){
        $aminitiesId = 1;
    }else if($aminities == 'Residential'){
        $aminitiesId = 2;
    }
    //Add Location ID
    if($location == 'Commercial'){
        $locationId = 1;
    }else if($location == 'Residential'){
        $locationId = 2;
    }

    if(isset($_REQUEST['pid']) && $_REQUEST['pid'] >0) {
        $pid = $_REQUEST['pid'];
        $link->where("PK_Lease",$pid);
        $ad=$link->update("lease_master",array("ProjectName"=>$leaseProjectName,"Alias"=>$projectAlias,"ShortDescription"=>$shortDescription,"LongDescription"=>$longDescription,"Price"=>$price,"FK_Location"=>$locationId,"Area"=>$area,"ParkingSpace"=>$parkingSpace,"FK_Aminities"=>$aminitiesId));
    } else if($errMsg == ''){
            $ad= $link->insert("lease_master",array("ProjectName"=>$leaseProjectName,"Alias"=>$projectAlias,"ShortDescription"=>$shortDescription,"LongDescription"=>$longDescription,"Price"=>$price,"FK_Location"=>$locationId,"Area"=>$area,"ParkingSpace"=>$parkingSpace,"FK_Aminities"=>$aminitiesId));
    }

    if($ad) {
        if ($_FILES['ProductImage']['size'] > 0) {
            $result = addImage('ProductImage');
            if($result)
            {
                $link->where('PK_Lease',$ad);
                    $a1=$link->update("lease_master",array("ProductImage"=>$result));
                    if($a1)
                    {		
                    }	
                    else {
                        //echo $ad;
                    }
            }
            
        }
        if ($_FILES['ProjectFloorPlantURL']['size'] > 0) {
            $result = addImage('ProjectFloorPlantURL');
            if($result)
            {
                $link->where('PK_Lease',$ad);
                    $a1=$link->update("lease_master",array("ProjectFloorPlantURL"=>$result));
                    if($a1)
                    {		
                    }	
                    else {
                        //echo $ad;
                    }
            }
            
        }
        if ($_FILES['ProductBrocherURL']['size'] > 0) {
            $result = addImage('ProductBrocherURL');
            if($result)
            {
                $link->where('PK_Lease',$ad);
                    $a1=$link->update("lease_master",array("ProductBrocherURL"=>$result));
                    if($a1)
                    {		
                    }	
                    else {
                        //echo $ad;
                    }
            }
            
        }
        if ($_FILES['ProductImage1']['size'] > 0) {
            $result = addImage('ProductImage1');
            if($result)
            {
                $link->where('PK_Lease',$ad);
                    $a1=$link->update("lease_master",array("ProductImage1"=>$result));
                    if($a1)
                    {		
                    }	
                    else {
                        //echo $ad;
                    }
            }
            
        }
        if ($_FILES['ProductImage2']['size'] > 0) {
            $result = addImage('ProductImage2');
            if($result)
            {
                $link->where('PK_Lease',$ad);
                    $a1=$link->update("lease_master",array("ProductImage2"=>$result));
                    if($a1)
                    {		
                    }	
                    else {
                        //echo $ad;
                    }
            }
            
        }
        if ($_FILES['ProductImage3']['size'] > 0) {
            $result = addImage('ProductImage3');
            if($result)
            {
                $link->where('PK_Lease',$ad);
                    $a1=$link->update("lease_master",array("ProductImage3"=>$result));
                    if($a1)
                    {		
                    }	
                    else {
                        //echo $ad;
                    }
            }
            
        }
        if ($_FILES['ProductImage4']['size'] > 0) {
            $result = addImage('ProductImage4');
            if($result)
            {
                $link->where('PK_Lease',$ad);
                    $a1=$link->update("lease_master",array("ProductImage4"=>$result));
                    if($a1)
                    {		
                    }	
                    else {
                        //echo $ad;
                    }
            }
            
        }
        if ($_FILES['ProductImage5']['size'] > 0) {
            $result = addImage('ProductImage5');
            if($result)
            {
                $link->where('PK_Lease',$ad);
                    $a1=$link->update("lease_master",array("ProductImage5"=>$result));
                    if($a1)
                    {		
                    }	
                    else {
                        //echo $ad;
                    }
            }
            
        }
        if ($_FILES['ProductImage6']['size'] > 0) {
            $result = addImage('ProductImage6');
            if($result)
            {
                $link->where('PK_Lease',$ad);
                    $a1=$link->update("lease_master",array("ProductImage6"=>$result));
                    if($a1)
                    {		
                    }	
                    else {
                        //echo $ad;
                    }
            }
            
        }
        header('location:lease.php');
    }

    function  addImage($imageName){
		$target_dir = "uploads/lease";
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