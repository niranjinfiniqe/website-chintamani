<?php
include("../../Helper/connect.php");



if (isset($_POST['selected_data'])) {

    $request = $_POST['selected_data'];
    $query = "SELECT * FROM project_master WHERE ProjectType = '$request'";
    $result = mysqli_query($con, $query);
    $count = mysqli_num_rows($result);
    echo $count;
    // $store = $request;
    // echo $store;
}

if (isset($_POST['all_data'])) {
    $request = $_POST['all_data'];
    // echo $request;
    $query = "SELECT * FROM project_master";
    $result = mysqli_query($con, $query);
    $count = mysqli_num_rows($result);
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

<div class="card-body">
    <div class="d-flex flex-wrap gap-4 mb-3">

        <button class="btn btn-secondary " type="button" id="loadAllData" onclick="loadAllData()">
            All Projects
        </button>



        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                Project Type<i class="mdi mdi-chevron-down"></i>
            </button>
            <div id="fetchvalue" name="fetchvalue" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a value="commercial" class="dropdown-item">Commercial</a>
                <a value="residential" class="dropdown-item">Residential</a>
            </div>
            <!-- <select id="fetchvalue" name="fetchvalue">
                                    <option value="Commercial">Commercial</option>
                                    <option value="Residential">Residential</option>
                                </select> -->
        </div>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                Status<i class="mdi mdi-chevron-down"></i>
            </button>
            <div id="fetchvalue1" name="fetchvalue1" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a onclick="hello('5')" class="dropdown-item">Compeleted</a>
                <a onclick="hello('7')" class="dropdown-item">In-Progress</a>
            </div>
        </div>

    </div>


    <br />
    <div>


        <table class="table mb-0 ">

            <?php
            if ($count) {

            ?>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Project Name</th>
                        <th>Alias</th>
                        <th>Short Description</th>
                        <th>BrochureURL</th>
                        <th>ThumbnailImageURL</th>
                        <th>FloorPlantImageURL</th>
                        <th>Images</th>
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
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                    ?>
                            <tr>
                                <th scope="row"><?php echo $count++; ?></th>
                                <td><?php echo $row['ProjectName'] ?></td>
                                <td><?php echo $row['Alias'] ?></td>
                                <td><?php echo $row['ShortDescription'] ?></td>
                                <td><img src="<?php echo $row['BrochureURL'] ?>" width="70px" height="70px" />
                                </td>
                                <td><img src="<?php echo $row['ThumbnailImageURL'] ?>" width="70px" height="70px" />
                                </td>
                                <td><img src="<?php echo $row['FloorPlantImageURL'] ?>" width="70px" height="70px" />
                                </td>
                                <td><img src="<?php echo $row['ProjectImage1'] ?>" width="70px" height="70px" />
                                    <!-- <img src="<?php echo $row['ProjectImage2'] ?>" width="70px" height="70px"  />
                                    <img src="<?php echo $row['ProjectImage3'] ?>" width="70px" height="70px"  />
                                    <img src="<?php echo $row['ProjectImage4'] ?>" width="70px" height="70px"  /></td> -->

                                <td>
                                    <a href="edit_project.php?pid=<?php echo $row['PK_Project']; ?>" class="btn btn-outline-secondary" title="Edit"><i class="fas fa-pen"></i></a>
                                </td>
                                <td>
                                    <a a onClick='javascript:confirmationDelete($(this));return false;' href="deleteproject.php/?pid=<?php echo $row['PK_Project']; ?>" class="btn btn-outline-secondary" title="Delete"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
        </table>
    </div>
    <br />

    <!-- Pagination Starts here -->
 
</div>