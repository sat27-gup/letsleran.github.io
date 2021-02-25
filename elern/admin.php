<?php
session_start();
include 'dbconnesadmin.php';
//check log
 if(!isset($_SESSION['is_admin_login'])){
  if(isset($_POST['stuemails'])&&isset($_POST['Admin'])&&isset($_POST['Adminpasss'])){
  
    $admlogemail = $_POST['Admin'];
    
    $admlogpasswrd = $_POST['Adminpasss'];
    // echo $logemail;

    // INSERT INTO `owner`(`admin_id`, `admin_name`, `admin_email`, `admin_pass`) 
    // VALUES ([value-1],[value-2],[value-3],[value-4])
    // echo $logpasswrd ;
    //SELECT  `stu_email`, `stu_pass`, `stu_occ`, `stu_img` FROM `letslern` WHERE 1
    $sql =  "SELECT admin_email , admin_pass FROM owner WHERE stu_email='".$admlogemail."'
    AND stu_pass='".$admlogpasswrd."'";
      //  $reslut=mysqli_query($conn,$sql) or die("Connect Not Done");
      // mysql_query("SELECT * FROM table1", $link);

        echo $sql."<br>";
      $result = mysqli_query($conn,$sql);
      
      $rows = mysqli_num_rows($result);
      // echo $rows;
    //   echo $rows;
   if($rows === 1){
    // $_SESSION['is_admin_login']=true;
    // $_SESSION['adminlogemail']=$admlogemail;
   echo json_encode($rows);
   
 }else if ($rows === 0) {
   echo json_encode($rows);
 }
  }
}

?>