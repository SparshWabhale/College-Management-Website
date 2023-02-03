<?php require 'CONNECT.php'; ?> 

<!DOCTYPE html>
<html>
<head>
	<title>SignUp and Login</title>
	<link rel="stylesheet" type="text/css" href="frontfac1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container" id="container">
<div class="form-container sign-up-container">

<form action="" method = "POST">
	<h1>Create Account</h1>
	<div class="social-container">
		<a href="#" class="social"><i class="fa fa-facebook"></i></a>
		<a href="#" class="social"><i class="fa fa-google"></i></a>
		<a href="#" class="social"><i class="fa fa-linkedin"></i></a>
	</div>
	<span>or use your email for registration</span>
	<input type="text" name="REG_NO" placeholder="Registeration Number">
	<input type="text" name="USER_NAME" placeholder="User name">
	<input type="password" name="PASSWORD" placeholder="Password">
	<button type="submit" name="CREATE">SignUp</button>
</form>
</div>
<div class="form-container sign-in-container">
	<form action="" method = "POST">
		<h1>ADMIN LOGIN</h1>
	<input type="text" name="USER_NAME" placeholder="User name">
	<input type="password" name="PASSWORD" placeholder="Password">
	<button type="submit" name="LOGIN">LOGIN</button>
	</form>
</div>
<div class="overlay-container">
	<div class="overlay">
		<div class="overlay-panel overlay-left">
			<h1>Welcome Back!</h1>
			<p>To keep connected with us please login with your personal info</p>
			<button class="ghost" id="signIn">Sign In</button>
		</div>
		<div class="overlay-panel overlay-right">
			<h1>Welcome Admin </h1>
			<p>Enter your credentials</p>
		</div>
	</div>
</div>
</div>
</body>
</html>


<?php
session_start();
if(isset($_POST['LOGIN']))
{
    $USER_NAME = $_POST['USER_NAME'];
    $PASSWORD = $_POST['PASSWORD'];

    $query = "SELECT * FROM admin WHERE USER_NAME = '$USER_NAME' ";
    $output = mysqli_query($conn,$query);
    
    if(mysqli_num_rows($output) > 0)
    {
        while($USER = mysqli_fetch_assoc($output))
        {
            if ($USER_NAME == $USER['USER_NAME'] && $PASSWORD === $USER['PASSWORD'])
            {
               header('Location: ADMIN_PAGE.php'); 
               $_SESSION['LOGIN_USER'] = $_POST['USER_NAME'];
            }
            else 
            { 
              echo '<script>alert("INCORRECT USERNAME OR PASSSWORD !! ");</script>'; 
            }
        }
    }
      else 
      {
        echo '<script>alert("ENTER CREDENTIALS PLEASE !! ");</script>'; 
      }
}
?>