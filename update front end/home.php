<?php 
	session_start();
?>

<!DOCTYPE html>

<html>

<head>
	<title>Register</title>
</head>

<body>

<div class="header"> 
	<h1>User Profile</h1>
</div>

<?php


	if (isset($_SESSION['message'])) {
		echo "<div id='error_msg'>".$_SESSION['message']."</div>";
		unset($_SESSION['message']);
	}
?>

<h1>Home</h1>

<div><h4>Welcome <?php echo $_SESSION['username'];  ?></h4></div>

<form name="form" method="post" action="logout.php">

  <a href = "events/upcomingEvents.php">
  <input name = "events" type = "button" id = "events" value = "Upcoming Events"> 
  </a>

  <label class="logout">
  
  <input name="submit2" type="submit" id="submit2" value="logout">

  </label>

</form>

</body>

</html>
