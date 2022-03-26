<?php

include 'connect.php';

//  mysqli_select_db('bolaji') or die(mysqli_error());


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>SEARCH BY NAME</title>
    

<nav class="navbar navbar navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">ADMINISTRATIVE SEARCH FUNCTION</a>
    <form class="form-inline" action="search.php" method="get">
    <input class="rm-control mr-sm-2"  name="search" type="search" placeholder="Search" >
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button>
  </form>
  </div>
</nav>


  </head>

  <body>
 

     

<br><br><br>
  
    <div class="container-fluid">

      <table class="table table-striped table-hover">
        <thead>
          <tr>

            <th scope="col">id</th>
            
            <th scope="col"> FirstName</th>
            <th scope="col"> MiddleName</th>
            <th scope="col"> LastName</th>
            <th scope="col"> Age</th>
            <th scope="col"> Phone</th>
            <th scope="col"> State</th>
            <th scope="col"> Email</th>
            <th scope="col"> Address</th>
            <th scope="col"> Gender</th>
            <th scope="col"> Department</th>
            <th scope="col"> Staff</th>
            <th scope="col"> Certification</th>
            <th scope="col"> Position</th>

          </tr>
        </thead>
        <tbody>
          <?php

if (isset($_GET['search'])) {

  $fname =$_GET['search'];
  $mname =$_GET['search'];
  $lname =$_GET['search'];
  $sql = "SELECT * FROM personnel WHERE fname LIKE '%$fname%' OR lname LIKE '%$lname%'  OR mname LIKE '%$mname%'";

  $exe = mysqli_query($con,$sql) or die(mysqli_error());

  // if (mysqli_num_rows($exe) > 0) {
  //   $count = 0;

if ($exe){
    while($row = mysqli_fetch_assoc($exe)){
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


      echo '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$fname.'</td>
      <td>'.$mname.'</td>
      <td>'.$lname.'</td>

      <td>'.$age.'</td>
      <td>'.$phone.'</td>
      <td>'.$state.'</td>

      <td>'.$email.'</td>
      <td>'.$address.'</td>
      <td>'.$gender.'</td>

      <td>'.$department.'</td>
      <td>'.$staff.'</td>
      <td>'.$certification.'</td>

      <td>'.$position.'</td>
      


      
    </tr>';
      
    }
  }
}
          ?>

       

        </tbody>
      </table>
      







    </div>
  </body>
  
</html>

