<?php
	ob_start();
?>
<?php
		include("../../Helper/connect.php");



echo $page_id,$ProjectType;
		
		
		$id=$_REQUEST['pid'];
		$link->where('PK_project',$id);
		$a=$link->update("project_master",array("isDeleted"=>1));
		if($a)
		{		

			if(isset($_GET['ProjectType'])){
				
$ProjectType = $_GET['ProjectType'];
				$page = "location:projects.php?ProjectType=$ProjectType";
				header($page);

			}else{
				header("location:projects.php");
			}
			
		}
		
?>