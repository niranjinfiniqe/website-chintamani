<?php
	ob_start();
?>
<?php
		include("../../Helper/connect.php");
		
	$id = $_POST['pid'];
	$amenity_name=$_POST['amenity_name'];

    
	// SEO tool
	

	$errMsg = '';
	// $status = '';
	//add status code instead of name
	// if($project_status === 'In Progress'){
	// 	$status = 7;

	// } else if ($project_status === 'Completed') {
	// 	$status = 5;
	// } 


    $ad = $link->where('PK_aminities',$id);
	$link->update("amenities_master", array("amenity name"=>$amenity_name));
	
	
		
		 header('location:aminities.php');
	
?>