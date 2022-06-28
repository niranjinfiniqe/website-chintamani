<?php 

include("../../Helper/connect.php");
if(isset($_POST['submit'])){

    $id = $_POST['pid'];
$amenity_name = $_POST['amenity name'];
echo $id;
 

$query = "UPDATE `chintamani_db_updated`.`amenities_master` SET `amenities_master`.`amenity name` = '$amenity_name' WHERE `amenities_master`.`PK_aminities` = $id;";

$result = mysqli_query($con,$query);

// if($result){
//     echo 'Image Uploaded';
// }
// else{
//  echo "uploaded failed";

// }
// header("location:interior.php");


    
}






?>