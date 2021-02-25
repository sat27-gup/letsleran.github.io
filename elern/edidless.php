<?php
include 'adminheder.php';
include 'dbconnesadmin.php';

if(isset($_REQUEST['reudt'])){

  if(($_REQUEST['Course_Name']=="") || ($_REQUEST['lessn_name']=="") ||
  ($_REQUEST['lessn_decs']=="") ||
  ($_REQUEST['lessn_link']=="")){

$msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">
Fill All Fields</div>';
} else{
    $lid=$_REQUEST['less_id'];
  $cid=$_REQUEST['Course_Id'];
  $cname = $_REQUEST['Course_Name'];
  $ldesc = $_REQUEST['lessn_decs'];
  $lname=$_REQUEST['lessn_name'];
  $llink=$_REQUEST['lessn_link'];
  
  $lsvide=$_FILES['lessn_link']['name'];
  $lsvide_link_temp=$_FILES['lessn_link']['tmp_name'];
  $lsvideofolder='Couvid/video/'.$lsvide;
  move_uploaded_file($lsvide_link_temp,$lsvideofolder);

//   INSERT INTO `lession`(`lesson_id`, `lesson_name`, `lesson_desc`, `course_link`, `course_id`, `course_name`) 
//   VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
$sql="UPDATE  lession SET lesson_id='$lid',lesson_name='$lname',lesson_desc='$ldesc',course_link='$lsvideofolder',
course_name='$cname',
WHERE lesson_id='$lid' ";


if($conn->query($sql) == TRUE){

        $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">Course Updated Sucessfull</div>';
   }
   else{
        $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Updated Course</div>';
     }
}

}

?>




<div class="col-sm-6 mt-5 mx-3 jumbotron">
<h3 class="text-center">Update It</h3>
<?php
if(isset($_REQUEST['edit'])){
    $sql="SELECT * FROM lession WHERE course_id={$_REQUEST['id']}";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
}
?>
<form action="" method="POST" enctype="multipart/form-data">


<!-- INSERT INTO `couses`(`course_id`, `couse_name`, `couse_desc`, `couse_autr`, `couse_img`, 
`couse_duration`, `couse_price`, `couse_orgn_price`) VALUES ([value-1],[value-2],
[value-3],[value-4],[value-5],[value-6],[value-7],[value-8]) -->
<div class="form-group">
    <label for="less_id" class="form-label">Lesson Id</label>
    <input type="text" class="form-control" id="less_id"  name="less_id"
    value="<?php if(isset($row['lesson_id'])){
    echo $row['lesson_id'];
}
?>" readonly>
    </div>
  <div class="form-group">
    <label for="Course_ID" class="form-label">Course Id</label>
    <input type="text" class="form-control" id="Course_Id"  name="Course_Id" value="<?php if(isset($row['course_id'])){
    echo $row['course_id'];
}
?>" readonly>
    </div>
  <div class="form-group">
    <label for="Course_Name" class="form-label">Course Name</label>
    <input type="text" class="form-control" id="Course_Name" name="Course_Name" placeholder="Enter Course Name"
    value="<?php if(isset($row['course_name'])){
    echo $row['course_name'];
}
?>" readonly>
    
  </div>
  <div class="form-group">
    <label for="lessn_name" class="form-label">Lesson Name</label>
    <input type="text" class="form-control" id="lessn_name" name="lessn_name" 
    value="<?php if(isset($row['lesson_name'])){
    echo $row['lesson_name'];
}
?>" 
>
    </div>
    <div class="form-group">
    <label for="lessn_decs" class="form-label">Lesson Description</label>
    <input type="text" class="form-control" id="lessn_decs" name="lessn_decs" 
    value="<?php if(isset($row['lesson_desc'])){
    echo $row['lesson_desc'];
}
?>">
    </div>
  <div class="form-group">
    <label for="lessn_link" class="form-label">Lesson Video Link</label>
    <input type="file" class="form-control-file" id="lessn_link" name="lessn_link"
    value="<?php if(isset($row['lesson_name'])){
    echo $row['lesson_name'];
}
?>">
    </div>
 
  
<div class="form-group mt-2">
  <button type="submit" class="btn btn-danger" name="reudt">Update</button>
  <a href="admcourses.php"  class="btn btn-secondary" name="">Closeton</a>
</div>
<div>

<?php 
if(isset($msg)){
    echo $msg;
}?>

</div>
</form>

</div>

</div>
</div>
    



<?php
include 'adminfooter.php';

?>