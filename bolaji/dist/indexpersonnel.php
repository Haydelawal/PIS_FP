<?php

include 'connect.php';

if(isset($_POST['submit'])){

$fname =$_POST['fname'];
$mname =$_POST['mname'];
$lname =$_POST['lname'];

$age =$_POST['age'];
$phone =$_POST['phone'];
$state =$_POST['state'];

$email =$_POST['email'];
$address =$_POST['address'];
$gender =$_POST['gender'];

$department =$_POST['department'];
$staff =$_POST['staff'];
$certification =$_POST['certification'];

$position =$_POST['position'];



$sql = "  insert into `personnel` (fname,mname,lname,age,phone,state,email,address,gender,department,staff,certification,position)

values   ('$fname','$mname','$lname','$age','$phone','$state','$email','$address','$gender','$department','$staff','$certification','$position') ";

$result = mysqli_query($con,$sql);

if($result) {

  echo '<script>alert("Data Insertion Successful")</script>';
  header('Location: http://localhost/bolaji/home/login/login.php');

 

}else{
  die(mysqli_error($con));
}

}



?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>PIS Form</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="form_wrapper">
  <div class="form_container">
    <div class="title_container">
      <h2>Personnel</h2>
      <h2>Data Entry Form</h2>
    </div>
    <div class="row clearfix">
      <div class="">
        <form  method="post">

          <div class="row clearfix">
            <div class="col_half">
              <p>First Name</p>
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                <input type="text" name="fname" placeholder="First Name" />
              </div>
            </div>
            <div class="col_half">
            <p>Middle Name</p>
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                <input type="text" name="mname" placeholder="Middle Name" required />
              </div>
            </div>
          </div>

          <div class="row clearfix">
            <div class="col_half">
            <p>Last Name</p>
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                <input type="text" name="lname" placeholder="Last Name" />
              </div>
            </div>
            <div class="col_half">
            <p>Age</p>

              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-child"></i></span>
              
                <input type="text" name="age" placeholder="Age" required />
              </div>
            </div>
          </div>

          <div class="row clearfix">
            <div class="col_half">
            <p>Phone Number</p>

              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-phone"></i></span>
                <input type="text" name="phone" placeholder="Phone Number" />
              </div>
            </div>
            <div class="col_half">
            <p>State Of Origin</p>

              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-map-marker"></i></span>
                <input type="text" name="state" placeholder="State Of Origin" required />
              </div>
            </div>
          </div>
          
          <p>Email Address</p>
          <div class="input_field">
          

             <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
            <input type="email" name="email" placeholder="Email" required />
          </div>
          
         
          <p>Residential Address</p>
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-map-marker"></i></span>
            <input type="text" name="address" placeholder="Residential Address" required />
          </div>
            	
          <p>Gender</p>
              <div class="input_field select_option">
                <select  name="gender"  required> 
                  <option value="">Select a Gender</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
                <div class="select_arrow"></div>
              </div>

              <p>Department</p>
              <div class="input_field select_option">
                <select name="department" required> 
                  <option value="">Select a Department</option>
                  <option value="Computer Science">Computer Science</option>
                  <option value="Physics">Physics</option>
                  <option value="Chemistry">Chemistry</option>
                  <option value="Mathematics">Mathematics</option>
                </select>
                <div class="select_arrow"></div>
              </div>

              <p>Staff</p>

              <div class="input_field select_option">
                <select name="staff" required> 
                  <option value="">Select a Staff Type</option>
                  <option value="Academic">Academic Staff</option>
                  <option value="Non Academic">Non Academic Staff</option>
                  <option value="Senate">Senate Staff</option>
                 
                </select>
                <div class="select_arrow"></div>
              </div>

              <p>Certification</p>

              <div class="input_field select_option">
                <select name="certification"  required> 
                  <option value="">Highest Certification Acquired </option>
                  <option value="PHD">Professor (Phd)</option>
                  <option value="DR">Doctor (Dr)</option>
                  <option value="MS">Master (Ms)</option>
                  <option value="BS">Bachelor (BS/BA)</option>
                </select>
                <div class="select_arrow"></div>
              </div>

              <p>Position</p>

              <div class="input_field select_option">
                <select name="position" required> 
                  <option value= ""> Position Held </option>
                  <option value="VC">Vice Chancellor (VC)</option>
                  <option value="DVC">Deputy Vice Chancellor (DVC)</option>
                  <option value="DEAN">Dean </option>
                  <option value="SUBDEAN">Sub-Dean</option>
                  <option value="HOD">Head Of Department (HOD)</option>
                  <option value="LECTURER">Lecturer</option>
                </select>
                <div class="select_arrow"></div>
              </div>
             

              
            <!-- <div class="input_field checkbox_option">
            	<input type="checkbox" id="cb1" required>
    			<label for="cb1">I agree with terms and conditions</label>
            </div>
            <div class="input_field checkbox_option">
            	<input type="checkbox" id="cb2" required>
    			<label for="cb2">I want to receive the newsletter</label>
            </div> -->
          <input class="button" type="submit" name="submit" value="Submit Form"   />
        </form>
      </div>
    </div>
  </div>
</div>
<!-- <p class="credit">Developed by <a href="http://www.designtheway.com" target="_blank">Design the way</a></p> -->
<!-- partial -->
  <script src='https://use.fontawesome.com/4ecc3dbb0b.js'></script>
</body>
</html>
