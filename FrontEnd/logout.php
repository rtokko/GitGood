<?php
	// previous name
	session_start();
	session_destroy();
	unset($_SESSION['username']);
	$_SESSION['message'] = "You are now logged out";
	header("location: index.php");//change made here
?>

<!DOCTYPE html>
<html>
<a href="logout.php">Logout</a>
</html>
