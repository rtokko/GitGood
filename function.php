<?php
function show ($user, &$output){
	global $db;

	$output .= "";

	$s = "select * from testtable where username = '$username'";
	$output .= "SQL statement is: $s";
	($t = mysqli_query($db, $s)) or die(mysqli_error($db));
	$num = mysqli_num_rows($t);
	$output .= "$num rows retrieved";
	while ($r = mysqli_fetch_array($t, MYSQLI_ASSOC)){
		$username = $r["username"];
		$password = $r["password"];

		$output .= "Username is $username";
		$output .= "Password is $password";
	}
	echo $output;
}
function auth ($username, $password){
	global $db;

	$s = "select * from testtable where username = '$username' and password = '$password'";
	echo "SQL statement is: $s";
	($t = mysqli_query($db, $s)) or die(mysqli_error($db));
	$num = mysqli_num_rows($t);

	if ($num == 0)
	{
		return false;
	}
	return true;
}
function getdata ($name){
	global $db;
	$temp = $_GET[$name];
	$temp = mysqli_real_escape_string($db, $temp);
	echo "$name is: $temp";
	return $temp;
}
?>
