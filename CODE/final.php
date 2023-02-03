<?php 

session_start();

?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="final.css">
</head>
<body>
	<main>
			<div class="wrapper">
				<h2>RESULT</h2>
				<h2>Congratulation you have completed the test succesfully.</h2>
				<h3> <strong>SCORE : <?php echo $_SESSION['score']; ?> </strong> </h3>
				<?php unset($_SESSION['score']); ?>
			</div>

	</main>
</body>
</html>