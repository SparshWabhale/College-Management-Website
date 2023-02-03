<?php require 'CONNECT.php';  ?>
<html>
    <head>
        <title>TIME TABLE</title>
    </head>
    <body>
    <?php  
                echo nl2br("\n");  
                echo nl2br("\n");
        ?>  
    <div class="h1" align='center'> TIME TABLE </div>
        <form action="" method="POST">
        <?php  
                echo nl2br("\n"); 
        ?>  
       <div class="h2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SELECT BRANCH :
        <select name="BRANCH">
                <option value=""><b>--SELECT--<b></option>
                <option value="cse">COMPUTER</option>
                <option value="eee">ELECTRONICS</option>
                <option value="mgt">MANAGEMENT</option>
        </select>
        </div>
    </body>
    <link rel="stylesheet" href="timetable1.css">
<table class="content-table">
    <thead>
      <tr>
        <th>DAY</th>
        <th>8:00-9:00</th>
        <th>9:00-10:00</th>
        <th>10:00-11:00</th>
        <th>11:00-12:00</th>
        <th>12:00-1:00</th>
        <th>1:00-2:00</th>
        <th>2:00-3:00</th>
      </tr>
    </thead>
    <tbody>
    <tr>
            <td> MONDAY </td>
            <td> <select name="M1_SUBJECT">
                    <option value="">--SELECT--</option>
                    <option value="MATHS">MATHS</option>
                    <option value="ENGLISH">ENGLISH</option>
                    <option value="PHYSICS">PHYSICS</option>
                    <option value="CSE">CSE</option>
                    <option value="STS">STS</option>
                    <option value="CHEMISTRY">CHEMISTRY</option>
                </select>
            </td>
                    <td> <select name="M2_SUBJECT">
                    <option value="">--SELECT--</option>
                    <option value="MATHS">MATHS</option>
                    <option value="ENGLISH">ENGLISH</option>
                    <option value="PHYSICS">PHYSICS</option>
                    <option value="CSE">CSE</option>
                    <option value="STS">STS</option>
                    <option value="CHEMISTRY">CHEMISTRY</option>
                </select>
            </td>
            <td> <select name="M3_SUBJECT">
                    <option value="">--SELECT--</option>
                    <option value="MATHS">MATHS</option>
                    <option value="ENGLISH">ENGLISH</option>
                    <option value="PHYSICS">PHYSICS</option>
                    <option value="CSE">CSE</option>
                    <option value="STS">STS</option>
                    <option value="CHEMISTRY">CHEMISTRY</option>
                </select>
            </td>
            <td> <select name="M4_SUBJECT">
                    <option value="">--SELECT--</option>
                    <option value="MATHS">MATHS</option>
                    <option value="ENGLISH">ENGLISH</option>
                    <option value="PHYSICS">PHYSICS</option>
                    <option value="CSE">CSE</option>
                    <option value="STS">STS</option>
                    <option value="CHEMISTRY">CHEMISTRY</option>
                </select>
            </td>
            <td> <select name="M5_SUBJECT">
                    <option value="">--SELECT--</option>
                    <option value="MATHS">MATHS</option>
                    <option value="ENGLISH">ENGLISH</option>
                    <option value="PHYSICS">PHYSICS</option>
                    <option value="CSE">CSE</option>
                    <option value="STS">STS</option>
                    <option value="CHEMISTRY">CHEMISTRY</option>
                </select>
            </td>
            <td> <select name="M6_SUBJECT">
                    <option value="">--SELECT--</option>
                    <option value="MATHS">MATHS</option>
                    <option value="ENGLISH">ENGLISH</option>
                    <option value="PHYSICS">PHYSICS</option>
                    <option value="CSE">CSE</option>
                    <option value="STS">STS</option>
                    <option value="CHEMISTRY">CHEMISTRY</option>
                </select>
            </td>
            <td> <select name="M7_SUBJECT">
                    <option value="">--SELECT--</option>
                    <option value="MATHS">MATHS</option>
                    <option value="ENGLISH">ENGLISH</option>
                    <option value="PHYSICS">PHYSICS</option>
                    <option value="CSE">CSE</option>
                    <option value="STS">STS</option>
                    <option value="CHEMISTRY">CHEMISTRY</option>
                 </select>
            </td>

            <tr>
            <td> TUESDAY </td>
            <td> <select name="T1_SUBJECT">
                    <option value="">--SELECT--</option>
                    <option value="MATHS">MATHS</option>
                    <option value="ENGLISH">ENGLISH</option>
                    <option value="PHYSICS">PHYSICS</option>
                    <option value="CSE">CSE</option>
                    <option value="STS">STS</option>
                    <option value="CHEMISTRY">CHEMISTRY</option>
            </td>
                    <td> <select name="T2_SUBJECT">
                    <option value="">--SELECT--</option>
                    <option value="MATHS">MATHS</option>
                    <option value="ENGLISH">ENGLISH</option>
                    <option value="PHYSICS">PHYSICS</option>
                    <option value="CSE">CSE</option>
                    <option value="STS">STS</option>
                    <option value="CHEMISTRY">CHEMISTRY</option>
            </td>
            <td> <select name="T3_SUBJECT">
                    <option value="">--SELECT--</option>
                    <option value="MATHS">MATHS</option>
                    <option value="ENGLISH">ENGLISH</option>
                    <option value="PHYSICS">PHYSICS</option>
                    <option value="CSE">CSE</option>
                    <option value="STS">STS</option>
                    <option value="CHEMISTRY">CHEMISTRY</option>
            </td>
            <td> <select name="T4_SUBJECT">
                    <option value="">--SELECT--</option>
                    <option value="MATHS">MATHS</option>
                    <option value="ENGLISH">ENGLISH</option>
                    <option value="PHYSICS">PHYSICS</option>
                    <option value="CSE">CSE</option>
                    <option value="STS">STS</option>
                    <option value="CHEMISTRY">CHEMISTRY</option>
            </td>
            <td> <select name="T5_SUBJECT">
                    <option value="">--SELECT--</option>
                    <option value="MATHS">MATHS</option>
                    <option value="ENGLISH">ENGLISH</option>
                    <option value="PHYSICS">PHYSICS</option>
                    <option value="CSE">CSE</option>
                    <option value="STS">STS</option>
                    <option value="CHEMISTRY">CHEMISTRY</option>
            </td>
            <td> <select name="T6_SUBJECT">
                    <option value="">--SELECT--</option>
                    <option value="MATHS">MATHS</option>
                    <option value="ENGLISH">ENGLISH</option>
                    <option value="PHYSICS">PHYSICS</option>
                    <option value="CSE">CSE</option>
                    <option value="STS">STS</option>
                    <option value="CHEMISTRY">CHEMISTRY</option>
            </td>
            <td> <select name="T7_SUBJECT">
                    <option value="">--SELECT--</option>
                    <option value="MATHS">MATHS</option>
                    <option value="ENGLISH">ENGLISH</option>
                    <option value="PHYSICS">PHYSICS</option>
                    <option value="CSE">CSE</option>
                    <option value="STS">STS</option>
                    <option value="CHEMISTRY">CHEMISTRY</option>
            </td>

            <tr>
            <td> WEDNESDAY </td>
            <td> <select name="W1_SUBJECT">
                    <option value="">--SELECT--</option>
                    <option value="MATHS">MATHS</option>
                    <option value="ENGLISH">ENGLISH</option>
                    <option value="PHYSICS">PHYSICS</option>
                    <option value="CSE">CSE</option>
                    <option value="STS">STS</option>
                    <option value="CHEMISTRY">CHEMISTRY</option>
            </td>
            <td> <select name="W2_SUBJECT">
                    <option value="">--SELECT--</option>
                    <option value="MATHS">MATHS</option>
                    <option value="ENGLISH">ENGLISH</option>
                    <option value="PHYSICS">PHYSICS</option>
                    <option value="CSE">CSE</option>
                    <option value="STS">STS</option>
                    <option value="CHEMISTRY">CHEMISTRY</option>
            </td>
            <td> <select name="W3_SUBJECT">
                    <option value="">--SELECT--</option>
                    <option value="MATHS">MATHS</option>
                    <option value="ENGLISH">ENGLISH</option>
                    <option value="PHYSICS">PHYSICS</option>
                    <option value="CSE">CSE</option>
                    <option value="STS">STS</option>
                    <option value="CHEMISTRY">CHEMISTRY</option>
            </td>
            <td> <select name="W4_SUBJECT">
                    <option value="">--SELECT--</option>
                    <option value="MATHS">MATHS</option>
                    <option value="ENGLISH">ENGLISH</option>
                    <option value="PHYSICS">PHYSICS</option>
                    <option value="CSE">CSE</option>
                    <option value="STS">STS</option>
                    <option value="CHEMISTRY">CHEMISTRY</option>
            </td>
            <td> <select name="W5_SUBJECT">
                    <option value="">--SELECT--</option>
                    <option value="MATHS">MATHS</option>
                    <option value="ENGLISH">ENGLISH</option>
                    <option value="PHYSICS">PHYSICS</option>
                    <option value="CSE">CSE</option>
                    <option value="STS">STS</option>
                    <option value="CHEMISTRY">CHEMISTRY</option>
            </td>
            <td> <select name="W6_SUBJECT">
                    <option value="">--SELECT--</option>
                    <option value="MATHS">MATHS</option>
                    <option value="ENGLISH">ENGLISH</option>
                    <option value="PHYSICS">PHYSICS</option>
                    <option value="CSE">CSE</option>
                    <option value="STS">STS</option>
                    <option value="CHEMISTRY">CHEMISTRY</option>
            </td>
            <td> <select name="W7_SUBJECT">
                    <option value="">--SELECT--</option>
                    <option value="MATHS">MATHS</option>
                    <option value="ENGLISH">ENGLISH</option>
                    <option value="PHYSICS">PHYSICS</option>
                    <option value="CSE">CSE</option>
                    <option value="STS">STS</option>
                    <option value="CHEMISTRY">CHEMISTRY</option>
            </td>

            <tr>
            <td> THURSDAY </td>
            <td> <select name="TH1_SUBJECT">
                    <option value="">--SELECT--</option>
                    <option value="MATHS">MATHS</option>
                    <option value="ENGLISH">ENGLISH</option>
                    <option value="PHYSICS">PHYSICS</option>
                    <option value="CSE">CSE</option>
                    <option value="STS">STS</option>
                    <option value="CHEMISTRY">CHEMISTRY</option>
            </td>
            <td> <select name="TH2_SUBJECT">
                    <option value="">--SELECT--</option>
                    <option value="MATHS">MATHS</option>
                    <option value="ENGLISH">ENGLISH</option>
                    <option value="PHYSICS">PHYSICS</option>
                    <option value="CSE">CSE</option>
                    <option value="STS">STS</option>
                    <option value="CHEMISTRY">CHEMISTRY</option>
            </td>
            <td> <select name="TH3_SUBJECT">
                    <option value="">--SELECT--</option>
                    <option value="MATHS">MATHS</option>
                    <option value="ENGLISH">ENGLISH</option>
                    <option value="PHYSICS">PHYSICS</option>
                    <option value="CSE">CSE</option>
                    <option value="STS">STS</option>
                    <option value="CHEMISTRY">CHEMISTRY</option>
            </td>
            <td> <select name="TH4_SUBJECT">
                    <option value="">--SELECT--</option>
                    <option value="MATHS">MATHS</option>
                    <option value="ENGLISH">ENGLISH</option>
                    <option value="PHYSICS">PHYSICS</option>
                    <option value="CSE">CSE</option>
                    <option value="STS">STS</option>
                    <option value="CHEMISTRY">CHEMISTRY</option>
            </td>
            <td> <select name="TH5_SUBJECT">
                    <option value="">--SELECT--</option>
                    <option value="MATHS">MATHS</option>
                    <option value="ENGLISH">ENGLISH</option>
                    <option value="PHYSICS">PHYSICS</option>
                    <option value="CSE">CSE</option>
                    <option value="STS">STS</option>
                    <option value="CHEMISTRY">CHEMISTRY</option>
            </td>
            <td> <select name="TH6_SUBJECT">
                    <option value="">--SELECT--</option>
                    <option value="MATHS">MATHS</option>
                    <option value="ENGLISH">ENGLISH</option>
                    <option value="PHYSICS">PHYSICS</option>
                    <option value="CSE">CSE</option>
                    <option value="STS">STS</option>
                    <option value="CHEMISTRY">CHEMISTRY</option>
            </td>
            <td> <select name="TH7_SUBJECT">
                    <option value="">--SELECT--</option>
                    <option value="MATHS">MATHS</option>
                    <option value="ENGLISH">ENGLISH</option>
                    <option value="PHYSICS">PHYSICS</option>
                    <option value="CSE">CSE</option>
                    <option value="STS">STS</option>
                    <option value="CHEMISTRY">CHEMISTRY</option>
            </td>

            <tr>
            <td> FRIDAY </td>
            <td> <select name="F1_SUBJECT">
                    <option value="">--SELECT--</option>
                    <option value="MATHS">MATHS</option>
                    <option value="ENGLISH">ENGLISH</option>
                    <option value="PHYSICS">PHYSICS</option>
                    <option value="CSE">CSE</option>
                    <option value="STS">STS</option>
                    <option value="CHEMISTRY">CHEMISTRY</option>
            </td>
            <td> <select name="F2_SUBJECT">
                    <option value="">--SELECT--</option>
                    <option value="MATHS">MATHS</option>
                    <option value="ENGLISH">ENGLISH</option>
                    <option value="PHYSICS">PHYSICS</option>
                    <option value="CSE">CSE</option>
                    <option value="STS">STS</option>
                    <option value="CHEMISTRY">CHEMISTRY</option>
            </td>
            <td> <select name="F3_SUBJECT">
                    <option value="">--SELECT--</option>
                    <option value="MATHS">MATHS</option>
                    <option value="ENGLISH">ENGLISH</option>
                    <option value="PHYSICS">PHYSICS</option>
                    <option value="CSE">CSE</option>
                    <option value="STS">STS</option>
                    <option value="CHEMISTRY">CHEMISTRY</option>
            </td>
            <td> <select name="F4_SUBJECT">
                    <option value="">--SELECT--</option>
                    <option value="MATHS">MATHS</option>
                    <option value="ENGLISH">ENGLISH</option>
                    <option value="PHYSICS">PHYSICS</option>
                    <option value="CSE">CSE</option>
                    <option value="STS">STS</option>
                    <option value="CHEMISTRY">CHEMISTRY</option>
            </td>
            <td> <select name="F5_SUBJECT">
                    <option value="">--SELECT--</option>
                    <option value="MATHS">MATHS</option>
                    <option value="ENGLISH">ENGLISH</option>
                    <option value="PHYSICS">PHYSICS</option>
                    <option value="CSE">CSE</option>
                    <option value="STS">STS</option>
                    <option value="CHEMISTRY">CHEMISTRY</option>
            </td>
            <td> <select name="F6_SUBJECT">
                    <option value="">--SELECT--</option>
                    <option value="MATHS">MATHS</option>
                    <option value="ENGLISH">ENGLISH</option>
                    <option value="PHYSICS">PHYSICS</option>
                    <option value="CSE">CSE</option>
                    <option value="STS">STS</option>
                    <option value="CHEMISTRY">CHEMISTRY</option>
            </td>
            <td> <select name="F7_SUBJECT">
                    <option value="">--SELECT--</option>
                    <option value="MATHS">MATHS</option>
                    <option value="ENGLISH">ENGLISH</option>
                    <option value="PHYSICS">PHYSICS</option>
                    <option value="CSE">CSE</option>
                    <option value="STS">STS</option>
                    <option value="CHEMISTRY">CHEMISTRY</option>
            </td>
    </table>
        <div align='center'>
                <button type="SUBMIT" class="btn" name="SAVE" style="margin:10px;">SAVE</button>
        </div>
      
    </tbody>
  </table>
  </form>
