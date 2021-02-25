
<?php
include 'adminheder.php';
include 'dbcon.php';
$sql ="SELECT * FROM lernit";
$result = $conn->query($sql);
$totalstdnt = $result->num_rows;
?>
<div class="col-sm-9 mt-5">
  <div clas="row  " style="display:flex;">
        <div class="col-sm-4 mt-5" >
      <div class="card text-white bg-danger mb-3" style="max-width:18em;">
      <div class="card-header">Courses</div>
      <div class="card-body">
      <?php
        include 'dbconnesadmin.php';
         $sql ="SELECT * FROM couses";
          $result = $conn->query($sql);
        $totalcourse = $result->num_rows;
         ?>
        <h4 class="card-title">
        
         <?php  echo $totalcourse;?>
</h4>
<a class="btn text-white" href="#">View</a>

</div>

</div>
</div>
<div class="col-sm-4 mt-5">
      <div class="card text-white bg-success mb-3" style="max-width:18em;">
      <div class="card-header">Students</div>
      <div class="card-body">
        <h4 class="card-title">
        <?php
          echo $totalstdnt;
         ?>
</h4>
<a class="btn text-white" href="#">View</a>

</div>

</div>
</div>
<div class="col-sm-4 mt-5">
      <div class="card text-white bg-primary mb-3"
      style="max-width:18em;">
      <div class="card-header">Sold</div>
      <div class="card-body">
        <h4 class="card-title">
        0
</h4>
<a class="btn text-white" href="#">View</a>

</div>

</div>
</div>



</div>

<div class="mx-5 mt-5 text-center">
  <p class="bg-dark text-white p-2">Course Ordered </p>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Order ID</th>
        <th scope="col">Course ID</th>
        <th scope="col">Student ID</th>
        <th scope="col">Order Date</th>
        <th scope="col">Amount</th>
        <th scope="col">Action</th>
       
</tr>


<thead>
  <tbody>
    <tr>
      <th scope="row">22</th>
      <td>100</td>
      <td>sonam@gmail.com</td>
      <td>20/10/2020</td>
      <td>2000</td>
      <td><button type="submit class="btn
      btn-secondary name="delete" value="Delete"><i 
      class="far fa-trash-alt">Delete</i></button></td>

</tr>
</tbody>
</table> 
</div>
</div>
</div>
</div>

</div>
</div>

    <?php
    include 'adminfooter.php';
    ?>