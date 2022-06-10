<?php
	ob_start();
?>
<?php
	include("../../Helper/connect.php");

	$project_name=$_POST['ProjectName'];
	$project_status=$_POST['ProjectStatus'];
	$project_alias=$_POST['ProjectAlias'];
	$project_shortDes = $_POST['ProjectShortDescription'];
	$project_longdesc = $_POST['ProjectLongDescription'];
	$project_type = $_POST["ProjectType"];
	// SEO tool
	$project_keywords = $_POST["Keywords"];
	$project_HiTag =$_POST["HiTag"];
	$project_TwitterTag =$_POST["TwitterTag"];
	$project_ProjectOgTitle =$_POST["ProjectOgTitle"];
	$project_ProjectOgTag =$_POST["ProjectOgTag"];
	$project_Metatitle = $_POST["MetaTitle"];
	$project_MetaDescription=$_POST["MetaDescription"];
	$project_altTag=$_POST["altTag"];

	//add status code insted of name
	if($project_status === 'In Progress'){
		$status = 7;

	} else if ($project_status === 'Completed') {
		$status = 5;
	} 

		
	$id=$_REQUEST['pid'];
	$link->where('PK_project',$id);
	$ad=$link->update("project_master", array("ProjectName"=>$project_name,"Alias"=>$project_alias,"ShortDescription"=>$project_shortDes,"LongDescription"=>$project_longdesc,"ProjectType"=>$project_type,"FK_Status"=>$status,"Keywords"=>$project_keywords,"HiTag"=>$project_HiTag,"Metatitle"=>$project_Metatitle,"MetaDescription"=>$project_MetaDescription,"altTag"=>$project_altTag,"ProjectOgTitle"=>$project_ProjectOgTitle,"ProjectOgTag"=>$project_ProjectOgTag,"TwitterTag"=>$project_TwitterTag));

	if($ad)
	{
		header('location:projects.php');
	}
	
		
?>