<?php

include 'adminheder.php';
include 'dbconnesadmin.php';
?>

<div class="col-sm-9 mt-5 mx-3">
<form action="" class="mt-3 form-inline d-print-none">
   <div class="row g-3">
  <div class="col">
    <label  class="offset-sm-6 col-form-label" for="checkid">Enter ID:</label>
    
  </div>
  <div class="col">
   
    <input type="text" class="form-control mx-3" id="checkid" placeholder="Search" name="checkid">
  </div>
  <div class="col">
    <button type="submit" class="btn btn-danger mx-4">Search</button>
  </div>
  </div>
</form>
<?php
$sql ="SELECT * FROM couses";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
    if(isset($_REQUEST['checkid']) && $row['course_id']==$_REQUEST['checkid']){
   ?><h3 class="mt-5 bg-dark text-white p-2">Course ID:<?php if(isset($row['course_id'])){
       echo $row['course_id'];}?> Course Name <?php if(isset($row['couse_name'])){
        echo $row['couse_name'];
}
        ?>
      </h3>
  <?php  

$sql ="SELECT * FROM lession WHERE course_id = {$_REQUEST['checkid']}";
$result = $conn->query($sql);
echo '<table class="table">
<thead>
<tr>
    
    <th scope="col">Student ID</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
    <th scope="col">Action</th>
   </tr>


<thead>
<tbody>';

//couse_name,couse_desc,couse_autr,couse_img,couse_duration,couse_price

while($row=mysqli_fetch_assoc($result)){
echo '<tr>';
echo  '<th scope="row">'.$row['lesson_id'].'</th>';
echo   '<td>'.$row['lesson_name'].'</td>';
echo   '<td>'.$row['course_link'].'</td>';
  
echo  '<td>

<form action="edidless.php" method="POST" class="d-inline">
<input type="hidden" name="id" value='.$row["lesson_id"].'>
<button type="submit class="btn
  btn-secondary name="edit" value="Edit">Edit
</button>
</form>
<form action="" method="POST" class="d-inline">
<input type="hidden" name="id" value='.$row['lesson_id'].'>
  <button type="submit class="btn
  btn-secondary name="delete" value="Delete">Delete</button>
  </form></td>
 </tr>';
  }
  echo '</tbody>
  </table>';
  }
  else {
    echo '<div class="alert alert-dark mt-4" role="alert">
    Course Not Found !</div>';

  }
  if(isset($_REQUEST['delete'])){
    $sql ="DELETE FROM lession WHERE lesson_id={$_REQUEST['id']}";
    if($conn->query($sql)===TRUE){
  echo '<meta http-equiv="refresh" content= "0;URL=?deleted"/>';
  }
  else{
    echo  "Unable to Delete Data";
  }
}
}
?>
</div>

<div>
    <a class="btn btn-danger box" href="admlesedit.php">+</a>
</div>

<?php
    include 'adminfooter.php';
    ?>