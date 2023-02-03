<!DOCTYPE html>
<html lang="en" dir="ltr">
<body>
    <link rel="stylesheet" href="view_assignment_stud.css">


<?php require 'CONNECT.php';  
session_start();
?>
<?php if(isset($_GET['A_ID'])) ?>
<?php
    $q="SELECT * FROM v_assignment WHERE BRANCH ='$_SESSION[BRANCH]' AND A_ID= ".$_GET['A_ID']." ";
    $result = mysqli_query($conn,$q);
    if($result)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    $A_ID = $row['A_ID'];
                    $NAME = $row['NAME'];
                    $DATE = $row['DATE'];
                    $DESCRIPTION = $row['DESCRIPTION']; 
                ?>
                <div class="wrapper">
                    <div class="title">
                        <h1> <?php echo $NAME; ?> </h1>
                        <?php echo nl2br("\n"); ?>
                        <?php echo"<font size=4.5 color='yellow'>"; ?>
                        <b> <?php echo "DATE POSTED :"; ?> </b>
                        <h2> <?php echo $DATE; ?> </h2>
                        <?php echo nl2br("\n"); ?>
                        <b> <?php echo "DESCRIPTION :"; ?> </b>
                        <h2> <?php echo $DESCRIPTION; ?> </h2>
                    <?php  
                        echo nl2br("\n");  
                        echo nl2br("\n");
                    ?> 
                    <form action="" method= "POST">
                        <button class="btn" name="D">DOWNLOAD</button>
                    </form> 
                    <?php echo nl2br("\n"); ?> 
                        <a href="UPLOAD_ASSIGNMENT.php?A_ID=<?php echo $A_ID ?>">
                                <button class="btn" name="S">SUBMIT ASSIGNMENT</button>
                        </a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="ASSIGNMENT.php">
                                <button class="btn" name="S">BACK</button>
                        </a>
                   
    <?php       }  
            }
                  
    ?>
     

<?php
    if(isset($_POST['D']))
{
    $q="SELECT * FROM p_assignment WHERE BRANCH ='$_SESSION[BRANCH]' AND NAME = '$NAME'";
    $result = mysqli_query($conn,$q);
    if($file = mysqli_fetch_array($result))
    {
        $filepath = "DA/".$file['FILE'];
        if(file_exists($filepath))
        {
            header('Content-type: application/octet-stream');
            header('Content-Description: File transfer');
            header('Content-Disposition: attachment; filename ='.basename($filepath));
            header('Expires:0');
            header('Cache-Control: must-revalidate');
            header('Pragma:public');
            header('Content-Length:'. filesize('DA/'.$file['FILE']));

            readfile('DA/'.$file['FILE']);
            exit;
            
        }
    }
}
?>





