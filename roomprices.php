<?php

include 'connection.php';

$sql = "INSERT INTO roomprices (roomid, bedtype, price) VALUES  ('$_POST[roomid]', '$_POST[bedtype]', '$_POST[price]')";

if (!mysqli_query($con,$sql)){
    die('Error: ' . mysqli_error($con)); // die=>simple prints "Error"
}
header("Location:home.php");
mysqli_close($con);

?> 