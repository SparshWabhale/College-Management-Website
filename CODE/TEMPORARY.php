<div align="left">
    <div class="container-fluid">
      <form action="" method="POST" enctype="multipart/form-data" >
      <fieldset>
          <div align="center">
              PERSONAL INFORMATION
          </div>
       </fieldset>
            <div class="col-4">
                <div class="form-group">
                    <fieldset>
                    REGISTERATION NUMBER
                    <input type="text" name="REG_NO" class="form-control" />
                    </fieldset>
                </div>
            </div>
            <div class="col-4" >
                <div class="form-group">
                    <fieldset>
                    NAME
                    <input type="text" name="NAME" class="form-control" />
                    </fieldset>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <fieldset>
                    GENDER
                    <input type="radio" name="GENDER" value="MALE"/>MALE
                    <input type="radio" name="GENDER" value="FEMALE"/>FEMALE
                    <input type="radio" name="GENDER" value="OTHERS"/>OTHERS
                    </fieldset>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <fieldset>
                    DATE OF BIRTH
                    <input type="date" name="DOB" class="form-control" />
                    </fieldset>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <fieldset>
                    BLOOD GROUP
                    <input type="text" name="BG" class="form-control" />
                    </fieldset>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <fieldset>
                    PHONE NUMBER
                    <input type="text" name="PHONE" class="form-control" />
                    </fieldset>
                </div>
            </div>
            <?php  
                    echo nl2br("\n");  
                    echo nl2br("\n");
            ?>  
            <fieldset>
                <div align="center">
                    ACADEMIC INFORMATION
                </div>
            </fieldset>
            <div class="col-4">
                <div class="form-group">
                    <fieldset>
                    COLLEGE MAIL ID
                    <input type="text" name="EMAIL" class="form-control" />
                    </fieldset>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <fieldset>
                    PROGRAM
                    <input type="text" name="PROGRAM" class="form-control" />
                    </fieldset>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <fieldset>
                    BRANCH
                    <select name="BRANCH">
                        <option value="">--Select--</option>
                        <option value="cse">COMPUTER</option>
                        <option value="mgt">MANAGEMENT</option>
                        <option value="eee">ELECTRONICS</option>
                    </select>
                    </fieldset>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <fieldset>
                    UPLOAD PROFILE IMAGE :
                    <input type="file" name="FILE" class="form-control" />
                    </fieldset>
                </div>
            </div>

            <?php  
                    echo nl2br("\n");  
                    echo nl2br("\n");
            ?>  
            <fieldset>
                <div align="center">
                    PERMANENT ADDRESS
                </div>
            </fieldset>
            <div class="col-4">
                <div class="form-group">
                    <fieldset>
                    STREET NAME
                    <input type="text" name="STREET" class="form-control" />
                    </fieldset>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <fieldset>
                    AREA NAME
                    <input type="text" name="AREA" class="form-control" />
                    </fieldset>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <fieldset>
                    CITY
                    <input type="text" name="CITY" class="form-control" />
                    </fieldset>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <fieldset>
                    STATE
                    <input type="text" name="STATE" class="form-control" />
                    </fieldset>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <fieldset>
                    PIN CODE
                    <input type="number" name="PIN" class="form-control" />
                    </fieldset>
                </div>
            <div class="col-4">
                <div class="form-group">
                    <fieldset>
                    COUNTRY
                    <input type="text" name="COUNTRY" class="form-control" />
                    </fieldset>
                </div>
            </div>
            </div>
            </fieldset>
            <?php  
                    echo nl2br("\n");  
                    echo nl2br("\n");
            ?> 

            <?php  
                    echo nl2br("\n");  
                    echo nl2br("\n");
            ?>  
            <fieldset>
                <div align="center">
                    CREATE ACCOUNT
                </div>
            </fieldset>
            <div class="col-4">
                <div class="form-group">
                    <fieldset>
                    USER NAME
                    <input type="text" name="USER_NAME" class="form-control" />
                    </fieldset>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <fieldset>
                    PASSWORD
                    <input type="text" name="PASSWORD" class="form-control" />
                    </fieldset>
                </div>


                </div>
                
                <a href="STUDENT.php" class="btn btn-success" style="margin:10px";>LOGIN</a>
        </form>
        </div>
      </div>
      <br><br><br>
    </div>
  </body>
</html>

?SUBJECT=<?php echo $SUBJECT?>"



<?php require 'CONNECT.php'; 
session_start();
$U_NAME = $_SESSION['LOGIN_USER'];
?>
<?php
    $q1 = "SELECT * FROM announcement";
    $O = mysqli_query($conn,$q1);
    if($O)
    {
        echo"<font size=5 color='green'>";
        echo 'ANNOUNCEMENTS : ';
        while($D = mysqli_fetch_assoc($O))
        {
            $TITLE = $D['TITLE'];
            $DESCRIPTION = $D['DESCRIPTION'];
            
            echo nl2br("\n"); 
            echo"<font size=10 color='red'>";
            echo $TITLE;
            echo nl2br("\n");  
            echo"<font size=5 color='blue'>";
            echo $DESCRIPTION;
            echo nl2br("\n");  
            echo nl2br("\n");  
        }
        
    }
?>



//////////////ATTENDANCE REPORT
<table align='center' class="content-table">
    <tbody>
        <caption>Attendance Report</caption>
    </tbody>
    </table>
    <table class="content-table" align='center';>
    <thead>
        <tr>
            <th> DATE </th>
            <th> ATTENDANCE </th>
        </tr>
    </thead>
    </table>
        <?php  
            echo nl2br("\n");  
        ?>


<form  action="" method="POST" enctype = "multipart/form-data">

////////////////////// VIEW.DA
<div class="body">
                    <?php
                        echo"<font size=10 color='blue'>";
                        echo $NAME;
                        echo nl2br("\n"); 
                        echo"<font size=5 color='red'>";
                        echo "DATE DUE :";
                        echo $DATE;
                        echo nl2br("\n");
                    ?>
                    <?php  
                        echo nl2br("\n");  
                        echo nl2br("\n");
                    ?> 
                     <form action="" method= "POST">
                        <a href="VIEW_SUBMISSIONS.php?A_ID=<?php echo $A_ID ?>" class="btn btn-success" style="margin:5px";>VIEW SUBMISSIONS</a>
                    </form>







                    <table width="180px" align="left">
            	<tr>
                	<td> <h2>SELECT DATE: <br/> </h2>
                   <?php 
				 		    $DATE = getdate();
							$day = $DATE["mday"];
							$month = date("m");
							$year = $DATE["year"];
							?><div class="wrapper">
							<?php
							echo "<select name='cdate'>";
							for($a=1;$a<=31;$a++)
							{
								if($day == $a)
									echo "<option value='$a' selected='selected'>$a</option>";
								else
									echo "<option value='$a' >$a</option>";
							}
							echo "</select><select name='cmonth'>";
							for($a=1;$a<=12;$a++)
							{
								if($month == $a)
									echo "<option value='$a' selected='selected'>$a</option>";
								else
									echo "<option value='$a' >$a</option>";
							}
							echo "</select><select name='cyear'>";
							for($a=2010;$a<=$year;$a++)
							{
								if($year == $a)
									echo "<option value='$a' selected='selected'>$a</option>";
								else
									echo "<option value='$a' >$a</option>";
							}
							echo "</select>";
						?>                    
						</div>
                    </td>
                </tr>
             </table>	

             .button {
  border: none;
  color: white;
  padding: 10px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #422cbe;
}

.button1:hover {
  background-color: #422cbe;
  color: white;
}
