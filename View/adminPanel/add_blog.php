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
                    <h4 class="mb-sm-0 font-size-18">Add Blogs</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">blogs</a></li>
                            <li class="breadcrumb-item active">Blog</li>
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
                        <label for="example-text-input" class="form-label">Blog Title</label>
                        <input class="form-control" type="text" placeholder="Artisanal kale" id="BlogTitle">
                    </div>
                    
                    <div class="col-lg-12">
                        <label for="example-search-input" class="form-label">Short Description</label>
                        <textarea class="form-control" type="search" placeholder="How do I shoot web" rows="2" id="ProjectShortDescription"></textarea>
                    </div>
                    
                    
                    <div class="mb-3">
                        <label for="example-tel-input" class="form-label"> Blog Thumb Image</label>
						<input type="file" name="product_image" id="product_image" class="form-control">
                    </div>
                   
                </div>
            </div>

           <div class="col-lg-6">
                <div class="mt-3 mt-lg-0">
                    <div class="mb-3">
                        <label for="example-text-input" class="form-label">Blog Alias</label>
                        <input class="form-control" type="text" placeholder="Artisanal kale" id="ProjectAlias">
                    </div>
                    <div class="mb-3">
                        <label for="example-text-input" class="form-label">Blog writer Name</label>
                        <input class="form-control" type="text" placeholder="Artisanal kale" id="ProjectAlias">
                    </div>
                    <div class="mb-3">
                        <label for="example-tel-input" class="form-label">Blog Image</label>
						<input type="file" name="product_image" id="product_image" class="form-control">
                    </div>
                </div>
            </div>
            
            <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Ckeditor Classic editor</h4>
                                        <p class="card-title-desc">Example of Ckeditor Classic editor</p>
                                    </div>
                                    <div class="card-body">
                                        <div id="ckeditor-classic"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>


          <div>
                <button type="submit" class="btn btn-primary w-md">Submit</button>
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

</body>
</html>

    
<?php
include("footer.php")
?>