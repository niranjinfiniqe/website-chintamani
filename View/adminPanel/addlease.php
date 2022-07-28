<?php
ob_start();
?>
<?php
include("../../Helper/connect.php");


$Lease_Name = $_POST['LeaseName'];
$Lease_Alias = $_POST['LeaseAlias'];
$ShortDescription = $_POST['ShortDescription'];
$LongDescription = $_POST['LongDescription'];
$CarpetArea = (int)$_POST['CarpetArea'];
$CompleteAddress = $_POST['CompleteAddress'];
$Location = $_POST['Location'];
$Price = (int)$_POST['Price'];
$Packs = (int)$_POST['Packs'];
$officenumber = $_POST['officenumber'];
$BuildUpArea = (int)$_POST['BuildUpArea'];

$Furnished_Unfurnished = $_POST['Furnished/Unfurnished'];


// Seo tools
$Keywords = $_POST['Keywords'];
$MetaTitle = $_POST['MetaTitle'];
$DisplayOrder = (int) $_POST['DisplayOrder'];
$LeaseOgTitle = $_POST['LeaseOgTitle'];
$LeaseOgTag = $_POST['LeaseOgTag'];
$MetaDescription = $_POST['MetaDescription'];
$HiTag = $_POST['HiTag'];
$TwitterTag = $_POST['TwitterTag'];
$altTag = $_POST['altTag'];

$errMsg = '';
$aminitiesId = 0;
$locationId = 0;



if ($errMsg == '') {
    $ad = $link->insert("leasing_master", array("Lease_Name" => $Lease_Name, "Alias" => $Lease_Alias, "ShortDescription" => $ShortDescription, "LongDescription" => $LongDescription, "CompleteAddress" => $CompleteAddress, "Location" => $Location, "Price" => $Price, "Packs" => $Packs, "CarpetArea" => $CarpetArea, "Furnished/Unfurnished" => $Furnished_Unfurnished, "TwitterTag" => $TwitterTag, "HiTag" => $HiTag, "Keywords" => $Keywords, "LeaseOgTag" => $LeaseOgTag, "LeaseOgTitle" => $LeaseOgTitle, "altTag" => $altTag, "LeaseOgTitle" => $LeaseOgTitle, "MetaDescription" => $MetaDescription, "MetaTitle" => $MetaTitle, "DisplayOrder" => $DisplayOrder, "BuildUpArea" => $BuildUpArea, "office_number" => $officenumber));
}





if ($ad) {
    if ($_FILES['Images']['size'] > 0) {
        $result = addImage('Images', $Lease_Alias);
        if ($result) {
            $link->where('PK_lease', $ad);
        
            $a1 = $link->update("leasing_master", array("Images" => $result));
            if ($a1) {
                echo "successfully uploded";
            } else {
                echo "failed";
            }
        }
    }
    if ($_FILES['ThumbnailURL']['size'] > 0) {
        $result = addImage('ThumbnailURL', $Lease_Alias);
        if ($result) {
            $link->where('PK_Lease', $ad);
            $a1 = $link->update("leasing_master", array("ThumbnailURL" => $result));
            if ($a1) {
                echo "successfully uploded";
            } else {
                echo "failed";
            }
        }
    }
    if ($_FILES['FloorPlanURL']['size'] > 0) {
        $result = addImage('FloorPlanURL', $Lease_Alias);
        if ($result) {
            $link->where('PK_Lease', $ad);
            $a1 = $link->update("leasing_master", array("FloorPlanURL" => $result));
            if ($a1) {
                echo "successfully uploded";
            } else {
                echo "failed";
            }
        }
    }
    if ($_FILES['VideoURL']['size'] > 0) {
        $result = addImage('VideoURL', $Lease_Alias);
        if ($result) {
            $link->where('PK_Lease', $ad);
            $a1 = $link->update("leasing_master", array("VideoURL" => $result));
            if ($a1) {
                echo "successfully uploded";
            } else {
                echo "failed";
            }
        }
    }
}
header('location:lease');

function  addImage($imageName, $Lease_Alias)
{
    $target_dir = "../../uploads/lease-" . $Lease_Alias . "-";
    $target_file = $target_dir . basename($_FILES[$imageName]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES[$imageName]["tmp_name"]);
    if ($check !== false) {
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
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
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


// Logic For lease amenities entry

$query1 = "select * from leasing_master";
$exce1 = mysqli_query($con, $query1);
foreach ($exce1 as $a) {
    $row_number =  $a['PK_lease'];
}



if (isset($_POST['submit'])) {


    foreach ($_POST as $key => $value) {

        if (is_int($key) && $value != null) {
            // echo $value;
            // echo "PK_amenity=" . $key . ", count=" . $value;
            // echo "<br>";
            $test_query = "select * from amenities_master where Pk_amenities = $key ";

            $query = "insert into lease_amenities (FK_Lease,FK_amenities,Count) values ($row_number,$key,$value)";
            $run = mysqli_query($con, $query);

            $exce = mysqli_query($con, $test_query);
            // echo '<pre>';
            while ($row = mysqli_fetch_array($exce)) {
                // print_r($row['amenity_name']);
            }
        }
    }

    if (!empty($_POST['Features'])) {



        foreach ($_POST['Features'] as $key => $value) {

            $query = "insert into lease_features (FK_Lease,FK_features) values ($row_number,$value)";
            $run = mysqli_query($con, $query);
        }
    }
}



// Logic For lease Features entry











?>