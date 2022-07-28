<?php 


include("../../Helper/connect.php");


$query = "select * from project_master where isDeleted=0";
$exce = mysqli_query($con, $query);
$Total_no_of_rows = mysqli_num_rows($exce);


// For Pagination

if (isset($_POST['page_no'])) {

    $page_no = $_POST['page_no'];
 
}else{
    $page_no = 1;
}

$rows_to_be_displayed = "5";
$no_of_pages = ceil($Total_no_of_rows / $rows_to_be_displayed);
$offset  = ($page_no - 1) * $rows_to_be_displayed;
// offset- The number after which need to fetch the rows.
$query_for_pagniation = "select * from project_master where isDeleted=0 LIMIT {$offset},{$rows_to_be_displayed}";
$exce_for_pagination = mysqli_query($con, $query_for_pagniation);


$output = "";




if(mysqli_fetch_row($exce_for_pagination)){



 $output .= ' <table class="table mb-0 ">
<thead>
    <tr>
        <th>#</th>
        <th>Project Name</th>
        <th>Alias</th>
        <th>Short Description</th>
        <th>BrochureURL</th>
        <th>ThumbnailImageURL</th>
        <th>FloorPlantImageURL</th>
        <th>Images</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
</thead>
<tbody>
   
            <tr>';
            while($row = mysqli_fetch_assoc($exce_for_pagination)){
                 $output .= "  <th scope='row'>{$row['PK_Project']}</th>
                 <td>{$row['ProjectName']}</td>
                 <td> {$row['Alias'] }</td>
                 <td> {$row['ShortDescription']} </td>
                 <td><img src='{$row['BrochureURL']}' width='70px' height='70px' />
                 </td>
                 <td><img src=' {$row['ThumbnailImageURL']}' width='70px' height='70px' />
                 </td>
                 <td><img src='{$row['FloorPlantImageURL']}' width='70px' height='70px' />
                 </td>
                 <td><img src='{$row['ProjectImage1']}' width='70px' height='70px' />
                    </td>
                      
                 <td>
                     <a href='edit_project.php?pid={$row['PK_Project']}' class='btn btn-outline-secondary' title='Edit'><i class='fas fa-pen'></i></a>
                 </td>
                 <td>
                     <a a onClick='javascript:confirmationDelete($(this));return false;' href='deleteproject.php/?pid={$row['PK_Project']}' class='btn btn-outline-secondary' title='Delete'><i class='fas fa-trash'></i></a>
                 </td>
             </tr>
                 
                 
                 
                 ";
            }

      $output .= '</tbody>
      </table>
      <br />
      ';      
    
  $output .= '<nav aria-label="...">
  <ul class="pagination  justify-content-end mb-0">';

for ($i = 1; $i <= $no_of_pages; $i++) {
    $output .= "<li class='page-item" ;
if($i == $page_no){
$output .= " active'> <a class='page-link' href=''> {$i} </a></li>";
}
else{
    $output .= "'> <a class='page-link' href=''> {$i} </a></li>";
}
}

$output .='</ul>
</nav>';

echo $output;

}else{
    echo "no data found";
}


