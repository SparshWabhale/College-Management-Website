<?php require "CONNECT.php"; ?>
<?php
session_start();
$U_NAME = $_SESSION['LOGIN_USER'];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="announcement.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <nav>
    <div class="navbar">
      <i class='bx bx-menu'></i>
      <div style="margin-left: -90px" >
        <a href="MAIN_PAGE.php"><img id="pic" src="VIT-LOGO.png" style="width: 180px; height: 50px;"></a>
      </div>
      <div class="logo"><a href="MAIN_PAGE.php">VOODLE</a></div>
      <div class="nav-links">
        <div class="sidebar-logo">
          <span class="logo-name">VOODLE</span>
          <i class='bx bx-x' ></i>
        </div>
        <ul class="links">
          <li><a href="PROFILE.php">PROFILE</a></li>
          <li>
            <a href="#">ASSIGNMENT</a>
            <i class='bx bxs-chevron-down js-arrow arrow '></i>
            <ul class="js-sub-menu sub-menu">
              <li><a href="ASSIGNMENT.php">DIGITAL ASSIGNMENTS</a></li>
              <li>
                  <a href="center.php">STS QUIZ</a>
              </li>
            </ul>
          </li>
          <li><a href="VIEW_TT.php">TIME TABLE</a></li>
          <li><a href="VIEW_ATTENDANCE.php">ATTENDANCE</a></li>
          <li>
            <a href="#">GRADES</a>
            <i class='bx bxs-chevron-down js-arrow arrow '></i>
            <ul class="js-sub-menu sub-menu">
              <li><a href="VIEW_MARKS.php">MARKS</a></li>
              <li>
                  <a href="pdfGeneration/REPORT_PDF.php">GRADE SHEET</a>
              </li>
            </ul>
          </li>
         
          <?php
            $q = "SELECT * FROM profile WHERE USER_NAME = '$U_NAME'";
            $output = mysqli_query($conn,$q);
            if($output)
            {
                while($row = mysqli_fetch_assoc($output))
                {
                    $REG_NO = $row['REG_NO'];
                    $NAME = $row['NAME'];
                    $IMAGE = $row['IMAGE'];
                    echo "<div style='margin-left: 80px'>";
                    echo"<font size=5 color='yellow'>";   
                    echo $NAME;
                    echo "</div>"
                ?>
                <div style="margin-left: -290px" >
                    <img id="logo" src="IMAGE/<?php echo $IMAGE; ?>" class = 'left' alt="IMAGE" style="width: 60px; height: 55px;" >
                </div>
            <?php
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


  <div class="wrapper">
            <div class="title">
              <h1>ANNOUNCEMENT</h1>
            </div>
<?php
    $q1 = "SELECT * FROM announcement";
    $O = mysqli_query($conn,$q1);
    if($O)
    {
            while($D = mysqli_fetch_array($O))
        {
            $TITLE = $D['TITLE'];
            $DESCRIPTION = $D['DESCRIPTION'];
          ?>
            <h2> <?php echo $TITLE ?> </h2>
            <h3> <?php echo $DESCRIPTION ?> </h3> 
            <?php echo nl2br("\n"); ?>
    <?php
        }
    }
?>
  <script src="home.js"></script>
</body>
</html>
