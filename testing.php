<?php 

include("Helper/connect.php");

$query1 = "INSERT INTO amenities_master amenity_name VALUES mridul";
$ad = mysqli_query($con,$query1);
if($ad){
    echo "insert success";
}else{
    echo "insert error";
}


$query2 = "select amenity_name from amenities_master";
$ad = mysqli_query($con,$query2);
if($ad){
    print_r($query2);
}else{
    echo "fetch failed error";
}

$query3 = "update amenities_master set amenity_name = mridul where PK_amenities = 1";
$ad = mysqli_query($con,$query3);
if($ad){
    echo "update success";
}else{
    echo "update error";
}




?>


