<?php

?>
<footer class="cotainer-fluid bg-dark text-center p-2">
<small class="text-white">Copyright &copy;2021 || Designed By DesignWeb || <a  href="#" 
data-bs-toggle="modal" data-bs-target="#SSStumodel">Admin</a> </small>
</footer>


<!-- Studen reg modal -->



<!-- Modal -->
<div class="modal fade" id="expumodel" tabindex="-1" aria-labelledby="expumodelLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="expumodelLabel">Login Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
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
  
</form>
      </div>
      <div class="modal-footer">
      <small id="loginform"></small>
      <button type="button" class="btn btn-primary" id="loginup">Login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
       </div>
    </div>
  </div>
</div>

<!-- End Studen reg modal -->




<!-- Studen reg modal -->



<!-- Modal -->
<div class="modal fade" id="SSStumodel" tabindex="-1" aria-labelledby="SSStumodelLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="SSStumodelLabel">Admin Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" ></button>
      </div>
      <div class="modal-body">
      <form>
      
    <div class="mb-3">
    <label for="adminInputEmail" class="form-label">Email</label>
    <input type="email" class="form-control" id="adminInputEmail">
    </div>
  <div class="mb-3">
    <label for="adminInputPassword" class="form-label"> Password</label>
    <input type="password" class="form-control" id="adminInputPassword">
  </div>
  
</form>
      </div>
      <div class="modal-footer">
      <small id="adminform"></small>
      <button type="button" class="btn btn-primary" id="adminup" >Login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
       </div>
    </div>
  </div>
</div>

<!-- End Studen reg modal -->


<!-- Studen regLogin modal -->
<?php

// $name=$_POST['usrname'];
// $email=$_POST['email'];
// $password=$_POST['password'];

// $sql=  "INSERT INTO letslern(stu_name,stu_email,stu_pass) 
//         VALUES ('{$stunname}','{$stunname}','{$stunname}')";
//      $reslut=mysqli_query($conn,$sql) or die("Connect Not Done");


?>
<!-- Modal -->
<div class="modal fade" id="loginmodel" tabindex="-1" aria-labelledby="loginmodelLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginmodelLabel">Signup Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="myform">
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
  
</form>
      </div>
      <div class="modal-footer">
      <span id="sturegis"></span>
      <button type="button" class="btn btn-primary" name="save"  id="singup">SignUp</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       </div>
    </div>
  </div>
</div>

<!-- End StudenLogin reg modal -->














    <!-- Optional JavaScript; choose one of the two -->
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script>
      $(".slider").owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000, //2000ms = 2s;
        autoplayHoverPause: true,
      });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- <script src="js/function.js"></script> -->
<script src="js/ajax.js"></script>
<script src="js/ajaxadmn.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
    
  </body>
</html>