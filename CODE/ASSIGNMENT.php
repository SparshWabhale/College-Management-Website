<!DOCTYPE html>
<html lang="en" dir="ltr">
<body>
    <link rel="stylesheet" href="assignment1.css">
    
<?php require 'CONNECT.php';  
session_start();
?>

<?php
    $q="SELECT * FROM v_assignment WHERE BRANCH ='$_SESSION[BRANCH]'";
    $result = mysqli_query($conn,$q);
    if($result)
            {
                while($row = mysqli_fetch_array($result))
                {
                    $A_ID = $row['A_ID'];
                    $NAME = $row['NAME'];
                    $DATE = $row['DATE'];
                    $DESCRIPTION = $row['DESCRIPTION'];  
                ?>
                
                <div class="wrapper">
                        <div class="title" >
                            <h1><?php echo $NAME;?></h1> 
                            <h2>DUE DATE : <?php echo $DATE; ?> </h2>
                            <form action="VIEW_ASSIGNMENT.php?A_ID=<?php echo $A_ID ?>" method= "POST">
                                    <a href="VIEW_ASSIGNMENT.php?A_ID=<?php echo $A_ID ?>"></a> <button class="button button1" style="margin:5px";>VIEW ASSIGNMENT </button>
                            </form>
                        </div>
                </div>
                </div>
                </div>
    <?php       }  
            }
            echo nl2br("\n");
    ?>
</body>
</html>

<div align='center'>
        <a href="MAIN_PAGE.php">
                <button class="button button1">BACK</button>
        </a>
    </div>