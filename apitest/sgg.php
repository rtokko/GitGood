<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<body>

<style>
.w3-bar-block .w3-bar-item {padding:20px}
body {
  background: #D3D3D3;
}

ul {
  background: #D3D3D3;
  padding: 20px;
  list-style: none;
  color: white;
}
ul li {
  background: #D63232;
  padding: 10px;
  margin: 5px;
  border: 2px dashed black;
}
</style>

<button onclick="goBack()">Back to Home</button>
<script>
function goBack() {
  window.history.back();
}
</script>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-center w3-padding-16" style="background-color: #FF0000;"><font style="color: white;" size="6">Upcoming Tournaments</font></div>
  </div>
</div>
<br><br><br>
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
