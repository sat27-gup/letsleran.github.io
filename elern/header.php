<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--fontasm-->


<!-- Google font -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
<!-- crausal -->
<link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link href="CSS/style3.css" rel="stylesheet">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" 
    crossorigin="anonymous">
    
    <!-- Custom Css -->
    <link href="CSS/custom.css" rel="stylesheet">
<style>
  .hfhfhfhf{
    background-image:linear-gradient(240deg,#ed213a,#93291e);
    padding: 3rem;
    height: 13rem;
    margin-top:4rem;
    transform: rotate(-10deg);
    z-index:5;
}
  </style>
  



  <!-- crausal -->
  </head>
  <body>
    <!--Start Nav-->

    <nav class="navbar ccc navbar-expand-sm navbar-dark  pl-5 fixed-top " style="background-color:#255470;">
  <div class="container-fluid ">
    <a class="navbar-brand" href="index.php">Lets Learn</a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav custom-nav pl-5">
      <li class="nav-item custom-nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link active" aria-current="page" href="courses.php">Course</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link active" aria-current="page" href="paymentstatus.php">Payment Status</a>
        </li>
        <?php
        session_start();
        if(isset($_SESSION['is_login'])){
          echo '
          <li class="nav-item custom-nav-item">
          <a class="nav-link active" aria-current="page" href="studentprofile.php">My Profile</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link active" aria-current="page" href="logoutl.php">Logout</a>
        </li> ';
        }
          else{
          echo '
          <li class="nav-item custom-nav-item">
          <a class="nav-link active" aria-current="page" href="#"
          data-bs-toggle="modal" data-bs-target="#expumodel">Login</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link active" aria-current="page" href="#" 
          data-bs-toggle="modal" data-bs-target="#loginmodel">Signup</a>
        </li>';
      }
        
        ?>

        
        
        <li class="nav-item custom-nav-item">
          <a class="nav-link active" aria-current="page" href="#">Feedback</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link active" aria-current="page" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>




<!--End Nav-->