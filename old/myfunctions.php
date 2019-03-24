<?php

function authenticate($user,$pass,$db){
	
	//test if ucid and pass are in user 
	$s = "select * from gitgood.test where username='$user' and password='$pass' ";

	echo "<br><br>s is $s<br>";
	
	$t = mysqli_query($db, $s) or die(mysqli_error($db));

	$num = mysqli_num_rows($t);

	if($num == 0){
			return false;
	}
	else {
			return true;
	}

}


/*
SQL Statement--> $s = "select * from users where ucid='$ucid' and pass='$pass'"
() last part of $s statement


function display ($ucid, $account, $box, $number, $db) {
	//checking if box is checked and setting variables accordingly 
	if (!isset($box)){
		$s0 = "select * from accounts where ucid='$ucid'";
		$s = "select * from transactions where ucid='$ucid' and account='$account'";
	}
	else{
		$s0 = "select * from accounts where ucid='$ucid'";
		$s = "select * from transactions where ucid='$ucid'";
	}
		
	($t = mysqli_query ($db, $s0)) or die(mysqli_error());
	$num = mysqli_num_rows($t);
	echo "<br>number of rows in accounts table: $num<br>";
	
//iterating through each row of fetched accounts table	
	while ($row = mysqli_fetch_array($t, MYSQLI_ASSOC)) {
        $account = $row["account"];
		$balance = $row["balance"];		
		echo "<br>account is: $account";
		echo "<br>balance is: $balance<br>";
	};
	
	($t = mysqli_query ($db, $s)) or die(mysqli_error());
	$num = mysqli_num_rows($t);
	echo "<br>number of rows in transactions table: $num<br>";


//iterating through each row of fetched transactions table
	while ($row = mysqli_fetch_array($t, MYSQLI_ASSOC)) {
        $account = $row["account"];
		$amount = $row["amount"];
		$timestamp= $row["timestamp"];
		$mail = $row["mail"];		
		echo "<br>account is: $account";
		echo "<br>amount is: $amount";
		echo "<br>datetime: $timestamp";
		echo "<br>mail: $mail<br>";
	};
		
}

function transact($ucid, $account, $amount, &$results, $db)	{
	
	echo "<br>hello<br>";	
	
	//1
	$s = "select * from accounts where ucid = '$ucid' and account = '$account' and (balance + '$amount') >= 0.00";
	
	
	($t = mysqli_query ($db, $s)) or die(mysqli_error());
	$num = mysqli_num_rows($t);
	if ($num == 0) {
		echo "<br>overdraft";
		return $t;
	}
	echo "<br>No overdraft";
	
	//2 insert
	
	//3 update
	
	//display(...)
}

*/

?>