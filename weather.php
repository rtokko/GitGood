
<?php
$zip = $_GET['zip'];
$url = "http://api.openweathermap.org/data/2.5/weather?zip=".$zip.",us&units=metric&appid=0c19b7d538b572caaacb309c04a2450b";

$fp = fopen ( $url , "r" ); 
$contents = "";
while ( $more = fread ( $fp, 1000  ) ) {   $contents .=  $more ;  }
echo $contents ; 
?>