<?php

include 'connect.php';

if(isset($_GET['updateid'])){
  $id = $_GET['updateid'];

  $sql = "select `id` from `personnel` where id=$id";

  $result = mysqli_query($con, $sql);
  if($result){
 //   echo '<script>alert("Data Updated Successfully")</script>';     
   }else {
    die(mysqli_error($con));

  }
}



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>ADMIN UPDATE ACADEMIC STAFF</title>
  </head>

  <body>
    
  <ul class="nav justify-content-center">
       <li class="nav-item">
    <a class="nav-link disabled" aria-current ="page">Academic Update Personnel Page</a>
  </li>
  <!-- <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li> -->
  <li class="nav-item">
    <a class="nav-link" href="deleteacad.php">Delete</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="acad.php">View</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="http://localhost/bolaji/admin/master/index.php">Home</a>
  </li>
</ul>

<br><br><br>


    <div class="container-fluid">

      <table class="table table-striped table-hover">
        <thead>
          <tr>

            <th scope="col"> SI</th>
            
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
            <th scope="col"> Operations</th>
            


          </tr>
        </thead>
        <tbody>


        <?php
         $sql = "select * from `personnel` where staff='Academic'";
         $result = mysqli_query($con, $sql);
         if($result){


          while($row = mysqli_fetch_assoc($result)){

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
            

            <td>

            <button class="btn btn-warning"><a href="updateaction.php?updateid='.$id.'" class="text-light">Update</a></button>
            </td>

            
          </tr>';

          }
          
        

         }
        
        
        
        
        
        
        
        ?>

   

         
        </tbody>
      </table>
      







    </div>
  </body>
  
</html>
