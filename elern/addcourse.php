<?php
include 'adminheder.php';
include 'dbconnesadmin.php';


if(isset($_REQUEST['courbtn'])){

    if(($_REQUEST['Course_Name']=="") || ($_REQUEST['Course_Desc']=="") ||($_REQUEST['Course_Author']=="") ||($_REQUEST['Course_Dur']=="") ||
    ($_REQUEST['Course_Orng_Price']=="")){

$msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">
Fill All Fields</div>';
} else{
    $couse_name = $_REQUEST['Course_Name'];
    $couse_desc = $_REQUEST['Course_Desc'];
    $course_auth=$_REQUEST['Course_Author'];
    $course_price=$_REQUEST['Course_Price'];
    $course_dur=$_REQUEST['Course_Dur'];
    $course_orgn_price=$_REQUEST['Course_Orng_Price'];
    $course_image=$_FILES['Course_img']['name'];
    $course_img_temp=$_FILES['Course_img']['tmp_name'];
    $img_folder='img/courses/'.$course_image;
    move_uploaded_file($course_img_temp,$img_folder);
  

 $sql="INSERT INTO couses (couse_name,couse_desc,couse_autr,couse_img,couse_duration,couse_price, couse_orgn_price) 
  VALUES ('{$couse_name}','{$couse_desc}','{$course_auth}','{$course_image}','{$course_dur}','{$course_price}','{$course_orgn_price}')";

if($conn->query($sql) == TRUE){

          $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">Course Added Sucessfull</div>';
     }
     else{
          $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Added Course</div>';
       }
}

}

?>


<div class="col-sm-6 mt-5 mx-3 jumbotron">
<h3 class="text-center">Add New Course</h3>
<form action="" method="POST" enctype="multipart/form-data">

  <div class="form-group">
    <label for="Course_Name" class="form-label">Course Text</label>
    <input type="text" class="form-control" id="Course_Name" name="Course_Name">
    
  </div>
  <div class="form-group">
    <label for="Course_Desc" class="form-label">Course Description</label>
    <input type="text" class="form-control" id="Course_Desc" name="Course_Desc">
    
  </div>
  <div class="form-group">
    <label for="Course_Author" class="form-label">Course Author</label>
    <input type="text" class="form-control" id="Course_Author" name="Course_Author">
    
  </div>
 
  <div class="form-group">
    <label for="Course_Dur" class="form-label">Course Duration</label>
    <input type="text" class="form-control" id="Course_Dur" name="Course_Dur">
    
  </div>
  <div class="form-group">
    <label for="Course_Orng_Price" class="form-label">Course Original Price</label>
    <input type="text" class="form-control" id="Course_Orng_Price" name="Course_Orng_Price">
    
  </div>
  <div class="form-group">
    <label for="Course_Price" class="form-label">Course Selling Price</label>
    <input type="text" class="form-control" id="Course_Price" name="Course_Price">
    </div>
    <div class="form-group">
    <label for="Course_img" class="form-label">Course Image</label>
    <input type="file" class="form-control" id="Course_img" name="Course_img">
    </div>
<div class="form-group mt-2">
  <button type="submit" class="btn btn-danger" name="courbtn">Submit</button>
  <a href="admcourses.php"  class="btn btn-secondary" name="">Closeton</a>
</div>
<div>
<?php 
if(isset($msg)){
    echo $msg;
}
?>
</div>
</form>
</div>

</div>
</div>
<?php
    include 'adminfooter.php';
?>