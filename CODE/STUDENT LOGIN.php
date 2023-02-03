<?php require 'CONNECT.php'; ?> 

<!DOCTYPE html>
<html>
<head>
	<title>SignUp and Login</title>
	<link rel="stylesheet" type="text/css" href="front1.css">
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
		<h1>Sign In</h1>
		<div class="social-container">
		<a href="#" class="social"><i class="fa fa-facebook"></i></a>
		<a href="#" class="social"><i class="fa fa-google"></i></a>
		<a href="#" class="social"><i class="fa fa-linkedin"></i></a>
	</div>
	<span>or use your account</span>
	<input type="text" name="USER_NAME" placeholder="User name">
	<input type="password" name="PASSWORD" placeholder="Password">
	<input type="text" name="BRANCH" placeholder="Branch">

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
			<h1>Hello, all the members of VIT</h1>
			<p>Enter your credential and start journey with us</p>
			<button class="ghost" id="signUp">Sign Up</button>
			<a href="REGISTER.php">
				<button class="ghost" >Register</button>
		</div>
	</div>
</div>
</div>

<script type="text/javascript">
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');

	signUpButton.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});
	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});
</script>


</body>
</html>
<?php
if(isset( $_POST['CREATE']))
{
  $REG_NO = $_POST['REG_NO'];  
  $USER_NAME = $_POST['USER_NAME'];
  $PASSWORD = $_POST['PASSWORD'];
    
    $query = "UPDATE profile SET USER_NAME = '$USER_NAME',PASSWORD = '$PASSWORD' WHERE REG_NO = '$REG_NO'" ;
    $output = mysqli_query($conn,$query);
    if($output)
    {
        echo '<script>alert("ACCOUNT CREATED SUCCESSFULLY !!");</script>';
    }
}
?>

<?php
session_start();
if(isset( $_POST['LOGIN']))
{
    $USER_NAME = $_POST['USER_NAME'];
    $PASSWORD = $_POST['PASSWORD'];
    $BRANCH = $_POST['BRANCH'];

    $query = "SELECT * FROM profile WHERE USER_NAME = '$USER_NAME' ";
    $output = mysqli_query($conn,$query);
    
    if(mysqli_num_rows($output) > 0)
    {
        while($USER = mysqli_fetch_assoc($output))
        {
            if ($USER_NAME == $USER['USER_NAME'] && $PASSWORD === $USER['PASSWORD'] & $BRANCH === $USER['BRANCH']) 
            {
               header('Location: MAIN_PAGE.php'); 
               $_SESSION['LOGIN_USER'] = $_POST['USER_NAME'];
               $_SESSION['BRANCH'] = $_POST['BRANCH'];
            }
            else 
            { echo '<script>alert("INCORRECT USERNAME OR PASSSWORD !! ");</script>'; }
        }
    }
    else
    {
      echo '<script>alert("ENTER CREDENTIALS PLEASE !! ");</script>';;
    }
}
?>