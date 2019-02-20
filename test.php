<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);  
ini_set('display_errors' , 1);

include("config.php");
include ("welcome.php") ;

$db = mysqli_connect($hostname, $username, $password, $project );
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