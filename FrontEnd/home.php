<?php 
//This is the latest version

	session_start();

	$db = mysqli_connect("10.0.0.5", "admin", "12345", "gitgood");

if (mysqli_connect_errno()) {
	$hostname = "10.0.0.6" ;
	$db_username = "admin" ; //replace with your personal db name
	$db_project = "gitgood" ; //Name of DB
	$db_password = "12345" ; //replace with your db password 
	
	$db = mysqli_connect($hostname, $db_username, $db_password, $db_project);


	if(mysqli_connect_errno()){
	        echo "Failed to connect to MySQL:" . mysqli_connect_error();
	        exit();
		}

        }


	$username = $_SESSION["uname"];

	//changed table game to test
	$sql = " SELECT email FROM games WHERE username = '$username' " ;

	$result = mysqli_query($db, $sql) or die(mysqli_error($db));

	$numRows = mysqli_num_rows($result);

    if ($numRows == 1) {

       while($row = mysqli_fetch_array($result, MYSQLI_ASSOC) ){
           $email = $row['email'];
           $_SESSION['email'] = $email;
	   }
}

?>

<!DOCTYPE html>

<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<link href="css/slicknav.css" rel="stylesheet">

<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>



<style>

  

  /* Full height */

  height: 100%; 

  

  /* Center and scale the image nicely */

  background-position: fixed;

  background-repeat: no-repeat;

  background-size: 50% 100%;

}



*{

    margin: 0; 

    padding: 0;

    font-family: verdana;  

}



body, html {

  height: 100%;

  margin: 0;

  background-color: #d3d3d3;

  font-family: Arial, Helvetica, sans-serif;

}



* {

  box-sizing: border-box;

}

<!--

.bg-image {

  /* The image used */

  background-image: url("bjp.JPG");



  

  /* Full height */

  height: 100%; 

  

  /* Center and scale the image nicely */

  background-position: center;

  background-repeat: no-repeat;

  background-size: cover;

}  -->



/* Position text in the middle of the page/image */
.bg-text {

  background-color: rgb(0,0,0); /* Fallback color */

  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */

  color: white;

  font-weight: bold;

  border: 3px solid #f1f1f1;

  position: absolute;

  top: 50%;

  left: 50%;

  transform: translate(-50%, -50%);

  z-index: 2;

  width: 80%;

  padding: 20px;

  text-align: center;

}


nav{

    width: 100%;

    height: 80px;

    background-color: lightblue;
}

a{
    color:black;
}

li{color: white;}


footer{

   background-color: #424558;

    position: fixed;

    bottom: 0;

    left: 0;

    right: 0;

    height: 35px;

    text-align: center;

    color: #CCC;

}



footer p {

    padding: 10.5px;

    margin: 0px;

    line-height: 100%;

}


img { length: 90%;
     width: 90%; }


  .image1

	{

		position: relative;

		top: 0;

		left: 0;

	}

	.image2

	{

		position: absolute;

		top: 60px;

		left: 80px;

	}


</style>

</head>
	

			<!--<head>
	<meta charset="utf-8" />
	<title>User Profile</title>
	<link href="css/home.css" rel="stylesheet" type="text/css" >
	
</head>-->
			
				<!-- <form name="form" method="post" action = "logout.php">

					<a href = "upcomingEvents.php">
					<input name = "events" type = "button" id = "events" value = "Calendar"> </a>

          <a href = "phpBB3">
					<input name = "board" type = "button" id = "board" value = "Message Board"> </a>

          <a href = "sgg.php">
					<input name = "api" type = "button" id = "api" value = "Upcoming Tournaments"> </a>

<a href = "showcase.html">
<input name = "Player Showcase" type = "button" id = "twitch" value = "Player Showcase"> </a>


					<input name="submit2" type="submit" id="submit2" value="logout">


				</form> -->

<!----------------------------------------------------------------------------->




<body>  

 <div><h4> <?php echo "Welcome, ".$_SESSION['uname'];  ?> </h4></div>


<nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: #ff0000;">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>

    </button>



    <div class="collapse navbar-collapse" id="navbarsExampleDefault">

        <ul class="navbar-nav mr-auto">

            <li class="nav-item">

     <div class="container-fluid">

     <div class="row">

     <div class="navbar-header">

        <a class="navbar-brand" href="#">

          <h1>GitGood</h1>

        </a>

     </div>

     </div>

     </div>

     </div>

 

    <ul class="navbar-nav ml-auto">

    <li class="nav-item">
            

      <li class="nav-item">

      <a class="nav-link" href="home.php" > <font style="color:white;"> Home</font> </a>

      </li>

