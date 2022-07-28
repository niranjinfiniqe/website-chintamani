<?php
include("header.php");
include("../../Helper/connect.php");
$pLeaseId = 0;




// Mridul's code
$id =  $_GET['pid'];




//check for edit
if (isset($_REQUEST['pid']) && $_REQUEST['pid'] > 0) {
    $pid = $_REQUEST['pid'];
    $isUpdate = 1;
} else {
    $isUpdate = 0;
}

if ($isUpdate == 1) {
    $ad = $link->rawQueryOne("select * from leasing_master where PK_lease=?", array($_REQUEST['pid']));
    if ($link->count > 0) {
        $project_id = $ad['PK_lease'];
    }
}



?>

<style>
                .remove-image:hover {
                    cursor: pointer;
                }
            </style>



<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Edit Lease</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="lease">Leasing</a></li>
                                <li class="breadcrumb-item active">Edit lease</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <form action="editlease.php" class="needs-validation" novalidate method="post" name="leaseForm" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-7">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-body p-4">

                                    <div class="row">
                                        <h3 class="mb-3">Details  </h3>
                                        <div class="div shadow-lg p-3 mb-5 bg-body rounded">
                                            <div class="row">





                                                <div class="col-xl-6 col-md-6 mb-3">
                                                    <label for="example-text-input" class="form-label">Lease Name</label>
                                                    <input required value="<?php echo $ad['Lease_Name'] ?>" class="form-control" type="text" placeholder="Lease Name" id="ProjectName" name="LeaseName" value="<?php if ($isUpdate == 1) {
                                                                                                                                                                                                                echo $ad['Lease_Name'];
                                                                                                                                                                                                            } ?>">
                                                    <input type="hidden" name="pid" value=" <?php echo $id; ?>">

                                                </div>

                                                <div class="col-xl-6 col-md-6 mb-3">
                                                    <label for="example-text-input" class="form-label">Lease Alias</label>
                                                    <input onkeyup="aliascheck(this.value)" required  class="form-control" type="text" placeholder="Lease Alias" id="Lease_Alias" name="LeaseAlias" value="<?php if ($isUpdate == 1) {
                                                                                                                                                                                                                                                    echo $ad['Alias'];
                                                                                                                                                                                                                                                } ?>">
                                                                                                                                                                                                                                                <p style="color:red" id="aliasAlert" ></p>
                                                </div>
                                                <div class="col-xl-6 col-md-6 mb-3">
                                                    <label for="example-text-input" class="form-label">Carpet Area</label>
                                                    <input required value="<?php  echo $ad['CarpetArea']; ?>" class="form-control" type="text" placeholder="CarpetArea" id="CarpetArea" name="CarpetArea" value="<?php if ($isUpdate == 1) {
                                                                                                                                                                                                                echo $ad['CarpetArea'];
                                                                                                                                                                                                            } ?>">
                                                </div>
                                                <div class="col-xl-6 col-md-6 mb-3">
                                                    <label for="example-tel-input" class="form-label">BuildUp Area</label>
                                                    <input required value="<?php echo $ad['BuildUpArea'] ?>" placeholder="BuildUp Area" type="number" name="BuildUpArea" id="BuildUpAread" class="form-control">
                                                </div>
                                                <div class="col-xl-6 col-md-6 mb-3">
                                                    <label for="example-text-input" class="form-label">Price</label>
                                                    <input required value="<?php  echo $ad['Price']; ?>" class="form-control" type="number" placeholder="Price" id="Price" name="Price" value="<?php if ($isUpdate == 1) {
                                                                                                                                                                                            echo $ad['Price'];
                                                                                                                                                                                        } ?>">
                                                </div>
                                                <div class="col-xl-6 col-md-6 mb-3">
                                                    <label for="example-tel-input" class="form-label">Display Order</label>
                                                    <input required value="<?php echo $ad['DisplayOrder'] ?>" placeholder="Display Order" type="number" name="DisplayOrder" id="DisplayOrder" class="form-control">
                                                </div>
                                                <div class="col-xl-6 col-md-6 mb-3">
                                                    <label for="example-tel-input" class="form-label">Office Number</label>
                                                    <input required value="<?php echo $ad['office_number']; ?>" placeholder="Office Number" type="text" name="OfficeNumber" id="OfficeNumber" class="form-control">
                                                </div>

                                               
                                                <br>
                                                <br>




                                              

                                                <div class="col-xl-6 col-md-6 mb-3">
                                                    <label class="form-label">Location</label>
                                                    <select required class="form-select" id="Location" name="Location">
                                                        <option>Select</option>
                                                        <option <?php if ($ad['Location'] == "Goregaon") {
                                                                    echo "selected";
                                                                } ?>>Goregaon</option>
                                                        <option <?php if ($ad['Location'] == "Andheri") {
                                                                    echo "selected";
                                                                } ?>>Andheri</option>
                                                                 <option <?php if ($ad['Location'] == "Chakala") {
                                                                    echo "selected";
                                                                } ?>>Chakala</option>
                                                    </select>
                                                </div>


                                             

                                                <div class="col-xl-6 col-md-6 mb-3">
                                                    <label for="example-text-input" class="form-label">Packs</label>
                                                    <input value="<?php  echo $ad['Packs']; ?>" class="form-control" type="number" placeholder="Packs" reqired id="Packs" name="Packs" value="<?php if ($isUpdate == 1) {
                                                                                                                                                                                        echo $ad['Packs'];
                                                                                                                                                                                    } ?>">
                                                </div>



                                                <div class="col-xl-6 col-md-6 mb-3">
                                                    <label for="example-tel-input" class="form-label">Furnished/Unfurnished</label>
                                                    <input required value="<?php echo $ad['Furnished/Unfurnished'] ?>" placeholder="Furnished/Unfurnished" type="text" name="Furnished/Unfurnished" id="Furnished/Unfurnished" class="form-control">
                                                </div>

                                                <div class="col-xl-6 col-md-6 mb-3">
                                                    <label for="example-search-input" class="form-label">Short Description </label>
                                                    <textarea class="form-control" type="search" placeholder="Short Description" rows="2" id="ShortDescription" name="ShortDescription"><?php echo $ad['ShortDescription'] ?></textarea>
                                                </div>
                                                <div class="col-xl-6 col-md-6 mb-3">
                                                    <label for="example-search-input" class="form-label">Long Description</label>
                                                    <textarea class="form-control" type="search" placeholder="Long Description" rows="2" id="ShortDescription" name="LongDescription"><?php echo $ad['LongDescription'] ?></textarea>
                                                </div>
                                                <div class="col-xl-6 col-md-6 mb-3">
                                                    <label for="example-search-input" class="form-label">Complete Address</label>
                                                    <textarea required class="form-control" type="search" placeholder="CompleteAddress" rows="2" id="CompleteAddress" name="CompleteAddress"><?php echo $ad['CompleteAddress'] ?></textarea>
                                                </div>
                                               
                                               
                                           
                                               
                                            </div>
                                        </div>

                                        <h3 class=" mb-4">Gallery</h3>
                                        <div class="card-body shadow-lg p-3 mb-5 bg-body rounded">
                                            <div>


                                                <div class="row">

                                                    <div class="col-xl-6 col-md-6 mb-3">
                                                        <label for="example-text-input" class="form-label">Thumbnail Image</label>
                                                        <input  class="form-control unique_image" type="file" placeholder="ThumbnailURL" id="ThumbnailURL" name="ThumbnailURL" >
                                                                                               <br>   
                                                                                               <?php 
                                                            if(strlen($ad['ThumbnailURL']) > 0 )
                                                            {
                                                        ?>                                                                                                                                                         <div class="image-area">
                                                            <img class="photo" image-id="123" data-id="1" src="<?php echo '../../'.$ad['ThumbnailURL'] ?>" alt="" class="img-fluid rounded" style="height: 70px;width: 70px;">
                                                            <a onclick="deleteimage('<?php echo '../../'.$ad['ThumbnailURL'];  ?>','ThumbnailURL')" class="remove-image" data-toggle="tooltip" data-placement="top" title="Delete Image">
                                                                    &#215;
                                                                </a>
                                                        </div>
                                                        <?php } ?>
                                                    </div>

                                                    <div class="col-xl-6 col-md-6 mb-3">
                                                        <label for="example-text-input" class="form-label">FloorPlan Image</label>
                                                        <input value="<?php  echo '../../'.$ad['FloorPlanURL']; ?>" class="form-control unique_image" type="file" placeholder="FloorPlanURL" id="FloorPlanURL" name="FloorPlanURL" >
                                                                                                        <br>  
                                                                                                        <?php 
                                                            if(strlen($ad['FloorPlanURL']) > 0 )
                                                            {
                                                        ?>                                                                                                          <div class="image-area">

                                                            <img class="photo" image-id="123" data-id="1" src="<?php echo '../../'.$ad['FloorPlanURL'] ?>" alt="" class="img-fluid rounded" style="height: 70px;width: 70px;">
                                                            <a onclick="deleteimage('<?php echo '../../'.$ad['FloorPlanURL'];  ?>','FloorPlanURL')" class="remove-image" data-toggle="tooltip" data-placement="top" title="Delete Image">
                                                                    &#215;
                                                                </a>
                                                        </div>
                                                        <?php }?>
                                                    </div>



                                                    <div class="col-xl-6 col-md-6 mb-3">
                                                        <label for="example-tel-input" class="form-label">Images</label>
                                                        <input type="file" name="Images" id="ProductImage" class="form-control unique_image">
                                                        <br>
                                                        <?php 
                                                            if(strlen($ad['Images']) > 0 )
                                                            {
                                                        ?>     
                                                        <div class="image-area">
                                                            <img class="photo" image-id="123" data-id="1" src="<?php echo '../../'.$ad['Images'] ?>" alt="" class="img-fluid rounded" style="height: 70px;width: 70px;">
                                                            <a onclick="deleteimage('<?php echo '../../'.$ad['Images'];  ?>','Images')" class="remove-image" data-toggle="tooltip" data-placement="top" title="Delete Image">
                                                                    &#215;
                                                                </a>
                                                        </div>
                                                        <?php }?>
                                                    </div>
                                                    <div class="col-xl-6 col-md-6 mb-3">
                                                        <label for="example-tel-input" class="form-label">Video URL</label>
                                                        <input value="<?php echo $ad['VideoURL'] ?>" placeholder="Video URL" type="file" name="VideoURL" id="VideoURL" class="form-control unique_image">
                                                        <br>
                                                        <?php 
                                                            if(strlen($ad['VideoURL']) > 0 )
                                                            {
                                                        ?>     
                                                        <div class="image-area">
                                                            <img class="photo" image-id="123" data-id="1" src="<?php echo '../../'.$ad['VideoURL'] ?>" alt="" class="img-fluid rounded" style="height: 70px;width: 70px;">
                                                            <a onclick="deleteimage('<?php echo '../../'.$ad['VideoURL'];  ?>','VideoURL')" class="remove-image" data-toggle="tooltip" data-placement="top" title="Delete Image">
                                                                    &#215;
                                                                </a>
                                                        </div>
                                                        <?php } ?>
                                                    </div>




                                                </div>
                                            </div>
                                        </div>






                                        <h3 class=" mb-4">Leasing SEO Details</h3>
                                        <div class="card-body shadow-lg p-3 mb-5 bg-body rounded">

                                            <div>

                                                <input type="hidden" />
                                                <div class="row">
                                                    <div class="col-xl-4 col-md-6 mb-3">
                                                        <div class="form-group mb-3">
                                                            <label>Meta Title</label>
                                                            <input value="<?php echo $ad['MetaTitle']; ?>" type="text" class="form-control" id="MetaTitle" name="MetaTitle">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 mb-3">
                                                        <div class="form-group mb-3">
                                                            <label>Meta Description</label>
                                                            <input type="text" value="<?php echo $ad['MetaDescription']; ?>" class="form-control" id="MetaDescription" name="MetaDescription">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 mb-3">
                                                        <div class="form-group mb-3">
                                                            <label>Alt Tag</label>
                                                            <input value="<?php echo $ad['altTag']; ?>" type="text" class="form-control" id="altTag" name="altTag">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 mb-3">
                                                        <div class="form-group mb-3">
                                                            <label>Lease OG Title</label>
                                                            <input value="<?php echo $ad['LeaseOgTitle']; ?>" type="text" id="LeaseOgTitle" name="LeaseOgTitle" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 mb-3">
                                                        <div class="form-group mb-3">
                                                            <label>Lease OG Tag</label>
                                                            <input value="<?php echo $ad['LeaseOgTag']; ?>" type="text" id="LeaseOgTag" name="LeaseOgTag" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 mb-3">
                                                        <div class="form-group mb-3">
                                                            <label>Twitter Tag</label>
                                                            <input value="<?php echo $ad['TwitterTag']; ?>" type="text" id="TwitterTag" name="TwitterTag" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 mb-3">
                                                        <div class="form-group mb-3">
                                                            <label>HI Tag</label>
                                                            <input value="<?php echo $ad['HiTag'] ?>" type="text" id="HiTag" name="HiTag" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 mb-3">
                                                        <div class="form-group mb-3">
                                                            <label>Keywords</label>
                                                            <input value="<?php echo $ad['Keywords'] ?>" type="text" id="Keywords" name="Keywords" class="form-control" />
                                                        </div>
                                                    </div>


                                                </div>
                                                <!-- end row -->
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>



                    <div class="col-5 ">

                        <div class="card shadow-lg p-3 mb-5 bg-body rounded">
                            <h3 class="my-3">Amenities</h3>
                            <div class="card-body">
                                <div class="card-body p-2">
                                    <div class="row">

                                        <?php



                                        $item_not_selected_query = "SELECT * FROM amenities_master WHERE PK_amenities NOT IN ( SELECT FK_amenities FROM lease_amenities where isDeleted=0 and FK_Lease = $id)";
                                        $item_not_selected_exce = mysqli_query($con, $item_not_selected_query);

                                        $fetch_name = mysqli_query($con, "SELECT amenities_master.amenity_name,amenities_master.PK_amenities,lease_amenities.Count FROM amenities_master INNER JOIN lease_amenities ON amenities_master.PK_amenities=lease_amenities.FK_amenities where FK_Lease = $id ");

                                        $selected_item_exce = mysqli_query($con, "select * from lease_amenities where FK_Lease = $id");

                                        foreach ($fetch_name as $item) {


                                        ?>
                                            <div class="col-xl-12 col-md-6  d-flex p-2 bd-highlight">

                                                <div class="form-check mx-2 my-2">
                                                    <input checked value="<?php echo $item['PK_amenities']; ?>" class="form-check-input" type="checkbox" id="inv-<?php echo $item['PK_amenities'] ?>" onclick="inventory(this.value)">

                                                </div>
                                                <label for="myCheck" class="form-label mx-1 my-2"><?php echo $item['amenity_name']; ?> </label>

                                                <input value="<?php echo $item['Count']; ?>" id="amenities_qty_div<?php echo $item['PK_amenities']; ?>" class="form-control mx-4" min="0" type="number" placeholder="quantity" name="<?php echo $item['PK_amenities']; ?>" />
                                            </div>
                                        <?php } ?>

                                        <?php
                                        foreach ($item_not_selected_exce as $not_selected) {
                                        ?>

                                            <div class="col-xl-12 col-md-6  d-flex p-2 bd-highlight">

                                                <div class="form-check mx-2 my-2">
                                                    <input value="<?php echo $not_selected['PK_amenities']; ?>" class="form-check-input" type="checkbox" id="inv-<?php echo $not_selected['PK_amenities'] ?>" onclick="inventory(this.value)">

                                                </div>
                                                <label for="myCheck" class="form-label mx-1 my-2"><?php echo $not_selected['amenity_name']; ?> </label>

                                                <input id="amenities_qty_div<?php echo $not_selected['PK_amenities']; ?>" style="display: none;" class="form-control mx-4" min="0" type="number" placeholder="quantity" name="<?php echo $not_selected['PK_amenities']; ?>" />
                                            </div>


                                        <?php  } ?>



                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow-lg p-3 mb-5 bg-body rounded">
                            <h3 class="my-3">Features</h3>
                            <div class="card-body">
                                <div class="card-body p-2">
                                    <div class="row">


                                        <?php
                                        $feature_arr = array();
                                        $features = $link->rawQuery("select * from features_master where isDeleted = 0");
                                        $q =mysqli_query($con,"SELECT FK_features FROM lease_features WHERE FK_Lease = $id");
                                        while($row = mysqli_fetch_assoc($q)){
                                            array_push($feature_arr,$row['FK_features']);                                        
                                        }

                                        
                                    
                                        
                                            
                                            foreach ($features as $feature) {
                                        ?>
                                                <div class="col-xl-12 col-md-6  d-flex p-2 bd-highlight">

                                                    <div class="form-check mx-2 my-2">
                                                        <?php 
                                                    
                                                      
                                                        

                                                        ?>
                                                        <input <?php if(in_array($feature['feature_id'],$feature_arr)){echo "checked";} ?>  value="<?php echo $feature['feature_id']; ?>" class="form-check-input" type="checkbox" name="Features[]" />

                                                    </div>
                                                    <label for="myCheck" class="form-label mx-1 my-2"><?php echo $feature['Feature_Name'] ?> </label>

                                                </div>
                                        <?php 
                                        }
                                        
                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <div>
                    <button type="submit" name="submit" id="DISABLED" class="btn btn-primary w-md">Submit</button>
                </div>
                <br>
            </form>
        </div>
    </div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
    function aliascheck(val) {
        $.ajax({
            type: "POST",
            url: "alias_check.php",
            data: {leasing_master:val},

            // serializes the form's elements.
            success: function(data) {
                //  console.log(data);
                if (data === 'already') {
                    $('#aliasAlert').html('Alias name already exists');
                    document.getElementById("DISABLED").disabled = true;
                } else {
                    $('#aliasAlert').html('');
                    document.getElementById("DISABLED").disabled = false;
                }
            }

        });

    }
