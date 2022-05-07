<?php

include 'connect.php';
$id = $_GET['updateid'];
$sql  = "Select * from `personnel` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);


$id =$row['id'];

            $fname =$row['fname'];
            $mname =$row['mname'];
            $lname =$row['lname'];


            $age =$row['age'];
            $phone =$row['phone'];
            $state =$row['state'];


            $email =$row['email'];
            $address =$row['address'];
            $gender =$row['gender'];


            $department =$row['department'];
            $staff =$row['staff'];

            $certification =$row['certification'];
            $position =$row['position'];



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



$sql = " update `personnel` set id='$id', 
fname = '$fname',
mname ='$mname',
lname ='$lname',

age ='$age',
phone ='$phone',
state ='$state',

email ='$email',
address ='$address',
gender ='$gender',

department ='$department',
staff ='$staff',
certification ='$certification',

position ='$position' 
where id=$id
 ";

$result = mysqli_query($con,$sql);

if($result) {

  // header("Location: http://localhost/bolaji/dist/work.php");

 
    //  echo '<script>alert("Data Insertion Successful")</script>';
     header('location:http://localhost/bolaji/dist/update.php');
    echo '<script>confirm("Data Updated Successfully")</script>';
    

}else{
  die(mysqli_error($con));
}

}



?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin Update Page</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="form_wrapper">
  <div class="form_container">
    <div class="title_container">
      <h2>Administrative</h2>
      <h2>Personnel Data Entry Form</h2>
    </div>
    <div class="row clearfix">
      <div class="">
        <form  method="post">

          <div class="row clearfix">
            <div class="col_half">
              <p>First Name</p>
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                <input type="text" name="fname" placeholder="First Name"  value = <?php
              
              echo $fname;
              
              ?>>
              </div>
            </div>
            <div class="col_half">
            <p>Middle Name</p>
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                <input type="text" name="mname" placeholder="Middle Name" required 
                
               value= <?php
              
              echo $mname;
              
              ?>
                
                >
              </div>
            </div>
          </div>

          <div class="row clearfix">
            <div class="col_half">
            <p>Last Name</p>
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                <input type="text" name="lname" placeholder="Last Name" 
                
               value= <?php
              
              echo $mname;
              
              ?>
              
              
                >
              </div>
            </div>




            <div class="col_half">
            <p>Age</p>

              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
              
                <input type="text" name="age" placeholder="Age" required 
                
                value= <?php
              
              echo $age;
              
              ?>
                
                >
              </div>
            </div>
          </div>

          <div class="row clearfix">
            <div class="col_half">
            <p>Phone Number</p>

              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                <input type="text" name="phone" placeholder="Phone Number" 
                
                value= <?php
              
              echo $phone;
              
              ?>
                
                >
              </div>
            </div>
            <div class="col_half">
            <p>State Of Origin</p>

              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                <input type="text" name="state" placeholder="State Of Origin" required 
                
                
                value= <?php
              
              echo $state;
              
              ?>
                
                >
              </div>
            </div>
          </div>
          
          <p>Email Address</p>
          <div class="input_field">
          

             <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
            <input type="email" name="email" placeholder="Email" required 
            
            value= <?php
              
              echo $email;
              
              ?>
            
            >
          </div>
          
         
          <p>Residential Address</p>
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
            <input type="text" name="address" placeholder="Residential Address" required 
            value="<?php echo $address;?>">
          </div>
            	
          <p>Gender</p>
              <div class="input_field select_option">
                <select  name="gender"  required> 
                <option value = <?php
              
              echo $gender;
              
              ?>>
              <?php
              
              echo $gender;
              
              ?></option>

                  <option value="">Select a Gender</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
                <div class="select_arrow"></div>
              </div>

              <p>Department</p>
              <div class="input_field select_option">
                <select name="department" required> 


                <option value = <?php
              
              echo $department;
              
              ?>>
              <?php
              
              echo $department;
              
              ?></option>

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

                <option value = <?php
              
              echo $staff;
              
              ?>>
              <?php
              
              echo $staff;
              
              ?></option>


                  <option value="">Select a Staff Type</option>
                  <option value="Academic Staff">Academic Staff</option>
                  <option value="Non Academic Staff">Non Academic Staff</option>
                  <option value="Senate Staff">Senate Staff</option>
                  <option value="Senate and Academic Staff">Senate and Academic Staff</option>
                  <option value="Senate and Non Academic Staff">Senate and Non Academic Staff</option>
                </select>
                <div class="select_arrow"></div>
              </div>

              <p>Certification</p>

              <div class="input_field select_option">
                <select name="certification"  required> 

                <option value = <?php
              
              echo $certification;
              
              ?>>
              <?php
              
              echo $certification;
              
              ?></option>

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

                <option value = <?php
              
              echo $position;
              
              ?>>
              <?php
              
              echo $position;
              
              ?></option>

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
          <input class="button" type="submit" name="submit" value="Update"   />
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
