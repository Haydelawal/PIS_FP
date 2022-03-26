<?php

error_reporting (0);

$conn = mysqli_connect ("localhost","root","","bolaji") or die(mysqli_error());
$query = "SELECT COUNT(*) AS count FROM `personnel` WHERE `staff` ='Senate'";

$query_result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($query_result)){
  $output = $row['count'];

}


$sql = "SELECT * FROM `personnel`";
$result = mysqli_query($conn, $sql);

?>

<?php

error_reporting (0);

$conn = mysqli_connect ("localhost","root","","bolaji") or die(mysqli_error());
$query2 = "SELECT COUNT(*) AS count FROM `personnel` WHERE `staff` ='Academic'";

$query_result2 = mysqli_query($conn, $query2);

while($row2 = mysqli_fetch_assoc($query_result2)){
  $output2 = $row2['count'];

}


$sql2 = "SELECT * FROM `personnel`";
$result2 = mysqli_query($conn, $sql2);

?>

<?php

error_reporting (0);

$conn = mysqli_connect ("localhost","root","","bolaji") or die(mysqli_error());
$query3 = "SELECT COUNT(*) AS count FROM `personnel` WHERE `staff` ='Non Academic'";

$query_result3 = mysqli_query($conn, $query3);

while($row3 = mysqli_fetch_assoc($query_result3)){
  $output3 = $row3['count'];

}


$sql3 = "SELECT * FROM `personnel`";
$result3 = mysqli_query($conn, $sql3);

?>


<?php

error_reporting (0);

$conn = mysqli_connect ("localhost","root","","bolaji") or die(mysqli_error());
$query4 = "SELECT COUNT(staff) AS count FROM `personnel` ";

$query_result4 = mysqli_query($conn, $query4);

while($row4 = mysqli_fetch_assoc($query_result4)){
  $output4 = $row4['count'];

}


$sql4 = "SELECT * FROM `personnel`";
$result4 = mysqli_query($conn, $sql4);

?>


<?php

error_reporting (0);

$conn = mysqli_connect ("localhost","root","","bolaji") or die(mysqli_error());
$query5 = "SELECT COUNT(position) AS count FROM `personnel` WHERE `position` = 'VC'";

$query_result5 = mysqli_query($conn, $query5);

while($row5 = mysqli_fetch_assoc($query_result5)){
  $output5 = $row5['count'];

}


$sql5 = "SELECT * FROM `personnel`";
$result5 = mysqli_query($conn, $sql5);

?>

<?php

error_reporting (0);

$conn = mysqli_connect ("localhost","root","","bolaji") or die(mysqli_error());
$query6 = "SELECT COUNT(position) AS count FROM `personnel` WHERE `position` = 'DVC'";

$query_result6 = mysqli_query($conn, $query6);

while($row6 = mysqli_fetch_assoc($query_result6)){
  $output6 = $row6['count'];

}


$sql6 = "SELECT * FROM `personnel`";
$result6 = mysqli_query($conn, $sql6);

?>

<?php

error_reporting (0);

$conn = mysqli_connect ("localhost","root","","bolaji") or die(mysqli_error());
$query7 = "SELECT COUNT(position) AS count FROM `personnel` WHERE `position` = 'DEAN'";

$query_result7 = mysqli_query($conn, $query7);

while($row7 = mysqli_fetch_assoc($query_result7)){
  $output7 = $row7['count'];

}


$sql7 = "SELECT * FROM `personnel`";
$result7 = mysqli_query($conn, $sql7);

?>


<?php

error_reporting (0);

$conn = mysqli_connect ("localhost","root","","bolaji") or die(mysqli_error());
$query8 = "SELECT COUNT(position) AS count FROM `personnel` WHERE `position` = 'SUBDEAN'";

$query_result8 = mysqli_query($conn, $query8);

while($row8 = mysqli_fetch_assoc($query_result8)){
  $output8 = $row8['count'];

}


$sql8 = "SELECT * FROM `personnel`";
$result8 = mysqli_query($conn, $sql8);

?>

<?php

