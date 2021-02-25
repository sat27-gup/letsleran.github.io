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
// else{
//     echo "<script> location.href='index.php';</script>";

// }

$sql =  "SELECT * FROM lernit WHERE stu_email='".$stulogemail."'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result) == 1){
    $rows = mysqli_fetch_assoc($result);
    $stu_id= $rows['stu_id'];
      
      
}

if(isset($_REQUEST['submitfeedback'])){
if(($_REQUEST['f_content']==""))
{
    $passmsg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">
Fill All Fields</div>';
} else{
  
//   $stu_id = $_REQUEST['Course_Name'];
  $f_content = $_REQUEST['f_content'];
  
  $sql ="INSERT INTO  feedback ( f_content,stu_id) 
  VALUES ('$f_content','$stu_id')";


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

<div class="col-sm-6 mt-5 mx-3">

<form action="" class="mx-5" method="POST" enctype="multipart/form-data">
<div class="form-group">
    <label for="stu_id" class="form-label">Student Id</label>
    <input type="text" class="form-control" id="stu_id" name="stu_id" value="<?php 
    if(isset($stu_id))
    {
        echo $stu_id;
    }
    ?>" readonly>
    </div>
  <div class="form-group">
    <label for="f_content" class="form-label">Write Feedback</label>
    <input type="text" class="form-control" id="f_content" name="f_content" value="<?php 
    if(isset($f_content))
    {
        echo $f_content;
    }
    ?>">
    
  </div>
  <div class="form-group mt-2">
  <button type="submit" class="btn btn-primary" name="submitfeedback">Update</button>
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