<li class="nav-item">

      <a class="nav-link" href="upcomingEvents.php" > <font style="color:white;"> Calendar</font> </a>

      </li>    

      <li class="nav-item">

          <a class="nav-link" href="showcase.html"> <font style="color:white;">Players Showcase </font></a>

      </li>
      
      <li class="nav-item">

          <a class="nav-link" href="phpBB3"><font style="color:white;">Message Board</font></a>

      </li>
      
      <li class="nav-item">

          <a class="nav-link" href="sgg.php" ><font style="color:white;">Upcoming Events</font></a>

      </li>

      <li class="nav-item">

            <a class="nav-link" href="logout.php"><font style="color:white;">Logout</font></a>
  
        </li> 
        
     </ul>

  </nav>


</div>

<br><br><br><br><br>

<h1 align="center">Introduction</h1>

<p align="center"> Welcome to GitGood central! 
    The centre for gamers of all walks of life. Daily tournaments and
    host main events with Esports entities. 24/7 support Monday through Sunday.
    </p>

    <br>
    <section>

            <div class="container">
      
              <div class="row align-items-center">
      
                <div class="col-lg-6 order-lg-2">
      
                  <div class="p-5">
      
                    <img class="img-fluid rounded-circle" src="img/coinhome.gif" alt="">
      
                  </div>
      
                </div>
      
                <div class="col-lg-6 order-lg-1">
      
                  <div class="p-5">

                        <img src="https://img.icons8.com/color/420/google-calendar.png" alt="">
      
                        <a href="upcomingEvents.php"> <h3 class="display-4">Calendar</h3></a>
      
                        <p>
                            Find tournaments you booked or a friend is in through this link. 
                            You can find all the information from when it will start to where it
                            will be held and the sponsors for those events.
                        </p>
      
      
                  </div>
      
                </div>
      
              </div>
      
            </div>
      
          </section>
      

    <section>

      <div class="container">

        <div class="row align-items-center">

          <div class="col-lg-6">

            <div class="p-5">

              <img class="img-fluid rounded-circle" src="img/graphhome.gif" alt="">


            </div>

          </div>

          <div class="col-lg-6">

            <div class="p-5">
            

            </div>

            <div class="p-5">

                    <img src="https://www.accounting.uci.edu/img/open-forum-icon.png" alt="">

                    <a href="phpBB3"> <h3 class="display-4">GitGood Message Board</h3></a> 
      
                    <p>
                        Use our interactive message board to message your gamer friends. Set up private
                        tournaments with others. Our team of elite engineers will be available 27/7 to
                        give you the support you need. Git your game on!
                    </p>         
      
                  </div>

                  

          </div>

        </div>

      </div>

    </section>

    <section>

            <div class="container">
      
              <div class="row align-items-center">
      
                <div class="col-lg-6 order-lg-2">
      
                  <div class="p-5">
      
      
                  </div>
      
                </div>
      
                <div class="col-lg-6 order-lg-1">
      
                  <div class="p-5">

                        <img src="https://y4j7y8s9.ssl.hwcdn.net/wp-content/uploads/2017/03/stadium.jpg" alt="">
                        <a href="sgg.php"> <h3 class="display-4">Upcoming Events</h3></a> 
      
                        <p>
                            Find tournaments world wide from online to esports sponsored events. 
                            You can find all the information from when it will start to where it
                            will be held and the sponsors for those events. Book your next match young jedi!
                        </p>
      
      
                  </div>
      
                </div>
      
              </div>
      
            </div>
      
          </section>

          <section>

                <div class="container">
          
                  <div class="row align-items-center">
          
                    <div class="col-lg-6">
          
                      <div class="p-5">
          
                        <img class="img-fluid rounded-circle" src="img/graphhome.gif" alt="">
          
          
                      </div>
          
                    </div>
          
                    <div class="col-lg-6">
          
                      <div class="p-5">
                      
          
                      </div>
          
                      <div class="p-5">
          
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRf4UZuDbSUJF7f-m4j7jQEa6XnyVGN8mrrgELVZd4T55GC1nIeNQ" alt="">
                            <a href="showcase.html"> <h3 class="display-4">Player Showcase</h3></a> 
      
                            <p>
                                Find tournaments world wide from online to esports sponsored events. 
                                You can find all the information from when it will start to where it
                                will be held and the sponsors for those events. Book your next match young jedi!
                            </p>
                            
                
                            </div>
          
                    </div>
          
                  </div>
          
                </div>
          
              </section>
      




<footer>

        <p> &copy; 2019 <a style="color:red; text-decoration:none;" href="home.php"> Krishna Patel, Christy Varkery, Brian Orozco, Rami Tokko  </a>| Privacy Policy | Terms of Use </p>

    </footer>

    

     



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


	</body>

</html>
