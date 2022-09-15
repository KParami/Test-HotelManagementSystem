<?php  
//include the connection
include "connection.php";


// gonna insert the data to the table
	
 
	
	$bk = " INSERT INTO  booking (FirstName, LastName, Email, CheckIn,  CheckOut, Adults, Children,MobileNo,Nationality, Country,Gender, Bedtype)
	 VALUES ('$_POST[fname]', '$_POST[lname]','$_POST[email]','$_POST[checkin]' , 
	 '$_POST[checkout]','$_POST[adults]','$_POST[children]','$_POST[phone]' , '$_POST[nationality]', '$_POST[country]','$_POST[gender]','$_POST[bedtype]' )";


if(!mysqli_query($con,$bk)){
		
			//inbuilt function in php to print an error statement
			die('Error: ' . mysqli_error($con));
			
	}else{
		header("Location:home.php");
		exit;

	}



?>