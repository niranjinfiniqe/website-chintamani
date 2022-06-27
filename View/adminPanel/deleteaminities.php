<?php
	ob_start();
?>
<?php
		include("../../Helper/connect.php");
		
		
		$id=$_REQUEST['pid'];
		$link->where('PK_aminities',$id);
		$a=$link->update("amenities_master",array("isDeleted"=>1));
		if($a)
		{		
			header("location:./aminities.php");
		}
		
?>