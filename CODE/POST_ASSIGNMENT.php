<?php require 'CONNECT.php';  ?>
<?php  
        session_start();
        echo nl2br("\n");  
        echo nl2br("\n");
		echo nl2br("\n");
		echo nl2br("\n");
?> 
<link rel="stylesheet" href="create_assignment.css">
<div class="wrapper">
    <div class="title">
      <h1>ASSIGNMENT</h1>
    </div>
    <div class="contact-form">
      <div class="input-fields">
      <form  action="" method="POST" enctype = "multipart/form-data">
        <input type="text" name="A_ID" class="input" placeholder="ASSIGNMENT">
        <input type="text" name="A_NAME" class="input" placeholder="ASSIGNMENT NAME">
        <div class="input-box">
        <input type="date" name="DATE" class="input" placeholder="DATE" required>
        </div>
        <?php echo nl2br("\n");?>
        <div class="h2">SELECT BRANCH :</div>
        
        <select name="BRANCH">
            <option value="">--SELECT--</option>
            <option value="cse">COMPUTER</option>
            <option value="eee">ELECTRONICS</option>
            <option value="mgt">MANAGEMENT</option>
        </select>
        <input type="file" name="FILE" class="input" placeholder="Choose file">
      </div>
      <div class="msg">
      <textarea type="text" name="DESCP" placeholder="Description"></textarea> 
        <button class="btn" name="POST">POST</button>
        </form>
        <?php echo nl2br("\n");?>
        <?php echo nl2br("\n");?>
        <div align="left">
            <a href="STAFF_PAGE.php">
                <button class="bttn">BACK</button>
            </a>
      </div>
        </div>
    </div>
   
  </div>

<?php
   $q = "SELECT * FROM staff WHERE USER_NAME = '$_SESSION[LOGIN_FAC]'"; 
   $output = mysqli_query($conn,$q);
   if($output)
   {
       while($row=mysqli_fetch_assoc($output))
       {
           $S_ID = $row['S_ID'];
       }
   }
?>

<?php
    error_reporting(0);
    if(isset($_POST['POST']))
    {
        $A_ID = $_POST['A_ID'];
        $NAME = $_POST['A_NAME'];
        $DATE = $_POST['DATE'];
        $DESCRIPTION = $_POST['DESCP'];
        $BRANCH = $_POST['BRANCH'];
        $FILE = $_FILES['FILE']['name'];
        $F_LOC = $_FILES['FILE']['tmp_name'];
        $F_EXT = pathinfo($FILE,PATHINFO_EXTENSION);

        $F_DES = "DA/".$uname."." .$F_EXT;
        move_uploaded_file($F_LOC, "DA/". $FILE);
        $query = "INSERT INTO p_assignment (A_ID,S_ID,NAME,DATE,DESCRIPTION,BRANCH,FILE) VALUES ('$A_ID','$S_ID','$NAME','$DATE','$DESCRIPTION','$BRANCH','$FILE')";
        $query1 = "INSERT INTO v_assignment (A_ID,S_ID,NAME,DATE,DESCRIPTION,BRANCH,FILE) VALUES ('$A_ID','$S_ID','$NAME','$DATE','$DESCRIPTION','$BRANCH','$FILE')";
        if(mysqli_query($conn,$query) && mysqli_query($conn,$query1))
        {
            echo"<script>alert('UPLOADED SUCCESSFULLY !!');</script>";
        }
        else 
        {
            echo"<script>alert('OOPS SOMETHING WENT WRONG !!');</script>";
        }
}
?>

