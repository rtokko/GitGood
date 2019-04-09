<?php 
	session_start();

	$db = mysqli_connect("10.0.0.5", "admin", "12345", "gitgood");

	$username = $_SESSION["uname"];

	$sql = " SELECT email FROM test WHERE username = '$username' " ;

	$result = mysqli_query($db, $sql) or die(mysqli_error($db));

	$numRows = mysqli_num_rows($result);

    if ($numRows == 1) {

       while($row = mysqli_fetch_array($result, MYSQLI_ASSOC) ){
           $email = $row['email'];
           $_SESSION['email'] = $email;
	   }
}

?>

<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8" />
	<title>User Profile</title>
</head>

<body>

<h1>Home</h1>
	
	       <div><h4> <?php echo "Welcome, ".$_SESSION['uname'];  ?> </h4></div>

			<!--Add buttons to initiate auth sequence and sign out-->
			
				<form name="form" method="post" action = "logout.php">

					<a href = "upcomingEvents.php">
					<input name = "events" type = "button" id = "events" value = "Calendar"> </a>

          <a href = "phpBB3">
					<input name = "board" type = "button" id = "board" value = "Message Board"> </a>

          <a href = "sgg.php">
					<input name = "api" type = "button" id = "api" value = "Upcoming Tournaments"> </a>

					<input name="submit2" type="submit" id="submit2" value="logout">


				</form>

	</body>

		<!--
	<div class="header">

		<h1>User Profile</h1>
		<a href = "events/upcomingEvents.php"> </a>

		<button id="authorize_button" style="display: none;">Authorize</button>
		<button id="signout_button" style="display: none;">Sign Out</button>

		<a href = "testemail.php">
		<input name = "email" type = "button" id = "email" value = "email check">
	
	</div> 
	-->

</html>
