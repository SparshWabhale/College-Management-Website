<?php require 'CONNECT.php'; ?> 

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
   </head>
<body>
  <div class="wrapper">
    <h2>Registration</h2>
    <h4>Personal Information</h4>
  <form action="" method = "POST" enctype ="multipart/form-data">
        <div class="input-box">
            <input type="text" name="REG_NO" placeholder="Enter your Registration No." required>
        </div>
      <div class="input-box">
        <input type="text" name="NAME" placeholder="Enter your name" required>
      </div>
      
      <div class="input-box">
        <input type="date" name="DOB" placeholder="Enter your D O B" required>
      </div>
      <div class="input-box">
        <input type="text" name="GENDER" placeholder = "Enter your Gender" required >
      </div>
      <div class="input-box">
        <input type="text" name="BG" placeholder="Enter your blood group" required>
      </div>
      <div class="input-box">
        <input type="number" name="PHONE" placeholder="Enter your phone number" required>
      </div>
      <div class="input-box">
            <h4>UPLOAD PASSPORT SIZE PHOTO :</h4>
        <input type="file" name="FILE" />
      </div>
      <?php  echo nl2br("\n"); ?>
</div>

<div class="wrapper2">
      <h4>ACADEMIC INFORMATION</h4>
      <div class="input-box2">
        <input type="mail" name="EMAIL" placeholder="Enter your college email" required>
      </div>
      <div class="input-box2">
        <input type="text" name="PROGRAM" placeholder="Enter your Program" required>
      </div>
      <div class="input-box2">
        <input type="text" name="BRANCH" placeholder="Enter your branch" required>
      </div>
      <h4>ADDRESS</h4>
      <div class="input-box2">
        <input type="text" name="STREET" placeholder="Enter your Street Name" required>
      </div>
      <div class="input-box2">
        <input type="text" name="AREA" placeholder="Enter your Area Name" required>
      </div>
      <div class="input-box2">
        <input type="text" name="CITY" placeholder="Enter your City" required>
      </div>
      <div class="input-box2">
        <input type="text" name="STATE" placeholder="Enter your State" required>
      </div>
      <div class="input-box2">
        <input type="text" name="PIN" placeholder="Enter your pincode" required>
      </div>
      <div class="input-box2">
        <input type="text" name="COUNTRY" placeholder="Enter your country" required>
      </div>

      <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <button type="SUBMIT" class="button button1" name="REG" style="margin:10px;">REGISTER</button>
      </div>
  </div>
    </form>
  </div>
</body>
</html>
            

<?php
if(isset( $_POST['REG']))
{
    error_reporting(0);
    $REG_NO = $_POST['REG_NO'];
    $NAME = $_POST['NAME'];
    $GENDER = $_POST['GENDER'];
    $DOB = $_POST['DOB'];
    $BLOOD_GROUP = $_POST['BG'];
    $PHONE = $_POST['PHONE'];
    $EMAIL = $_POST['EMAIL'];
    $PROGRAM = $_POST['PROGRAM'];
    $BRANCH = $_POST['BRANCH'];
    $STREET = $_POST['STREET'];
    $AREA = $_POST['AREA'];
    $CITY = $_POST['CITY'];
    $STATE = $_POST['STATE'];
    $PIN = $_POST['PIN'];
    $COUNTRY = $_POST['COUNTRY'];
    $USER_NAME = $_POST['USER_NAME'];
    $PASSWORD = $_POST['PASSWORD'];

    $IMAGE = $_FILES['FILE']['name'];
    $F_LOC = $_FILES['FILE']['tmp_name'];
    $F_EXT = pathinfo($IMAGE,PATHINFO_EXTENSION);
    $F_DES = "IMAGE/".$uname."." .$F_EXT;
    move_uploaded_file($F_LOC, "IMAGE/". $IMAGE);    
  
    $query = "INSERT INTO profile (REG_NO,NAME,GENDER,DOB,BLOOD_GROUP,PHONE,EMAIL,PROGRAM,BRANCH,STREET,AREA,CITY,STATE,PIN,COUNTRY,USER_NAME,PASSWORD,IMAGE) VALUES ('$REG_NO','$NAME','$GENDER','$DOB','$BLOOD_GROUP','$PHONE','$EMAIL','$PROGRAM','$BRANCH','$STREET','$AREA','$CITY','$STATE','$PIN','$COUNTRY','$USER_NAME','$PASSWORD','$IMAGE')";
    $query2 = "INSERT list (REG_NO,NAME,PROGRAM,BRANCH) VALUES ('$REG_NO','$NAME','$PROGRAM','$BRANCH')";
    if(mysqli_query($conn,$query) && mysqli_query($conn,$query2) )
    {
        echo"<script>alert('REGISTERED SUCCESSFULLY !!');</script>";
        header('Location: STUDENT.php');
    }
    else
    {
        echo "ERROR".$query."<br>". mysqli_error($conn);
    }
}
?>

