<!-- Header php -->
<?php
include 'header.php';
include 'dbconnesadmin.php';
?>
<!--End Header php -->

<div class="container-fluid bg-dark">
<div class="row">
 <img src="img/business-1839876_1920.jpg" alt="...." style="height:500px;width:100%;object-fit:cover;
box-shadow:10px;"/>
</div>
</div>

<!-- Start Card -->
<div class="container courses mt-4">
     <h1 class="text-center">All Popular Courses</h1>
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
<!-- button -->
<!-- <div class="text-center m-2">

<a href="#" class="btn btn-danger">View All Courses</a>
</div>
</div> -->
<!-- End Card -->


<!-- footer php -->

<?php
include 'footer.php'
?>
<!-- End footer php -->