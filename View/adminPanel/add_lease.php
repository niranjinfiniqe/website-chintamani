<?php
include("header.php");
include("../../Helper/connect.php");
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

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                    <div class="card-body p-4">
                    <form>
        <div class="row">
            
            <div class="col-lg-6">
                <div>
                    <div class="mb-3">
                        <label for="example-text-input" class="form-label">Lease Project Name</label>
                        <input class="form-control" type="text" placeholder="Artisanal kale" id="ProjectName">
                    </div>
                    
                    <div class="col-lg-12">
                        <label for="example-search-input" class="form-label">Short Description</label>
                        <textarea class="form-control" type="search" placeholder="How do I shoot web" rows="2" id="ProjectShortDescription"></textarea>
                    </div>
                    <br>
                    <br>
                    <div class="mb-3">
                        <label for="example-text-input" class="form-label">Price</label>
                        <input class="form-control" type="number" placeholder="Artisanal kale" id="ProjectName">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Location</label>
                        <select class="form-select">
                            <option>Select</option>
                            <option>Commercial</option>
                            <option>Residential</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="example-tel-input" class="form-label">Product Image</label>
						<input type="file" name="product_image" id="product_image" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="example-tel-input" class="form-label">FloorPlant Url</label>
						<input type="file" name="product_image" id="ProjectFloorPlant" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="example-tel-input" class="form-label">Product Image1</label>
						<input type="file" name="product_image" id="product_image" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="example-tel-input" class="form-label">Product Image3</label>
						<input type="file" name="product_image" id="product_image" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="example-tel-input" class="form-label">Product Image5</label>
						<input type="file" name="product_image" id="product_image" class="form-control">
                    </div>
                </div>
            </div>

           <div class="col-lg-6">
                <div class="mt-3 mt-lg-0">
                <div class="mb-3">
                        <label for="example-text-input" class="form-label">Project Alias</label>
                        <input class="form-control" type="text" placeholder="Artisanal kale" id="ProjectAlias">
                    </div>
                    <div class="col-lg-12">
                        <label for="example-search-input" class="form-label">Long Description</label>
                        <textarea class="form-control" type="search" placeholder="How do I shoot web" rows="4" id="ProjectLongDescription"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="example-text-input" class="form-label">Area</label>
                        <input class="form-control" type="number" placeholder="sq/m" id="ProjectName">
                    </div>
                    <div class="mb-3">
                        <label for="example-text-input" class="form-label">Parking space</label>
                        <input class="form-control" type="number" placeholder="2" id="ProjectName">
                    </div>
                    <div class="mb-3">
                        <label for="example-tel-input" class="form-label">Upload Brocher</label>
						<input type="file" name="product_image" id="ProductBrocherURL" class="form-control">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Aminities</label>
                        <select class="form-select">
                            <option>Select</option>
                            <option>Commercial</option>
                            <option>Residential</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="example-tel-input" class="form-label">Product Image2</label>
						<input type="file" name="product_image" id="product_image" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="example-tel-input" class="form-label">Product Image4</label>
						<input type="file" name="product_image" id="product_image" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="example-tel-input" class="form-label">Product Image6</label>
						<input type="file" name="product_image" id="product_image" class="form-control">
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
         

    
<?php
include("footer.php")
?>