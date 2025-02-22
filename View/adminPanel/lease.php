<?php
include("header.php");
include("../../Helper/connect.php");
$query = "select * from leasing_master where isDeleted=0";
$exce = mysqli_query($con, $query);
?>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Leasing</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Leasing</a></li>
                                <li class="breadcrumb-item active">Leasing</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <style>
                a:hover {
                    cursor: pointer;
                }
            </style>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex flex-wrap gap-2 justify-content-end">
                                <button type="button" class="btn btn-success waves-effect waves-light"><a href="add_lease.php" style="color: white;">Add New Lease</a></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex flex-wrap gap-2">
                                <button onclick="loadAllData()" type="button" class="btn btn-secondary waves-effect waves-light"> All Lease</button>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownLocationfilterButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        Loction<i class="mdi mdi-chevron-down"></i>
                                    </button>
                                    <div id="fetchvalue" name="fetchvalue" class="dropdown-menu" aria-labelledby="dropdownLocationfilterButton">
                                        <a class="dropdown-item">Commercial</a>
                                        <a class="dropdown-item">Residential</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        Area<i class="mdi mdi-chevron-down"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Compelete</a>
                                        <a class="dropdown-item" href="#">In-Progress</a>
                                    </div>
                                </div>
                            </div>
                            <br />
                            <div class="testing" class="table-responsive">
                                <table class="table mb-0">
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
                                    </thead>
                                    <tbody>
                                        <?php
                                        $count = 1;
                                        if (mysqli_num_rows($exce) > 0) {
                                            while ($row = mysqli_fetch_array($exce)) {
                                        ?>
                                                <tr>
                                                    <th scope="row"><?php echo $count++; ?></th>
                                                    <td><?php echo $row['Lease_Name'] ?></td>
                                                    <td><?php echo $row['ShortDescription'] ?></td>
                                                    <td><?php echo $row['LongDescription'] ?></td>
                                                    <td><?php echo $row['Location'] ?></td>
                                                    <td><?php echo $row['Price'] ?></td>
                                                    <td><img src="<?php echo $row['Images'] ?>" width="70px" height="70px" /></td>
                                                    <!-- <td><?php echo $row['FK_Status'] ?></td> -->
                                                    <td>
                                                        <div class="form-check form-switch form-switch-lg mb-3" dir="ltr">
                                                            <input type="checkbox" class="form-check-input" id="customSwitchsizelg" onclick="toggleStatus(<?php echo $row['PK_lease']; ?>)" <?php if ($row['FK_Status'] === '9')  echo "checked"; ?>>


                                                        </div>
                                                    </td>





                                                    <td>
                                                        <a href="edit_lease.php?pid=<?php echo $row['PK_lease']; ?>" class="btn btn-outline-secondary" title="Edit"><i class="fas fa-pen"></i></a>
                                                    </td>
                                                    <td>
                                                        <a onClick='javascript:confirmationDelete($(this));return false;' href="deletelease.php/?pid=<?php echo $row['PK_lease']; ?>" class="btn btn-outline-secondary" title="Delete"><i class="fas fa-trash"></i></a>
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
                            <nav aria-label="...">
                                <ul class="pagination  justify-content-end mb-0">
                                    <li class="page-item disabled">
                                        <span class="page-link"><i class="mdi mdi-chevron-left"></i></span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active">
                                        <span class="page-link">
                                            2
                                            <span class="sr-only">(current)</span>
                                        </span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="mdi mdi-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>


<script type="text/javascript">
    function confirmationDelete(anchor) {
        var conf = confirm('Are You Sure Want To Delete ?');
        if (conf)
            window.location = anchor.attr("href");
    }


    //  Function to fetch data for table
    const loadAllData = () => {
        var value = $('#loadAllData').html();

        $.ajax({
            url: "fetchdata_for_lease.php",
            type: 'POST',
            data: 'request_all_data_from_lease=' + value,
            beforeSend: function() {
                $(".testing").html("<h1>loading...</h1>");
            },
            success: function(data) {

                $(".testing").html(data);
                // console.log(data);
                // $(".testing").html("<h1>loading...</h1>");
            }
        });
    }



    $(document).ready(function() {
        $('#fetchvalue a').on('click', function() {
            var value = $(this).val($(this).text()).val();
            // console.log(value);
            $.ajax({
                url: "fetchdata_for_lease.php",
                type: 'POST',
                data: 'request_selected_data_from_lease=' + value,
                beforeSend: function() {
                    $(".testing").html("<h1>loading...</h1>");
                },
                success: function(data) {

                    $(".testing").html(data);
                    // console.log(data);
                    // $(".testing").html("<h1>loading...</h1>");
                }
            });
        });
    });

    //   Logic to fetch status data(Vacant/occupied) from ajax for toggle button
    function toggleStatus(id) {
        // console.log(id);
        var id = id;
        $.ajax({
            url: 'toggleBtn.php',
            type: 'POST',
            data: {
                lease_id: id
            },
            success: function(data) {

                // if (data === '9') {
                //     console.log('ONN');

                // } else {
                //     console.log("OFF");
                // }
            }
        })

    }
</script>



<?php
include("footer.php")
?>