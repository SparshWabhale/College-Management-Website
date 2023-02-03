<link rel="stylesheet" href="view_assignment_up.css">

<?php require 'CONNECT.php';  
session_start();
?>

<?php if(isset($_GET['A_ID'])) ?>
<?php $A_ID = $_GET['A_ID']; ?>

<?php 
    $query = "SELECT * FROM profile WHERE USER_NAME = '$_SESSION[LOGIN_USER]'";
    $output = mysqli_query($conn,$query);
    if($output)
    {
        while($row = mysqli_fetch_assoc($output))
        {
            $REG_NO = $row['REG_NO'];
            $NAME = $row['NAME'];
        }
    }
?>
<form action="" method="POST" enctype = "multipart/form-data">
    <div class="wrapper">
        <div class="title">
            <h2>UPLOAD FILE:</h2>
            <?php echo nl2br("\n"); ?>
                <h2> <input type="file" class="input" name="FILE"> <h2>
                <?php echo nl2br("\n"); ?>
                    <input class="btn" type="submit" name="submit" value="SUBMIT"/>
        <div>
    </div>
</form>


<?php
    error_reporting(0);
    if(isset($_POST['submit']))
    {
        $FILE = $_FILES['FILE']['name'];
        $F_LOC = $_FILES['FILE']['tmp_name'];
        $F_EXT = pathinfo($FILE,PATHINFO_EXTENSION);

        $F_DES = "SUBMISSIONS/".$uname."." .$F_EXT;
        move_uploaded_file($F_LOC, "SUBMISSIONS/". $FILE);
        $query = "INSERT INTO u_assignment (A_ID,REG_NO,NAME,FILE) VALUES ('$A_ID','$REG_NO','$NAME','$FILE')";

        if(mysqli_query($conn,$query))
        {
            echo"<script>alert('UPLOADED SUCCESSFULLY !!');</script>";
            header('Location: ASSIGNMENT.php');
        }
        else 
        {
            echo"<script>alert('OOPS SOMETHING WENT WRONG !!');</script>";
        }
    }
?>



