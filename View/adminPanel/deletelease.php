<?php
	ob_start();
?>
<?php
		include("../../Helper/connect.php");
		
		
		$id=$_REQUEST['pid'];
		$link->where('PK_lease ',$id);
		$a=$link->update("leasing_master",array("isDeleted"=>1));
        $query = "update lease_amenities set isDeleted = 1 where Fk_Lease = $id";
        $exce = mysqli_query($con,$query);
		if($a)
		{		
			 header('location:../lease.php');
		}
		
?>