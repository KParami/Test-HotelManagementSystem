<!DOCTYPE html>
<html lang="en">
<head>

  <title>Hotel Reservation | LA' PERLA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
<style>
  body{
     background-color:white;
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
      text-align: center;
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

.columns {
  float: left;
  width: 33.3%;
  padding: 8px;
}

.price {
  list-style-type: none;
  border: 1px solid #eee;
  margin: 0;
  padding: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

.price:hover {
  box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

.price .header {
  background-color: #111;
  color: white;
  font-size: 25px;
}

.price li {
  border-bottom: 1px solid #eee;
  padding: 20px;
  text-align: center;
}

.price .grey {
  background-color: #eee;
  font-size: 20px;
  color:black;
}

@media only screen and (max-width: 600px) {
  .columns {
    width: 100%;
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
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> SIGN UP &nbsp;|</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> LOGIN</a></li>
    </ul>
      
</nav>

</div>

<br><br><br><br><br><br><br><br><br>
<div class="container">
  <h1 class="text-center"> HOTEL LA PERLA </h1>
  <p class="text-center"><em> “Cada idioma es un modo distinto de ver la vida” by Federico Fellini Translation: Every language is a different way to see the world. </em></p>
<br> <br><br>
 <h2 class="text-center"> EXCLUSIVE OFFERS</h2>
 <p class="text-center"><em>Whether you’re looking for a unique experience, gourmet feast, spa indulgence or family stay, our special offers have something to suit all tastes and occasions.Book your stay directly with us, online or over the phone on any rate, and also enjoy the following complimentary inclusions:</em> <br></em></p> <br><br>

<br><br><br><br><br><br>

                        <div class="columns">
                          <ul class="price">
                            <li class="header"><a href="#">FAMILY PACKAGE</li>
                            <li class="grey">Special dayout and activity</li>
                          </ul>
                        </div>

                        <div class="columns">
                          <ul class="price">
                            <li class="header"><a href="#">WEDDING PACKAGE</li>
                            <li class="grey">Honeymoon and Hall offers</li>
                          </ul>
                        </div>

                        <div class="columns">
                          <ul class="price">
                            <li class="header"><a href="#">ACTIVITY OFFER</li>
                            <li class="grey">Archery &Some Activities Offer</li>
                          </ul>
                        </div>
                        <br><br>

                        <div class="columns">
                          <ul class="price">
                            <li class="header"><a href="#">EVENT OFFERS</li>
                            <li class="grey">Meeting & Conference</li>
                          </ul>
                        </div>

                        <div class="columns">
                          <ul class="price">
                            <li class="header" ><a href="#"> DAYOUT OFFERS</li>
                            <li class="grey">Including pool & dj party</li>
                        </div>

                        <div class="columns">
                          <ul class="price">
                            <li class="header"><a href="#">MEMBER OFFERS</li>
                            <li class="grey">GET 10% Discount</li>
                          </ul>
                        </div>
<br><br><br><br><br><br> <br>
  
               </div>
                        

<br>
<br>

<br><br><br><br>









<footer> 
    <p>  <span class="glyphicon glyphicon-earphone"></span> 011-2233445</p> <br><p>  <span class="glyphicon glyphicon-envelope"></span> laperla@gmail.com</p>
  The Hotel La' PERLA  &copy; 2020-<?php echo date("Y") ?> | <a href="#">CONTACT US &nbsp; </a>|
  <a href="#"> ABOUT US &nbsp; </a>| <a href="#"> PRIVACY POLICY&nbsp; </a>
  |12 place , Ratnapura, Sri Lanka.


</footer>
</body>
</html>