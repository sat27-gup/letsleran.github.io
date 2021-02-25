<?php
include 'adminheder.php';
// include 'dbconnesadmin.php';
include 'dbcon.php'
?>
<div class="col-sm-9 mt-5">
<div class="mx-5 mt-5 text-center">
  <p class="bg-dark text-white p-2">List OF Student </p>
  <?php
  $sql="SELECT * FROM lernit";
  $result=mysqli_query($conn,$sql);

//   INSERT INTO `lernit`(`stu_id`, `stu_name`, `stu_email`, `stu_pass`, `stu_occ`, `stu_img`) 
//   VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])

if(mysqli_num_rows($result)>0){
  ?><table class="table">
    <thead>
  
  
      <tr>
        
        <th scope="col">Student ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
       
</tr>


<thead>
  <tbody>
  <?php  
  //couse_name,couse_desc,couse_autr,couse_img,couse_duration,couse_price
 
  while($row=mysqli_fetch_assoc($result)){
   echo '<tr>';
   echo  '<th scope="row">'.$row['stu_id'].'</th>';
   echo   '<td>'.$row['stu_name'].'</td>';
   echo   '<td>'.$row['stu_email'].'</td>';
      
    echo  '<td>';
    echo  '
    <form action="admeditstudnt.php" method="POST" class="d-inline">
    <input type="hidden" name="id" value='.$row["stu_id"].'>
    <button type="submit class="btn
      btn-secondary name="edit" value="Edit">Edit
    </button>
    </form>
    <form action="" method="POST" class="d-inline">
    <input type="hidden" name="id" value='.$row["stu_id"].'>
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
  $sql="DELETE FROM lernit WHERE stu_id={$_REQUEST['id']}";
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
    <a class="btn btn-danger box" href="adnwstudnt.php">+</a>
</div>
</div>





<?php
    include 'adminfooter.php';
    ?>