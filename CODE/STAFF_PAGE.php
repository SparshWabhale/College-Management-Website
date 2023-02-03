<?php require "CONNECT.php"; ?>
<?php
session_start();
$U_NAME = $_SESSION['LOGIN_FAC'];
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="home_stuff1.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <nav>
    <div class="navbar">
      <i class='bx bx-menu'></i>
      <div style="margin-left: -90px" >
        <a href="STAFF_PAGE.php"><img id="pic" src="VIT-LOGO.png" style="width: 180px; height: 50px;"></a>
      </div>
      <div class="logo"><a href="STAFF_PAGE.php">VOODLE</a></div>
      <div class="nav-links">
        <div class="sidebar-logo">
          <span class="logo-name">VOODLE</span>
          <i class='bx bx-x' ></i>
        </div>
        <ul class="links">
          <li><a href="CREATE_TIME_TABLE.php">CREATE TIMETABLE</a></li>
          <li>
            <a href="#">ASSIGNMENT</a>
            <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
            <ul class="htmlCss-sub-menu sub-menu">
              <li><a href="POST_ASSIGNMENT.php">CREATE ASSIGNMENT</a></li>
              <li><a href="VIEW_DA.php">VIEW SUBMISSIONS</a></li>
              <li><a href="add1.php">CREATE STS QUIZ</a></li>
              
            </ul>
          </li>
          <li>
            <a href="ATTENDANCE.php">TAKE ATTENDANCE</a>
            
          </li>
          <li><a href="MARKS.php">ENTER MARKS</a></li>
          <?php
            $q = "SELECT * FROM staff WHERE USER_NAME = '$U_NAME'";
            $output = mysqli_query($conn,$q);
            if($output)
            {
                while($row = mysqli_fetch_assoc($output))
                {
                    $NAME = $row['USER_NAME'];
                    echo "<div style='margin-left: 20px'>";
                    echo"<font size=5 color='yellow'>";   
                    echo $NAME;
                    echo "</div>";
                }
            }
                ?>
        </ul>
      </div>
      <div class="search-box">
        <i class='bx bx-search'></i>
        <div class="input-box">
          <input type="text" placeholder="Search...">
        </div>
      </div>
    </div>
  </nav>
  <script src="home.js"></script>
</body>
</html>
<?php
