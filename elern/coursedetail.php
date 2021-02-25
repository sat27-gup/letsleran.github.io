<!-- Header php -->
<?php
include 'header.php';
include 'dbconnesadmin.php';
?>
<!--End Header php -->

<div class="container-fluid bg-dark">
<div class="row">
 <img src="img/business-1839876_1920.jpg" alt="...." style="height:500px;object-fit:cover;
box-shadow:10px;"/>
</div>
</div>


<!-- End Concat -->


<!-- courdetl -->
<!-- <div class="col">
         
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
         <a href=""coursedetail.php?course_id='.$course_id.'"" 
             class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
         </div> -->
<div class="container mt-5 ">
<?php
if(isset($_GET['course_id'])){
  $cousre_id=$_GET['course_id'];
  $_SESSION['course_id']=$cousre_id;
  $sql = "SELECT * FROM couses 
  WHERE course_id = '$cousre_id'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
}
?>
<div class="card mb-3 mx-auto" style="max-width: 100%;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img\Courses\<?php echo $row['couse_img']?>" alt="..." width="100%" height="100%">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Course: <?php  echo $row['couse_name'] ?> </h5>
        <p class="card-text">Description:<?php echo  $row['couse_desc']?></p>
        <p class="card-text"> Duration : <?php echo  $row['couse_duration']?>'</p>
        <form action="stucheckout.php" method="post">
       <p class="card-text d-inline">Price:
       <?php echo  $row['couse_price']?> <span></p>
       <div>
       <input type="hidden" name="id" value="'$row['couse_price']'">
       <button type="submit" class="btn btn-primary text-white
       font-weight-bolder float-right" name="buy" >Buy Now</button>
       </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<!--end courdetl -->

<!-- tblas -->
<div class="container">
<div class="row">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Lesson No.</th>
      <th scope="col">Lession Name</th>
      
    </tr>
  </thead>
  <tbody>
  <?php
$sql = "SELECT * FROM lession";
$result = $conn->query($sql);
if($result->num_rows > 0){
  $num=0;
  while($row = $result->fetch_assoc()){
    if($cousre_id == $row['course_id'])
      {
        $num++;
      echo '<tr>
      <th scope="row">'.$num.'</th>
      <td>'.$row['lesson_name'].'</td>
      </tr>';
    }
  }
}
  ?>
    
  </tbody>
</table>
</div>
</div>
<!--end tblas -->
<?php
include 'footer.php';
?>