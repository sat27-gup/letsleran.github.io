<?php
include 'adminheder.php';
include 'dbconnesadmin.php';

if(isset($_REQUEST['admupdate'])){

  if(($_REQUEST['Course_Name']=="") || ($_REQUEST['Course_Desc']=="") ||($_REQUEST['Course_Author']=="") ||($_REQUEST['Course_Dur']=="") ||
  ($_REQUEST['Course_Orng_Price']=="")){

$msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">
Fill All Fields</div>';
} else{
  $cid=$_REQUEST['Course_Id'];
  $cname = $_REQUEST['Course_Name'];
  $cdesc = $_REQUEST['Course_Desc'];
  $cauth=$_REQUEST['Course_Author'];
  $cprice=$_REQUEST['Course_Price'];
  $cdur=$_REQUEST['Course_Dur'];
  $corgn_price=$_REQUEST['Course_Orng_Price'];
  $cimage=$_FILES['Course_img']['name'];
  $cimg_temp=$_FILES['Course_img']['tmp_name'];
  $imfolder='img/Courses/'.$cimage;
  move_uploaded_file($cimg_temp,$imfolder);


$sql="UPDATE  couses SET course_id='$cid',couse_name='$cname',couse_desc='$cdesc',couse_autr='$cauth',couse_img='$cimage',
couse_duration='$cdur',couse_price='$cprice',couse_orgn_price='$corgn_price' WHERE course_id='$cid' ";


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
<h3 class="text-center">Edit Course</h3>
<?php
if(isset($_REQUEST['edit'])){
    $sql="SELECT * FROM couses WHERE course_id={$_REQUEST['id']}";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
}
?>
<form action="" method="POST" enctype="multipart/form-data">


<!-- INSERT INTO `couses`(`course_id`, `couse_name`, `couse_desc`, `couse_autr`, `couse_img`, 
`couse_duration`, `couse_price`, `couse_orgn_price`) VALUES ([value-1],[value-2],
[value-3],[value-4],[value-5],[value-6],[value-7],[value-8]) -->

  <div class="form-group">
    <label for="Course_ID" class="form-label">Course Id</label>
    <input type="text" class="form-control" id="Course_Id" name="Course_Id" value="<?php 
    if(isset($row['course_id']))
    {
        echo $row['course_id'];
    }
    ?>" readonly>
    </div>
  <div class="form-group">
    <label for="Course_Name" class="form-label">Course Text</label>
    <input type="text" class="form-control" id="Course_Name" name="Course_Name" value="<?php 
    if(isset($row['couse_name']))
    {
        echo $row['couse_name'];
    }
    ?>">
    
  </div>
  <div class="form-group">
    <label for="Course_Desc" class="form-label">Course Description</label>
    <input type="text" class="form-control" id="Course_Desc" name="Course_Desc" value="<?php 
    if(isset($row['couse_desc']))
    {
        echo $row['couse_desc'];
    }
    ?>">
    
  </div>
  <div class="form-group">
    <label for="Course_Author" class="form-label">Course Author</label>
    <input type="text" class="form-control" id="Course_Author" name="Course_Author" value="<?php 
    if(isset($row['couse_autr']))
    {
        echo $row['couse_autr'];
    }
    ?>">
    
  </div>
 
  <div class="form-group">
    <label for="Course_Dur" class="form-label">Course Duration</label>
    <input type="text" class="form-control" id="Course_Dur" name="Course_Dur" value="<?php 
    if(isset($row['couse_duration']))
    {
        echo $row['couse_duration'];
    }
    ?>">
    
  </div>
  <div class="form-group">
    <label for="Course_Orng_Price" class="form-label">Course Original Price</label>
    <input type="text" class="form-control" id="Course_Orng_Price" name="Course_Orng_Price" value="<?php 
    if(isset($row['couse_orgn_price']))
    {
        echo $row['couse_orgn_price'];
    }
    ?>">
    
  </div>
  <div class="form-group">
    <label for="Course_Price" class="form-label">Course Selling Price</label>
    <input type="text" class="form-control" id="Course_Price" name="Course_Price"  value="<?php 
    if(isset($row['couse_price']))
    {
        echo $row['couse_price'];
    }
    ?>">
    </div>
    <div class="form-group">
    <label for="Course_img" class="form-label">Course Image</label>
    <input type="file" class="form-control" id="Course_img" name="Course_img" value="<?php 
    if(isset($row['couse_img']))
    {
        echo $row['couse_img'];
    }
    ?>" class="img-thumbnail">
    </div>
<div class="form-group mt-2">
  <button type="submit" class="btn btn-danger" name="admupdate">Update</button>
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