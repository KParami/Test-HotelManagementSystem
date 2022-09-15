<!--?php include('server.php') ?-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel La' PERLA | My Account</title>
    <link rel="stylesheet" type="text/css" 
    href="bookingform.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>   
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>

<script>
$(function(){
	$.validator.setDefaults({
		highlight: function(element){
			$(element)
			.closest('.form-group')
			.addClass('has-error')
		},
		unhighlight: function(element){
			$(element)
			.closest('.form-group')
			.removeClass('has-error')
		}
	});
	
	$.validate({
		rules:
		{	
		    password: "required",
			birthDate: "required",
			weight: {
			    required:true,
			    number:true
			},
			height:  {
			    required:true,
			    number:true
			},
			email: {
				required: true,
				email: true
			}
		},
			messages:{			
				email: {
				required: true,
				email: true
			}
		},
				password: {
					required: " Please enter password"
				},
				birthDate: {
					required: " Please enter birthdate"
				},
				email: {
					required: ' Please enter email',
					email: ' Please enter valid email'
				},
				weight: {
					required: " Please enter your weight",
					number: " Only numbers allowed"
				},
				height: {
					required: " Please enter your height",
					number: " Only numbers allowed"
				},
			}
			
	});
});



</script>


<style>

h2 {
  
  color: white;
  text-transform: uppercase;
  text-align: center;
  font-family: 'Times New Roman', Times, serif;
}

</style>


</head>
<span class="close"> <a href="home.php">&times;</span> </a>

<body>

 <form  method="POST" action="booking.php" onsubmit="return validate();" >
 
 

<div><h2 >Hotel La PERLA | BOOKING  FORM</h2>
        <div class="container">
            <form class="form-horizontal" role="form">
                <h2></h2>
                <div class="form-group"> <br>
                    <label for="firstName" class="col-sm-3 control-label">  First Name</label>
                    <div class="col-sm-9"> 
                        <input type="text" id="fname" name="fname" placeholder="First Name" class="form-control" autofocus>
                    </div>
                </div> <br>
                <div class="form-group"> <br>
                    <label for="lastName" class="col-sm-3 control-label">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="lname" name="lname" placeholder="Last Name" class="form-control" autofocus>
                    </div>
                </div> <br>
                <div class="form-group"> <br>
                    <label for="email" class="col-sm-3 control-label">Email* </label>
                    <div class="col-sm-9">
                        <input type="email" id="email" placeholder="Email" class="form-control" name= "email">
                    </div>
                </div><br>

                <div class="form-group"> <br>
                    <label  class="col-sm-3 control-label">Check in </label>
                    <div class="col-sm-9">
                        <input type="date" id="checkin"  class="form-control" name= "checkin">
                    </div>
                </div><br>
                <div class="form-group"> <br>
                    <label  class="col-sm-3 control-label">Check out </label>
                    <div class="col-sm-9">
                        <input type="date" id="checkout"  class="form-control" name= "checkout">
                    </div>
                </div><br>
                <div class="form-group"> <br>
                    <label class="col-sm-3 control-label">Adult(S) </label>
                    <div class="col-sm-9">
                        <input type="number" id="adults"  class="form-control" name= "adults" value="1">
                    </div>
                </div><br>
                <div class="form-group"> <br>
                    <label class="col-sm-3 control-label">Child(REN) </label>
                    <div class="col-sm-9">
                        <input type="number" id="children"  class="form-control" name= "children" value="1">
                    </div>
                </div><br>

                <div class="form-group"><br>
                    <label for="phone" class="col-sm-3 control-label">Phone number </label>
                    <div class="col-sm-9">
                        <input type="number" id="phone" placeholder="Phone number" class="form-control" name="phone">
                
                    </div>
                </div><br>
                <div class="form-group"> <br>
                    <label for="nationality" class="col-sm-3 control-label">Nationality</label>
                    <div class="col-sm-9"> 
                        <input type="text" id="nationality" name="nationality" placeholder="Nationality" class="form-control">
                    </div> <br>

                <div class="form-group"><br> <br>
                    <label for="country" class="col-sm-3 control-label">Country </label>
                    <div class="col-sm-9">
                        <input type="text" id="country" placeholder="Country" class="form-control" name="country">
                    </div>
                </div><br>
               
                <div class="form-group"><br>
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="gender" name="gender" value="Female">Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="gender" name="gender" value="Male">Male
                                </label>
                            </div>
                        </div>
                    </div>
                </div>  <br>
                <div class="form-group"> <br>
                    <label for="bedtype" class="col-sm-3 control-label" >Bed Type </label>
                    <div class="col-sm-9">
                          <select type="text"  id="bedtype" class="form-control-lg"  name="bedtype" placeholder="First Name" >
                             <option> </option>
                             <option>SINGLE</option>
                             <option>KING OR QUEEN</option>
                             <option>DOUBLE</option>
                             <option>TWIN</option>
                             <option>DOUBLE-DOUBLE</option>
                             <option>QUAD</option>
                             <option>TRIPLE</option>
                             <option>STUDIO</option>
                            </select>
                        </div>
                    </div>

              
               <br><br>
                <button type="submit" value="submit" class="btn btn-default btn-block">BOOKING NOW</button>
            </form> <!-- /form -->
     </div> 

               
</div>       
              


</div>
           
<br><br><br><br>

</body>
</html>




