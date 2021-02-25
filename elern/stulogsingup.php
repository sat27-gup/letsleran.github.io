<?php
include 'dbcon.php';
include 'header.php';

?>
<div class="container-fluid bg-dark">
<div class="row">
 <img src="img/business-1839876_1920.jpg" alt="...." style="height:500px;object-fit:cover;
box-shadow:10px;"/>
</div>
</div>


<div class="container jumbotron mb-5 mt-5">
<div class="row p-3" style="background-color:#EAECEE;">
<div class="col-md-4" style="display:inline-block;">
<h5 class="mb-3">If Already Registered !! Login</h5>
<form>
      
      <div class="mb-3">
      <label for="logInputEmail" class="form-label">Email</label>
      <input type="email" class="form-control" id="logInputEmail" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="logInputPassword" class="form-label"> Password</label>
      <input type="password" class="form-control" id="logInputPassword">
    </div>
    
  
       
        <small id="loginform"></small>
        <button type="button" class="btn btn-primary" id="loginup">Login</button>
        </form>
         </div>

<div class="col-md-6 offset-md-1">
<h5 class="mb-3">New User !! Sign Up</h5>


      <form id="myform" >
      <div class="mb-3">
    <label for="exampleInputName" class="form-label">Name</label><small id="stunamess"></small>
    <input type="text" class="form-control" name="usrname" id="exampleInputName" aria-describedby="emailHelp">
    <div class="mb-3">
    <label for="exampleInputEmail" class="form-label">Email</label><small id="stuemails"></small>
    <input type="email" class="form-control" name="email" id="exampleInputEmail" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword" class="form-label">New Password</label><small id="stupsswrds"></small>
    <input type="password" class="form-control" name="password" id="exampleInputPassword">
  </div>
  

      
      
      <span id="sturegis"></span>
      <button type="button" class="btn btn-primary" name="save"  id="singup">SignUp</button>
      </form>
    </div>


</div>
</div>
</div>

<?php
include 'footer.php';
?>