<link rel="stylesheet" href="attendance_report.css">

<?php require 'CONNECT.php'; ?>
<?php  
    echo nl2br("\n");  
    echo nl2br("\n"); 
    echo nl2br("\n");
    session_start();
    $q = "SELECT REG_NO FROM profile WHERE USER_NAME = '$_SESSION[LOGIN_USER]'";
    $output = mysqli_query($conn,$q);
    if($output)
    {
        while($row = mysqli_fetch_assoc($output))
                {
                    $REG_NO = $row['REG_NO'];
                } 
    }

?>

    <table align='center' colspan='7'>
        <tbody>
            <tr>
                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DATE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                <th>ATTENDANCE</th>
            </tr>
        </tbody>
        <tbody>
            <caption> <b> Attendance Report <b> </caption>
        </tbody>
    </table>
    <?php echo nl2br("\n"); ?>
        
<?php
    $query = "SELECT DISTINCT DATE,ATTENDANCE FROM attendance WHERE REG_NO = '$REG_NO'";
    $result = mysqli_query($conn,$query);
   
            if($result)
            {
                while($get = mysqli_fetch_array($result))
                {
                    $DATE = $get['DATE'];
                    $ATTENDANCE = $get['ATTENDANCE'];
            ?>
                    <table align='center'>
                    <tbody>
                        <tr>
                            <td><?php echo $DATE; ?></td>
                            <td><?php echo $ATTENDANCE; ?></td>
                        </tr>
                    </tbody>
                    </table>
        <?php
                }
            }
        ?>
         <?php echo nl2br("\n"); ?>
          <?php echo nl2br("\n"); ?>
          <?php echo nl2br("\n"); ?>
          <?php echo nl2br("\n"); ?>
          <div align='center'>
            <a href=MAIN_PAGE.php><button class="button button1">BACK</button>
          </div>
    
                
