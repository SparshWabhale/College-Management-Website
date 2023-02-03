
<?php require "CONNECT.php" ?>

<?php
$query = "SELECT * FROM questions";
$total_questions = mysqli_num_rows(mysqli_query($conn,$query));
?>

<html>
	<head>
	
		<link rel="stylesheet" href="quiz.css">
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	</head>

	<body>
	</div>
        <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
		<script src="quiz1.js"></script>
	</body>

	<main>
			<div class="wrapper">
				<div class="title">
					<h1>QUIZ</h1>
				</div>
				<p>
				<h2>	This is a multiple choice quiz </h2>
				</p>
				<ul>
					<li><strong>NO. OF QUESTIONS : </strong><?php echo $total_questions; ?> </li>
					<li><strong>TYPE : </strong> MULTIPLE CHOICE</li>
					<li><strong>ESTIMATED TIME : </strong> <?php echo $total_questions*1.5; ?></li>

				</ul>
		<div align='center'>
				<a href="question.php?n=1">
					<button class="btn">Start Quiz </button>
				</a>
		</div>
	</div>
</main>

