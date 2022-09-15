<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hotel Reservation | Hotel  LA' PERLA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" >
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></script>
  
  
<style>
  body{
      background-color:	#004953;
      color:white;
  }

h1{
  font-family:"Times New Roman", Times, serif;
}
h2{
  font-family:"Times New Roman", Times, serif;
  font-size:50px;
  color:white;
}
h3{
  font-family:"Times New Roman", Times, serif;
}
  .bg-1{
      background-color:white;
      color:black;
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


select {
  background-color:transparent;
  border-color:transparent;
}
section {
  padding: 30px 10px;
  border: 1px solid #4CAF50;
  background-color: #003366;
  width: 1100px;

}
form{
  background-color: transparent;
}

.p1{
  
  font-style: italic;
  color: #003366;
  font-size:18px;
  text-align:center;
  letter-spacing:1px;
}
footer{
    color:white;
    text-align:center;
}

</style>
</head>

<body>

<div>
              <nav class="navbar navbar-default navbar-fixed-top">
                   <div class="navbar-header"> <span style="font-size:25px; cursor:pointer" onclick="openNav()"> &#9776; </span>   
                                   <div id="myNav" class="overlay">  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        
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
                                              <ul class="nav navbar-nav navbar-right"> <a  class="navbar-brand" >   &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                               HOTEL RESERVATION | HOTEL LA' PERLA &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </a> <br>
      
                                                    <li><a href="home.php"> &nbsp; &nbsp; &nbsp; &nbsp;BOOK MY STAY &nbsp;|</a></li>
                                                    <li><a href="gallery.php">GALLERY &nbsp;|</a></li>
                                                    <li><a href="offers.php">OFFERS &nbsp;|</a></li>
                                                    <li><a href="meeting&event.php">MEETING & EVENTS &nbsp;|</a></li>
                                                    <li><a href="wedding.php">WEDDING &nbsp;|</a></li>
                                                    <li><a href="bar&restaurant.php">   BARS & RESTAURANT &nbsp;|</a></li>
                                                    <li><a href="contact.php">CONTACTS &nbsp;</a></li><br>
                                                  <ul class="nav navbar-nav navbar-right">
                                                    
                                                    <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> LOG OUT</a></li>
                                                   
                                                 </ul>
                                                 </ul>
                                          </div>
                                       </div>
                     </div>     
                </nav>

</div>
<br><br><br><br><br><br><br><br><br>

            

<div class="container"><br><br><br><br>
  <h2 class="text-center">LA' PERLA HOTEL</h2> <br><br>

 
<?php
include 'profile.php';
?>
<br> <br><br><br><br>
  <div class="container-fluid" >
               <div class="row"  style="background-color: transparent;">

                     <form method="post" action="check_availability.php" onsubmit="return validate();" >	
                   
                        <div class="col-sm-3"> <br>CHECK IN  <br><br> 
                              <input type="date" id="checkin" name="checkin" class= "form-control">
                        </div>
    
                         <div class="col-sm-3"> <br>CHECK OUT  <br> <br>
                              <input type="date" id="checkout" name="checkout" class= "form-control">
                         </div>
                           
                         <div class="col-sm-2"> <br>ADULTS   <br><br> 
                                <input type="number" id="adults" name="adults" value="1" class= "form-control">                                      
                          </div>

                         <div class="col-sm-2"><br>CHILDREN <br><br>
                                <input type="number" id="children" name="children" value="1" class= "form-control">   
                          </div><br>
                      <div class="col-md-2"><br> <br>
                          <button type="submit" value="submit" class= "form-control"> CHECK  </button>
                          <br><br><br> 
                      </div>
                     </form>   

                 </div>
             </div>






























      </div>
  </div>

<footer>    
    <br><br>                                                                                                                    
  The Hotel La' PERLA  &copy; 2020-<?php echo date("Y") ?> | <a href="contact.php">CONTACT US &nbsp; </a>|
  <a href="#"> ABOUT US &nbsp; </a>| <a href="#"> PRIVACY POLICY&nbsp; </a>
  |12 place , Ratnapura, Sri Lanka.

<br>
<br>
<!--
?php include 'footer.php';? -->
</footer>

<br>
<br>
<br>
</body>
</html>