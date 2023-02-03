<?php require 'CONNECT.php';  ?>
<link rel="stylesheet" href="enteringmarks.css">
<?php if(isset($_GET['REG_NO']))
      $REG_NO = $_GET['REG_NO'];
?>

<?php
    $Q = "SELECT * FROM list WHERE REG_NO = '$REG_NO' ";
    $res = mysqli_query($conn,$Q);
    if($res)
    {
        while($row = mysqli_fetch_assoc($res))
        {
            $REG_NO = $row['REG_NO'];
            $NAME = $row['NAME'];
        }
    }
?>
 <?php echo nl2br("\n"); ?>
<div class="wrapper" style="margin-left:50px">
    <h2>REGISTERATION NUMBER : <?php echo $REG_NO; ?> </h2>
    <?php echo nl2br("\n"); ?>
    <h3>NAME : <?php echo $NAME; ?> </h3>
</div>
</div>

<?php echo nl2br("\n");?>

<form action="" method="POST">
    <table border="2" colspan="10" style="margin-left:400px" >
                <tr>
                    <th> SUBJECTS </th>
                    <th> MARKS </th>
                </tr>

                <tr>
                    <td width="114"> MATHS </td>
                    <div class="input-box">
                        <td width="200" align="center"> <input type="text" name="MATHS" placeholder="Enter marks"/> </td>
                    </div>
                </tr>

                <tr>
                    <td width="114"> PHYSICS </td>
                    <td width="200" align="center"> <input type="text" name="PHYSICS" placeholder="Enter marks"/> </td>
                </tr>

                <tr>
                    <td width="114"> CHEMISTRY </td>
                    <td width="200" align="center"> <input type="text" name="CHEMISTRY" placeholder="Enter marks"/> </td>
                </tr>

                <tr>
                    <td width="114"> STS </td>
                    <td width="200" align="center"> <input type="text" name="STS" placeholder="Enter marks"/> </td>
                </tr>

                <tr>
                    <td width="114"> ENGLISH </td>
                    <td width="200" align="center"> <input type="text" name="ENGLISH" placeholder="Enter marks"/> </td>
                </tr>
            </table>
            <div align='center'>
                    <?php echo nl2br("\n"); ?>
                    <?php echo nl2br("\n"); ?>
                    <button class ="btn" type="submit" name="S"> SAVE </button>
            </div>
</form>
<a href="MARKS.php">
        <div align="center">
                        <button class="btn" style="margin:10px;">BACK</button>
        </div>
    </a>    
<?php
    if(isset($_POST['S']))
    {
        $MATHS = $_POST['MATHS'];
        $PHYSICS = $_POST['PHYSICS'];
        $CHEMISTRY = $_POST['CHEMISTRY'];
        $STS= $_POST['STS'];
        $ENGLISH= $_POST['ENGLISH'];

        $query = "INSERT INTO marks(REG_NO,MATHS,PHYSICS,CHEMISTRY,STS,ENGLISH) VALUES ('$REG_NO','$MATHS','$PHYSICS','$CHEMISTRY','$STS','$ENGLISH') ";
        if(mysqli_query($conn,$query))
        {
            echo"<script>alert('SAVED SUCCESSFULLY !!');</script>";
            header('Location: MARKS.php');
        }
    }
    ?>
  