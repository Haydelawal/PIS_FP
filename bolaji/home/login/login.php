<?php

include 'connect.php';

if(!empty($_POST['submit'])) {

  $email = $_POST['email'];
  $password = $_POST['password'];
  $query = "SELECT * FROM personnel WHERE email='$email' AND mname='$password'";

  $result = mysqli_query($con,$query);
  $count = mysqli_num_rows($result);

  if($count > 0){
    echo "<script>alert('Log In Successful')</script>";

    header("Location: http://localhost/bolaji/home/login/index.php?userid=$email");


  }else {
    echo "<script>alert('Log In Not Successful')</script>";

  }

}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Personnel Log In Form</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="form_wrapper">
  <div class="form_container">
    <div class="title_container">
      <h2>Personnel Log In Form</h2>
    </div>
    <div class="row clearfix">
      <div class="">
        <form method="post">
          
        <p>Email Address</p>

          <div class="input_field"> 
<span><i aria-hidden="true" class="fa fa-envelope"></i></span>
            <input type="email" name="email" placeholder=" Enter Your Email" required />
          </div>
        
          <p>Password (Middle Name)</p>
          <div class="input_field">           
<span><i aria-hidden="true" class="fa fa-lock"></i></span>
            <input type="password" name="password" placeholder="Enter Your Password" required />
          </div>        
           
          <input class="button" type="submit" name="submit" value="LOG IN" />
        </form>
      </div>
    </div>
  </div>
</div>
<p class="credit">Don't Have An Account? <a href="http://localhost/bolaji/home/index.html" >Sign Up Here</a></p>
<!-- partial -->
  <script src='https://use.fontawesome.com/4ecc3dbb0b.js'></script>
</body>
</html>
