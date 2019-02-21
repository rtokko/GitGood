<?php
//include("function.php");

$db = new mysqli('127.0.0.1','testuser','12345678','testdb');

if ($db->errno != 0)
{
	echo "failed to connect to database: ". $db->error . PHP_EOL;
	exit(0);
}
echo "successfully connected to database".PHP_EOL;

$query = "select * from testtable;";

$response = $db->query($query);
if ($db->errno != 0)
{
	echo "failed to execute query:".PHP_EOL;
	echo __FILE__.':'.__LINE__.":error: " .$db->error.PHP_EOL;
	exit(0);
}
?>
<!DOCTYPE HTML>
<HTML>

	<h2>Git Good Login</h2>
	
	<form method="post" action="login.php">
		
		Username:<br>
		<input type="text" name="username" id="username">
		<br><br>

		Password:<br>
		<input type="password" name="password" id="password">
		<br><br>

		<input type="submit"><a href="D:/GitGood/user_creation.html"><input type="button" value="new user"></a>

</form>

</HTML>
