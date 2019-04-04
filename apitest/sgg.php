<!DOCTYPE html>
<html>

<body>

<h1>Upcoming Tournaments</h1>
<style>
ul {
  background: #D63232;
  padding: 10px;
  list-style: none
}
ul li {
  background: #cce5ff;
  margin: 5px;
}
</style>
<?php
session_start();
//making sure sessions are set to make rmqclient run as intended
unset($_SESSION["index"]);
unset($_SESSION["registration"]);
$_SESSION["api"] = true;
include('testRabbitMQClient.php');

shell_exec('./sgg.sh');
//print "$text";
$text = file_get_contents("output.txt");
$groups        = explode("}", $text);

echo "<ul>";
foreach ($groups as $group) {
	$group = substr($group, 2);
	echo "<li>";

	echo $group;
	echo "</li><br>";
}
echo"</ul>";
?>


</body>
</html>
