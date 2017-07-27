<?php

include ('connect.php');

$name=$_POST['name1'];
$email=$_POST['email1'];
$phone=$_POST['phone1'];
$message=$_POST['message1'];


$query="INSERT INTO contact (name,email,phone,message) VALUES ('$name','$email','$phone','$message')";
$run=mysqli_query($connect,$query);

if(!$run)
{ echo "<script>alert('Unsuccessfully');location.href='./index.php';</script>";}

else echo "<script>alert('Query Submitted successfully');location.href='index.php';</script>";

?>