<?php
	//connect to my sql
	ini_set('display_errors',"1");
	
	$con = mysqli_connect("localhost", "<username>", "<password>", "shoutIt");
	//Test connection
	if(mysqli_connect_errno()) {
		die("Failed to connect: ".mysqli_connect_error() );
		
	}




?>
