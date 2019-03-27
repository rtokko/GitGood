<?php 
	//home.php previous name
	session_start();
unset($_SESSION["registration"]);
$_SESSION["index"] = 'true';


	// connect to database
	/*$db = mysqli_connect("10.0.0.5", "admin", "12345", "gitgood");

	if (isset($_POST['login_btn'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
$password = md5($password); // remember we hashed password before storing last time
		$sql = "SELECT * FROM gitgood.test WHERE username='$username' AND password='$password'";
		$result = mysqli_query($db, $sql);

		if (mysqli_num_rows($result) == 1) {
			$_SESSION['message'] = "You are now logged in";
			$_SESSION['username'] = $username;
			header("location: home.php"); //redirect to home page
		}else{
			$_SESSION['message'] = "Username/password combination incorrect";
		}
	}

	if (isset($_POST['reg_btn'])) {
		header("location: register.php");
	}
*/

if (isset($_SESSION['message'])) {
		echo "<div id='error_msg'>".$_SESSION['message']."</div>";
		unset($_SESSION['message']);
	}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Git Good </title>
</head>
<body>
<div class="header"> 
	<h1>GitGood Login</h1>
</div>

<form method="post" action="testRabbitMQClient.php"> <!-- Change made here -->
	<table>
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username" class="textInput"></td>
		</tr>

		<tr>
			<td>Password:</td>
			<td><input type="password" name="password" class="textInput"></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="login_btn" value="Login"></td>
		</tr>

		<tr>
			<td>Register</td>
			<td><a href="register.php"><input type="button" name="reg_btn" value="Register"></a></td>
		</tr>

	</table>
</form>
</body>
</html>
