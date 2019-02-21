<?php
<<<<<<< HEAD
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
=======

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);  
ini_set('display_errors' , 1);

include (  "config.php"     ) ;

$db = mysqli_connect($hostname,$username, $password ,$project);
if (mysqli_connect_errno())
  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  exit();
  }
print "<br>Successfully connected to MySQL.<br>";
mysqli_select_db( $db, $project ); 
?> 
>>>>>>> 388345ee45be02117df68b93f5c6fbbad4bd935a
<!DOCTYPE HTML>
<HTML>

	<h2>Git Good Login</h2>
<<<<<<< HEAD
	
	<form method="post" action="login.php">
		
=======

	<form method="post" action="test.php">

>>>>>>> 388345ee45be02117df68b93f5c6fbbad4bd935a
		Username:<br>
		<input type="text" name="username" id="username">
		<br><br>

		Password:<br>
		<input type="password" name="password" id="password">
		<br><br>

		<input type="submit"><a href="D:/GitGood/user_creation.html"><input type="button" value="new user"></a>

<<<<<<< HEAD
</form>
=======
	</form>
>>>>>>> 388345ee45be02117df68b93f5c6fbbad4bd935a

</HTML>
