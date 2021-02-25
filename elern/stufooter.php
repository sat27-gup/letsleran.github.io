<?php
include 'dbcon.php';
if(!isset($_SESSION)){
     session_start();
    }


    if(isset($_SESSION['is_login']))
    {
        $stulogemail = $_SESSION['logemail'];
    }
    
 
if(isset($stulogemail)){
$sql =  "SELECT stu_img FROM lernit WHERE 
stu_email='".$stulogemail."'";
$result=mysqli_query($conn,$sql);
$rows = mysqli_fetch_assoc($result);
$stu_img = $rows['stu_img'];
echo $stu_img;
}
?>


<html>
  <head>
<!-- Google font -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
<!-- Custom css -->
<link href="CSS/adminstyle.css" rel="stylesheet">
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Student Profile</title>
  </head>

  <body>

  <nav class="navbar navbar-dark fixed-top p-0 shadow"
style="background-color:#225470;">
<a class="navbar-brand col-sm-3 col-md-2 mr-0"
href="adminDashboard.php">Lets-Learn <small
class="text-white">Admin Area</small></a>

</nav>

  <div class="container-fluid mb-5" style="margin-top:40px;">
   <div class="row">
     <nav class="col-sm-3 col-md-2 bg-light sidebar py-5
     d-print-none">
     <div class="sidebar-sticky">
       <ul class="nav flex-column">
         <li class="nav-item">
         <img src="<?php echo $stu_img?>" alt="studentimage"
           class="img-thumbnail rounded-circle">
</a>
</li>
<li class="nav-item">
           <a class="nav-link" href="studentprofile.php">
            Profile
</a>
</li>
<li class="nav-item">
           <a class="nav-link" href="studentfeeback.php">
            Feedback
</a>
</li>
<li class="nav-item">
           <a class="nav-link" href="stuchangepassword.php">
            Change Password
</a>
</li>
<li class="nav-item">
           <a class="nav-link" href="index.php">
            Logout
</a>
</li>

</ul>
</div>
</nav>



  