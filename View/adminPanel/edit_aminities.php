<?php
include("header.php");
include("../../Helper/connect.php");

// Mridul's code
$id =  $_GET['pid'];
$query = "SELECT * FROM `chintamani_db_updated`.`amenities_master` WHERE `amenities_master`.`PK_aminities` = $id";
$exce = mysqli_query($con, $query);

if ($row = mysqli_fetch_array($exce)) {

    $amenity_name = $row['amenity name'];
   
}


//check for edit
if (isset($_REQUEST['pid']) && $_REQUEST['pid'] > 0) {
    $pid = $_REQUEST['pid'];
    $isUpdate = 1;
} else {
    $isUpdate = 0;
}

if ($isUpdate == 1) {
    $ad = $link->rawQueryOne("select * from amenities_master where PK_aminities=?", array($_REQUEST['pid']));
    if ($link->count > 0) {
        $project_id = $ad['PK_aminities'];
    }
}
?>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Edit aminities</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">aminities</a></li>
                                <li class="breadcrumb-item active"> Edit aminities</li>
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
                            <form  action="editaminities.php " class="needs-validation" novalidate method="post" name="f1"  enctype="multipart/form-data">
                               
                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Amenity name</label>
                                                    <input required value="<?php echo $amenity_name?>" name="amenity_name" class="form-control" type="text" placeholder="" id="BlogTitle">
                                                    <input type="hidden" name="pid" value=" <?php echo $id; ?>">
                                                </div>

                                             

                                                

                                            </div>
                                        </div>
                                            </div>
                                            <!-- end row -->
                                        </div>
                                        <div>



                                        <div>
                                            <button type="submit" name="submit" class="btn btn-primary w-md">Submit</button>
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
            
            <script>
    function aliascheck(val)
        {
            $.ajax({
              type: "POST",
               url: "alias_check.php",
               data: "alias_edit_interior="+val,
                  
                    // serializes the form's elements.
               success: function(data)
               {
                //  console.log(data);
                    if(data === val+'already')
                    {
                        console.log( "Data already exits");
                    }
                    else
                    {
                       console.log("Data accepted");
                    }
               }
           
            });
          
        }
</script>


            <?php
            include("footer.php");

            ?>

         