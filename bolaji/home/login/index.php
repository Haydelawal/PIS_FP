<?php

include 'connect.php';

$id = $_GET['userid'];


$sql = "SELECT * FROM personnel where email='$id' ";

$result = mysqli_query($con,$sql);


if($result){
while($row = mysqli_fetch_assoc($result)){

  $fname = $row['fname'];
  $mname = $row['mname'];

    $lname = $row['lname'];

    $phone = $row['phone'];
    $age = $row['age'];

    $gender = $row['gender'];
    $department = $row['department'];
    $state = $row['state'];  
      $address = $row['address'];


      $staff = $row['staff'];
      $certification = $row['certification'];
      $position = $row['position'];

      $email = $row['email'];

}
}


           ?>  


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Personnel Information</title>
  <link href="https://fonts.googleapis.com/css?family=Arimo:400,700" rel="stylesheet">
<script src="https://use.fontawesome.com/f56e4513c5.js"></script>
  
  <link rel="stylesheet" href="./style2.css">
  <script src="logout.js"></script>



</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
  <h1 class="title">Personnel Information</h1>
  <div class="row cf">
    <div id="card1" class="card four col">
      <div class="image-wrapper"></div>
      
      <h3 class="name">First Name: <?php echo $fname; ?>
</h3>
      <div class="info cf">
     
      </div>
      <div class="options">
        <ul>

        <li><p>Certification: <?php echo $certification; ?></p></li>

<li><p>Age: <?php echo $age; ?></p></li>
<li><p>Gender: <?php echo $gender; ?></p></li>
<li><p>State: <?php echo $state; ?></p></li>


        </ul>
      </div>
    </div>

    <div id="card1" class="card four col">
      <div class="image-wrapper"></div>
      <h3 class="name">Middle Name: <?php echo $mname; ?></h3>
      <div class="info cf">

      
      </div>
      <div class="options">
        <ul>
        <li><p>Staff: <?php echo $staff; ?></p></li>

        <li><p>Position: <?php echo $position; ?></p></li>
        <li><p>Phone: <?php echo $phone; ?></p></li>


        </ul>
      </div>
    </div>

    <div id="card1" class="card four col">
      <div class="image-wrapper"></div>
      <h3 class="name">Last Name: <?php echo $lname; ?></h3>
      <div class="info cf">
        <!-- <div class="four col"><span class="number"><?php echo $address; ?></span>Phone</div> -->
        
      </div>
      <div class="options">
        <ul>
          <li><p>Address: <?php echo $address; ?></p></li>

          <li><p>Department: <?php echo $department; ?></p></li>
          <li><p>Email: <?php echo $email; ?></p></li>


          <li>
        
          <a onclick="logout()">
          <span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i></span>Log Out
                </a>
        
        </li>
          

        </ul>
      </div>
    </div>
   

  </div>
</div>
<!-- partial -->
  
</body>
</html>
