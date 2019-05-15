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
	<link href="css/index.css" rel="stylesheet" type="text/css" >

</head>
<body>

<div class="header"> 
	<h1>GitGood Central</h1>
</div>

<div class = "loginForm">

<form method="post" action="testRabbitMQClient.php"> <!-- Change made here -->
	<table>

		<tr>
			<td>Please Sign In</td>
		</tr>

		<tr>
		<td><input type="text" name="username"
			class="textInput" required = "" placeholder="Username">
		</td>
		</tr>

		<tr>
		<td> <input type="password" name="password" class="textInput" 				placeholder="Password"> 
		</td>
		</tr>

		<tr>
		<td> <input type="submit" name="login_btn" value="Login"> </td>

		</tr>
		<tr>
		<td> <a href="register.php"><input type="button" name="reg_btn" 				value="Register"></a> 
		</td>

		</tr>

	</table>
</form> </div>

</body>
</html>
