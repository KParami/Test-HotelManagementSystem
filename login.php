<!--?php include('log.php') ?-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel La PERLA | LOG IN  </title>
    <link rel="stylesheet" type="text/css" 
    href="style.css">
    


</head>



<span class="close"> <a href="index.php">&times;</span> </a>
<body>
                <div class="container">
                         <div class="login-box">
                             <div class="row">
                                    <h2> Hotel &nbsp; La &nbsp; PERLA &nbsp;| &nbsp;LOG IN    </h2> 
       
                                         <form  method="POST" action="loginusers.php" onsubmit="return validate()";> 	
                                                  <label>
                                                         <input type="email" name="email" id="email" required />
                                                         <div class="label-text">Email</div>
                                                  </label>
                                                  <label>
                                                         <input type="password" name="password" id="password" required />
                                                         <div class="label-text">Password</div>
                                                  </label>     <br><br><br>
                                                                                                                                                                                                              &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                         <button type="submit" name="login" value="Submit">LOG IN</button>

                                                <form>  <button type="submit"  name="signup"> <a href="register.php" > SIGN UP </button> </a> </form>

                                         </form>





                             </div>
                     </div>
             </div>
     </div>









</body>
</html>




