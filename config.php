<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 10.0.0.4);
define('DB_USERID, 'userid');
define('DB_USERNAME', 'username');
define('DB_PASSWORD', 'password');
define('DB_EMAIL' 'email');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERID, DB_USERNAME, DB_PASSWORD, DB_EMAIL);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>