error_reporting (0);

$conn = mysqli_connect ("localhost","root","","bolaji") or die(mysqli_error());
$query9 = "SELECT COUNT(position) AS count FROM `personnel` WHERE `certification` = 'PHD'";

$query_result9 = mysqli_query($conn, $query9);

while($row9 = mysqli_fetch_assoc($query_result9)){
  $output9 = $row9['count'];

}


$sql9 = "SELECT * FROM `personnel`";
$result9 = mysqli_query($conn, $sql9);

?>

<?php

error_reporting (0);

$conn = mysqli_connect ("localhost","root","","bolaji") or die(mysqli_error());
$query10 = "SELECT COUNT(position) AS count FROM `personnel` WHERE `certification` = 'MS'";

$query_result10 = mysqli_query($conn, $query10);

while($row10 = mysqli_fetch_assoc($query_result10)){
  $output10 = $row10['count'];

}


$sql10 = "SELECT * FROM `personnel`";
$result10 = mysqli_query($conn, $sql10);

?>

<?php

error_reporting (0);

$conn = mysqli_connect ("localhost","root","","bolaji") or die(mysqli_error());
$query11 = "SELECT COUNT(position) AS count FROM `personnel` WHERE `certification` = 'DR'";

$query_result11 = mysqli_query($conn, $query11);

while($row11 = mysqli_fetch_assoc($query_result11)){
  $output11 = $row11['count'];

}


$sql11 = "SELECT * FROM `personnel`";
$result11 = mysqli_query($conn, $sql11);

?>

<?php

error_reporting (0);

$conn = mysqli_connect ("localhost","root","","bolaji") or die(mysqli_error());
$query12 = "SELECT COUNT(position) AS count FROM `personnel` WHERE `certification` = 'BS'";

$query_result12 = mysqli_query($conn, $query12);

while($row12 = mysqli_fetch_assoc($query_result12)){
  $output12 = $row12['count'];

}


