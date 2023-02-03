<?php require 'CONNECT.php';  ?>

<?php   if(isset($_GET['REG_NO'])) ?>
<?php    $R = $_GET['REG_NO']; ?>
<?php
        $q="SELECT * FROM u_assignment WHERE REG_NO = '$R'";
        $result = mysqli_query($conn,$q);
        if($file = mysqli_fetch_assoc($result))
        {
            $filepath = "SUBMISSIONS/".$file['FILE'];
            if(file_exists($filepath))
            {
                header('Content-type: application/octet-stream');
                header('Content-Description: File transfer');
                header('Content-Disposition: attachment; filename ='.basename($filepath));
                header('Expires:0');
                header('Cache-Control: must-revalidate');
                header('Pragma:public');
                header('Content-Length:'. filesize('SUBMISSIONS/'.$file['FILE']));

                readfile('SUBMISSIONS/'.$file['FILE']);
                exit;
                
            }
        }
?>
    