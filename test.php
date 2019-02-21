#!/usr/bin/php
<?php
include ("sqlconnect.php");
global $db;
$user = $_POST['username'];
$pass = $_POST['password'];
$user = mysqli_real_escape_string($db,$user);
$pass = mysqli_real_escape_string($db,$pass);
$sql = "select * from testtable where password = '$pass' and name = '$user'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if ($count == 1)
{
	echo "Login Success :)";
}
else
{
	echo "Authentication Failed :(";
}
mysqli_close($db);
?>
