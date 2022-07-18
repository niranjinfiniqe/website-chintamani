<?php
include("header.php");





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
                                <button type="button" class="btn btn-success waves-effect waves-light"><a href="add_project" style="color: white;">Add New Project</a></button>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="d-flex flex-wrap gap-4 mb-3">

                                <button class="btn btn-secondary " type="button" id="loadAllData" onclick="loadAllData()">
                                    <a style="text-decoration:none ;color:white" href="projects?page_id=1"> All Projects</a>
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
                            </select>  -->
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
                            <div id="table-data">



                            </div>
                           

                            <!-- Pagination Starts here -->

                           

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







        $(document).ready(function() {
            function loadData(page) {
                $.ajax({
                    url: 'Ajax_projects.php',
                    type: 'POST',
                    data: {
                        page_no: page
                    },
                    success: function(data) {
                        console.log(data);
                        $("#table-data").html(data);
                    }
                })
            }
            loadData();


            //pagination  code
            $(document).on("click", ".pagination li a", function(e) {
                e.preventDefault();
                var page_id = $(this).text();
                console.log(page_id);
                loadData(page_id);
            })
        });






</script>

<?php
include("footer.php")
?>