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



if(isset($_REQUEST['stupassud'])){
if(($_REQUEST['new_pass']==""))
{
    $passmsg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">
Fill All Fields</div>';
} else{
  
//   $stu_id = $_REQUEST['Course_Name'];
  
  
$sql =  "SELECT * FROM lernit WHERE stu_email='".$stulogemail."'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result) == 1){
  //  $rows = mysqli_fetch_assoc($result);
  //$rows['stu_pass']; 
  $stu_pass = $_REQUEST['new_pass'];
  $sql = "UPDATE lernit SET stu_pass='$stu_pass' 
  WHERE stu_email='".$stulogemail."'";
      
      
}


if(mysqli_query($conn, $sql)==TRUE){
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

<div class="col-sm-9 mt-5 mx-3">

<form action="" class="mt-5" method="POST">
<div class="form-group">
    <label for="stu_id" class="form-label">Email</label>
    <input type="text" class="form-control" id="stu_id" name="stu_id" value="<?php 
    if(isset($stulogemail))
    {
        echo $stulogemail;
    }
    ?>" readonly>
    </div>
  <div class="form-group">
    <label for="new_pass" class="form-label">Write Feedback</label>
    <input type="text" class="form-control" id="new_pass" name="new_pass" placeholde="New Password">
    
  </div>
  <div class="form-group mt-2">
  <button type="submit" class="btn btn-primary" name="stupassud">Update</button>
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