<?php
include 'adminheder.php';
include 'dbconnesadmin.php';

if(isset($_REQUEST['lsnsbtn'])){

  if(($_REQUEST['Course_Id']=="")||($_REQUEST['Course_Name']=="") || 
  ($_REQUEST['lessn_name']=="")){

$msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">
Fill All Fields</div>';
} else{
  $cid=$_REQUEST['Course_Id'];
  $cname = $_REQUEST['Course_Name'];
  $lsid = $_REQUEST['lessn_name'];
  $les_desc=$_REQUEST['lessn_decs'];
  $lsvide=$_FILES['lessn_link']['name'];
  $lsvide_link_temp=$_FILES['lessn_link']['tmp_name'];
  $lsvideofolder='Couvid/video/'.$lsvide;
  move_uploaded_file($lsvide_link_temp,$lsvideofolder);
//   $lsvide=$_REQUEST['lessn_link'];
//done
// $sql="UPDATE  couses SET course_id='$cid',couse_name='$cname',couse_desc='$cdesc',couse_autr='$cauth',couse_img='$cimage',
// couse_duration='$cdur',couse_price='$cprice',couse_orgn_price='$corgn_price' WHERE course_id='$cid' ";

$sql="INSERT INTO lession(lesson_name, lesson_desc,course_link,course_id,course_name) 
VALUES ('$lsid','$les_desc','$lsvideofolder','$cid','$cname')";
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
<h3 class="text-center">Add New Courses</h3>

<form action="" method="POST" enctype="multipart/form-data">


<!-- INSERT INTO `couses`(`course_id`, `couse_name`, `couse_desc`, `couse_autr`, `couse_img`, 
`couse_duration`, `couse_price`, `couse_orgn_price`) VALUES ([value-1],[value-2],
[value-3],[value-4],[value-5],[value-6],[value-7],[value-8]) -->

  <div class="form-group">
    <label for="Course_ID" class="form-label">Course Id</label>
    <input type="text" class="form-control" id="Course_Id" placeholder="Enter Course Id" name="Course_Id" >
    </div>
  <div class="form-group">
    <label for="Course_Name" class="form-label">Course Name</label>
    <input type="text" class="form-control" id="Course_Name" name="Course_Name" placeholder="Enter Course Name">
    
  </div>
  <div class="form-group">
    <label for="lessn_name" class="form-label">Lesson Name</label>
    <input type="text" class="form-control" id="lessn_name" name="lessn_name">
    </div>
    <div class="form-group">
    <label for="lessn_decs" class="form-label">Lesson Description</label>
    <input type="text" class="form-control" id="lessn_decs" name="lessn_decs">
    </div>
  <div class="form-group">
    <label for="lessn_link" class="form-label">Lesson Video Link</label>
    <input type="file" class="form-control-file" id="lessn_link" name="lessn_link">
    </div>
 
  
<div class="form-group mt-2">
  <button type="submit" class="btn btn-danger" name="lsnsbtn">Submit</button>
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
<!-- <div>
    <a class="btn btn-danger box" href="addcourse.php">+</a>
</div> -->
</div>
</div>
    



<?php
include 'adminfooter.php';

?>