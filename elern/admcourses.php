<?php
include 'adminheder.php';
include 'dbconnesadmin.php';

?>
<div class="col-sm-9 mt-5">
<div class="mx-5 mt-5 text-center">
  <p class="bg-dark text-white p-2">List OF Courses </p>
  <?php
  $sql="SELECT * FROM couses";
  $result=mysqli_query($conn,$sql);
      
      
      if(mysqli_num_rows($result)>0){
  ?><table class="table">
    <thead>
  
  
      <tr>
        
        <th scope="col">Course ID</th>
        <th scope="col">Name</th>
        <th scope="col">Author</th>
        
        <th scope="col">Action</th>
       
</tr>


<thead>
  <tbody>
  <?php  
  //couse_name,couse_desc,couse_autr,couse_img,couse_duration,couse_price
 
  while($row=mysqli_fetch_assoc($result)){
   echo '<tr>';
   echo  '<th scope="row">'.$row['course_id'].'</th>';
   echo   '<td>'.$row['couse_name'].'</td>';
   echo   '<td>'.$row['couse_autr'].'</td>';
      
    echo  '<td>';
    echo  '
    <form action="admcouredit.php" method="POST" class="d-inline">
    <input type="hidden" name="id" value='.$row["course_id"].'>
    <button type="submit class="btn
      btn-secondary name="edit" value="Edit">Edit
    </button>
    </form>
    <form action="" method="POST" class="d-inline">
    <input type="hidden" name="id" value='.$row["course_id"].'>
      <button type="submit class="btn
      btn-secondary name="delete" value="Delete">Delete</button>
      </form>';
      echo '</td>';

      echo '</tr>';
  }?>
</tbody>
</table> 
<?php }
else{
  echo "Enter The Data ";
}

if(isset($_REQUEST['delete'])){
  $sql="DELETE FROM couses WHERE course_id={$_REQUEST['id']}";
  if($conn->query($sql) == TRUE){
echo '<meta http-equiv="refresh" content="0;URL=?deleted"/>';
}
else{
   echo "Unable to Delete Data";
 }
}
  ?>
</div>
</div>
</div>
</div>

</div>
<div>
    <a class="btn btn-danger box" href="addcourse.php">+</a>
</div>
</div>





<?php
    include 'adminfooter.php';
    ?>