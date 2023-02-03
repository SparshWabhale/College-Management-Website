<!DOCTYPE html>
<html lang="en" dir="ltr">
<body>
    <link rel="stylesheet" href="register copy.css">

<?php require 'CONNECT.php'; 
session_start();
?>

<?php
    $q = "SELECT * FROM staff WHERE USER_NAME = '$_SESSION[LOGIN_FAC]'";
    $res = mysqli_query($conn,$q);
    if($res)
    {
        while($r=mysqli_fetch_assoc($res))
        {
            $S_ID = $r['S_ID'];
        }
    }
?>

<?php
    $query = "SELECT * FROM p_assignment WHERE S_ID = '$S_ID'";
    $output = mysqli_query($conn,$query);
    if($output)
    {
        while($row=mysqli_fetch_assoc($output))
        {
            $A_ID = $row['A_ID'];
            $NAME = $row['NAME'];
            $DATE = $row['DATE'];
        ?>
        <div class="wrapper">
                        <div class="title" >
                            <h1><?php echo $NAME;?></h1> 
                            <h2>DUE DATE : <?php echo $DATE; ?> </h2>
                            <form action="VIEW_SUBMISSIONS.php?A_ID=<?php echo $A_ID ?>" method= "POST">
                                    <a href="VIEW_SUBMISSIONS.php?A_ID=<?php echo $A_ID ?>"></a> <button class="btn" style="margin:5px";>VIEW SUBMISSIONS </button>
                            </form>
                        </div>
                </div>
        <?php
        }
    }
?>
<div align ="center">
        <a href="STAFF_PAGE.php">
                <button class="btn" >BACK</button>
        </a>
    </div>