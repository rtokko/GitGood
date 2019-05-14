<?php
$di = new RecursiveDirectoryIterator(__DIR__,RecursiveDirectoryIterator::SKIP_DOTS);//iterates recursively over filesystem directories
$it = new RecursiveIteratorIterator($di);//iterate through recursive iterators
foreach($it as $file_name) {
    if (pathinfo($file_name, PATHINFO_EXTENSION) == "php") {
	echo $file_name, PHP_EOL;
	exec("$file_name", $output);//print last line of output
	
	$error = shell_exec("php -l $file_name");//returns output stream as string
	error_log("$error", 3,"error.log");//writes error message to error.log
    }
}
?>
