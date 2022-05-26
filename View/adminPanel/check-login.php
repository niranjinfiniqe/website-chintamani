<?php
include("../../Helper/connect.php");
session_start();

$userName=$_POST['username'];
$password=$_POST['password'];

$selectQuery = "select * from user";
$excSelectQuery = mysqli_query($con, $selectQuery);
$fetch=mysqli_fetch_assoc($excSelectQuery);
$name = $fetch['username'];
$pwd=$fetch['password'];

if($name==$userName && $pwd==$password)
{
    $_SESSION['username']=$userName;
    header("Location:home.php");
}
else{
    header("Location:index.php?Error");
}


?>