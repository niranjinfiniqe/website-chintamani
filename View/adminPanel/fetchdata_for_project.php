<?php
include("../../Helper/connect.php");



if (isset($_POST['selected_data'])) {

    $request = $_POST['selected_data'];  //storing project type
    // echo $request;
    $query = "SELECT * FROM project_master WHERE ProjectType = '$request' AND isDeleted = 0";
    $result = mysqli_query($con, $query);
    

    $Total_no_of_rows = mysqli_num_rows($result);
    $rows_to_be_displayed = "5";
    $no_of_pages = ceil($Total_no_of_rows / $rows_to_be_displayed);

if (isset($_GET["page_id"])) {
    $Pageid = $_GET["page_id"];
} else {

    $Pageid = 1;
}
$offset  = ($Pageid - 1) * $rows_to_be_displayed;
// offset- The number after which need to fetch the rows.
$query_for_pagniation = "select * from project_master where ProjectType = '$request' and isDeleted=0 LIMIT {$offset},{$rows_to_be_displayed}";
$exce_for_pagination = mysqli_query($con, $query_for_pagniation);
    
}





if (isset($_POST['all_data'])) {
    $request = $_POST['all_data'];
    // echo $request;
    $query = "SELECT * FROM project_master where isDeleted=0";
    $result = mysqli_query($con, $query);
    $Total_no_of_rows = mysqli_num_rows($result);
    $rows_to_be_displayed = "5";
    $no_of_pages = ceil($Total_no_of_rows / $rows_to_be_displayed);

if (isset($_GET["page_id"])) {
    $Pageid = $_GET["page_id"];
} else {

    $Pageid = 1;
}
$offset  = ($Pageid - 1) * $rows_to_be_displayed;
// offset- The number after which need to fetch the rows.
$query_for_pagniation = "select * from project_master where isDeleted=0 LIMIT {$offset},{$rows_to_be_displayed}";
$exce_for_pagination = mysqli_query($con, $query_for_pagniation);
  



}

// if (isset($_POST['request_status'])) {


//     $request = $_POST['request_status'];
//     echo $request;
//     $query = "SELECT * FROM project_master WHERE FK_status = '$request'";
//     $result = mysqli_query($con, $query);
//     $count = mysqli_num_rows($result);
//     echo $count;
// }


?>




<table class="table mb-0 ">

    <?php
    if ($Total_no_of_rows) {

    ?>
        <thead>
        <tr>
            <th>#</th>
            <th>Project Name</th>
            <th>Alias</th>
            <th>Short Description</th>
            <th>Project Type</th>
            <th>Project Status</th>
            <th>ThumbnailImageURL</th>
            <th>FloorPlantImageURL</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
    } else {
        echo "sorry....... no data found";
    }
        ?>
        </thead>
        <tbody>
            <?php

            $count = 1;
            if (mysqli_num_rows($exce_for_pagination) > 0) {
                while ($row = mysqli_fetch_array($exce_for_pagination)) {
            ?>
                    <tr>
                                                    <th scope="row"><?php echo $count++; ?></th>
                                                    <td><?php echo $row['ProjectName'] ?></td>
                                                    <td><?php echo $row['Alias'] ?></td>
                                                    <td><?php echo $row['ShortDescription'] ?></td>
                                                    <td><?php echo $row['ProjectType'] ?></td>
                                                    <td>
                                                        <?php 
                                                        $status= $row['FK_Status'];
                                                        if($status==5) {
                                                            echo "Completed";

                                                        } else if($status==8) {
                                                            echo "In-Progress";

                                                        }
                                                        ?>
                                                    </td>
                                                    <td><img src="<?php echo $row['BrochureURL'] ?>" width="70px" height="70px" />
                                                    </td>
                                                    <td><img src="<?php echo $row['ThumbnailImageURL'] ?>" width="70px" height="70px" />
                                                    </td>
                                                    <td>
                                                        <a href="edit_project?pid=<?php echo $row['PK_Project']; ?>" class="btn btn-outline-secondary" title="Edit"><i class="fas fa-pen"></i></a>
                                                    </td>
                                                    <td>
                                                        <a a onClick='javascript:confirmationDelete($(this));return false;' href="deleteproject/?pid=<?php echo $row['PK_Project']; ?>" class="btn btn-outline-secondary" title="Delete"><i class="fas fa-trash"></i></a>
                                                    </td>
                                                </tr>
            <?php
                }
            }
            ?>
        </tbody>
</table>
<br />


<nav aria-label="...">
                                <ul class="pagination  justify-content-end mb-0">
                                    <!-- <li class="page-item disabled">
                                        <span class="page-link"><i class="mdi mdi-chevron-left"></i></span>
                                    </li> -->
                                    <?php

                                    for ($i = 1; $i <= $no_of_pages; $i++) {

                                    ?>
                                        <li class="page-item <?php if ($i == $Pageid) {
                                                                    echo 'active';
                                                                } ?> "><a class="page-link" href="projects?page_id=<?php echo $i; ?>&ProjectType=<?php echo $request ?>">
                                                <?php echo $i; ?></a></li>

                                    <?php
                                    }

                                    ?>

                                </ul>
                            </nav>