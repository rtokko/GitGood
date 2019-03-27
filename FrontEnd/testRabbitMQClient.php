#!/usr/bin/php

<?php
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');

session_start();

$client = new rabbitMQClient("testRabbitMQ.ini","testServer");
if (isset($argv[1]))
{
  $msg = $argv[1];
}
else
{
  $msg = "test message";
}

//This is DJ's OG code which roughly models one of the arrays that must be sent to the rmq server

//login session
if(isset($_SESSION["index"])) {//_btn

	$request = array();
	$request['type'] = "login";
	$request['username'] = $_POST['username'];
	$request['password'] = $_POST['password'];

		$_SESSION["uname"] = $_POST['username']; 
		//$uname = $_POST['username'];

	$request['message'] = $msg;
	$response = $client->send_request($request); //response received from rmq server

	echo "client received response: ".PHP_EOL;

			// create user
//$password = md5($password); //hash password before storing for security purposes
			 

	//check to see if theres a response from rmq server
	if($response == 1) {

		//send to main web page???
		print "</p>Login Successful</p>";
		header("Location: home.php");
		


	}
	else{

		print "<p>response failure</p>";
		//then send back to login maybe??
		header("Location: index.php");
	}

}

if(isset($_SESSION["registration"])){

	$request = array();
	$request['type'] = "registration";
	$request['username'] = $_POST['username'];
	$request['email'] = $_POST['email'];
	$request['password'] = $_POST['password'];

	$request['message'] = $msg;
	$response = $client->send_request($request);

	if ($response ==1){
		//then send back to registration???
		header("Location: register.php");
        } 
	header("Location:register.php");
	
}


?>
