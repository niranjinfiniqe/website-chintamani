<?php 


if(isset($_REQUEST['directory'])){

    $filepath = $_REQUEST['directory'];
    // $dir =   basename($filepath);
    $name = $_REQUEST['name'];
   $dir =   preg_replace('/^.+\\\\/', '', $filepath);

   

    $target_dir = "../../uploads/".$name."-".$dir;

 
    if(file_exists($target_dir)){
        echo "already";
    }else{
        echo "new";
    }

}



?>