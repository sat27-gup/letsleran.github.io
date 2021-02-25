<!-- Header php -->
<?php
include 'header.php';
?>
<!--End Header php -->

<div class="container-fluid bg-dark">
<div class="row">
 <img src="img/business-1839876_1920.jpg" alt="...." style="height:500px;object-fit:cover;
box-shadow:10px;"/>
</div>
</div>

<!-- paymentstatus -->

<div class="container m-4">
   <h2 class="text-center my-4">Payement Status</h2>
   <form >
   <div class="row g-3">
  <div class="col">
    <label  class="offset-sm-6 col-form-label ">Order ID:</label>
    
  </div>
  <div class="col">
   
    <input type="text" class="form-control mx-3"  placeholder="Search">
  </div>
  <div class="col">
    <button type="submit" class="btn btn-primary mx-4">Views</button>
  </div>
  </div>
</form>
</div>
<!-- end paymentstatus -->
<!-- Contact -->
<div class="container mt-4" id="Contact">
  <h2 class="text-center mb-4">Contact US</h2>
 <div class="row">
  <div class="col-md-8">
    <form action="" method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Subject</label>
          <input type="text" class="form-control" name="subject" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Email</label>
          <input type="email" class="form-control" name="email" id="exampleInputPassword1">
        </div>
  
        <div class="form-floating">
         <textarea class="form-control" placeholder="How Can I help You" name="message" id="floatingTextarea2" style="height: 100px"></textarea>
  
        </div><br>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
<div class="col-md-4 hfhfhfhf text-white text-center">
      <h4>Let's Learn</h4>
      <p>Let's Learn,
      Near Vakola Police Station,Santascruz,
      Mumbai-400055<br/>
      Phone: +000000000<br/>
      www.let'sleran.com</p> 
  </div>
</div>

</div>
<!-- End Concat -->
<?php
include 'footer.php';
?>