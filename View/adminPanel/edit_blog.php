<?php
include("header.php");
include("../../Helper/connect.php");

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
    $ad = $link->rawQueryOne("select * from blog_master where PK_BLogID=?", array($_REQUEST['pid']));
    if ($link->count > 0) {
        $project_id = $ad['PK_BlogID'];
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
                    <h4 class="mb-sm-0 font-size-18">Edit Blogs</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="blog">Blogs</a></li>
                            <li class="breadcrumb-item active">Edit Blog</li>
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
                                <form  action="editblog.php " class="needs-validation" novalidate method="post" name="f1"  enctype="multipart/form-data">
                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Blog Title<span class="required"> *</span></label>
                                                    <input required type="hidden" name="pid" id="pid" value="<?php echo $id; ?> ">
                                                    <input class="form-control" name="BlogTitle" type="text" value="<?php echo $ad['BlogTitle']; ?>"  id="BlogTitle">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Blog Owner</label>
                                                    <input class="form-control" name="BlogOwner" type="text" value="<?php echo $ad['BlogOwner']; ?>"  id="ProjectAlias">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-search-input" class="form-label">Blog Date</label>
                                                    <input class="form-control" name="BlogDate" type="Date" value="<?php echo $ad['BlogDate']; ?>"   id="ProjectAlias">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-tel-input" class="form-label"> Blog Thumb Image<span class="required"> *</span></label>
                                                    <input  type="file" name="BlogThumbImage" id=" BlogThumbImage"  class="form-control unique_image">
                                                    <br>
                                                    <?php
                                                        if (strlen($ad['BlogThumbImage']) > 0) {
                                                        ?>
                                                        <div class="image-area">
                                                            <img class="photo" image-id="123" data-id="1" src="<?php echo '../../'.$ad['BlogThumbImage']; ?>" alt="" class="img-fluid rounded" style="height: 70px;width: 70px;">
                                                            <a onclick="deleteimage('<?php echo '../../'.$ad['BlogThumbImage'];  ?>','BlogThumbImage')" class="remove-image" data-toggle="tooltip" data-placement="top" title="Delete Image">
                                                                    &#215;
                                                                </a>
                                                        </div>
                                                        <?php }?>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-tel-input" class="form-label">Display Order <span class="required"> *</span></label>
                                                    <input type="number" value="<?php echo $ad['DisplayOrder'] ?>" name="DisplayOrder" required id=" DisplayOrder" class="form-control">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mt-3 mt-lg-0">
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Blog Alias<span class="required"> *</span></label>
                                                    <input onkeyup="aliascheck(this.value)" required class="form-control" name="BlogAlias" type="text" value="<?php echo $ad['Alias']; ?>"  id="BlogAlias">
                                                    <p style="color:red" id="aliasAlert" ></p>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-search-input" class="form-label">Reading Time (in mins.)</label>
                                                    <input class="form-control" name="ReadingTime" type="number" value="<?php echo $ad['ReadingTime']; ?>"  id="ReadingTime">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-search-input" class="form-label">Blog Status<span class="required"> *</span></label>
                                                    <select required class="form-select" id="BlogStatus" name="BlogStatus">
                                                        <option>select</option>
                                                        <option value="10" <?php if($ad['BlogStatus'] == 10){echo "selected";} ?> >Publised</option>
                                                        <option value="11" <?php if($ad['BlogStatus'] == 11){echo "selected";} ?> >Draft</option>
                                                    </select>
                                                </div>


                                                <div class="mb-3">
                                                    <label for="example-tel-input" class="form-label">Blog Image</label>
                                                    <input  type="file" name="BlogImage" id="BlogImage" class="form-control unique_image">
                                                    <br>
                                                    <?php
                                                        if (strlen($ad['BlogImage']) > 0) {
                                                        ?>
                                                        <div class="image-area">
                                                            <img class="photo" image-id="123" data-id="1" src="<?php echo '../../'.$ad['BlogImage']; ?>" alt="" class="img-fluid rounded" style="height: 70px;width: 70px;">
                                                            <a onclick="deleteimage('<?php echo '../../'.$ad['BlogImage'];  ?>','BlogImage')" class="remove-image" data-toggle="tooltip" data-placement="top" title="Delete Image">
                                                                    &#215;
                                                                </a>
                                                        </div>
                                                        <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="card-title">Blog Data<span class="required"> *</span></h4>
                                                    </div>
                                                    <textarea type="text" name="BlogDescription" placeholder="Enter Blog Details" class="form-control" id="ckeExample" value=<?php echo $ad['BlogDescription']; ?>></textarea>
                                                
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>


                                        <div class="card-body">
                                            <div>
                                                <h5 class="card-title mb-4">Blog SEO Details</h5>
                                                <input type="hidden" />
                                                <div class="row">
                                                    <div class="col-xl-4 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label>Meta Title</label>
                                                            <input type="text" class="form-control" id="MetaTitle" value="<?php echo $ad['MetaTitle']; ?>" name="MetaTitle">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label>Meta Description</label>
                                                            <input type="text" value="<?php echo $ad['MetaDescription']; ?>" class="form-control" id="MetaDescription" name="MetaDescription">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label>Alt Tag</label>
                                                            <input type="text" class="form-control" id="altTag" value="<?php echo $ad['altTag']; ?>" name="altTag">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label>Blog OG Title</label>
                                                            <input type="text" id="BlogOgTitle" name="BlogOgTitle" value="<?php echo $ad['BlogOgTitle']; ?>" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label>Blog OG Tag</label>
                                                            <input type="text" id="BlogOgTag" name="BlogOgTag" value="<?php echo $ad['BlogOgTag']; ?>" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label>Twitter Tag</label>
                                                            <input type="text" id="TwitterTag" name="TwitterTag" value="<?php echo $ad['TwitterTag']; ?>" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label>HI Tag</label>
                                                            <input type="text" id="HiTag" name="HiTag" value="<?php echo $ad['HiTag']; ?>" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label>Keywords</label>
                                                            <input type="text" id="Keywords" name="Keywords" value="<?php echo $ad['Keywords']; ?>" class="form-control" />
                                                        </div>
                                                    </div>
                                                  
                                                </div>
                                                <!-- end row -->
                                            </div>
                                        </div>


                                        <div>
                                            <button type="submit" id="DISABLED" class="btn btn-primary w-md">Submit</button>
                                        </div>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ckeditor -->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.3.2/ckeditor.js" ></script>
        <script>
	
            var ckEditorID;
    
            ckEditorID = 'ckeExample';
    
            CKEDITOR.config.forcePasteAsPlainText = true;
            CKEDITOR.replace( ckEditorID,
                {
                    toolbar :
                    [
                    { name: 'document', items: [ 'Source', '-', 'Save', 'NewPage', 'Preview', 'Print', '-', 'Templates' ] },
                    { name: 'clipboard', items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
                    { name: 'editing', items: [ 'Find', 'Replace', '-', 'SelectAll', '-', 'Scayt' ] },
                    { name: 'forms', items: [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField' ] },
                    '/',
                    { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'CopyFormatting', 'RemoveFormat' ] },
                    { name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl', 'Language' ] },
                    { name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
                    { name: 'insert', items: [ 'Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe' ] },
                    '/',
                    { name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
                    { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
                    { name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] },
                    { name: 'about', items: [ 'About' ] }
                    ]
                
                })
        </script>    


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
               data: {blog_master:val},
                  
                    // serializes the form's elements.
               success: function(data)
               {
                 console.log(data);
                    if(data === 'already')
                    {
                        $('#aliasAlert').html('Alias name already exists');
                        document.getElementById("DISABLED").disabled = true;
                    }
                    else
                    {
                        $('#aliasAlert').html('');
                        document.getElementById("DISABLED").disabled = false;
                    }
               }
           
            });
          
        }

// To check unique image 

        $(".unique_image").change(function(e) {


$.ajax({
    type: "POST",
    url: "unique_image_check.php",
    data: {
        directory: e.target.value,
        name: 'blog'
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
                            table_name: "blog_master",
                            id_col_name: "PK_BlogID"
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
            include("footer.php");

            ?>

         