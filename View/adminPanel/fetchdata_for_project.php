<?php
include("../../Helper/connect.php");



if (isset($_POST['request_from_projects'])) {
    
    $request = $_POST['request_from_projects'];
    $query = "SELECT * FROM project_master WHERE ProjectType = '$request'";
    $result = mysqli_query($con, $query);
    $count = mysqli_num_rows($result);
    $store = $request;
    echo $store;
}

if (isset($_POST['request_all_data_from_projects'])) {
    $request = $_POST['request_all_data_from_projects'];
    $query = "SELECT * FROM project_master";
    $result = mysqli_query($con, $query);
    $count = mysqli_num_rows($result);
}

if (isset($_POST['request_status'])) {
    
    
    $request = $_POST['request_status'];
    echo $store;
    // $query = "SELECT * FROM project_master WHERE FK_status = '$request'";
    // $result = mysqli_query($con, $query);
    // $count = mysqli_num_rows($result);
}


?>

