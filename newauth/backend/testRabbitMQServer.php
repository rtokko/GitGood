#!/usr/bin/php
<?php
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');

function doLogin($username,$password)
{
	include('account.php'); //mysql credentials
    // lookup username in databas
    // check password
    //return true;
    //return false if not valid

	//code modded from our login.php file
	//if (isset($_POST['index']) 
		//$username = $_POST['username'];
		//$password = $_POST['password'];
		//$password = md5($password); // remember we hashed password before storing last time
		$sql = "SELECT * FROM test WHERE username='$username' AND password='$password'";
		$result = mysqli_query($db, $sql);
		if (mysqli_num_rows($result) == 1) {
			//$_SESSION['message'] = "You are now logged in";
			//$_SESSION['username'] = $username;
			echo "You are now logged in";
			return true;
			//header("location: home.php"); //redirect to home page
		}else{
			//$_SESSION['message'] = "Username/password combination incorrect";
			echo "Username/password combination incorrect";
			return false;
		}
	//}

    
}


function doRegistration($username, $email, $password) {

	include('account.php');
	//code modded from our register.php file
	//if (isset($_POST['registration'])) 
		//$username = $_POST['username'];
		//$email = $_POST['email'];
		//$password = $_POST['password'];
		//$password2 = $_POST['password2'];
		$sql = "INSERT INTO test(username, email, password) VALUES('$username', '$email', '$password')";
		($t = mysqli_query($db, $sql)) or die(mysqli_error($db)); //changed this line in order to error check		
		if ($t == true) {
			// create user
			//$password = md5($password); //hash password before storing for security purposes
			//$_SESSION['message'] = "You are now logged in";
			//$_SESSION['username'] = $username;
			//header("location: home.php"); //redirect to home page
			echo "Registration Successful";
			return true;
		}else{
			//$_SESSION['message'] = "The two passwords do not match";
			echo "Invalid Registration";
			return false;
		}
	//}






}


function requestProcessor($request) 
{
  echo "received request".PHP_EOL;
  var_dump($request); 
  if(!isset($request['type']))
  {
    return "ERROR: unsupported message type";
  }
  switch ($request['type'])
  {
    case "login":
      return doLogin($request['username'],$request['password']);
    case "validate_session":
      return doValidate($request['sessionId']);
    //new code in switch statement
    case "registration":
      return doRegistration($request['username'], $request['email'], $request['password']);
  }
  return array("returnCode" => '0', 'message'=>"Server received request and processed");
}

$server = new rabbitMQServer("testRabbitMQ.ini","testServer");

echo "testRabbitMQServer BEGIN".PHP_EOL;
$server->process_requests('requestProcessor');
echo "testRabbitMQServer END".PHP_EOL;
exit();
?>
