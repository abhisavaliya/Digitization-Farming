<?php 
include 'reg.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link type="text/css" rel="stylesheet" href="mdl/material.css">
	<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<style>
		.f_registration div {
			padding-bottom: 20px;
		}

		h3 {
			text-align : center;
		}

		.f_registration div input {
			border-radius: 0px;
			max-width: 450px;
			margin: 0px auto;
		}
	</style>
</head>
<body class="jumbotron">
	<div class="container">
		<h3>Welcome to Registration</h3>
		<br>
 		<form method="POST" class="f_registration">
			<div>
				<input type="text" name="first_name" class="form-control" placeholder="Enter your first name"  id="fname" >
				<!-- first name --> 
			</div>
			<div>
				<input type="text" name="middle_name" class="form-control" placeholder="Enter your middle name"  id="mname" >
				<!-- middle name --> 
			</div>
			<div>	
				<input type="text" name="last_name" class="form-control"placeholder="Enter your last name"  id="lname" >
				<!-- last name -->
			</div>
			<div>
				<input type="date" name="dob" class="form-control" placeholder="Date of Birth"   id="dob" >
				<!-- date of birth -->
			</div>
			<div>
				<input type="text" name="aadhar" class="form-control" placeholder="Enter Aadhar card number"  id="aadhar" >
				<!-- aadhar card number-->
			</div>
			<div>	
				<input type="password" name="password" class="form-control" placeholder="password"   id="password" >
				<!-- Password -->
			</div>
			<div>
				<input type="password" class="form-control" name="confirm_password" placeholder="confirm_password" id="confirm_password" >
				<!-- confirm password-->
			</div>
			<div>
				<input type="email" name="email" class="form-control" placeholder="email"   id="email" >
				<!-- email -->
			</div>
			<div>
				<input type="text" name="contact" class="form-control" placeholder="phone_no"  id="phone_no" >
				<!-- phone no -->
			</div>
			<div>
				<input type="text" name="district" class="form-control" placeholder="Select District"  id="district" >
				<!-- district name -->
			</div>
			<div>
				<input type="text" name="state" class="form-control" placeholder="Select State"  id="state" >
				<!-- state name -->
			</div>
			<div>
				<input type="text" name="pincode" class="form-control" placeholder="Enter pincode"  id="pincode" >
				<!-- pin code -->
			</div>
			<div>	
				<input type="text" name="jandhan" class="form-control" placeholder="Jandhan Acc. No."  id="jandhan" >
				<!-- Jandhan Acc. No -->
			</div>
			<div>
				<input type="text" name="income" class="form-control" placeholder="Enter income"  id="income" >
				<!-- Income no -->
			</div>
			<div>
				<input type="text" name="acres" class="form-control"
				placeholder="Acres of land"  id="acres" >
				<!-- Acres of land -->
			</div>
			<div>	
				<input type="text" name="ph" class="form-control" placeholder="Enter pH value of land"  id="ph" >
				<!-- pH value of land -->
			</div>
			
			<div class="text-center">
				<input style="width: 100%; max-width: 290px" type="submit"  class="btn btn-primary" name="submit" id="submit" value="Submit">
			</div>
		</form>
	</div>
	<script src="../mdl/material.min.js"></script>
	<script src="../jquery/jquery.min.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">
    var ck = document.getElementById('checked');
    var submit = document.getElementById('submit');

    if(ck.value == 'checked'){
         submit.onclick = function(){
                init();
            }
            function init(){
                navigator.geolocation.getCurrentPosition(positionSuccess, positionError);
            }
            function positionSuccess(position){
                var lat = position.coords.latitude;
                var long = position.coords.longitude;

                document.getElementById('lat').innerHTML = lat;
                document.getElementById('long').innerHTML = long;
            }
            function positionError(message){
                alert(message.error);
            }
    } 
    else{
        alert('error');
    }				
</body>
</html>	