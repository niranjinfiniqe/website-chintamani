<?php
include("header.php");
include("../../Helper/connect.php");


// Mridul's code
// $query = "SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='chintamani_db_updated' 
//     AND `TABLE_NAME`='leasing_master'";

// $query = "SELECT * FROM `chintamani_db_updated`.`leasing_master` WHERE `leasing_master`.`PK_lease`";
$exce = mysqli_query($con, $query);
// $a = 0;
// while($row = mysqli_fetch_array($exce)){

//     echo "<pre>";
//    print_r((array_values($row)[1]));
//     echo "</pre>";
//     $a++;

// }
// echo $a;




?>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Add Aminities</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="aminities">Aminities</a></li>
                                <li class="breadcrumb-item active">Aminities</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-body p-4">
                                <form action="addaminities.php " class="needs-validation" novalidate method="post" name="f1" enctype="multipart/form-data">
                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Amenity name</label>
                                                    <input name="amenity name" required class="form-control" type="text" placeholder="" id="BlogTitle">
                                                </div>


                                            </div>
                                        </div>

                                        <div class="col-lg-6">

                                        </div>


                                    </div>
                                    <!-- end row -->
                            </div>
                        </div>



                        <div>
                            <button type="submit" class=" mx-3 my-3 btn btn-primary w-md">Submit</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ckeditor -->
<script src="assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>


<!-- ckeditor -->
<script src="assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>

<!-- init js -->
<script src="assets/js/pages/form-editor.init.js"></script>

<script src="assets/js/app.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>


<?php
include("footer.php")
?>