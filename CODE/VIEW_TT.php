<link rel="stylesheet" href="timetable2.css">

<?php require 'CONNECT.php'; 
    session_start();
    $BRANCH = $_SESSION['BRANCH'];
?>
<?php echo nl2br("\n");  ?>
<?php echo nl2br("\n");  ?>
<div align='center'>
    <h2>TIME TABLE</h2>
</div>
<?php    
    
    $queryM="SELECT * FROM `$BRANCH` WHERE DAY = 'MONDAY' ";
    $outputM = mysqli_query($conn,$queryM);

    if($outputM)
    {
        while($rowM = mysqli_fetch_assoc($outputM))
        {
           $M1 = $rowM['1'];
           $M2 = $rowM['2'];
           $M3 = $rowM['3'];
           $M4 = $rowM['4'];
           $M5 = $rowM['5'];
           $M6 = $rowM['6'];
           $M7 = $rowM['7'];
        }
    }
    $queryT="SELECT * FROM `$BRANCH` WHERE DAY = 'TUESDAY' ";
    $outputT = mysqli_query($conn,$queryT);

    if($outputT)
    {
        while($rowT = mysqli_fetch_assoc($outputT))
        {
           $T1 = $rowT['1'];
           $T2 = $rowT['2'];
           $T3 = $rowT['3'];
           $T4 = $rowT['4'];
           $T5 = $rowT['5'];
           $T6 = $rowT['6'];
           $T7 = $rowT['7'];
        }
    }
    $queryW="SELECT * FROM `$BRANCH` WHERE DAY = 'WEDNESDAY' ";
    $outputW = mysqli_query($conn,$queryW);

    if($outputW)
    {
        while($rowW = mysqli_fetch_assoc($outputW))
        {
           $W1 = $rowW['1'];
           $W2 = $rowW['2'];
           $W3 = $rowW['3'];
           $W4 = $rowW['4'];
           $W5 = $rowW['5'];
           $W6 = $rowW['6'];
           $W7 = $rowW['7'];
        }
    }

    $queryTH="SELECT * FROM `$BRANCH` WHERE DAY = 'THURSDAY' ";
    $outputTH = mysqli_query($conn,$queryTH);

    if($outputTH)
    {
        while($rowTH = mysqli_fetch_assoc($outputTH))
        {
           $TH1 = $rowTH['1'];
           $TH2 = $rowTH['2'];
           $TH3 = $rowTH['3'];
           $TH4 = $rowTH['4'];
           $TH5 = $rowTH['5'];
           $TH6 = $rowTH['6'];
           $TH7 = $rowTH['7'];
        }
    }
    $queryF="SELECT * FROM `$BRANCH` WHERE DAY = 'FRIDAY' ";
    $outputF = mysqli_query($conn,$queryF);

    if($outputF)
    {
        while($rowF = mysqli_fetch_assoc($outputF))
        {
           $F1 = $rowF['1'];
           $F2 = $rowF['2'];
           $F3 = $rowF['3'];
           $F4 = $rowF['4'];
           $F5 = $rowF['5'];
           $F6 = $rowF['6'];
           $F7 = $rowF['7'];
        }
    }
?>
<div align='center'>
    <table class="content-table" border="4" colspan="7" align='center' align ='center' >
    <thead>
        <tr>
            <th> DAY </th>
            <th> 8:00 - 9:00 </th>
            <th> 9:00 - 10:00 </th>
            <th> 10:00 - 11:00 </th>
            <th> 11:00 - 12:00 </th>
            <th> 12:00 - 1:00 </th>
            <th> 1:00 - 2:00 </th>
            <th> 2:00 - 3:00 </th>
        </tr>
    </thead>

        <tr>
            <td> MONDAY </td>
            <td> <?php echo $M1; ?> </td>
            <td> <?php echo $M2; ?> </td>
            <td> <?php echo $M3; ?> </td>
            <td> <?php echo $M4; ?> </td>
            <td> <?php echo $M5; ?> </td>
            <td> <?php echo $M6; ?> </td>
            <td> <?php echo $M7; ?> </td>
        </tr>

        <tr>
            <td> TUESDAY </td>
            <td> <?php echo $T1; ?> </td>
            <td> <?php echo $T2; ?> </td>
            <td> <?php echo $T3; ?> </td>
            <td> <?php echo $T4; ?> </td>
            <td> <?php echo $T5; ?> </td>
            <td> <?php echo $T6; ?> </td>
            <td> <?php echo $T7; ?> </td>
        </tr>

        <tr>
            <td> WEDNESDAY </td>
            <td> <?php echo $W1; ?> </td>
            <td> <?php echo $W2; ?> </td>
            <td> <?php echo $W3; ?> </td>
            <td> <?php echo $W4; ?> </td>
            <td> <?php echo $W5; ?> </td>
            <td> <?php echo $W6; ?> </td>
            <td> <?php echo $W7; ?> </td>
        </tr>

        <tr>
            <td> THURSDAY </td>
            <td> <?php echo $TH1; ?> </td>
            <td> <?php echo $TH2; ?> </td>
            <td> <?php echo $TH3; ?> </td>
            <td> <?php echo $TH4; ?> </td>
            <td> <?php echo $TH5; ?> </td>
            <td> <?php echo $TH6; ?> </td>
            <td> <?php echo $TH7; ?> </td>
        </tr>

        <tr>
            <td> FRIDAY </td>
            <td> <?php echo $F1; ?> </td>
            <td> <?php echo $F2; ?> </td>
            <td> <?php echo $F3; ?> </td>
            <td> <?php echo $F4; ?> </td>
            <td> <?php echo $F5; ?> </td>
            <td> <?php echo $F6; ?> </td>
            <td> <?php echo $F7; ?> </td>
        </tr>
    </table>
    <a href=MAIN_PAGE.php><button class="button button1">BACK</button>
</div>