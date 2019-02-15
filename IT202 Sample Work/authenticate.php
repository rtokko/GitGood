<?php

function authenticate($ucid, $pass, $db)	{
	
	//test if ucid and pass are in user 
	$s = "select * from users where ucid='$ucid' and pass='$pass'";
	echo "s is $s<br>";
	
	$t = mysqli_query($db, $s) or die(mysqli_error($db));
	echo "hello2";
	
	$num = mysqli_num_rows($t);
	if($num == 0){
			return false;
	}
	else {
			return true;
	}

}

function display ($ucid, $account, $box, $number, $db) {
	
	if (isset($box)) {
		$s = "select * from transactions where ucid='$ucid'";
	}
	if (!isset($box)){
		$s = "select * from transactions where ucid='$ucid' and account='$account'";
	}
	
	echo "SQL statement is: $s<br>";
	
	($t = mysqli_query ($db, $s)) or die(mysqli_error());
	$num = mysqli_num_rows($t);
	echo "number of rows: $num<br>";


//iterating through each row of fetched table
	while ($row = mysqli_fetch_array($t, MYSQLI_ASSOC)) {
        $account = $row["account"];
		$amount = $row["amount"];
	
		echo "<br>account is: $account";
		echo "<br>amount is: $amount";
		echo "<br>";
	};
	
	
}



?>