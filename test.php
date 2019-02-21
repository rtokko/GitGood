<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
ini_set('display_errors' , 1);

include ("config.php");
include ("function.php");

$db = mysqli_connect( $hostname, $username, $password, $db_name, $table_name);
if (mysqli_connect_errno())
{
	echo "Failed to connect to MYSQL : " . mysqli_connect_error();
	exit();
}
print "Successfully connected to MYSQL";
mysqli_select_db($db, $db_name);

$username = getdata("username");
$password = getdata("password");

if (! auth ($username, $password))
{
	exit("bad");
}

$name = $_GET["username"];
print "$name";

mysqli_close($db);
exit ("Interaction completed.");

?>
