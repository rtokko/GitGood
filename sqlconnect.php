#!/usr/bin/php
<?php

$db = new mysqli('127.0.0.1','testuser','12345678','testdb');

if ($db->errno != 0)
{
	echo "failed to connect to database: ". $db->error . PHP_EOL;
	exit(0);
}

echo "successfully connected to database".PHP_EOL;

$query = "select * from testtable;";

$response = $db->query($query);
if ($db->errno != 0)
{
	echo "failed to execute query:".PHP_EOL;
	echo __FILE__.':'.__LINE__.":error: ".$db->error.PHP_EOL;
	exit(0);
}
?>
