<?php
include 'adminheder.php';
include 'dbcon.php';

?>
<div class="col-sm-9 mt-5">
<div class="mx-5 mt-5 text-center">
  <p class="bg-dark text-white p-2">List OF Feedback </p>
  <?php
  $sql="SELECT * FROM feedback";
  $result=mysqli_query($conn,$sql);
      
      
      if(mysqli_num_rows($result) > 0){
  echo '<table class="table">
    <thead>
  
  
      <tr>
        
        <th scope="col">Feedback ID</th>
        <th scope="col">Content</th>
        <th scope="col">Student</th>
        <th scope="col">Action</th>
       </tr>
<thead>
  <tbody>';
  while($row=mysqli_fetch_assoc($result)){
   echo '<tr>';
   echo  '<th scope="row">'.$row['f_id'].'</th>';
   echo   '<td>'.$row['f_content'].'</td>';
   echo   '<td>'.$row['stu_id'].'</td>';
    echo  '<td>';
    echo  '<form action="" method="POST" class="d-inline">
    <input type="hidden" name="id" value='.$row["f_id"].'>
      <button type="submit class="btn
      btn-secondary name="delete" value="Delete">Delete</button>
      </form>';
  echo '</td>';
echo '</tr>';
  }
echo '</tbody>
</table> ';
}
else{
   echo "0 Result ";
  }

if(isset($_REQUEST['delete'])){
  $sql="DELETE FROM feedback WHERE f_id={$_REQUEST['id']}";
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

</div>





<?php
    include 'adminfooter.php';
?>