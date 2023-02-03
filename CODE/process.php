<?php require "CONNECT.php" ?>
<?php session_start(); ?>
<?php 
	//For first question, score will not be there.
	if(!isset($_SESSION['score'])){
		$_SESSION['score'] = 0;
	}
 if($_POST){
	//We need total question in process file too
 	$query = "SELECT * FROM questions";
	$total_questions = mysqli_num_rows(mysqli_query($conn,$query));
	
	//We need to capture the question number from where form was submitted
 	$number = $_POST['number'];
	
	//Here we are storing the selected option by user
 	$selected_choice = $_POST['choice'];
	
	//What will be the next question number
 	$next = $number+1;
	
	//Determine the correct choice for current question
 	$query = "SELECT * FROM options WHERE question_number = $number AND is_correct = 1";
 	 $result = mysqli_query($conn,$query);
 	 $row = mysqli_fetch_assoc($result);

 	 $correct_choice = $row['id'];
	
	//Increase the score if selected cohice is correct
 	 if($selected_choice == $correct_choice){
 	 	$_SESSION['score']++;
 	 }
		//Redirect to next question or final score page. 
 	 if($number == $total_questions){
 	 	header("LOCATION: final.php");
 	 }else{
 	 	header("LOCATION: question.php?n=". $next);
 	 }

 }



?>