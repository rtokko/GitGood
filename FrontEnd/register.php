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
	<link href="css/register.css" rel="stylesheet" type="text/css" >
</head>

<body>

<div class="header"> 
	<h1>GG Registration</h1>
</div>

<a href="index.php"><input name="login" type="button" id = "login" value = "Back to Login"></a><br><br>

<form method="post" action="testRabbitMQClient.php">
	<table>
		<td>Username:</td>
		<tr>
		<td><input type="text" name="username" class="textInput" required></td>
		</tr>

		<td>Email:</td>		
		<tr>
			<td><input type="email" name="email" class="textInput" required></td>
		</tr>

		<td>Password:</td>
		<tr>	
			<td><input type="password" name="password" class="textInput" required></td>
		</tr>

		<td>Retype Password:</td>
		<tr>
			<td><input type="password" name="password2" class="textInput" required></td>
		</tr>
	</table>

<input type="submit" name="register_btn" value="Register" required>

</form>

</body>

</html>
