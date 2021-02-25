
 <?php

session_start();

include_once('dbcon.php');

 if(isset($_POST['checkemail'])&&isset($_POST['stunemail'])){
  
  $checkemail= $_POST['checkemail'];
  $stunemail=$_POST['stunemail'];


         

       $sql=  "SELECT stu_email FROM lernit WHERE stu_email='".$stunemail."'";
    //  $reslut=mysqli_query($conn,$sql) or die("Connect Not Done");
 $result=$conn->query($sql);
 $row = $result->num_rows;
 echo json_encode($row);

 }
 
 if(isset($_POST['studignup'])&&isset($_POST['stunnames'])&&isset($_POST['stunemail'])&&isset($_POST['stunpasswrd'])){
  
  $studignup= $_POST['studignup'];
  $stunname=$_POST['stunnames'];
         $stunemail=$_POST['stunemail'];
       $stunpasswrd=$_POST['stunpasswrd'];

       $sql=  "INSERT INTO lernit(stu_name,stu_email,stu_pass) 
         VALUES ('{$stunname}','{$stunemail}','{$stunpasswrd}')";
    //  $reslut=mysqli_query($conn,$sql) or die("Connect Not Done");
 if($conn->query($sql)){
   echo json_encode("OK");
 }
 else{
  echo json_encode("Failed");
 }
  }


  //check log
if(!isset($_SESSION['is_login'])){
  if(isset($_POST['stuemails'])&&isset($_POST['logemail'])&&isset($_POST['logpasswrd'])){
  
    $logemail = $_POST['logemail'];
    
    $logpasswrd= $_POST['logpasswrd'];
    // echo $logemail;
    // echo $logpasswrd ;
    //SELECT  `stu_email`, `stu_pass`, `stu_occ`, `stu_img` FROM `letslern` WHERE 1
    $sql =  "SELECT stu_email ,stu_pass FROM lernit WHERE stu_email='".$logemail."'
    AND stu_pass='".$logpasswrd."'";
      //  $reslut=mysqli_query($conn,$sql) or die("Connect Not Done");
      // mysql_query("SELECT * FROM table1", $link);

      //  echo $sql."<br>";
      $result=mysqli_query($conn,$sql);
      
      $rows = mysqli_num_rows($result);
      // echo $rows;
   if($rows===1){
    $_SESSION['is_login']=true;
    $_SESSION['logemail']=$logemail;
   echo json_encode($rows);
   
 }else if ($rows === 0) {
   echo json_encode($rows);
 }
  }
}
?>