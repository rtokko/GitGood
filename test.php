#!/usr/bin/php
<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
ini_set('display_errors', 1);

include("config.php");

$db = mysql_connect($hostname, $username, $password) or die("cannot connect");
mysql_select_db($db, $db_name) or die("cannot select DB");
$user = $_POST['username'];
$pass = $_POST['password'];
$user = mysql_real_escape_string($user);
$pass = mysql_real_escape_string($pass);
$sql = "select *from  $table_name where password = '$pass' and name = '$user'";
$result = mysql_query($sql,$db);
$count = mysql_num_rows($result);
if ($count == 1)
{
	echo "Login Success :)";
}
else
{
	echo "Authentication Failed :(";
}
?>
