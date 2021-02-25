<?php
include 'header.php';
include 'dbconnesadmin.php';

?>

<!-- start video -->
<div class="container-fluid rev-mar">

  <div class="prnt-vid">
    <video playsinlie autoplay muted loop>
      <source src="video/Mouse_keyboard_01_Videvo.mov">
</video>
<div class="vid-orly">

</div>
<div class="vid-content">
  <h1 class="my-content">Welcome to Let's  Learn</h1>
  <small class="my-content">Learn And Explore</small><br>
  <!-- Button trigger modal -->
  <?php
  if(!isset($_SESSION['is_login'])){
 echo '<a href="#" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#loginmodel">Get Start</a>';
  }
  else{
    echo '<a href="#" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#loginmodel">My Profile</a>';
  }
  ?>

</div>


</div>
<!--end video -->
<!--Start Banner-->
<div class="container-fluid bg-danger txt-banner">
<div class="row bottom-banner">
<div class="col-sm">
<h5><i class="fas fa-book-reader"></i>100+ Online
Courses</h5>
</div>
<div class="col-sm">
<h5><i class="fas fa-users mr-3"></i>Expert Instructors</h5>
</div>

<div class="col-sm">
<h5><i class="fas fa-keyboard mr-3"></i>Lifetime Access</h5>
</div>

<div class="col-sm">
<h5><i class="fas fa-rupee-sign mr-3"></i>Money Back Guarantee</h5>
</div>



</div>
</div>
<!--End Banner-->
<!-- Start Card -->
 <div class="container courses mt-4">
     <h1 class="text-center">Popular Courses</h1>
 <!-- ist course -->
 <div class="row row-cols-1 row-cols-md-3 g-3 " >
 
  
  <?php
       
       $sql = "SELECT * FROM couses LIMIT 3";
       $result = mysqli_query($conn,$sql);
       //
       if(mysqli_num_rows($result) > 0){
         while($row = $result->fetch_assoc()){
           $course_id = $row['course_id'];
          // $course_img = $row['couse_img'];
           
           echo '
           <div class="col">
         
            <div class="card m-3">
            <img src="img\Courses\\'.$row['couse_img'].'" class="card-img-top" alt="...">
            
            <div class="card-body">  
             <h5 class="card-title">'.$row['couse_name'].'</h5>
              <p class="card-text">'.$row['couse_desc'].'</p>
     
             </div>
 
            <div class="card-footer">  
             <p class="card-text d-inlie">Price:
               <small><del>&#8377  '.$row['couse_orgn_price'].' </del></small>
            </p> 
              <span
              class="font-weight-bolder">&#8377 '.$row['couse_price'].' <span></p>
            <a href="coursedetail.php?course_id='.$course_id.'"
                class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
            </div>
 
       </div> 
       </div>';
       }
        }
        
      ?>
    
      </div>
         

     <div class="row row-cols-1 row-cols-md-3 g-3">
  
     <?php
       
       $sql = "SELECT * FROM couses LIMIT 3,3";
       $result = mysqli_query($conn,$sql);
       //
       if(mysqli_num_rows($result) > 0){
         while($row = $result->fetch_assoc()){
           $course_id = $row['course_id'];
          // $course_img = $row['couse_img'];
           
           echo '
           <div class="col">
         
            <div class="card m-3">
            <img src="img\Courses\\'.$row['couse_img'].'" class="card-img-top" alt="...">
            
            <div class="card-body">  
             <h5 class="card-title">'.$row['couse_name'].'</h5>
              <p class="card-text">'.$row['couse_desc'].'</p>
     
             </div>
 
            <div class="card-footer">  
             <p class="card-text d-inlie">Price:
               <small><del>&#8377  '.$row['couse_orgn_price'].' </del></small>
            </p> 
              <span
              class="font-weight-bolder">&#8377 '.$row['couse_price'].' <span></p>
            <a href="coursedetail.php?course_id='.$course_id.'"
                class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
            </div>
 
       </div> 
       </div>';
       }
        }
        
      ?>
        
 </div>

</div>


<!-- 2st course -->

<!--end course-->

<div class="text-center m-2">

