#!/usr/bin/php
<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);  
ini_set('display_errors' , 1);

include("config.php");

$db = mysqli_connect($hostname, $username, $project, $password );
if (mysqli_connect_errno())
  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  exit();
  }
print "<br>Successfully connected to MySQL.<br>";
mysqli_select_db( $db, $project ); 

$username = getdata ("username");
$password = getdata("password");

if (! auth ($username, $password) )
{ 
 exit ("bad");
}

$name = $_GET ["username"]; print "<br>$name";


print "<br><br>Bye" ;
mysqli_close($db);
exit ( "<br>Interaction completed.<br><br>"  ) ;

?>

<!DOCTYPE HTML>

<HTML>

<h2>Git Good Login</h2>

  <form action="">

    Username:<br>
    <input type="text" name="username" id="username">
    <br><br>

    Password:<br>
    <input type="password" name="password" id="password">
    <br><br>

    <input type="submit" value="Submit"><a href="D:/GitGood/user_creation.html"><input type="button" value="new user"></a>
    
  </form> 

</HTML>
