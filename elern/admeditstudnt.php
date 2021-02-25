<?php
include 'adminheder.php';
include 'dbcon.php';

if(isset($_REQUEST['admupdate'])){

    if(($_REQUEST['stsdnt_name']=="") || ($_REQUEST['stnd_email']=="") ||($_REQUEST['stnt_passsword']=="") ||
    ($_REQUEST['stdn_occ']=="")) {


        // INSERT INTO `lernit`(`stu_id`, `stu_name`, `stu_email`, `stu_pass`, `stu_occ`, `stu_img`) 
        // VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])

 $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
} else{
    $stdn_id=$_REQUEST['stdn_id'];
    $stgn_name = $_REQUEST['stsdnt_name'];
    $stdn_desc = $_REQUEST['stnd_email'];
    $stdn_auth=$_REQUEST['stnt_passsword'];
   $stdn_occ=$_REQUEST['stdn_occ'];


$sql="UPDATE  lernit SET stu_id='$stdn_id',stu_name='$stgn_name',stu_email='$stdn_desc',stu_occ='$stdn_occ' 
WHERE stu_id='$stdn_id' ";


if($conn->query($sql) == TRUE){

        $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">Student Updated Sucessfull</div>';
   }
   else{
        $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Updated Student</div>';
     }
}

}

?>




<div class="col-sm-6 mt-5 mx-3 jumbotron">
<h3 class="text-center">Edit Course</h3>
<?php
if(isset($_REQUEST['edit'])){
    $sql="SELECT * FROM lernit WHERE stu_id={$_REQUEST['id']}";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
}
?>
<form action="" method="POST" enctype="multipart/form-data">


<!-- // INSERT INTO `lernit`(`stu_id`, `stu_name`, `stu_email`, `stu_pass`, `stu_occ`, `stu_img`) 
        // VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6]) -->

  <div class="form-group">
    <label for="stdn_id" class="form-label">Student Id</label>
    <input type="text" class="form-control" id="stdn_id" name="stdn_id" value="<?php 
    if(isset($row['stu_id']))
    {
        echo $row['stu_id'];
    }
    ?>" readonly>
    </div>
  <div class="form-group">
    <label for="stsdnt_name" class="form-label">Name</label>
    <input type="text" class="form-control" id="stsdnt_name" name="stsdnt_name" value="<?php 
    if(isset($row['stu_name']))
    {
        echo $row['stu_name'];
    }
    ?>">
    
  </div>
  <div class="form-group">
    <label for="stnd_email" class="form-label">Email</label>
    <input type="text" class="form-control" id="stnd_email" name="stnd_email" value="<?php 
    if(isset($row['stu_email']))
    {
        echo $row['stu_email'];
    }
    ?>">
    
  </div>
  <div class="form-group">
    <label for="stnt_passsword" class="form-label">Password</label>
    <input type="text" class="form-control" id="stnt_passsword" name="stnt_passsword" value="<?php 
    if(isset($row['stu_pass']))
    {
        echo $row['stu_pass'];
    }
    ?>">
    
  </div>
 
  <div class="form-group">
    <label for="stdn_occ" class="form-label">Occupation</label>
    <input type="text" class="form-control" id="stdn_occ" name="stdn_occ" value="<?php 
    if(isset($row['stu_occ']))
    {
        echo $row['stu_occ'];
    }
    ?>">
    
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