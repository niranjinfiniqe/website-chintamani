<?php

include("../../Helper/connect.php");
if(isset($_REQUEST['directory']) && isset($_REQUEST['page_id']) && isset($_REQUEST['col_name']) && isset($_REQUEST['table_name']) && isset($_REQUEST['id_col_name'])){

   $filepath = $_REQUEST['directory'];
   $dir =   basename($filepath);
   $id = $_REQUEST['page_id'];
   $col_name= $_REQUEST['col_name'];
   $table_name = $_REQUEST['table_name'];
   $id_col_name = $_REQUEST['id_col_name'];


   $target_dir = "../../uploads/".$dir;
// echo $id,$name;
 
   if(file_exists($target_dir)){
     
       $query =mysqli_query($con,"UPDATE $table_name SET $col_name = null WHERE $id_col_name = $id") ;
       unlink($filepath);
       echo "success";
   }else{
       echo "failed";
   }

  




}






?>