<?php
include 'adminheder.php';
include 'dbcon.php';


if(isset($_REQUEST['adnstndbtn'])){

    if(($_REQUEST['stsdnt_name']=="") || ($_REQUEST['stnd_email']=="") ||($_REQUEST['stnt_passsword']=="") ||
    ($_REQUEST['stdn_occ']=="")) {


        // INSERT INTO `lernit`(`stu_id`, `stu_name`, `stu_email`, `stu_pass`, `stu_occ`, `stu_img`) 
        // VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])

 $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
} else{
    $stgn_name = $_REQUEST['stsdnt_name'];
    $stdn_desc = $_REQUEST['stnd_email'];
    $stdn_auth=$_REQUEST['stnt_passsword'];
   
    $stdn_occ=$_REQUEST['stdn_occ'];
    
  

 $sql="INSERT INTO lernit (stu_name,stu_email,stu_pass,stu_occ) 
  VALUES ('{$stgn_name}','{$stdn_desc}','{$stdn_auth}','{$stdn_occ}')";

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
<h3 class="text-center">Add New Student</h3>
<form action="" method="POST" enctype="multipart/form-data">

  <div class="form-group">
    <label for="stsdnt_name" class="form-label">Name</label>
    <input type="text" class="form-control" id="stsdnt_name" name="stsdnt_name">
    
  </div>
  <div class="form-group">
    <label for="stnd_email" class="form-label">Email</label>
    <input type="email" class="form-control" id="stnd_email" name="stnd_email">
    
  </div>
  <div class="form-group">
    <label for="stnt_passsword" class="form-label">Password</label>
    <input type="text" class="form-control" id="stnt_passsword" name="stnt_passsword">
    
  </div>
 
  <div class="form-group">
    <label for="stdn_occ" class="form-label">Occupation</label>
    <input type="text" class="form-control" id="stdn_occ" name="stdn_occ">
    
  </div>
  
<div class="form-group mt-2">
  <button type="submit" class="btn btn-danger" name="adnstndbtn">Submit</button>
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