<?php
include("header.php");
include("../../Helper/connect.php");
$pid = 0;
$id = $_GET['pid'];
?>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title and breadcrum -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Edit Projects</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="projects.php">Projects</a></li>
                                <li class="breadcrumb-item active"> Edit Projects</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title breadcrum -->

            <?php
            //check for edit
            if (isset($_REQUEST['pid']) && $_REQUEST['pid'] > 0) {
                $pid = $_REQUEST['pid'];
                $isUpdate = 1;
            } else {
                $isUpdate = 0;
            }

            if ($isUpdate == 1) {
                $ad = $link->rawQueryOne("select * from project_master where PK_Project=?", array($_REQUEST['pid']));
                if ($link->count > 0) {
                    $project_id = $ad['PK_Project'];
                }
            }


            ?>

            <style>
                .remove-image:hover {
                    cursor: pointer;
                }
            </style>

            <!-- Main form starts-->
            <div class="row">
                <div class="col-12">
                    <div class="card-body">
                        <div class="card-body p-4">
                            <form action="editproject.php " class="needs-validation" novalidate method="post" name="f1" enctype="multipart/form-data">
                                <div class="row shadow-lg p-3 mb-5 bg-body rounded">
                                    <!-- right pannel details-->
                                    <h3 class="mb-4">Details</h3>
                                    <div class="col-lg-6 ">
                                        <div class="">
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Project Name</label>
                                                <input class="form-control" type="text" value="<?php if ($isUpdate == 1) {
                                                                                                    echo $ad['ProjectName'];
                                                                                                } ?>" required id="specificfield" name="ProjectName" id="ProjectName">
                                                <input type="hidden" value="<?php echo $id; ?>" name="pid" id="pid">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Status</label>
                                                <select class="form-select" name="ProjectStatus" id="ProjectStatus">
                                                    <option>Select</option>
                                                    <option <?php if ($ad['FK_Status'] == "7") {
                                                                echo "selected";
                                                            } ?>>In Progress</option>
                                                    <option <?php if ($ad['FK_Status'] == "5") {
                                                                echo "selected";
                                                            } ?>>Completed</option>
                                                </select>
                                            </div>

                                            <div class="col-lg-12">
                                                <label for="example-search-input" class="form-label">Short Description</label>
                                                <textarea class="form-control" type="text" rows="2" id="ProjectShortDescription" name="ProjectShortDescription"><?php if ($isUpdate == 1) {
                                                                                                                                                                    echo $ad['ShortDescription'];
                                                                                                                                                                } ?></textarea>
                                            </div>
                                            <br>
                                            <br>


                                        </div>
                                    </div>
                                    <!-- left pannel details-->
                                    <div class="col-lg-6">
                                        <div class="mt-3 mt-lg-0">
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Project Alias</label>
                                                <input onkeyup="aliascheck(this.value)" required class="form-control" type="text" name="ProjectAlias" id="ProjectAlias" value="<?php if ($isUpdate == 1) {
                                                                                                                                                                                    echo $ad['Alias'];
                                                                                                                                                                                } ?>">
                                                <p style="color:red" id="aliasAlert"></p>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Project Type</label>
                                                <select required class="form-select" id="ProjectType" name="ProjectType">
                                                    <option>Select</option>
                                                    <option <?php if ($ad['ProjectType'] == "Commercial") {
                                                                echo "selected";
                                                            } ?>>Commercial</option>
                                                    <option <?php if ($ad['ProjectType'] == "Residential") {
                                                                echo "selected";
                                                            } ?>>Residential</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-12">
                                                <label for="example-search-input" class="form-label">Long Description</label>
                                                <textarea class="form-control" type="text" rows="4" id="ProjectLongDescription" name="ProjectLongDescription"><?php if ($isUpdate == 1) {
                                                                                                                                                                    echo $ad['LongDescription'];
                                                                                                                                                                } ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="mb-4">Project SEO Details</h3>
                                    <div class="">
                                        <div>

                                            <div class="row">
                                                <div class="col-xl-4 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label>Meta Title</label>
                                                        <input type="text" class="form-control" id="MetaTitle" name="MetaTitle" value="<?php if ($isUpdate == 1) {
                                                                                                                                            echo $ad['MetaTitle'];
                                                                                                                                        } ?>" />
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label>Meta Description</label>
                                                        <input type="text" class="form-control" id="MetaDescription" name="MetaDescription" value="<?php if ($isUpdate == 1) {
                                                                                                                                                        echo $ad['MetaDescription'];
                                                                                                                                                    } ?>" />
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label>Alt Tag</label>
                                                        <input type="text" class="form-control" id="altTag" name="altTag" value="<?php if ($isUpdate == 1) {
                                                                                                                                        echo $ad['altTag'];
                                                                                                                                    } ?>" />
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label>Project OG Title</label>
                                                        <input type="text" id="ProjectOgTitle" name="ProjectOgTitle" class="form-control" value="<?php if ($isUpdate == 1) {
                                                                                                                                                        echo $ad['ProjectOgTitle'];
                                                                                                                                                    } ?>" />
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label>Project OG Tag</label>
                                                        <input type="text" id="ProjectOgTag" name="ProjectOgTag" class="form-control" value="<?php if ($isUpdate == 1) {
                                                                                                                                                    echo $ad['ProjectOgTag'];
                                                                                                                                                } ?>" />
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label>Twitter Tag</label>
                                                        <input type="text" id="TwitterTag" name="TwitterTag" class="form-control" value="<?php if ($isUpdate == 1) {
                                                                                                                                                echo $ad['TwitterTag'];
                                                                                                                                            } ?>" />
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label>HI Tag</label>
                                                        <input type="text" id="HiTag" name="HiTag" class="form-control" value="<?php if ($isUpdate == 1) {
                                                                                                                                    echo $ad['HiTag'];
                                                                                                                                } ?>" />
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label>Keywords</label>
                                                        <input type="text" id="Keywords" name="Keywords" class="form-control" value="<?php if ($isUpdate == 1) {
                                                                                                                                            echo $ad['Keywords'];
                                                                                                                                        } ?>" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div>
                                            <h3 class=" mb-4">Project Gallery Details</h3>
                                            <div class="row">
                                                <div class="col-xl-4 col-md-6">
                                                    <label>Brochure Image</label>
                                                    <div class="card-body">
                                                        <input type="file" name="BrochureURL" id="BrochureURL" class="form-control unique_image">
                                                        <br>
                                                        <?php
                                                        if (strlen($ad['BrochureURL']) > 0) {
                                                        ?>
                                                            <div class="image-area">
                                                                <img class="photo" image-id="123" data-id="1" src="<?php echo $ad['BrochureURL']; ?>" alt="" class="img-fluid rounded" style="height: 70px;width: 70px;">
                                                                <a onclick="deleteimage('<?php echo $ad['BrochureURL'];  ?>','BrochureURL')" class="remove-image" data-toggle="tooltip" data-placement="top" title="Delete Image">
                                                                    &#215;
                                                                </a>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-6">
                                                    <label>Thumbnail Image</label>
                                                    <div class="card-body">

                                                        <input required type="file" name="ThumbnailImageURL" id="ThumbnailImageURL" class="form-control unique_image">
                                                        <br>
                                                        <?php
                                                        if (strlen($ad['ThumbnailImageURL']) > 0) {
                                                        ?>
                                                            <div class="image-area">
                                                                <img class="photo" image-id="123" data-id="1" src="<?php echo $ad['ThumbnailImageURL']; ?>" class="img-fluid rounded" style="height: 70px;width: 70px;">

                                                                <a class="remove-image" data-toggle="tooltip" data-placement="top" title="Delete Image" onclick="deleteimage('<?php echo $ad['ThumbnailImageURL'];  ?>','ThumbnailImageURL')">
                                                                    &#215;
                                                                </a>


                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-6">

                                                    <label>FloorPlan Image </label>
                                                    <div class="card-body">
                                                        <input type="file" name="FloorPlantImageURL" id="product_image" class="form-control unique_image">
                                                        <br>
                                                        <?php
                                                        if (strlen($ad['FloorPlantImageURL']) > 0) {
                                                        ?>
                                                            <div class="image-area">
                                                                <img class="photo" image-id="123" data-id="1" src="<?php echo $ad['FloorPlantImageURL']; ?>" alt="" class="img-fluid rounded" style="height: 70px;width: 70px;">
                                                                <a onclick="deleteimage('<?php echo $ad['FloorPlantImageURL'];  ?>','FloorPlantImageURL')" class="remove-image" data-toggle="tooltip" data-placement="top" title="Delete Image">
                                                                    &#215;
                                                                </a>

                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-6">
                                                    <label>Project Image 1</label>
                                                    <div class="card-body">
                                                        <input type="file" name="ProjectImage1" id="product_image" class="form-control unique_image">
                                                        <br>
                                                        <?php
                                                        if (strlen($ad['ProjectImage1']) > 0) {
                                                        ?>
                                                            <div class="image-area">
                                                                <img class="photo" image-id="123" data-id="1" src="<?php echo $ad['ProjectImage1']; ?>" alt="" class="img-fluid rounded" style="height: 70px;width: 70px;">
                                                                <a onclick="deleteimage('<?php echo $ad['ProjectImage1'];  ?>','ProjectImage1')" class="remove-image" data-toggle="tooltip" data-placement="top" title="Delete Image">
                                                                    &#215;
                                                                </a>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-6">
                                                    <label>Project Image 2</label>
                                                    <div class="card-body">
                                                        <input type="file" name="ProjectImage2" id="ProjectImage2" class="form-control unique_image">
                                                        <br>
                                                        <?php
                                                        if (strlen($ad['ProjectImage2']) > 0) {
                                                        ?>
                                                            <div class="image-area">
                                                                <img class="photo" image-id="123" data-id="1" src="<?php echo $ad['ProjectImage2']; ?>" alt="" class="img-fluid rounded" style="height: 70px;width: 70px;">
                                                                <a onclick="deleteimage('<?php echo $ad['ProjectImage2'];  ?>','ProjectImage2')" class="remove-image" data-toggle="tooltip" data-placement="top" title="Delete Image">
                                                                    &#215;
                                                                </a>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-6">
                                                    <label>Project Image 3</label>
                                                    <div class="card-body">
                                                        <input type="file" name="ProjectImage3" id="ProjectImage3" class="form-control unique_image">
                                                        <br>
                                                        <?php
                                                        if (strlen($ad['ProjectImage3']) > 0) {
                                                        ?>
                                                            <div class="image-area">
                                                                <img class="photo" image-id="123" data-id="1" src="<?php echo $ad['ProjectImage3']; ?>" alt="" class="img-fluid rounded" style="height: 70px;width: 70px;">
                                                                <a onclick="deleteimage('<?php echo $ad['ProjectImage3'];  ?>','ProjectImage3')" class="remove-image" data-toggle="tooltip" data-placement="top" title="Delete Image">
                                                                    &#215;
                                                                </a>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-6">
                                                    <label>Project Image 4</label>
                                                    <div class="card-body">
                                                        <input type="file" name="ProjectImage4" id="ProjectImage4" class="form-control unique_image">
                                                        <br>
                                                        <?php
                                                        if (strlen($ad['ProjectImage4']) > 0) {
                                                        ?>
                                                            <div class="image-area">
                                                                <img class="photo" image-id="123" data-id="1" src="<?php echo $ad['ProjectImage4']; ?>" alt="" class="img-fluid rounded" style="height: 70px;width: 70px;">
                                                                <a onclick="deleteimage('<?php echo $ad['ProjectImage4'];  ?>','ProjectImage4')" class="remove-image" data-toggle="tooltip" data-placement="top" title="Delete Image">
                                                                    &#215;
                                                                </a>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-6">
                                                    <label>Project Image 5</label>
                                                    <div class="card-body">
                                                        <input type="file" name="ProjectImage5" id="ProjectImage5" class="form-control unique_image">
                                                        <br>
                                                        <?php
                                                        if (strlen($ad['ProjectImage5']) > 0) {
                                                        ?>
                                                            <div class="image-area">
                                                                <img class="photo" image-id="123" data-id="1" src="<?php echo $ad['ProjectImage5']; ?>" alt="" class="img-fluid rounded" style="height: 70px;width: 70px;">
                                                                <a onclick="deleteimage('<?php echo $ad['ProjectImage5'];  ?>','ProjectImage5')" class="remove-image" data-toggle="tooltip" data-placement="top" title="Delete Image">
                                                                    &#215;
                                                                </a>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-6">
                                                    <label>Project Image 6</label>
                                                    <div class="card-body">
                                                        <input type="file" name="ProjectImage6" id="ProjectImage6" class="form-control unique_image">
                                                        <br>
                                                        <?php
                                                        if (strlen($ad['ProjectImage6']) > 0) {
                                                        ?>
                                                            <div class="image-area">
                                                                <img class="photo" image-id="123" data-id="1" src="<?php echo $ad['ProjectImage6']; ?>" alt="" class="img-fluid rounded" style="height: 70px;width: 70px;">
                                                                <a onclick="deleteimage('<?php echo $ad['ProjectImage6'];  ?>','ProjectImage6')" class="remove-image" data-toggle="tooltip" data-placement="top" title="Delete Image">
                                                                    &#215;
                                                                </a>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div> <!-- End Row -->
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary w-md">Submit</button>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- Main form End-->



        <!-- pristine js -->
        <script src="assets/libs/pristinejs/pristine.min.js"></script>
        <!-- form validation -->
        <script src="assets/js/pages/form-validation.init.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>


        <script>
            function aliascheck(val) {
                $.ajax({
                    type: "POST",
                    url: "alias_check.php",
                    data: {
                        project_master: val,

                    },

                    // serializes the form's elements.
                    success: function(data) {
                        if (data === 'already') {
                            // console.log( "Data already exits");
                            $('#aliasAlert').html('Alias name already exists');
                        } else {
                            //    console.log("Data accepted");
                            $('#aliasAlert').html('');
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
                        name: 'project'
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

                            tag.appendChild(text);
                            e.target.parentElement.append(tag);

                        } else {
                            $(".uniqueImage").remove();

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
                            table_name: "project_master",
                            id_col_name: "PK_Project"
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