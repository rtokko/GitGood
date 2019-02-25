<?php
include("account.php");
$db = mysqli_connect($hostname, $username, $password, $project);
if (mysqli_connect_errno())
  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  exit();
  }
mysqli_select_db($db,$project ); 
?>

<!DOCTYPE html>
<meta charset = "utf-8"/>
<h2><center> Weather Information </center></h2>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script type = "text/javascript" > 
 $(document).ready( function(){
   $("button").click(function(){ 
   	 var zip = $("#zip").val();
	  var country = $("#country").val();
	  
	  if (zip == '')
	  {
	  	alert ("Choose zipcode");
	  }
	  
	  if(zip != ''){
		 $.ajax({
             type: 		"GET",
             url: 		"weather.php",
			 data: 		"zip="+zip,
						 
 		     beforeSend: function(){ 		
 						$("#B").html("Please Wait.....");                },
						
			 error: function(xhr, status, error) {  
							  alert( "Error Mesaage:  \r\nNumeric code is: "  + xhr.status + " \r\nError is " + error);   },
			 
			 success: function(result){
				r = JSON.parse(result);
				var myDate = new Date( r.sys.sunrise *1000 );
				var readable = (myDate.toUTCString()+" "+myDate.toLocaleString());

				res =  "<br>Country: "	                     + r.sys.country            + " "			         +	
					   "<br>City: "			                 + r.name                   + " "				     +	
					   "<br>Coordinate: "                    + r.coord.lat              + ", " + r.coord.lon+" " +
					   "<br>Temperature: " 	                 + r.main.temp              + "&deg;C "		         +	
					   "<br>Temperature in Fahrenheit: "     + (r.main.temp * 1.8 + 32) + "&deg;F "		         +	
				       "<br>Weather: " 		                 + r.weather[0].main        + " "		             +	
					   "<br>Description: " 	                 + r.weather[0].description + " "                    +	
					   "<br>Humidity: " 	                 + r.main.humidity          + " %"		             +	
					   "<br>Wind speed: " 	                 + r.wind.speed             + "m/s" + " "	         +	
					   "<br>Sunrise/epoch: "                 + r.sys.sunrise            + " "			         +
					   "<br>Sunrise/epoch human readable: "  + readable                 + " "                    +
					   "<br>";
				 $("#B").html(res); 
			}	
		});	   
     };
   });			
});				
</script>
<body>
<center>
<?php include ("menu.php") ; ?>
<button id = "btn" type = "BUTTON"><b>REQUEST WEATHER</b></button>
<div id= "B"></div>
</center>
</body>
</html>