</script>


<script>
    function inventory(val) {

        if ($("#inv-" + val.trim()).is(":checked")) {


            $("#amenities_qty_div" + val.trim()).css("display", "block");
            // console.log($("#amenities_qty_div" + val.trim()).val());
        } else {

            $("#amenities_qty_div" + val.trim()).css("display", "none");
           $("#amenities_qty_div" + val.trim()).val(null);
            

        }
    }

    $(".unique_image").change(function(e) {


$.ajax({
    type: "POST",
    url: "unique_image_check.php",
    data: {
        directory: e.target.value,
        name: 'lease'
    },

    // serializes the form's elements.
    success: function(data) {
        // console.log(data);
        var tag = document.createElement("p");
        tag.style.color = "red";
        tag.setAttribute('class', 'uniqueImage')
        var text = document.createTextNode("Image already exits");
        var emptytext = document.createTextNode('');
        if (data === 'already') {
            // if($(".uniqueImage"))
            if (document.querySelector('.uniqueImage') !== null) {
                $(".uniqueImage").remove();
            }
            document.getElementById("DISABLED").disabled = true;
            tag.appendChild(text);
            e.target.parentElement.append(tag);

        } else {
            $(".uniqueImage").remove();
            document.getElementById("DISABLED").disabled = false;

        }

    }

});



})



            //  delete image fucntionality
            function deleteimage(val, type) {
                var conf = confirm("Are you sure??");
                if (conf) {

                    $.ajax({
                        type: "POST",
                        url: "delete_image.php",
                        data: {
                            directory: val,
                            col_name: type,
                            page_id: <?php echo $id; ?>,
                            table_name: "leasing_master",
                            id_col_name: "PK_lease"
                        },

                        // serializes the form's elements.
                        success: function(data) {
                            if (data == "success") {
                                location.reload();
                            }


                        }

                    });

                }

            }

    
</script>

<?php
include("footer.php")
?>