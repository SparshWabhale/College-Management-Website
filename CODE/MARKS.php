<?php require 'CONNECT.php';  ?>
<link rel="stylesheet" href="entermarks.css">
<div class="wrapper">
<form action="" method="POST">
         <h2>SELECT BRANCH :</h2>
         <?php echo nl2br("\n"); ?> 
            <select name="BRANCH">
                <option value="">--Select--</option>
                <option value="cse">COMPUTER</option>
                <option value="mgt">MANAGEMENT</option>
                <option value="eee">ELECTRONICS</option>
            </select>
        <button type="submit" name="P"> VIEW </button>
    </form>     
</div>
    <table class="content-table">
                <tr>
                    <th> REG_NO </th>
                    <th> NAME </th>
                    <th> MARKS </th>
<?php
    if(isset($_POST['P']))
    {
        $BRANCH = $_POST['BRANCH'];
        $query = "SELECT * FROM list WHERE BRANCH = '$BRANCH'";
        $result = mysqli_query($conn,$query);
        if($result)
        {
            while($rec = mysqli_fetch_array($result))
            {
                $REG_NO = $rec['REG_NO'];
                $NAME = $rec['NAME'];
            ?>
                <tr>
                    <td width="114"> <?php echo $REG_NO ?> </td>
                    <td width="152"> <?php echo $NAME ?> </td>
                    <td> <a href="E_MARKS.php?REG_NO=<?php echo $REG_NO ?>">
                            <button class="button button1">ENTER MARKS</button>
                        </a> 
                </td>
                </tr>
    <?php  } ?>
            </table>
<?php        
        }
    }
?>
<?php echo nl2br("\n"); ?> 
<?php echo nl2br("\n"); ?> 
<?php echo nl2br("\n"); ?> 
<?php echo nl2br("\n"); ?> 
<?php echo nl2br("\n"); ?> 
<?php echo nl2br("\n"); ?> 
<?php echo nl2br("\n"); ?> 
<?php echo nl2br("\n"); ?> 
<?php echo nl2br("\n"); ?> 
<?php echo nl2br("\n"); ?> 
<?php echo nl2br("\n"); ?> 
<?php echo nl2br("\n"); ?> 
<?php echo nl2br("\n"); ?> 
<?php echo nl2br("\n"); ?> 
<?php echo nl2br("\n"); ?> 
<?php echo nl2br("\n"); ?> 
<?php echo nl2br("\n"); ?> 
<?php echo nl2br("\n"); ?> 
<?php echo nl2br("\n"); ?> 
<?php echo nl2br("\n"); ?> 
<?php echo nl2br("\n"); ?> 
<?php echo nl2br("\n"); ?> 
<?php echo nl2br("\n"); ?> 
<a href="STAFF_PAGE.php">
        <div align="center">
                        <button class="btn" style="margin:10px;">BACK</button>
        </div>
</a>