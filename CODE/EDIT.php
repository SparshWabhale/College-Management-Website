<?php require 'CONNECT.php'; 
      session_start();

$USER_NAME = $_SESSION['LOGIN_USER'];
$GET_DATA="SELECT * FROM profile WHERE USER_NAME = '$_SESSION[LOGIN_USER]'";
$output = mysqli_query($conn,$GET_DATA);
$row = mysqli_fetch_assoc($output)
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="EDIT1.css">
   </head>
<body>
  <div class="wrapper">
  <h2>EDIT PROFILE</h2>
    <h4>PERSONAL INFORMATION</h4>
    <form action="" method = "POST" enctype ="multipart/form-data">
        <div class="input-box">
            REGISTERATION NUMBER
            <input type="text" name="REG_NO" class="form-control" id="REG_NO" value="<?php echo $row['REG_NO']; ?>" />
        </div>
        <?php echo nl2br("\n"); ?>
        <div class="input-box">
                NAME
                <input type="text" name="NAME" class="form-control" id="NAME" value="<?php echo $row['NAME']; ?>" />
        </div>
        <?php echo nl2br("\n"); ?>
        <div class="input-box">
                 GENDER
                    <input type="text" name="GENDER" class="form-control" id="GENDER" value="<?php echo $row['GENDER']; ?>" />
        </div>   
        <?php echo nl2br("\n"); ?>
        <div class="input-box"> 
                DATE OF BIRTH
                    <input type="date" name="DOB" class="form-control" id="DOB" value="<?php echo $row['DOB']; ?>" />
        </div>
        <?php echo nl2br("\n"); ?>
        <div class="input-box">     
                BLOOD GROUP
                    <input type="text" name="BG" class="form-control" id="BG" value="<?php echo $row['BLOOD_GROUP']; ?>" />
        </div>   
        <?php echo nl2br("\n"); ?>   
        <div class="input-box">           
                PHONE NUMBER
                    <input type="text" name="PHONE" class="form-control" id="PHONE" value="<?php echo $row['PHONE']; ?>" />           
        </div>      
            <?php  
                echo nl2br("\n");  
            ?>          
            <h4>ACADEMIC INFORMATION</h4>
            <div class="input-box"> 
                COLLEGE MAIL ID
                    <input type="text" name="EMAIL" class="form-control" id="EMAIL" value="<?php echo $row['EMAIL']; ?>" />
            </div>
            <?php echo nl2br("\n"); ?>
            <div class="input-box"> 
                PROGRAM
                    <input type="text" name="PROGRAM" class="form-control" id="PROGRAM" value="<?php echo $row['PROGRAM']; ?>" />
            </div>
            <?php echo nl2br("\n"); ?>
            <div class="input-box">
                BRANCH
                    <input type="varchar" name="BRANCH" class="form-control" id="BRANCH" value="<?php echo $row['BRANCH']; ?>" />
            </div>
            <?php echo nl2br("\n"); ?>
            <button type="SUBMIT" class="button button1" name="UP" style="margin:10px;">UPDATE</button>
            </form>
        </form>
        &nbsp;&nbsp;&nbsp;<a href=PROFILE.php> <button class="button button1">BACK</button> </a>
        </div>
      

<?php
if(isset($_REQUEST['UP']))
{
    $REG_NO = $_REQUEST['REG_NO'];
    $NAME = $_REQUEST['NAME'];
    $GENDER = $_REQUEST['GENDER'];
    $DOB = $_REQUEST['DOB'];
    $BLOOD_GROUP = $_REQUEST['BG'];
    $PHONE = $_REQUEST['PHONE'];
    $EMAIL = $_REQUEST['EMAIL'];
    $PROGRAM= $_REQUEST['PROGRAM'];
    $BRANCH = $_REQUEST['BRANCH'];


    if((!empty($REG_NO)) && (!empty($NAME)) && (!empty($GENDER)) && (!empty($DOB)) && (!empty($BLOOD_GROUP)) && (!empty($PHONE)) && (!empty($EMAIL)) && (!empty($PROGRAM)) && (!empty($BRANCH)))
    {
        
        $UPDATE = "UPDATE profile SET REG_NO = '$REG_NO',NAME = '$NAME',GENDER = '$GENDER',DOB = '$DOB',BLOOD_GROUP = '$BLOOD_GROUP',PHONE = '$PHONE',EMAIL = '$EMAIL',PROGRAM = '$PROGRAM',BRANCH = '$BRANCH' WHERE USER_NAME = '$_SESSION[LOGIN_USER]'";
        if(mysqli_query($conn,$UPDATE))
        {
            echo"<script>alert('UPDATED SUCCESSFULLY !!');</script>";
            header('Location: PROFILE.php');
        }
    }
    else
    {
        echo "ERROR".$query."<br>".mysqli_error($conn);
    }
}
?>
