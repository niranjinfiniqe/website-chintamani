<?php
include("header.php");
include("../../Helper/connect.php");

$query = "select * from project_master where isDeleted=0";
$exce = mysqli_query($con, $query);

?>

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Projects</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Projects</a></li>
                                <li class="breadcrumb-item active">Projects</li>
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



            <div class="row ">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex flex-wrap gap-2 justify-content-end">
                                <button type="button" class="btn btn-success waves-effect waves-light"><a href="add_project.php" style="color: white;">Add New Project</a></button>
                            </div>
                        </div>

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
                                        <a onclick = "hello('5')"  class="dropdown-item">Compeleted</a>
                                        <a onclick = "hello('7')"  class="dropdown-item">In-Progress</a>
                                    </div>
                                </div>

                            </div>


                            <br />
                            <div class="testing">


                                <table class="table mb-0 ">
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
                                    </thead>
                                    <tbody>
                                        <?php

                                        $count = 1;
                                        if (mysqli_num_rows($exce) > 0) {
                                            while ($row = mysqli_fetch_array($exce)) {
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



    const loadAllData = () => {
        var value = $('#loadAllData').html();

        $.ajax({
            url: "fetchdata_for_project.php",
            type: 'POST',
            data: 'request_all_data_from_projects=' + value,
            beforeSend: function() {
                $(".testing").html("<h1>loading...</h1>");
            },
            success: function(data) {

                $(".testing").html(data);
                console.log(data);
                // $(".testing").html("<h1>loading...</h1>");
            }
        });
    }







    $(document).ready(function() {
        $('#fetchvalue a').on('click', function() {
            var value = $(this).val($(this).text()).val();
            // console.log(value);
            $.ajax({
                url: "fetchdata_for_project.php",
                type: 'POST',
                data: 'request_from_projects=' + value,
                beforeSend: function() {
                    $(".testing").html("<h1>loading...</h1>");
                },
                success: function(data) {

                    $(".testing").html(data);
                    console.log(data);
                    // $(".testing").html("<h1>loading...</h1>");
                }
            });
        });
    });




    const hello = (a)=>{
        // console.log(a);
        $.ajax({

            url: "fetchdata_for_project.php",
                type: 'POST',
                data: {request_status:a},
                // beforeSend: function() {
                //     $(".testing").html("<h1>loading...</h1>");
                // },
                success: function(data) {

                    $(".testing").html(data);
                    console.log(data);
                    // $(".testing").html("<h1>loading...</h1>");
                }
            
        })
    }

    // $(document).ready(function() {
    //     $('#fetchvalue1 ').on('click', function() {            
    //         console.log(value);
    //         $.ajax({
    //             url: "fetchdata_for_project.php",
    //             type: 'POST',
    //             data: {request_status:value},
    //             beforeSend: function() {
    //                 $(".testing").html("<h1>loading...</h1>");
    //             },
    //             success: function(data) {

    //                 $(".testing").html(data);
    //                 console.log(data);
    //                 // $(".testing").html("<h1>loading...</h1>");
    //             }
    //         });
    //     });
    // });





</script>


<?php
include("footer.php")
?>