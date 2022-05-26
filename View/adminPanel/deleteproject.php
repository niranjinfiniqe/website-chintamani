<?php
	ob_start();
?>
<?php
		include("../../Helper/connect.php");
		
		
		$id=$_REQUEST['pid'];
		$link->where('PK_project',$id);
		$a=$link->update("project_master",array("isDeleted"=>1));
		if($a)
		{		
			header('location:../projects.php');
		}
		
?>