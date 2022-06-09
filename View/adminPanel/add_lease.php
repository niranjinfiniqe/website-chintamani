<?php
include("header.php");
include("../../Helper/connect.php");
$pLeaseId = 0;
?>
<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Add Lease</h4>

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

        <?php
            //check for edit
            if(isset($_REQUEST['pid']) && $_REQUEST['pid'] >0) {
                $pLeaseId = $_REQUEST['pid'];
                $isUpdate = 1;
            } else {
                $isUpdate = 0;
            }

            if($isUpdate == 1){
                $ad=$link->rawQueryOne("select * from lease_master where PK_Lease=?",array($_REQUEST['pid']));
                if($link->count > 0) {
                    $project_id=$ad['PK_Lease'];
                }
            }

        ?>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-body p-4">
                            <form action="addlease.php?pid=<?php echo $pLeaseId ?> " class="needs-validation" novalidate method="post" name="leaseForm"  enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div>
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Lease Project Name</label>
                                                <input class="form-control" type="text" placeholder="Lease Project Name" required id="ProjectName" Name="LeaseProjectName" value="<?php  if($isUpdate==1){ echo $ad['ProjectName'];} ?>">
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <label for="example-search-input" class="form-label">Short Description</label>
                                                <textarea class="form-control" type="search" placeholder="Short Description" rows="2" id="ProjectShortDescription" name="ProjectShortDescription" value="<?php  if($isUpdate==1){ echo $ad['ShortDescription'];} ?>"></textarea>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Price</label>
                                                <input class="form-control" type="number" placeholder="Price" name="Price" id="Price" value="<?php  if($isUpdate==1){ echo $ad['Price'];} ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Location</label>
                                                <select class="form-select" id="Location" name="Location">
                                                    <option>Select</option>
                                                    <option <?php if($isUpdate==1 && $ad['FK_Location']=="1"){echo "selected";} ?>>Commercial</option>
                                                    <option <?php if($isUpdate==1 && $ad['FK_Location']=="2"){echo "selected";} ?>>Residential</option>
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label for="example-tel-input" class="form-label">Product Image</label>
                                                <input type="file" name="ProductImage" id="ProductImage" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="example-tel-input" class="form-label">FloorPlant Url</label>
                                                <input type="file" name="ProjectFloorPlantURL" id="ProjectFloorPlantURL" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="example-tel-input" class="form-label">Product Image1</label>
                                                <input type="file" name="ProductImage1" id="ProductImage1" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="example-tel-input" class="form-label">Product Image3</label>
                                                <input type="file" name="ProductImage3" id="ProductImage3" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="example-tel-input" class="form-label">Product Image5</label>
                                                <input type="file" name="ProductImage5" id="ProductImage5" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                            <div class="mt-3 mt-lg-0">
                                            <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Project Alias</label>
                                                    <input class="form-control" type="text" placeholder="Project Alias" id="ProjectAlias" name="ProjectAlias" value="<?php  if($isUpdate==1){ echo $ad['Alias'];} ?>">
                                                </div>
                                                <div class="col-lg-12">
                                                    <label for="example-search-input" class="form-label">Long Description</label>
                                                    <textarea class="form-control" type="search" placeholder="Long Description" rows="4" id="ProjectLongDescription" name="ProjectLongDescription" value="<?php  if($isUpdate==1){ echo $ad['LongDescription'];} ?>"></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Area</label>
                                                    <input class="form-control" type="text" placeholder="sq/m" id="Area" name="Area" value="<?php  if($isUpdate==1){ echo $ad['Area'];} ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Parking space</label>
                                                    <input class="form-control" type="number" placeholder="2" id="ParkingSpace" name="ParkingSpace" value="<?php  if($isUpdate==1){ echo $ad['ParkingSpace'];} ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-tel-input" class="form-label">Upload Brocher</label>
                                                    <input type="file" name="ProductBrocherURL" id="ProductBrocherURL" class="form-control" value="<?php  if($isUpdate==1){ echo $ad['ProductBrocherURL'];} ?>">
                                                </div>
                                                
                                                <div class="mb-3">
                                                    <label class="form-label">Aminities</label>
                                                    <select class="form-select" id="Aminities" name="Aminities">
                                                        <option>Select</option>
                                                        <option <?php if($isUpdate==1 && $ad['FK_Aminities']==1){echo "selected";} ?>>Commercial</option>
                                                        <option <?php if($isUpdate==1 && $ad['FK_Aminities']==2){echo "selected";} ?>>Residential</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-tel-input" class="form-label">Product Image2</label>
                                                    <input type="file" name="ProductImage2" id="ProductImage2" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-tel-input" class="form-label">Product Image4</label>
                                                    <input type="file" name="ProductImage4" id="ProductImage4" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-tel-input" class="form-label">Product Image6</label>
                                                    <input type="file" name="ProductImage6" id="ProductImage6" class="form-control">
                                                </div>
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
         

    
<?php
include("footer.php")
?>