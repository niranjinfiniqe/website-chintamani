<?php
include("../../Helper/connect.php");

$emailId=$_POST['emailId'];
$userName=$_POST['userName'];
$password=$_POST['password'];

$validationEmail='';
printf($emailId, $userName,$password );
//Check for duplicate data
$validationQuery = "select * from user";
$excValidationQuery = mysqli_query($con, $validationQuery);
if(mysqli_num_rows($excValidationQuery) > 0)
{
    while($row = mysqli_fetch_array($excValidationQuery))
    {
        $db_emailId = $row['EmailId'];
        $db_userName = $row['Username'];
        if( $emailId==$db_emailId || $userName == $db_userName){
            $validationEmail = $db_emailId;
            header("Location:auth-register.php?duplicateEmailOrUserName");
        }
    }
}
printf($validationEmail);
if($validationEmail = ''){
    $insertQuery = "Insert into user values ('','$userName','$password','','$emailId','',true)";
    $excValidationQuery = mysqli_query($con, $insertQuery);
    header("Location:index.php?successMessage");
}
?>