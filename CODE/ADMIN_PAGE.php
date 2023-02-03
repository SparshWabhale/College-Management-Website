<?php require 'CONNECT.php';  ?>
<link rel="stylesheet" href="create_assignment1.css">


<form action="" method="POST">
<div align="left">
<div class="wrapper">
    <div class="title">
      <h1>ANNOUNCEMENT</h1>
    </div>
    <div class="contact-form">
      <div class="input-fields">
        <div class="msg">
            <h2>TITLE : </h2>
                <input type="text"  class="in" name="TITLE" style="height:30px; width:300px" />
                <?php echo nl2br("\n"); ?>
                <?php echo nl2br("\n"); ?>
            <h2>DESCRIPTION: </h2>
                <input type="text" class="in" name="DESCP" style="height:80px; width:500px"/>
                <?php echo nl2br("\n"); ?>
                <?php echo nl2br("\n"); ?>
            <button type="submit" class="btn" name="S">MAKE ANNOUNCEMENT </button>
      </div>
    </div>
  </div>
  </div>
</form>

<?php
    if(isset($_POST['S']))
    {
        $TITLE = $_POST['TITLE'];
        $DESCRIPTION = $_POST['DESCP'];

        $q = "INSERT announcement (TITLE,DESCRIPTION) VALUES ('$TITLE','$DESCRIPTION')";
        if(mysqli_query($conn,$q))
        {
            echo"<script>alert('ANNOUNCEMENT MADE SUCCESSFULLY !!');</script>";
        }
        else
        {
            echo "ERROR".$query."<br>". mysqli_error($conn);
        }
    }
?>