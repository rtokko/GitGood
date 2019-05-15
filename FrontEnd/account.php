<?php
$hostname = "10.0.0.5" ;
$db_username = "admin" ; //replace with your personal db name
$db_project = "gitgood" ; //Name of DB
$db_password = "12345" ; //replace with your db password 

$db = mysqli_connect($hostname, $db_username, $db_password, $db_project);

if (mysqli_connect_errno()) {
	$hostname = "10.0.0.6" ;
	$db_username = "admin" ; //replace with your personal db name
	$db_project = "gitgood" ; //Name of DB
	$db_password = "12345" ; //replace with your db password 
	
	$db = mysqli_connect($hostname, $db_username, $db_password, $db_project);


	if(mysqli_connect_errno()){
	        echo "Failed to connect to MySQL:" . mysqli_connect_error();
	        exit();
		}

	echo "Hot Standby Machine DB is being used";

        }
else{
	echo "Main DB Server is being used"; }


print "<br>Successfully connected to MySQL.<br>";
mysqli_select_db ($db, $db_project);
?>