</body>
</html>
<a href="STAFF_PAGE.php">
        <div align="center">
                        <button class="btn" style="margin:10px;">BACK</button>
        </div>
</a>
<?php
    if(isset($_POST['SAVE']))
    {
        $BRANCH = $_POST['BRANCH'];
        $M1_SUBJECT = $_POST['M1_SUBJECT'];
        $M2_SUBJECT = $_POST['M2_SUBJECT'];
        $M3_SUBJECT = $_POST['M3_SUBJECT'];
        $M4_SUBJECT = $_POST['M4_SUBJECT'];
        $M5_SUBJECT = $_POST['M5_SUBJECT'];
        $M6_SUBJECT = $_POST['M6_SUBJECT'];
        $M7_SUBJECT = $_POST['M7_SUBJECT'];

        $T1_SUBJECT = $_POST['T1_SUBJECT'];
        $T2_SUBJECT = $_POST['T2_SUBJECT'];
        $T3_SUBJECT = $_POST['T3_SUBJECT'];
        $T4_SUBJECT = $_POST['T4_SUBJECT'];
        $T5_SUBJECT = $_POST['T5_SUBJECT'];
        $T6_SUBJECT = $_POST['T6_SUBJECT'];
        $T7_SUBJECT = $_POST['T7_SUBJECT'];

        $W1_SUBJECT = $_POST['W1_SUBJECT'];
        $W2_SUBJECT = $_POST['W2_SUBJECT'];
        $W3_SUBJECT = $_POST['W3_SUBJECT'];
        $W4_SUBJECT = $_POST['W4_SUBJECT'];
        $W5_SUBJECT = $_POST['W5_SUBJECT'];
        $W6_SUBJECT = $_POST['W6_SUBJECT'];
        $W7_SUBJECT = $_POST['W7_SUBJECT'];

        $TH1_SUBJECT = $_POST['TH1_SUBJECT'];
        $TH2_SUBJECT = $_POST['TH2_SUBJECT'];
        $TH3_SUBJECT = $_POST['TH3_SUBJECT'];
        $TH4_SUBJECT = $_POST['TH4_SUBJECT'];
        $TH5_SUBJECT = $_POST['TH5_SUBJECT'];
        $TH6_SUBJECT = $_POST['TH6_SUBJECT'];
        $TH7_SUBJECT = $_POST['TH7_SUBJECT'];

        $F1_SUBJECT = $_POST['F1_SUBJECT'];
        $F2_SUBJECT = $_POST['F2_SUBJECT'];
        $F3_SUBJECT = $_POST['F3_SUBJECT'];
        $F4_SUBJECT = $_POST['F4_SUBJECT'];
        $F5_SUBJECT = $_POST['F5_SUBJECT'];
        $F6_SUBJECT = $_POST['F6_SUBJECT'];
        $F7_SUBJECT = $_POST['F7_SUBJECT'];
        
        $queryM1 = "UPDATE `$BRANCH` SET `1` = '$M1_SUBJECT' WHERE `DAY` = 'MONDAY' ";
        $queryM2= "UPDATE `$BRANCH` SET `2` = '$M2_SUBJECT' WHERE `DAY` = 'MONDAY' ";
        $queryM3 = "UPDATE `$BRANCH` SET `3` = '$M3_SUBJECT' WHERE `DAY` = 'MONDAY' ";
        $queryM4 = "UPDATE `$BRANCH` SET `4` = '$M4_SUBJECT' WHERE `DAY` = 'MONDAY' ";
        $queryM5 = "UPDATE `$BRANCH` SET `5` = '$M5_SUBJECT' WHERE `DAY` = 'MONDAY' ";
        $queryM6 = "UPDATE `$BRANCH` SET `6` = '$M6_SUBJECT' WHERE `DAY` = 'MONDAY' ";
        $queryM7 = "UPDATE `$BRANCH` SET `7` = '$M7_SUBJECT' WHERE `DAY` = 'MONDAY' ";

        $queryT1 = "UPDATE `$BRANCH` SET `1` = '$T1_SUBJECT' WHERE `DAY` = 'TUESDAY' ";
        $queryT2= "UPDATE `$BRANCH` SET `2` = '$T2_SUBJECT' WHERE `DAY` = 'TUESDAY' ";
        $queryT3 = "UPDATE `$BRANCH` SET `3` = '$T3_SUBJECT' WHERE `DAY` = 'TUESDAY' ";
        $queryT4 = "UPDATE `$BRANCH` SET `4` = '$T4_SUBJECT' WHERE `DAY` = 'TUESDAY' ";
        $queryT5 = "UPDATE `$BRANCH` SET `5` = '$T5_SUBJECT' WHERE `DAY` = 'TUESDAY' ";
        $queryT6 = "UPDATE `$BRANCH` SET `6` = '$T6_SUBJECT' WHERE `DAY` = 'TUESDAY' ";
        $queryT7 = "UPDATE `$BRANCH` SET `7` = '$T7_SUBJECT' WHERE `DAY` = 'TUESDAY' ";

        $queryW1 = "UPDATE `$BRANCH` SET `1` = '$W1_SUBJECT' WHERE `DAY` = 'WEDNESDAY' ";
        $queryW2= "UPDATE `$BRANCH` SET `2` = '$W2_SUBJECT' WHERE `DAY` = 'WEDNESDAY' ";
        $queryW3 = "UPDATE `$BRANCH` SET `3` = '$W3_SUBJECT' WHERE `DAY` = 'WEDNESDAY' ";
        $queryW4 = "UPDATE `$BRANCH` SET `4` = '$W4_SUBJECT' WHERE `DAY` = 'WEDNESDAY' ";
        $queryW5 = "UPDATE `$BRANCH` SET `5` = '$W5_SUBJECT' WHERE `DAY` = 'WEDNESDAY' ";
        $queryW6 = "UPDATE `$BRANCH` SET `6` = '$W6_SUBJECT' WHERE `DAY` = 'WEDNESDAY' ";
        $queryW7 = "UPDATE `$BRANCH` SET `7` = '$W7_SUBJECT' WHERE `DAY` = 'WEDNESDAY' ";

        $queryTH1 = "UPDATE `$BRANCH` SET `1` = '$TH1_SUBJECT' WHERE `DAY` = 'THURSDAY' ";
        $queryTH2= "UPDATE `$BRANCH` SET `2` = '$TH2_SUBJECT' WHERE `DAY` = 'THURSDAY' ";
        $queryTH3 = "UPDATE `$BRANCH` SET `3` = '$TH3_SUBJECT' WHERE `DAY` = 'THURSDAY' ";
        $queryTH4 = "UPDATE `$BRANCH` SET `4` = '$TH4_SUBJECT' WHERE `DAY` = 'THURSDAY' ";
        $queryTH5 = "UPDATE `$BRANCH` SET `5` = '$TH5_SUBJECT' WHERE `DAY` = 'THURSDAY' ";
        $queryTH6 = "UPDATE `$BRANCH` SET `6` = '$TH6_SUBJECT' WHERE `DAY` = 'THURSDAY' ";
        $queryTH7 = "UPDATE `$BRANCH` SET `7` = '$TH7_SUBJECT' WHERE `DAY` = 'THURSDAY' ";

        $queryF1 = "UPDATE `$BRANCH` SET `1` = '$F1_SUBJECT' WHERE `DAY` = 'FRIDAY' ";
        $queryF2= "UPDATE `$BRANCH` SET `2` = '$F2_SUBJECT' WHERE `DAY` = 'FRIDAY' ";
        $queryF3 = "UPDATE `$BRANCH` SET `3` = '$F3_SUBJECT' WHERE `DAY` = 'FRIDAY' ";
        $queryF4 = "UPDATE `$BRANCH` SET `4` = '$F4_SUBJECT' WHERE `DAY` = 'FRIDAY' ";
        $queryF5 = "UPDATE `$BRANCH` SET `5` = '$F5_SUBJECT' WHERE `DAY` = 'FRIDAY' ";
        $queryF6 = "UPDATE `$BRANCH` SET `6` = '$F6_SUBJECT' WHERE `DAY` = 'FRIDAY' ";
        $queryF7 = "UPDATE `$BRANCH` SET `7` = '$F7_SUBJECT' WHERE `DAY` = 'FRIDAY' ";
        
        if(mysqli_query($conn,$queryM1) && mysqli_query($conn,$queryM2) && mysqli_query($conn,$queryM3) && mysqli_query($conn,$queryM4) && mysqli_query($conn,$queryM5) && mysqli_query($conn,$queryM6) && mysqli_query($conn,$queryM7) &&
           mysqli_query($conn,$queryT1) && mysqli_query($conn,$queryT2) && mysqli_query($conn,$queryT3) && mysqli_query($conn,$queryT4) && mysqli_query($conn,$queryT5) && mysqli_query($conn,$queryT6) && mysqli_query($conn,$queryT7) &&
           mysqli_query($conn,$queryW1) && mysqli_query($conn,$queryW2) && mysqli_query($conn,$queryW3) && mysqli_query($conn,$queryW4) && mysqli_query($conn,$queryW5) && mysqli_query($conn,$queryW6) && mysqli_query($conn,$queryW7) &&
           mysqli_query($conn,$queryTH1) && mysqli_query($conn,$queryTH2) && mysqli_query($conn,$queryTH3) && mysqli_query($conn,$queryTH4) && mysqli_query($conn,$queryTH5) && mysqli_query($conn,$queryTH6) && mysqli_query($conn,$queryTH7) &&
           mysqli_query($conn,$queryF1) && mysqli_query($conn,$queryF2) && mysqli_query($conn,$queryF3) && mysqli_query($conn,$queryF4) && mysqli_query($conn,$queryF5) && mysqli_query($conn,$queryF6) && mysqli_query($conn,$queryF7))
        {
            echo"<script>alert('SAVED !!');</script>";
        }
    }
?>


