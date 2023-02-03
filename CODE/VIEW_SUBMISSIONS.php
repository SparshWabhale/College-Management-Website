<?php require 'CONNECT.php';  ?>
<?php if(isset($_GET['A_ID'])) ?>
<link rel="stylesheet" href="view_submission_fac1.css">

<table class="contain">
        <thead>
            <tr>
                <th> REG_NO </th>
                <th> NAME </th>
                <th> SUBMISSIONS </th>
            </tr>
        </thead>
</table>
<?php
    $query = "SELECT * FROM u_assignment WHERE A_ID = ".$_GET['A_ID']."";
    $result = mysqli_query($conn,$query);
    
    if($result)
    {
        while($row=mysqli_fetch_array($result))
        {
            $A_ID = $row['A_ID'];
            $REG_NO = $row['REG_NO'];
            $NAME = $row['NAME'];
        ?>
         <table>
            <tbody>
                <tr>
                    <td> <?php echo $REG_NO; ?> </td>
                    <td> <?php echo $NAME; ?> </td>
                    <td> 
                    <form action="DOWNLOAD.php?REG_NO=<?php echo $REG_NO?>" method= "POST">
                                <button class="button button1">DOWNLOAD</button>
                    </form>
                    </td>
                </tr>
        </tbody>
        </table>
     <?php           
        }
    }
    ?>
            <?php
                if(isset($_GET['REG_NO']))
                {
                    $q="SELECT * FROM u_assignment WHERE REG_NO = ".$_GET['REG_NO']." ";
                    $result = mysqli_query($conn,$q);
                    if($result)
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {
                            $REG_NO = $row['REG_NO'];
                            echo $REG_NO;
                        }
                    }
                    
                }
                ?>
                <?php 
echo nl2br("\n");
echo nl2br("\n");
echo nl2br("\n");
echo nl2br("\n");
echo nl2br("\n");
echo nl2br("\n");
echo nl2br("\n");
echo nl2br("\n");
echo nl2br("\n");
echo nl2br("\n");
echo nl2br("\n");
?>
<div align='center'>
    <a href=VIEW_DA.php><button class="button button1">BACK</button>
</div>
