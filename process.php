<?php
	include 'database.php';

	
//check if the form was submitted

if(isset($_POST['submit'])){

	//post the variables and escape and harmful characters to the script
	//also need the pass the connection var
	$username = mysqli_real_escape_string($con, $_POST['user']);
	$mess = mysqli_real_escape_string($con, $_POST['message']);
	
	//set timezone
	date_default_timezone_set('America/New_York');
	$time = date('h:i:s a', time() );
	
	//validate input
	if( (!(isset($username)) || $username == '') || (!(isset($mess) || $mess == '')) ){
		$error = "Please fill in your name and a message";
		header("Location: index.php?error=".urlencode($error));
		exit();
	}else{
		$query = "INSERT INTO `shouts` (username, message, time)
		VALUES ('$username', '$mess', '$time')";
		
		if(!mysqli_query($con, $query)){
			die("Error: ".mysqli_error($con));
		}else{
			header("Location: index.php");
			exit();
		}
	}
	
}

?>
