<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="profile.css">
</head>
<body>

<div class="card">
  <?php require 'CONNECT.php'; 
      session_start();
?> 
        <?php
            error_reporting(0);
            $query="SELECT * FROM profile WHERE USER_NAME='$_SESSION[LOGIN_USER]'";
            $output = mysqli_query($conn,$query);
   
            if($output)
            {
                while($row = mysqli_fetch_assoc($output))
                {
                    $REG_NO = $row['REG_NO'];
                    $NAME = $row['NAME'];
                    $GENDER = $row['GENDER'];
                    $DOB = $row['DOB'];
                    $BLOOD_GROUP = $row['BLOOD_GROUP'];
                    $PHONE = $row['PHONE'];
                    $EMAIL = $row['EMAIL'];
                    $PROGRAM = $row['PROGRAM'];
                    $BRANCH = $row['BRANCH'];
                    $IMAGE = $row['IMAGE'];
                }
            }
        ?>
        <?php  
            echo nl2br("\n");  

        ?> 
        <h2 style="text-align: center";>MY PROFILE</h2>
        <div style="text-align: center";> <b> WELCOME </b> 
        <?php  
            echo nl2br("\n");  
            echo nl2br("\n");
        ?> 
        <div align = 'center' >
            <img src="IMAGE/<?php echo $IMAGE; ?>" class = 'left' alt="IMAGE" style="width: 150px; height: 150px;" >
        </div>
        <h4> <?php echo $_SESSION['LOGIN_USER']; ?> </h4> 
       
            <table align = 'center'>
                <tr>
                    <td>
                    <div class="title"><b> REGISTERATION NO </b> </div>
                    </td>
                    <td>
                        <div class="info"><?php echo $REG_NO; ?></div>
                    </td>
                </tr>

                <tr>
                    <td>
                    <div class="title"><b> NAME </b><div>
                    </td>
                    <td>
                        <div class="info"><?php echo $NAME; ?></div>
                    </td>
                </tr>

                <tr>
                    <td>
                    <div class="title"><b> GENDER </b></div>
                    </td>
                    <td>
                        <div class="info"><?php echo $GENDER; ?></div>
                    </td>
                </tr>

                <tr>
                    <td>
                    <div class="title"><b> DATE OF BIRTH </b><div>
                    </td>
                    <td>
                        <div class="info"><?php echo $DOB; ?></div>
                    </td>
                </tr>

                <tr>
                    <td>
                    <div class="title"><b> BLOOD GROUP  </b></div>
                    </td>
                    <td>
                        <div class="title"><?php echo $BLOOD_GROUP; ?> </div>
                    </td>
                </tr>

                <tr>
                   <td>
                   <div class="title"><b> PHONE </b></div>
                    </td>
                    <td>
                        <div class="info"><?php echo $PHONE; ?></div>
                    </td>
                </tr>

                <tr>
                    <td>
                    <div class="title"><b> EMAIL </b></div>
                    </td>
                    <td>
                        <div class="info"><?php echo $EMAIL; ?></div>
                    </td>
                </tr>

                <tr>
                    <td>
                    <div class="title"><b> PROGRAM </b></div>
                    </td>
                    <td>
                        <div class="info"><?php echo $PROGRAM; ?></div>
                    </td>
                </tr>

                <tr>
                    <td>
                    <div class="title"><b> BRANCH </b></div>
                    </td>
                    <td>
                        <div class="info"><?php echo $BRANCH; ?></div>
                    </td>
               </tr>
        </table>
        
  <p><a href=EDIT.php><button class="button button1">UPDATE</button></p>
     <a href=MAIN_PAGE.php><button class="button button1">BACK</button>
     
</div>
</body>
</html>


