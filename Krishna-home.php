<!doctype html>
<html lang="en">
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


.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}


</style>

</head>
<body>  

<nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: #82cbff;">
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
          <img src="img/Logo.JPG" alt="Logo" style="width:170px;">
        </a>
     </div>
     </div>
     </div>
     </div>
 
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
          <a class="btn" href="login.html">Sign In</a>
      </li>
    
      <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
      </li>
      
      <li class="nav-item submenu dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tools</a>
              <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="charts.php" style="color: black">Currency Charts</a></li>
                  <li class="nav-item"><a class="nav-link" href="historical.php" style="color:black">Historical Currency Rates</a></li>
              </ul>
      </li> 
      
      <li class="nav-item">
          <a class="nav-link" href="portfolio.php">Portfolio</a>
      </li>
      
      <li class="nav-item">
          <a class="nav-link" href="account.php">Account</a>
      </li>
      
       <li class="nav-item">
          <a class="nav-link" href="team.php">About Us</a>
      </li>
      
     </ul>
  </nav>
  
  

<div class="bg">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="img/moneyhome.gif" alt="First slide" width="1700" height="800">
        </div>
    </div>
    <div class="carousel-caption">
       <h1>HotCoin</h1>
    </div>
</div>
</div>
  
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
              <h2 class="display-4">Introduction</h2>
              <p>HotCoin is ....Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Neque sodales ut etiam sit amet nisl purus. Vitae proin sagittis nisl rhoncus mattis. Vitae suscipit tellus mauris a diam maecenas sed. Justo nec ultrices dui sapien eget mi. Nam at lectus urna duis convallis convallis tellus id. Non quam lacus suspendisse faucibus interdum posuere. Malesuada fames ac turpis egestas sed tempus urna.</p>
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
              <h2 class="display-4">Graphs</h2>
              <p>Our graphs show ..... Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
            </div>
          </div>
        </div>
      </div>
    </section>



<footer>
        <p> &copy; 2019 <a style="color:#0a93a6; text-decoration:none;" href="home.php"> Divyesh Patel, Gialani To, Mayur Dudhat, Bansari Jetani </a>| Privacy Policy | Terms of Use </p>
    </footer>
    
     

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>






















