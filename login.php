#!/usr/bin/php
<?php
session_start();
require_once('/home/pankil/git/rabbitmqphp_example/path.inc');
require_once('/home/pankil/git/rabbitmqphp_example/get_host_info.inc');
require_once('/home/pankil/git/rabbitmqphp_example/rabbitMQLib.inc');

$client = new rabbitMQClient("/home/pankil/git/rabbitmqphp_example/testRabbitMQ.ini","testServer");

if (isset($argv[1])) { $msg = $argv[1]; }
else { $msg = "You are on login page"; }

$request = array();

if($request['type'] = "login")
{
   $request['username']  = $_GET['username'];
   $username = $_GET['username'];
   $request['password']  = $_GET['password'];
   $request['message']   = $msg;
   $date = date('Y-m-d H:i:s');

   $response = $client->send_request($request);
   print_r($response);

   if ($response == 0 ) 
   { 
     $txt = "Login failed: (Username - $username) || Date $date";
     $myfile= file_put_contents ('logTrack.txt',$txt.PHP_EOL,FILE_APPEND | LOCK_EX);
     echo "Login failed"; 
     header("location:error_login.php"); 
     exit();
    }
   else { 
        $txt = "Login Successful: (Username - $username ) || Date $date";
    	$myfile= file_put_contents ('logTrack.txt',$txt.PHP_EOL,FILE_APPEND | LOCK_EX);
        
        $_SESSION['userLogin'] = true; 
	$_SESSION['display'] = true;
        $_SESSION['logged'] = true;
	$_SESSION['username'] = $username;
	header("location:success.php"); 
        echo "Login succesful.";
        }
}

?>
