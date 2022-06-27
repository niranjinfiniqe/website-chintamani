<?php
include("header.php");
include("../../Helper/connect.php");
$pLeaseId = 0;




// Mridul's code
$id =  $_GET['pid'];
$query = "SELECT * FROM `chintamani_db_updated`.`leasing_master` WHERE `leasing_master`.`PK_lease` = $id";
$exce = mysqli_query($con, $query);


if($row = mysqli_fetch_array($exce)) {
  
    // foreach ($row as $key => $value) {
    //     echo "<pre>";
    //     echo $key;
    //     echo "</pre>";
    //    }

    $Lease_Name = $row['Lease_Name'];
    $Lease_Alias = $row['Lease_Alias'];
    $ShortDescription = $row['ShortDescription'];
    $LongDescription = $row['LongDescription'];
    $CarpetArea = $row['CarpetArea'];
    $CompleteAddress = $row['CompleteAddress'];
    $Location = $row['Location'];
    $Price = $row['Price'];
    $Packs = $row['Packs'];
    $FloorPlanURL = $row['FloorPlanURL'];
    $Images = $row['Images'];
    $ThumbnailURL = $row['ThumbnailURL'];
    $VideoURL = $row['VideoURL'];
    $Furnished_Unfurnished = $row['Furnished/Unfurnished'];
    $BuildUpArea = $row['BuildUpArea'];
    $CabinsCount = $row['CabinsCount'];
    $ReceptionArea = $row['ReceptionArea'];
    $W_S = $row['W/S'];
    $SR_Manage = $row['SR_Manage'];
    $ConferenceRoomCount = $row['ConferenceRoomCount'];
    $MeetingRoomCount = $row['MeetingRoomCount'];
    $ServerRoomCount = $row['ServerRoomCount'];
    $StoreroomCount = $row['StoreroomCount'];
    $GeneralWashroom = $row['GeneralWashroom'];
    $GentsWashroomCount = $row['GentsWashroomCount'];
    $ladiesWashroom = $row['ladiesWashroom'];
    $PantryCount = $row['PantryCount'];
    $SR_Manage = $row['SR_Manage'];
    $Keywords = $row['Keywords'];
    $MetaTitle = $row['MetaTitle'];
    $DisplayOrder = $row['DisplayOrder'];
    $FK_Status = $row['DisplayOrder'];
    $isDeleted = $row['isDeleted'];
    $LeaseOgTitle = $row['LeaseOgTitle'];
    $LeaseOgTag = $row['LeaseOgTag'];
    $MetaDescription = $row['MetaDescription'];
    $HiTag = $row['HiTag'];
    $TwitterTag = $row['TwitterTag'];
    $altTag = $row['altTag'];

  



}




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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Leasing</a></li>
                            <li class="breadcrumb-item active">Leasing</li>
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
                            <form action="editlease.php" class="needs-validation" novalidate method="post" name="leaseForm"  enctype="multipart/form-data">
                                <div class="row">
                            
                                             <div class="col-xl-4 col-md-6 mb-3">
                                                <label for="example-text-input" class="form-label">Lease Name</label>
                                                <input required value="<?php echo $Lease_Name ?>" class="form-control" type="text" placeholder="Lease Name" id="ProjectName" name="LeaseName" value="<?php  if($isUpdate==1){ echo $ad['Lease_Name'];} ?>">
                                                <input type="hidden" name="pid" value=" <?php echo $id; ?>">

                                            </div>
                                            
                                            <div class="col-xl-4 col-md-6 mb-3">
                                                    <label for="example-text-input" class="form-label">Lease Alias</label>
                                                    <input onkeyup="aliascheck(this.value)" required value="<?php echo $Lease_Alias ?>"class="form-control" type="text" placeholder="Lease Alias" id="Lease_Alias" name="LeaseAlias" value="<?php  if($isUpdate==1){ echo $ad['Lease_Alias'];} ?>">
                                            </div>
                                            <div class="col-xl-4 col-md-6 mb-3">
                                                <label for="example-text-input" class="form-label">Carpet Area</label>
                                                <input required value="<?php echo $CarpetArea ?>" class="form-control" type="text" placeholder="CarpetArea"  id="CarpetArea" name="CarpetArea" value="<?php  if($isUpdate==1){ echo $ad['CarpetArea'];} ?>">
                                            </div>

                                            <div class="col-xl-4 col-md-6 mb-3">
                                                <label for="example-search-input" class="form-label">Short Description</label>
                                                <textarea value="<?php echo $ShortDescription ?>" class="form-control" type="search" placeholder="Short Description" rows="2" id="ShortDescription" name="ShortDescription" value="<?php  if($isUpdate==1){ echo $ad['ShortDescription'];} ?>"></textarea>
                                            </div>
                                            <div class="col-xl-4 col-md-6 mb-3">
                                                <label for="example-search-input" class="form-label">Long Description</label>
                                                <textarea value="<?php echo $LongDescription ?>" class="form-control" type="search" placeholder="Long Description" rows="2" id="ShortDescription" name="LongDescription" value="<?php  if($isUpdate==1){ echo $ad['LongDescription'];} ?>"></textarea>
                                            </div>
                                            <br>
                                            <br>
                                           

                                           

                                            <div class="col-xl-4 col-md-6 mb-3">
                                                <label for="example-search-input" class="form-label">Complete Address</label>
                                                <textarea required value="<?php echo $CompleteAddress ?>" class="form-control" type="search" placeholder="CompleteAddress" rows="2" id="CompleteAddress" name="CompleteAddress" value="<?php  if($isUpdate==1){ echo $ad['CompleteAddress'];} ?>"></textarea>
                                            </div>

                                            <div class="col-xl-4 col-md-6 mb-3">
                                                <label class="form-label">Location</label>
                                                <select required class="form-select" id="Location" name="Location">
                                                    <option>Select</option>
                                                    <option <?php if($isUpdate==1 && $ad['FK_Location']=="1"){echo "selected";} ?>>Commercial</option>
                                                    <option <?php if($isUpdate==1 && $ad['FK_Location']=="2"){echo "selected";} ?>>Residential</option>
                                                </select>
                                            </div>

                                            
                                            <div class="col-xl-4 col-md-6 mb-3">
                                                <label for="example-text-input" class="form-label">Price</label>
                                                <input required value="<?php echo $Price ?>" class="form-control" type="text" placeholder="Price"  id="Price" name="Price" value="<?php  if($isUpdate==1){ echo $ad['Price'];} ?>">
                                            </div>

                                            <div class="col-xl-4 col-md-6 mb-3">
                                                <label for="example-text-input" class="form-label">Packs</label>
                                                <input value="<?php echo $Packs ?>" class="form-control" type="text" placeholder="Packs" reqired id="Packs" name="Packs" value="<?php  if($isUpdate==1){ echo $ad['Packs'];} ?>">
                                            </div>

                                            <div class="col-xl-4 col-md-6 mb-3">
                                                <label for="example-text-input" class="form-label">Thumbnail URL</label>
                                                <input required value="<?php echo $ThumbnailURL; ?>" class="form-control" type="text" placeholder="ThumbnailURL"  id="ThumbnailURL" name="ThumbnailURL" value="<?php  if($isUpdate==1){ echo $ad['ThumbnailURL'];} ?>">
                                            </div>

                                            <div class="col-xl-4 col-md-6 mb-3">
                                                <label for="example-text-input" class="form-label">FloorPlan URL</label>
                                                <input value="<?php echo $FloorPlanURL; ?>" class="form-control" type="text" placeholder="FloorPlanURL"  id="FloorPlanURL" name="FloorPlanURL" value="<?php  if($isUpdate==1){ echo $ad['FloorPlanURL'];} ?>">
                                            </div>

                                            

                                            <div class="col-xl-4 col-md-6 mb-3">
                                                <label for="example-tel-input" class="form-label">Images</label>
                                                <input type="file" name="Images" id="ProductImage" class="form-control">
                                                <br>
                                                        <div class="image-area">
                                                            <img class="photo" image-id="123" data-id="1" src="<?php echo $ad['Images'] ?>" alt="" class="img-fluid rounded" style="height: 70px;width: 70px;">
                                                            <a class="remove-image"  style="display: inline;">&#215;</a>
                                                        </div>
                                            </div>
                                            
                                            <div class="col-xl-4 col-md-6 mb-3">
                                                <label for="example-tel-input" class="form-label">Video URL</label>
                                                <input value="<?php echo $VideoURL ?>" placeholder="Video URL" type="text" name="VideoURL" id="VideoURL" class="form-control">
                                            </div>
                                            
                                            <div class="col-xl-4 col-md-6 mb-3">
                                                <label for="example-tel-input" class="form-label">Furnished/Unfurnished</label>
                                                <input required value="<?php echo $Furnished_Unfurnished ?>" placeholder="Furnished/Unfurnished" type="text" name="Furnished/Unfurnished" id="Furnished/Unfurnished" class="form-control">
                                            </div>
                                            
                                            <div class="col-xl-4 col-md-6 mb-3">
                                                <label for="example-tel-input" class="form-label">BuildUp Area</label>
                                                <input value="<?php echo $BuildUpArea ?>" placeholder="BuildUp Area" type="text" name="BuildUpArea" id="BuildUpArea" class="form-control">
                                            </div>
                                            <div class="col-xl-4 col-md-6 mb-3">

                                                <label for="example-tel-input" class="form-label">Cabins Count</label>
                                                <input value="<?php echo $CabinsCount ?>" placeholder="Cabins Count" type="text" name="CabinsCount" id="CabinsCount" class="form-control">
                                            </div>

                                            <div class="col-xl-4 col-md-6 mb-3">
                                                <label for="example-tel-input" class="form-label">Reception Area</label>
                                                <input value="<?php echo $ReceptionArea ?>" placeholder="Reception Area " type="text" name="ReceptionArea" id="ReceptionArea" class="form-control">
                                            </div>
                                            <div class="col-xl-4 col-md-6 mb-3">
                                                <label for="example-tel-input" class="form-label">W/S</label>
                                                <input value="<?php echo $W_S ?>" placeholder="W/S" type="text" name="W/S" id="W/S" class="form-control">
                                            </div>
                                            <div class="col-xl-4 col-md-6 mb-3">
                                                <label for="example-tel-input" class="form-label">SR Manage</label>
                                                <input value="<?php echo $SR_Manage ?>" placeholder="SR Manage" type="text" name="SRManage" id="ReceptionArea" class="form-control">
                                            </div>
                                            <div class="col-xl-4 col-md-6 mb-3">
                                                <label for="example-tel-input" class="form-label">ConferenceRoom Count</label>
                                                <input value="<?php echo $ConferenceRoomCount ?>" placeholder="ConferenceRoom Count" type="text" name="ConferenceRoomCount" id="ConferenceRoomCount" class="form-control">
                                            </div>
                                            <div class="col-xl-4 col-md-6 mb-3">
                                                <label for="example-tel-input" class="form-label">MeetingRoom Count</label>
                                                <input value="<?php echo $MeetingRoomCount ?>" placeholder="MeetingRoom Count" type="text" name="MeetingRoomCount" id="MeetingRoomCount" class="form-control">
                                            </div>
                                            <div class="col-xl-4 col-md-6 mb-3">
                                                <label for="example-tel-input" class="form-label">ServerRoom Count</label>
                                                <input value="<?php echo $ServerRoomCount ?>" placeholder="ServerRoom Count" type="text" name="ServerRoomCount" id="ServerRoomCount" class="form-control">
                                            </div>
                                            <div class="col-xl-4 col-md-6 mb-3">
                                                <label for="example-tel-input" class="form-label">GentsWashroom Count</label>
                                                <input value="<?php echo $GentsWashroomCount ?>" placeholder="GentsWashroom Count" type="text" name="GentsWashroomCount" id="GentsWashroomCount" class="form-control">
                                            </div>
                                            <div class="col-xl-4 col-md-6 mb-3">
                                                <label for="example-tel-input" class="form-label">GeneralWashroom Count</label>
                                                <input value="<?php echo $GeneralWashroom ?>" placeholder="GentsWashroom Count" type="text" name="GeneralWashroomCount" id="GentsWashroomCount" class="form-control">
                                            </div>

                                            <div class="col-xl-4 col-md-6 mb-3">
                                                <label for="example-tel-input" class="form-label">Ladies Washroom</label>
                                                <input value="<?php echo $ladiesWashroom; ?>" placeholder="Ladies Washroom" type="text" name="ladiesWashroom" id="ladiesWashroom" class="form-control">
                                            </div>
                                            <div class="col-xl-4 col-md-6 mb-3">
                                                <label for="example-tel-input" class="form-label">Pantry Count</label>
                                                <input value="<?php echo $PantryCount ?>" placeholder="Pantry Count" type="text" name="PantryCount" id="PantryCount" class="form-control">
                                            </div>
                                            <div class="col-xl-4 col-md-6 mb-3">
                                                <label for="example-tel-input" class="form-label">Storeroom Count </label>
                                                <input value="<?php echo $StoreroomCount ?>" placeholder="Storeroom Count" type="text" name="StoreroomCount" id="StoreroomCount" class="form-control">
                                            </div>

                                           
                                           
                                            <div class="col-xl-4 col-md-6 mb-3">
                                                <label for="example-tel-input" class="form-label">Keywords</label>
                                                <input value="<?php echo $Keywords ?>" placeholder="BuildUp Area" type="text" name="Keywords" id="Keywords" class="form-control">
                                            </div>
                                            <div class="col-xl-4 col-md-6 mb-3">
                                                <label for="example-tel-input" class="form-label">Display Order</label>
                                                <input value="<?php echo $DisplayOrder ?>" placeholder="BuildUp Area" type="text" name="DisplayOrder" id="DisplayOrder" class="form-control">
                                            </div>
      
                                      

                                        <div class="card-body">
                                        <div>
                                            <h5 class="card-title mb-4">Project SEO Details</h5>
                                                <input type="hidden"/>
                                                <div class="row">
                                                    <div class="col-xl-4 col-md-6 mb-3">
                                                        <div class="form-group mb-3">
                                                            <label>Meta Title</label>
                                                            <input value="<?php echo $MetaTitle ?>" type="text" class="form-control"  id="MetaTitle" name="MetaTitle">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 mb-3">
                                                        <div class="form-group mb-3">
                                                            <label>Meta Description</label>
                                                            <input type="text" value="<?php echo $MetaDescription ?>"   class="form-control" id="MetaDescription" name="MetaDescription">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 mb-3">
                                                        <div class="form-group mb-3">
                                                            <label>Alt Tag</label>
                                                            <input value="<?php echo $altTag ?>"  type="text" class="form-control" id="altTag" name="altTag" >
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 mb-3">
                                                        <div class="form-group mb-3">
                                                            <label>Lease OG Title</label>
                                                            <input value="<?php echo $LeaseOgTitle ?>"  type="text" id="LeaseOgTitle" name="LeaseOgTitle" class="form-control"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 mb-3">
                                                        <div class="form-group mb-3">
                                                            <label>Lease OG Tag</label>
                                                            <input value="<?php echo $LeaseOgTag ?>"  type="text" id="LeaseOgTag" name="LeaseOgTag" class="form-control"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 mb-3">
                                                        <div class="form-group mb-3">
                                                            <label>Twitter Tag</label>
                                                            <input value="<?php echo $TwitterTag; ?>"  type="text" id="TwitterTag" name="TwitterTag" class="form-control"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 mb-3">
                                                        <div class="form-group mb-3">
                                                            <label>HI Tag</label>
                                                            <input value="<?php echo $HiTag ?>"  type="text" id="HiTag" name="HiTag" class="form-control"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6 mb-3">
                                                        <div class="form-group mb-3">
                                                            <label>Keywords</label>
                                                            <input value="<?php echo $Keywords ?>"  type="text" id="Keywords" name="Keywords" class="form-control"  />
                                                        </div>
                                                    </div> 
                                                
                                                  
                                                </div>
                                                <!-- end row -->
                                        </div>
                                    </div>
                                        <div >
                                            <button type="submit" class="btn btn-primary w-md">Submit</button>
                                        </div> 
                                    </div>
                                </div> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
         
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
    function aliascheck(val)
        {
            $.ajax({
              type: "POST",
               url: "alias_check.php",
               data: "alias_edit_lease="+val,
                  
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
include("footer.php")
?>