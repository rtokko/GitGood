<?php

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
<!DOCTYPE HTML>
<HTML>

	<h2>Git Good Login</h2>

	<form method="post" action="test.php">

		Username:<br>
		<input type="text" name="username" id="username">
		<br><br>

		Password:<br>
		<input type="password" name="password" id="password">
		<br><br>

		<input type="submit"><a href="D:/GitGood/user_creation.html"><input type="button" value="new user"></a>

	</form>

</HTML>
