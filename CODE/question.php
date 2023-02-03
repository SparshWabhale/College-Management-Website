<?php require "CONNECT.php" ?>
<?php
	session_start(); 
	//Set Question Number
	$number = $_GET['n'];

	//Query for the Question
	$query = "SELECT * FROM questions WHERE question_number = $number";

	// Get the question
	$result = mysqli_query($conn,$query);
	$question = mysqli_fetch_assoc($result); 

	//Get Choices
	$query = "SELECT * FROM options WHERE question_number = $number";
	$choices = mysqli_query($conn,$query);
	// Get Total questions
	$query = "SELECT * FROM questions";
	$total_questions = mysqli_num_rows(mysqli_query($conn,$query));
 	
	
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="question.css">
</head>
<body>

	<main>
			<div class="wrapper">
				<h3>Question <?php echo $number; ?> of <?php echo $total_questions; ?> </h3> 
				<h3> <?php echo $question['question_text']; ?> </h3>
				<form method="POST" action="process.php">
						<?php while($row=mysqli_fetch_assoc($choices)){ ?>
						<div class="p">	<input type="radio" name="choice" value="<?php echo $row['id']; ?>"><?php echo $row['coption']; ?> </div>
						<?php } ?>
					
						<?php echo nl2br("\n"); ?>
					<input type="hidden" name="number" value="<?php echo $number; ?>">
					<input type="submit" name="submit" class="button" value="SUBMIT">
				</div>

				</form>
				

			</div>

	</main>
</body>
</html>