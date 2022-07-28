<?php
include("header.php");
include("../../Helper/connect.php");


// Mridul's code



?>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row ">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Add Interior</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="Interior">Interiors</a></li>
                                <li class="breadcrumb-item active">Add Interior</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row ">
                <div class="col-12 ">
                    <div class="card">
                        <div class="card-body shadow-lg p-3 mb-5 bg-body rounded">
                            <div class="card-body p-4 ">
                                <form action="addinterior.php" class="needs-validation" novalidate method="post" name="f1" enctype="multipart/form-data">
                                    <div class="row">
                                        <h3 class=" mb-1">Details</h3>

                                        <div class="card-body ">


                                            <div class="row shadow-lg p-3  bg-body rounded">
                                                <div class="col-lg-6 ">


                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Interior Title</label>
                                                        <input name="InteriorTitle" required class="form-control" type="text" placeholder="Interior Title">
                                                    </div>



                                                </div>

                                                <div class="col-lg-6 ">


                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Interior Alias</label>
                                                        <input onkeyup="aliascheck(this.value)" required name="InteriorAlias" required class="form-control" type="text" placeholder="Interior Alias" id="BlogTitle">
                                                        <p style="color:red" id="aliasAlert"></p>
                                                    </div>



                                                </div>
                                            </div>
                                        </div>

                                        <h3 class=" mb-1">Gallery</h3>

                                        <div class="card-body ">


                                            <div class="row shadow-lg p-3  bg-body rounded">
                                                <div class="col-lg-6 ">


                                                    <div>



                                                        <div class="mb-3">
                                                            <label for="example-tel-input" class="form-label">Gallery Image1</label>
                                                            <input type="file" name="GalleryImage1" id="GalleryImage1" class="form-control unique_image">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="example-tel-input" class="form-label">Gallery Image3</label>
                                                            <input type="file" name="GalleryImage3" id="GalleryImage3" class="form-control unique_image">
                                                        </div>




                                                    </div>

                                                </div>
                                                <div class="col-lg-6 ">


                                                    <div>


                                                        <div class="mb-3">
                                                            <label for="example-tel-input" class="form-label">Gallery Image2</label>
                                                            <input type="file" name="GalleryImage2" id="GalleryImage2" class="form-control unique_image">
                                                        </div>



                                                        <div class="mb-3">
                                                            <label for="example-tel-input" class="form-label">Gallery Image4</label>
                                                            <input type="file" name="GalleryImage4" id="GalleryImage4" class="form-control unique_image">
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>



                                        <h3 class=" mb-3">Interior SEO Details</h3>


                                        <div class="card-body shadow-lg p-3  bg-body rounded">
                                            <div>

                                                <input type="hidden" />
                                                <div class="row">
                                                    <div class="col-xl-4 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label>Meta Title</label>
                                                            <input type="text" class="form-control" id="MetaTitle" name="MetaTitle">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label>Meta Description</label>
                                                            <input type="text" class="form-control" id="MetaDescription" name="MetaDescription">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label>Alt Tag</label>
                                                            <input type="text" class="form-control" id="altTag" name="altTag">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label>Interior Alias</label>
                                                            <input type="text" id="BlogOgTitle" name="BlogOgTitle" class="form-control" />
                                                            <p style="color:red" id="aliasAlert"></p>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-4 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label>HI Tag</label>
                                                            <input type="text" id="HiTag" name="HiTag" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label>Keywords</label>
                                                            <input type="text" id="HiTag" name="Keywords" class="form-control" />
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- end row -->
                                            </div>
                                        </div>



                                    </div>


                                    <div>
                                        <button type="submit" name="submit" id="DISABLED" class=" mt-3 btn btn-primary w-md">Submit</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- ckeditor -->
<!--<script src="assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>-->


<!-- ckeditor -->
<script src="assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>

<!-- init js -->
<script src="assets/js/pages/form-editor.init.js"></script>

<script src="assets/js/app.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
    function aliascheck(val) {
        $.ajax({
            type: "POST",
            url: "alias_check.php",
            data: {
                interior_master: val
            },

            // serializes the form's elements.
            success: function(data) {
                console.log(data);
                if (data === 'already') {
                    // console.log("Data already exits");
                    $('#aliasAlert').html('Alias name already exists');
                    document.getElementById("DISABLED").disabled = true;
                } else {
                    // console.log("Data accepted");
                    $('#aliasAlert').html('');
                    document.getElementById("DISABLED").disabled = false;
                }
            }

        });

    }


    $(".unique_image").change(function(e) {


        $.ajax({
            type: "POST",
            url: "unique_image_check.php",
            data: {
                directory: e.target.value,
                name: 'interior'
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
</script>

<?php
include("footer.php")
?>