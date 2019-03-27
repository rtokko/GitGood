<?php

	//previous name
	session_start();
	unset($_SESSION["index"]);
$_SESSION["registration"] = true;


	if (isset($_SESSION['message'])) {
		echo "<div id='error_msg'>".$_SESSION['message']."</div>";
		unset($_SESSION['message']);
	}

?>

<!DOCTYPE html>

<html>

<head>
	<title>Register</title>
</head>

<body>

<div class="header"> 
	<h1>Register</h1>
</div>

<form method="post" action="testRabbitMQClient.php">
	<table>
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username" class="textInput" required></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" name="email" class="textInput" required></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password" class="textInput" required></td>
		</tr>
		<tr>
			<td>Password again:</td>
			<td><input type="password" name="password2" class="textInput" required></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="register_btn" value="Register" required></td>
		</tr>
		
	</table>
</form>

</body>

</html>
