<?php

error_reporting (E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
ini_set ('display_errors', 1);

$ucid = $_GET["ucid"];

print "hello $ucid";

include ("account.php");
include	("myfunctions.php");
$db = mysqli_connect ($hostname, $username, $password, $project);
if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL:" . mysqli_connect_error();
        exit();
        }
print "<br>Successfully connected to MySQL.<br>";
mysqli_select_db ($db, $project);


$ucid = $_GET["ucid"];	print "<br>ucid is: $ucid";
$pass = $_GET["pass"];	print "<br>pass is: $pass";
$account = $_GET["account"];	print "<br>account is: $account";
if (! isset ($_GET ["box"])) {
	$box = NULL ;
} 
else {
	$box = "on";
	print "<br>checkbox is: $box<br>";
}

//if auth fails then exit
if(!authenticate($ucid, $pass, $db) ){	
	exit("<br>bad");	
}
echo "<br>valid cred";

display($ucid, $account, $box, $number, $db);
?>
