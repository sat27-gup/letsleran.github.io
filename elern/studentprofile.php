<?php
if(!isset($_SESSION)){
    session_start();
}
include 'stufooter.php';
include 'dbcon.php';

if(isset($_SESSION['is_login']))
{
    $stulogemail = $_SESSION['logemail'];
}
else{
     echo "<script> location.href='index.php';</script>";
    }

$sql =  "SELECT * FROM lernit WHERE stu_email='".$stulogemail."'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result) == 1){
    $rows = mysqli_fetch_assoc($result);
    $stu_id= $rows['stu_id'];
      $stuname=$rows['stu_name'];
      $stuocc=$rows['stu_occ'];
      $stuimg=$rows['stu_img'];
      
}

if(isset($_REQUEST['updatestu'])){
if(($_REQUEST['stsdnt_name']=="")||($_REQUEST['stdn_id']=="")||($_REQUEST['stdn_occ']==""))
{
    $passmsg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">
Fill All Fields</div>';
} 
else{
  
//   $stu_id = $_REQUEST['Course_Name'];
  // $stuocc = $_REQUEST['stdn_occ'];
  // $stuname = $_REQUEST['stsdnt_name'];
  $stuimage = $_FILES['stdn_img']['name'];
  $stdn_img_temp = $_FILES['stdn_img']['tmp_name'];
  $stdn_imgfolder ='img/Courses/stuimg'.$stuimage;
  move_uploaded_file($stdn_img_temp,$stdn_imgfolder);
echo  $stuocc,$stuname,$stdn_imgfolder,$stulogemail;
  $sql ="UPDATE lernit SET stu_name='{$stuname}',stu_email='{$stulogemail}',
  stu_occ='{$stuocc}',stu_img='{$stdn_imgfolder}'";

if(mysqli_query($conn, $sql)){
    $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">
    Updated Successfully</div>';
}

else{
$passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">
     Unable to Updated </div>';
    }

}
}

?>
<div class="col-sm-6 mt-5 mx-3">

<form action="" class="mx-5" method="POST" enctype="multipart/form-data">


<!-- // INSERT INTO `lernit`(`stu_id`, `stu_name`, `stu_email`, `stu_pass`, `stu_occ`, `stu_img`) 
        // VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6]) -->

  <div class="form-group">
    <label for="stdn_id" class="form-label">Student Id</label>
    <input type="text" class="form-control" id="stdn_id" name="stdn_id" value="
    <?php if(isset($stu_id)){echo $stu_id;}
    ?>" readonly>
    </div>
  <div class="form-group">
    <label for="stsdnt_name" class="form-label">Name</label>
    <input type="text" class="form-control" id="stsdnt_name" name="stsdnt_name" value="<?php 
  
   if(isset($stuname)){
       echo $stuname;
   }
    ?>" readonly>
    
  </div>
  <div class="form-group">
    <label for="stnd_email" class="form-label">Email</label>
    <input type="text" class="form-control" id="stnd_email" name="stnd_email" value="<?php 
    if(isset($stulogemail))
    {
        echo $stulogemail;
    }
    ?>" readonly>
    
  </div>
  
 
  <div class="form-group">
    <label for="stdn_occ" class="form-label">Occupation</label>
    <input type="text" class="form-control" id="stdn_occ" name="stdn_occ" value="<?php 
    
    
        echo $stuocc;
    
    ?>">
    
  </div>
  
  <div class="form-group">
    <label for="stdn_img" class="form-label">Upload Image</label>
    <input type="file" class="form-control" id="stdn_img" name="stdn_img" value="<?php 
  
    
        echo $stuimg; 
    
    ?>">
    
  </div>

  
<div class="form-group mt-2">
  <button type="submit" class="btn btn-danger" name="updatestu">Update</button>
  <a href="studentprofile.php"  class="btn btn-secondary" name="">Closeton</a>
</div>
<div>

<?php 
if(isset($passmsg)){
    echo $passmsg;
} 
?>
</div>
</form>

</div>

</div>
</div>

<?php
   include 'stuheader.php';
?>