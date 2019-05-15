<?php
	// previous name 
		
	session_start();
	//session_destroy();
	unset($_SESSION['username']);
	$_SESSION['message'] = "You are now logged out";

	echo "You are now logged out";
	
	sleep(3);
	header("location: index.php");//change made here
?>

<!DOCTYPE html>
<html>
<h1>logging out....</h1>
<a href="logout.php">Logout</a>
</html>
