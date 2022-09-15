<!DOCTYPE html>
<html lang="en">
<head>

  <title>Hotel Reservation | La' PERLA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
<style>
  body{
      background-color:white;
      color:black;
  }

  
  h1{
    font-family:"Times New Roman", Times, serif;
  }
  h2{
    font-family:"Times New Roman", Times, serif;
  }
  h3{
    font-family:"Times New Roman", Times, serif;
  }
  .container {
    padding: 80px 50px;
  }
  
  .carousel-inner img {
    width: 100%; /* Set width to 100% */
    margin: auto;
   
  }
  .carousel-caption h3 {
    color: blue !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  
  .btn {
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
 
  .navbar {
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
  }
  .navbar-brand{
      font-size: 30px;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #29292c !important;
  }

.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
  
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}
.navbar-header {
    color:#f1f1f1;
}

a:link {
  color: white;
  background-color: transparent;
  text-decoration: none;
}
a:visited {
  color: white;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color: white;
  background-color: transparent;

}
a:active {
  color: white;
  background-color: transparent;
  text-decoration: underline;
}

* {
  box-sizing: border-box;
}

.bg-2{
  background: url(image/room/ex.jpg  );
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: scroll; 
  background-size:60%;
}

.bg-3{
  background: url(image/room/ex1.jpg  );
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: scroll; 
  background-size:60%;
}


.bg-4{
  background: url(image/room/luxury7.jpg  );
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: scroll; 
  background-size:60%;
}

/* Container around content */
.container {
  padding: 60px 50px;
  position: relative;
  background-color: inherit;
  width: 50%;
}


/* Place the container to the left */
.left {
  left: -60%;
}

/* Place the container to the right */
.right {
  left: 60%;
}


/* The actual content */
.content {
  padding: 20px 30px;
  background-color: white;
  position: relative;
  border-radius: 6px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
  /* Place the timelime to the left */
  .timeline::after {
  left: 31px;
  }
}

footer{
  color:white;
  background-color:black;
  text-align:center;
  padding:40px 30px;
}


  </style>
</head>
<body>

<div>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="navbar-header"> 
<span style="font-size:25px; cursor:pointer" onclick="openNav()"> &#9776; </span>   
        <div id="myNav" class="overlay">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        
         <div class="overlay-content">
         <a href="Rooms&Suits.php">ROOMS & SUITS</a>
         <a href="food&drink.php">FOOD & DRINK</a>
            <a href="activities.php">ACTIVITIES</a>
            <a href="plan&event.php">PLAN AN EVENT</a>
            <a href="exploreinterest.php">EXPLORE INTEREST</a>
            <a href="other.php">OTHER</a>            
     <script>
        function openNav() {
                             document.getElementById("myNav").style.width = "100%";
                           }

        function closeNav() {
                             document.getElementById("myNav").style.width = "0%";
                            }
    </script>
  </div>
    </div>
    <div class="container-fluid">
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right"> <a  class="navbar-brand" >      &nbsp;  &nbsp; &nbsp; &nbsp;   &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;
                                                               HOTEL RESERVATION | HOTEL LA' PERLA &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </a> <br>
      
                                                    <li><a href="home.php">     &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp;  &nbsp; &nbsp; &nbsp;   &nbsp;  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;BOOK MY STAY &nbsp;|</a></li>
                                                    <li><a href="gallery.php">GALLERY &nbsp;|</a></li>
                                                    <li><a href="offers.php">OFFERS &nbsp;|</a></li>
                                                    <li><a href="meeting&event.php">MEETING & EVENTS &nbsp;|</a></li>
                                                    <li><a href="wedding.php">WEDDING &nbsp;|</a></li>
                                                    <li><a href="bar&restaurant.php">   BARS & RESTAURANT &nbsp;|</a></li>
                                                    <li><a href="contact.php">CONTACTS &nbsp;|</a></li>
        <ul class="nav navbar-nav navbar-right">
      
        <li><a href="account.php"><span class="glyphicon glyphicon-user"></span> MY ACCOUNT</a></li>
    </ul>
      
</nav>

</div>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    
    <div class="carousel-inner" role="listbox">
      <div class="item active" >
        <img src="image/meeting/m1.jpg" alt="meeting and event" width="1200" height="300">
        <div class="carousel-caption">
          <h3></h3>
          <p> some text</p>
        </div>      
      </div>

      <div class="item">
        <img src="image/meeting/m2.jpg" alt="meeting and event" width="1200" height="300">
        <div class="carousel-caption">
          <h3></h3>
          <p>some text</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="image/meeting/m6.jpg" alt="meeting and event" width="1200" height="300">
        <div class="carousel-caption">
          <h3></h3>
          <p>some text</p>
        </div>      
      </div>

      <div class="item">
        <img src="image/meeting/m.jpg" alt="meeting and event" width="1200" height="300">
        <div class="carousel-caption">
          <h3></h3>
          <p>some text</p>
        </div>      
      </div>
    
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>


<br><br><br><br>
  <h1 class="text-center">LA' PERLA HOTEL</h1>
  <p class="text-center"><em> “Cada idioma es un modo distinto de ver la vida” by Federico Fellini Translation: Every language is a different way to see the world. </em></p>
<br><br><br><br><br>
<h1 class="text-center">WELCOME TO HOTEL LA PERLA | MEETING & EVENT </h1>


</div>
</div>
</div>







<br><br><br><br><br><br><br><br><br><br>

<footer> 
    <p>  <span class="glyphicon glyphicon-earphone"></span> 011-2233445</p> <br><p>  <span class="glyphicon glyphicon-envelope"></span> laperla@gmail.com</p>
  The Hotel La' PERLA  &copy; 2020-<?php echo date("Y") ?> | <a href="#">CONTACT US &nbsp; </a>|
  <a href="#"> ABOUT US &nbsp; </a>| <a href="#"> PRIVACY POLICY&nbsp; </a>
  |12 place , Ratnapura, Sri Lanka.

</footer>
</body>
</html>