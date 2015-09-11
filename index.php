<?php include "database.php";
	//create select query
	$query = "SELECT * FROM shouts ORDER BY id";
	$shouts = mysqli_query($con, $query);
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Vin's Message IT </title>
		<link rel = "stylesheet" href="css/style.css" type="text/css"/>
		<link href='https://fonts.googleapis.com/css?family=Chewy' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	</head>
	
	<body>
		<div id ="container">
			<header>
				<h1><span class="head-icon fa fa-commenting-o"></span> My Pocket Message</h1>
			</header>
			
		<div id = "shouts">
			<ul>
				<?php while($row = mysqli_fetch_assoc($shouts) ): ?>
				<li class="shout"><span><?php echo $row['time']; ?>  </span>: <strong><?php echo $row['username']; ?></strong> - <?php echo $row['message']; ?></li>
				
				<?php endwhile; ?>
				
				
			</ul>
		</div>	
			
		<div id="input">
		<?php if(isset($_GET['error'])) : ?>
			<div class = "error"><?php echo $_GET['error']; ?> </div>
		<?php endif; ?>
			<form method="post" action = "process.php"><b>Username: </b>
				<input class="input-box" type = "text" name="user" placeholder="Enter your name"/><br/> <b>Message: </b>		
				<input class="input-box" type = "text" name="message" placeholder= "Type your message"/><br/>
				<input class="shout-btn" type= "submit" name ="submit" value="Send"/>
				
			</form>
		</div>
			
			
		
		</div><!--endcontainer-->
	</body>


</html>
