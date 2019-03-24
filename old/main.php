<?php

include ("account.php"); 
include ("myfunctions.php");

print("Database Connection Status: <br>");

error_reporting (E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
ini_set ('display_errors', 1);

$db = mysqli_connect ($hostname, $username, $password, $project);

if (mysqli_connect_errno()) {
        echo "<br>Failed to connect to MySQL:<br><br>" . mysqli_connect_error();
        exit();
		}
		
print "<br>Successfully connected to MySQL.<br>";

mysqli_select_db ($db, $project);

$user = $_GET["username"]; print "<br>Username is: $user";
$pass = $_GET["passwd"]; print "<br>Password is: $pass";

//if auth fails then exit
if(!authenticate($user,$pass,$db) ){	
	exit("<br>bad");	
}
echo "Authentication Valid<br><br>Good Credentials";

/* display($user, $account, $box, $number, $db); */

?>
