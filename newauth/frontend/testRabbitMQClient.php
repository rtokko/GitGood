#!/usr/bin/php
<?php
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');

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
/*
$request = array();
$request['type'] = "Login";
$request['username'] = "steve";
$request['password'] = "password";
$request['message'] = $msg;
$response = $client->send_request($request);
//$response = $client->publish($request);

echo "client received response: ".PHP_EOL;
print_r($response);
echo "\n\n";
echo $argv[0]." END".PHP_EOL;
*/

//login session
if(isset($_SESSION["index_btn"])) {

	$request = array();
	$request['type'] = "login";
	$request['username'] = $_POST['username'];
	$request['password'] = $_POST['password'];

	$request['message'] = $msg;
	$response = $client->send_request($request); //response received from rmq server

	echo "client received response: ".PHP_EOL;

	//check to see if theres a response from rmq server
	if($response == 1) {

		//send to main web page???
	}
	else{

		echo("response failure");
		//then send back to login maybe??
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
        }
	
}


?>
