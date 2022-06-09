<?php
include("header.php");
include("../../Helper/connect.php");
$query="select * from project_master";
$exce = mysqli_query($con, $query);
?>
<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Blogs</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Blogs</a></li>
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
                    <div class="card-header">
                        <div class="d-flex flex-wrap gap-2 justify-content-end">
                            <button type="button" class="btn btn-success waves-effect waves-light"><a href="add_blog.php" style="color: white;">Add New Blog </button>
                        </div>
                    </div>
                    <div class="card-body">
                    <div class="d-flex flex-wrap gap-2">
                    
                        <br/>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Project Name</th>
                                        <th>Alias</th>
                                        <th>Short Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $count=1;
                                    if(mysqli_num_rows($exce) > 0)
                                    {
                                     while($row = mysqli_fetch_array($exce))
                                     {
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $count ++; ?></th>
                                        <td><?php echo $row['ProjectName'] ?></td>
                                        <td><?php echo $row['Alias'] ?></td>
                                        <td><?php echo $row['ShortDescription'] ?></td>
                                    </tr>
                                    <?php
                                     }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <br/>
                        <nav aria-label="...">
                            <ul class="pagination  justify-content-end mb-0">
                                <li class="page-item disabled">
                                    <span class="page-link"><i class="mdi mdi-chevron-left"></i></span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active">
                                    <span class="page-link">
                                        2
                                        <span class="sr-only">(current)</span>
                                    </span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="mdi mdi-chevron-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
         

    
<?php
include("footer.php")
?>