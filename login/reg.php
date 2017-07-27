<?php 
require 'db.php';
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

if(isset($_POST['submit'])){
	$fname = $_POST['first_name'];
	$mname = $_POST['middle_name'];
	$lname = $_POST['last_name'];
	$dob = $_POST['dob'];
	$pass = $_POST['password'];
	$district = $_POST['district'];
	$jandhan = $_POST['jandhan'];
	$acres = $_POST['acres'];
	$aadhar = $_POST['aadhar'];
	$pincode = $_POST['pincode'];
	$ph = $_POST['ph'];
	$state = $_POST['state'];
	$contact = $_POST['contact'];
	$confirm_code = rand();

	$sql = "INSERT INTO farmers (f_name,m_name,l_name,dob,contact,state,pincode,district,aadhar,password,jandhan,acres,ph,confirm_code) VALUES ('$fname' , '$mname' , '$lname' , '$dob' , '$contact' , '$state' , '$pincode' , '$district','$aadhar' , '$pass' , '$jandhan' , '$acres' , '$ph' , 'confirm_code')";
	$query = mysqli_query($conn , $sql);
	if ($query) {
		echo "<script>alert('Sucessfully registered')</script>";
		header('Location: http://localhost:8888/codeLocked/php/index.php');
		/*echo 'Thank you for registration please confirm activation of account through email';

		$message = 'Confirm your email, Click the link below to verify your account https://practise23.000webhostapp.com/confirm.php?username='.$username.'&code='.$confirm_code;

		mail($email , "Account Confirmation" , $message , "From: DoNotReply@domain.com"); //parameters(to, subject of email , message , from)*/

		
	}
	else{
		echo "<script>alert('Error Registering')</script>";

	}



}




?>
