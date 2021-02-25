<?php
$localhost="localhost";
$username="root";
$password="";
$db="adminpannel";
$conn=new mysqli($localhost,$username,$password,$db);
if($conn->connect_error){
    die("Connection Not Done");
}
?>