<a href="#" class="btn btn-danger">View All Courses</a>
</div>
</div>
<!-- End Card -->
<!-- Start contact us -->
<div class="container mt-4" id="Contact">
  <h2 class="text-center mb-4">Contact US</h2>
 <div class="row">
  <div class="col-md-8">
    <form action="" method="post ">
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
<!-- End 1 contact us -->
   


  <!--Testimonial-->
  <div class="container-fluid backgrnd mt-5 p-5" style="background-color:#487289;">
<div class="container backgrnd mt-5" style="background-color:#487289;">
  <h1 class="text-center testyhanding p-4">Student Feedback</h1>
      <div class="row">
      <div class="col-md">
        <div class="slider owl-carousel">
         <?php
         include 'dbcon.php';
// INSERT INTO `feedback`(`f_id`, `f_content`, `stu_id`) 
// VALUES ([value-1],[value-2],[value-3])

// INSERT INTO `lernit`(`stu_id`, `stu_name`, `stu_email`, `
//stu_pass`, `stu_occ`, `stu_img`) 
// VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
         $sql = "SELECT l.stu_name,l.stu_occ,l.stu_img
         ,f.f_content FROM lernit AS l JOIN feedback AS  f ON l.stu_id = f.f_id";
          $result = mysqli_query($conn,$sql);
          //
          if(mysqli_num_rows($result) > 0){
            while($row = $result->fetch_assoc()){
              $s_img = $row['stu_img'];
              $s_name=$row['stu_name'];
              $s_desc=$row['f_content'];
              $s_occ=$row['stu_occ'];
?>
             <div class="card">
        <div class="img">
          <img src="<?php echo $s_img ?>" alt="">
          </div>
        <div class="content">
            <div class="title">
          <?php echo $s_name;?> </div>
          <div class="sub-title">
          <?php echo $s_occ;?>
          </div>
             <p>
             <?php echo  $s_desc;?>
          </p>
            
        </div>
</div>
         <?php   }
         }
         ?>

<!-- <div class="card">
        <div class="img">
<img src="#" alt=""></div>
<div class="content">
          <div class="title">
Pricilla Preez</div>
<div class="sub-title">
Web Developer</div>
<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
<div class="btn">
            <button>Read more</button>
          </div>
</div>
</div>
<div class="card">
        <div class="img">
<img src="#" alt=""></div>
<div class="content">
          <div class="title">
Eliana Maia</div>
<div class="sub-title">
App Developer</div>
<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
<div class="btn">
            <button>Read more</button>
          </div>
</div>

</div> -->
</div>
</div>
</div>
</div>

</div>



    <!--/End customer-feedback -->
    <!-- social limks -->
    <div class="container-fluid bg-danger  text-white">
      
<div class="row pl-8 social">
<div class="col-sm ">
<h5><a href="#">Facebook
Courses</a></h5>
</div>
<div class="col-sm">
<h5><a href="#">Instagram</a></h5>
</div>

<div class="col-sm">
<h5><a href="#">Whatsapp</a></h5>
</div>

<div class="col-sm">
<h5><a href="#">Linktend</a></h5>
</div>
</div>
</div>
<!--end social limks -->
<div class="container-fluidpt-4" style="background-color:#E9ECEF">
<div class="container" style="background-color:#E9ECEF">
<div class="row text-center">
<div class="col-sm">
<h5><i class="fas fa-book-reader"></i>About Us</h5>
<p>Let'Learn provides universal acess to the world's best
  education, partnering with top universities and
  oranization to offer course online.</p>
</div>
<div class="col-sm">
<h5><i class="fas fa-users mr-3"></i>Category</h5>
<a class="text-dark" href="#">Web Development</a><br/>
<a class="text-dark" href="#">Web Designing</a><br/>
<a class="text-dark" href="#">Andriod App Dev</a><br/>
<a class="text-dark" href="#">ios Developement</a><br/>
<a class="text-dark" href="#">Data Analysis</a><br/>
<a class="text-dark" href="#">Web Development</a><br/>
</div>

<div class="col-sm">
<h5>
  <i class="fas fa-keyboard mr-3"></i>
  Contact Us</h5>
  <p>Let's Learn,
      Near Vakola Police Station,Santascruz,
      Mumbai-400055<br/>
      Phone: +000000000<br/>
      </p>
</div>


</div>
</div>
</div>

<?php
include 'footer.php'
?>