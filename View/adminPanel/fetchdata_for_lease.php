<?php
include("../../Helper/connect.php");

if (isset($_POST['request_selected_data_from_lease'])) {
    $request = $_POST['request_selected_data_from_lease'];
    $query = "SELECT * FROM leasing_master WHERE Location = '$request' AND isDeleted=0";
    $result = mysqli_query($con, $query);



    // For pagination
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
    $query_for_pagniation = "select * from leasing_master where Location = '$request' and isDeleted=0 LIMIT {$offset},{$rows_to_be_displayed}";
    $exce_for_pagination = mysqli_query($con, $query_for_pagniation);
}

if (isset($_POST['request_all_data_from_lease'])) {
    $request = $_POST['request_all_data_from_lease'];
    $query = "SELECT * FROM leasing_master WHERE isDeleted=0";
    $result = mysqli_query($con, $query);
   


       // For pagination
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
       $query_for_pagniation = "select * from leasing_master where isDeleted=0 LIMIT {$offset},{$rows_to_be_displayed}";
       $exce_for_pagination = mysqli_query($con, $query_for_pagniation);



}


?>


<table class="table mb-0">
    <?php
    if ($Total_no_of_rows) {


    ?>
        <thead>
            <tr>
                <th>#</th>
                <th>Lease Name</th>

                <th>Short Description</th>
                <th>Long Description</th>
                <th>Location</th>
                <th>Price</th>
                <th>Images</th>
                <th>Status</th>
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
            // if (mysqli_num_rows($exce) > 0) {
            while ($row = mysqli_fetch_array($exce_for_pagination)) {
            ?>
                <tr>
                    <th scope="row"><?php echo $count++; ?></th>
                    <td><?php echo $row['Lease_Name'] ?></td>
                    <td><?php echo $row['ShortDescription'] ?></td>
                    <td><?php echo $row['LongDescription'] ?></td>
                    <td><?php echo $row['Location'] ?></td>
                    <td><?php echo $row['Price'] ?></td>
                    <td><img src="<?php echo $row['Images'] ?>" width="70px" height="70px" /></td>
                    <td>
                        <div class="form-check form-switch form-switch-lg mb-3" dir="ltr">
                            <input type="checkbox" class="form-check-input" id="customSwitchsizelg" onclick="toggleStatus(<?php echo $row['PK_lease']; ?>)" <?php if ($row['FK_Status'] === '9')  echo "checked"; ?>>


                        </div>
                    </td>




                    <td>
                        <a href="edit_lease.php?pid=<?php echo $row['PK_lease']; ?>" class="btn btn-outline-secondary" title="Edit"><i class="fas fa-pen"></i></a>
                    </td>
                    <td>
                        <a onClick='javascript:confirmationDelete($(this));return false;' href="deletelease.php?pid=<?php echo $row['PK_lease']; ?>" class="btn btn-outline-secondary" title="Delete"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            <?php

            }
            // }
            ?>
        </tbody>
</table>

<!-- Pagination starts here -->
<nav aria-label="...">
    <ul class="pagination  justify-content-end mb-0">

        <?php
        for ($i = 1; $i <= $no_of_pages; $i++) {
        ?>
            <li class="page-item <?php if ($i == $Pageid) {
                                        echo 'active';
                                    }  ?>"><a class="page-link" href="lease.php?page_id=<?php echo $i; ?>&Location=<?php echo $request; ?>"><?php echo $i; ?></a></li>
        <?php } ?>

    </ul>
</nav>