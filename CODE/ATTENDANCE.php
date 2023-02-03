<?php require 'CONNECT.php';  ?>
<?php  
	error_reporting(0);
    echo nl2br("\n");  
    echo nl2br("\n");
	echo nl2br("\n");  
    echo nl2br("\n");
?> 


<script type="text/javascript">
	function getatt(value)
	{
		if(value == true)
		{
			document.getElementById("txtAbsent").value = parseInt(document.getElementById("txtAbsent").value) - 1;
			document.getElementById("txtPresent").value = parseInt(document.getElementById("txtPresent").value) + 1;
		}
		else
		{
			document.getElementById("txtAbsent").value = parseInt(document.getElementById("txtAbsent").value) + 1;
			document.getElementById("txtPresent").value = parseInt(document.getElementById("txtPresent").value) - 1;
		}
	}
</script>
<link rel="stylesheet" href="attendancefac1.css">
<body>
<form action="" method="post">
	<div class="wrapper">
			<h2>SELECT BRANCH :</h2> 
        				<select name="BRANCH">
                			<option value="">--SELECT--</option>
                			<option value="cse">COMPUTER</option>
                			<option value="eee">ELECTRONICS</option>
                			<option value="mgt">MANAGEMENT</option>
        				</select>
				<input type="submit" value="VIEW" name="VIEW"/>
		</div>
            	
<table class="content-table">
    <thead>
      <tr>
        <th>REG_NO</th>
        <th>NAME</th>
        <th>PROGRAM</th>
        <th>BRANCH</th>
        <th>ATTENDANCE</th>
      </tr>
    </thead>
    <tbody>

        <caption><h1>ATTENDANCE SHEET</h1></caption>
     
        <?php
				extract($_POST);
			  	if(isset($_POST['VIEW']))
			 {
					$BRANCH = $_POST['BRANCH'];
				
				$query = "SELECT * FROM list WHERE BRANCH = '$BRANCH' order by NAME";
				$s=0;
				$result = mysqli_query($conn,$query);
				while($rec = mysqli_fetch_array($result))
				{
					$s = $s + 1;
					echo ' <tr>
							  <td width="114">'.$rec["REG_NO"].'</td>
							  <td width="152">'.$rec["NAME"].'</td>
                              <td width="152">'.$rec["PROGRAM"].'</td>
                              <td width="152">'.$rec["BRANCH"].'</td>
							  <td width="110"><input type=checkbox name='.$rec["REG_NO"].' onclick="getatt(this.checked);"/></td>
							</tr>';
					
				}
			}
			?>			
            <tr>
              <td colspan="10"><div align="center">
                <input type="submit" value="SAVE" name="SAVE"/>
                &nbsp;&nbsp;</div></td>
            </tr>
          </table>
		  <div class="wrapper">
				<div class="input-box">
				<h2>SELECT DATE:</h2>
				<input type="date" name="DATE">
		</div>
</div>

          </form>
    </tbody>
  </table>

 <div class="wrapper">
            	<tr>
                	<td> <b>Total Absent : </b><input type="text" id="txtAbsent" value="<?php print $s; ?>" size="10" disabled="disabled"/></td>
                </tr>
                <tr>
                	<td> <b>Total Present :</b> <input type="text" id="txtPresent" value="0" size="10"  disabled="disabled"/></td>
                </tr>
                <tr>
                	<td> <b> Total Strength : </b><input type="text" id="txtStrength" value="<?php print $s; ?>" size="10" disabled="disabled"/></td>
                </tr>
             </table>
         
         </td>
      </tr>
		</div>
         	

<?php
	if(isset($_POST["SAVE"]))
{	$date = $_POST['DATE'];
				   
	$query = "SELECT * FROM list ";
	$result = mysqli_query($conn,$query);
	while($rec = mysqli_fetch_array($result))
	{
		$mno = $rec['REG_NO'];
		$NAME = $rec['NAME'];
		if(isset($_POST[$mno]))
		{
			$query1 = "INSERT attendance(REG_NO ,NAME, DATE,ATTENDANCE) VALUES ('$mno','$NAME','$date','PRESENT')";
		}
		else
		{
			$query1 = "INSERT attendance(REG_NO ,NAME,DATE,ATTENDANCE) VALUES ('$mno','$NAME','$date','ABSENT')";
		}
		mysqli_query($conn,$query1);
	}
	if(mysqli_query($conn,$query1));
		{
			echo"<script>alert('SAVED SUCCESSFULLY !!');</script>";
		}
				
}
?>
 <?php echo nl2br("\n"); ?> 
 <?php echo nl2br("\n"); ?> 
 <?php echo nl2br("\n"); ?> 
<a href="STAFF_PAGE.php">
        <div align="center">
                        <button class="btn" style="margin:10px;">BACK</button>
        </div>
</a>