<?php
$localhost="localhost";
$username="root";
$password="";
$db="student";
$conn=new mysqli($localhost,$username,$password,$db);
if($conn->connect_error){
    die("Connection Not Done");
}

// $sql=  "SELECT * FROM letslern WHERE 1";
//      $reslut=mysqli_query($conn,$sql) or die("Connect Not Done");





?>