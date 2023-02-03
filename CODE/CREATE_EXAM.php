<?php require "CONNECT.php" ?>

<div class="body" align = "center">

<form action="" method="POST">
    <fieldset>
    <select name="BRANCH">
        <option value="">--Select--</option>
        <option value="cse">COMPUTER</option>
        <option value="eee">ELECTRONICS</option>
        <option value="mgt">MANAGEMENT</option>
    </select>
    </fieldset>

    <fieldset>
    <select name="SUBJECT">
        <option value="">--Select--</option>
        <option value="MATHS">MATHS</option>
        <option value="PHYSICS">PHYSICS</option>
        <option value="CHEMISTRY">CHEMISTRY</option>
        <option value="ENGLISH">ENGLISH</option>
        <option value="STS">STS</option>
    </select>
    </fieldset>

    <fieldset>
    EXAM TITLE
    <input type="text" name="TITLE" class="form-control">
    </fieldset>
    
    <fieldset>
    QN_ID
    <input type="number" name="Q_ID" class="form-control">
    </fieldset>
    
    <fieldset>
    QUESTION
    <input type="text" name="QN" class="form-control">
    </fieldset>

    <fieldset>
    OPTION 1
    <input type="text" name="OP1" id="1" class="form-control">
    </fieldset>

    <fieldset>
    OPTION 2
    <input type="text" name="OP2" class="form-control">
    </fieldset>

    <fieldset>
    OPTION 3
    <input type="text" name="OP3" class="form-control">
    </fieldset>

    <fieldset>
    OPTION 4 
    <input type="text" name="OP4" class="form-control">
    </fieldset>

    <fieldset>
    ANSWER
    <input type="text" name="ANS" class="form-control">
    </fieldset>
    
    <input type="submit" name="S" value="ADD">
    </form>
</div>

<?php
    if(isset($_POST['S']))
    {
        $Q_ID = $_POST['Q_ID'];
        $TITLE = $_POST['TITLE'];
        $BRANCH = $_POST['BRANCH'];
        $SUBJECT= $_POST['SUBJECT'];
        $QUESTION = $_POST['QN'];
        $OPTION1 = $_POST['OP1'];
        $OPTION2 = $_POST['OP2'];
        $OPTION3 = $_POST['OP3'];
        $OPTION4 = $_POST['OP4'];
        $ANS = $_POST['ANS'];

        $SQL = "INSERT questions (Q_ID,TITLE,Question,option1,option2,option3,option4,ANSWER,BRANCH,SUBJECT) VALUES ('$Q_ID','$TITLE','$QUESTION','$OPTION1','$OPTION2','$OPTION3','$OPTION4','$ANS','$BRANCH','$SUBJECT')";
        if(mysqli_query($conn,$SQL))
        {
            echo"<script>alert('QUESTION ADDED SUCCESSFULLY !!');</script>";
        }
        else
        {
            echo "ERROR".$SQL."<br>". mysqli_error($conn);
        }
    }
?>