$sql12 = "SELECT * FROM `personnel`";
$result12 = mysqli_query($conn, $sql12);

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styles.css" />
    <script src="logout.js"></script>
    <title>ADMIN DASHBOARD</title>
  </head>
  <body id="body">
    <div class="container">
      <nav class="navbar">
        <div class="nav_icon" onclick="toggleSidebar()">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
        <div class="navbar__left">
          
          <a class="active_link" href="#">Administrative Page</a>
        </div>
        <div class="navbar__right">
         
          
          <!-- <a href="#">
            <img width="30" src="assets/avatar.svg" alt="" />
             <i class="fa fa-user-circle-o" aria-hidden="true"></i>
          </a> -->
        </div>
      </nav>

      <main>
        <div class="main__container">
          <!-- MAIN TITLE STARTS HERE -->

          <div class="main__title">
            <img src="assets/hello.svg" alt="" />
            <div class="main__greeting">
              <h1>Hello Admin</h1>
              <p>Welcome to your admin dashboard</p>
            </div>
          </div>
          <!-- <h1>Administrator</h1> -->
          <!-- MAIN TITLE ENDS HERE -->

          <!-- MAIN CARDS STARTS HERE -->
          <div class="main__cards">
            <div class="card">
              <i
                class="fa fa-user-o fa-2x text-lightblue"
                aria-hidden="true"
              ></i>
              <div class="card_inner">
                <p class="text-primary-p">No. of academic staff</p>
                <span class="font-bold text-title"> <?php echo $output2; ?></span>
              </div>
            </div>

            <div class="card">
              <i class="fa fa-user-o fa-2x text-lightblue" aria-hidden="true"></i>
              <div class="card_inner">
                <p class="text-primary-p">No. of non-acad staff</p>
                <span class="font-bold text-title"><?php echo $output3; ?></span>
              </div>
            </div>

            <div class="card">
              <i
                class="fa fa-user-secret fa-2x text-lightblue" width="30"
                aria-hidden="true"
              ></i>
              <div class="card_inner">
                <p class="text-primary-p">No. of senate staff</p>
                <span class="font-bold text-title"> <?php echo $output; ?></span>
              </div>
            </div>

            <div class="card">
              <i
                class="fa fa-building-o fa-2x text-lightblue"
                aria-hidden="true"
              ></i>
              <div class="card_inner">
                <p class="text-primary-p">No. of All Staff</p>
                <span class="font-bold text-title"><?php echo $output4; ?></span>
              </div>
            </div>
          </div>
          <!-- MAIN CARDS ENDS HERE -->

          <!-- CHARTS STARTS HERE -->
          <div class="charts">
            <div class="charts__left">
              <div class="charts__left__title">
                <div>
                  <h1>Statistical Reports</h1>
                  <p>Quick Over View Of Senate Staff</p>
                </div>
                <i class="fa fa-question" aria-hidden="true"></i>
              </div>
              <div class="charts__right__cards">
                <div class="card1">
                  <h1>Vice Chancellor</h1>
                  <p><?php echo $output5; ?></p>
                </div>

                <div class="card2">
                  <h1>Deputy Vice Chancellor</h1>
                  <p><?php echo $output6; ?></p>
                </div>

                <div class="card3">
                  <h1>Dean</h1>
                  <p><?php echo $output7; ?></p>
                </div>

                <div class="card4">
                  <h1>Sub-Dean</h1>
                  <p><?php echo $output8; ?></p>
                </div>
              </div>
            </div>

            <div class="charts__right">
              <div class="charts__right__title">
                <div>
                  <h1>Statistical Reports</h1>
                  <p>Quick Over View Of Degree Holders</p>
                </div>
                <i class="fa fa-question" aria-hidden="true"></i>
              </div>

              <div class="charts__right__cards">
                <div class="card1">
                  <h1>Professors</h1>
                  <p><?php echo $output9; ?></p>
                </div>

                <div class="card2">
                  <h1>Masters</h1>
                  <p><?php echo $output10; ?></p>
                </div>

                <div class="card3">
                  <h1>Doctors</h1>
                  <p><?php echo $output11; ?></p>
                </div>

                <div class="card4">
                  <h1>Bachelors</h1>
                  <p><?php echo $output12; ?></p>
                </div>
              </div>
            </div>
          </div>
          <!-- CHARTS ENDS HERE -->
        </div>
      </main>

      <div id="sidebar">
        <div class="sidebar__title">
          <div class="sidebar__img">
            <img width="30" src="assets/avatar.svg" alt="" />
            
        
          </div>
          <h1>Administrator</h1>
          <i
            onclick="closeSidebar()"
            class="fa fa-times"
            id="sidebarIcon"
            aria-hidden="true"
          ></i>
        </div>

        <div class="sidebar__menu">
          <div class="sidebar__link active_menu_link">
            <i class="fa fa-home"></i>
            <a href="#">Dashboard</a>
          </div>
          <h2>Personnel Information</h2>
          <div class="sidebar__link">
            <i class= "fa fa-user-o fa-2x " aria-hidden="true"></i>
            <a href="http://localhost/bolaji/dist/acad.php">Academic Staff</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-user-o fa-2x"></i>
            <a href="http://localhost/bolaji/dist/nacad.php">Non Academic Staff</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-user-secret"></i>
            <a href="http://localhost/bolaji/dist/senate.php">Senate Staff</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-building-o"></i>
            <a href="http://localhost/bolaji/dist/display.php">All Staff</a>
          </div>
          
          <h2>Administrative Functions</h2>
          <div class="sidebar__link">
            <i class="fa fa-user-circle-o"></i>
            <a href="http://localhost/bolaji/dist/index.php">Create A Personnel</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-edit"></i>
            <a href="http://localhost/bolaji/dist/update.php">Edit A Personnel</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-search"></i>
            <a href="http://localhost/bolaji/dist/search.php">Search For A Personnel</a>
          </div>
        
         
          <!-- <h2>LOG OUT</h2> -->
        
          <div class="sidebar__logout">
            <i class="fa fa-power-off"></i>
            <a onclick="logout()">Log out</a>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="script.js"></script>
  </body>
</html>
