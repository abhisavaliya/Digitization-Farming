<?php 
//include 'farmer_login.php';
session_start();
if(isset($_POST['submit'])){
	require 'db.php';
    $username = strip_tags($_POST['username']);
	//echo $username;
    $password = strip_tags($_POST['password']);
	//echo $password;
	//$email = $_POST['email'];
	
	$sql = "SELECT * FROM `mentor` WHERE name='$username' LIMIT 1";
	$query = mysqli_query($conn , $sql);
	
	if($query){
		$data = mysqli_fetch_row($query);
		$username_db = $data[1];		
		$password_db = $data[5];

		if($username == $username_db && $password == $password_db ){
			$_SESSION['username'] = $username_db;
			header('Location: users.php');
		}
		else{
			echo "<script>alert('Unregistered user')</script>";
		}
	}
	else{
		echo "<script>alert('Wrong username or password')</script>";
	}

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link type="text/css" rel="stylesheet" href="mdl/material.css">
	<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<style>
		h3 {
			text-align: center;
		}
		
		.f_login div {
			padding-bottom: 20px;
		}

		.f_login div input {
			border-radius: 0px;
			max-width: 450px;
			margin: 0px auto;
		}

	</style>
</head>
<body class="jumbotron">
	<div class="container">
		<h3>Login</h3>
		<br>
		<form method = 'POST' class="f_login">
			<div>
				<input type='text' placeholder="Enter username" class="form-control" name='username'>
			</div>
			<div>
				<input type="password" placeholder="Enter password" class="form-control" name ='password'>
			</div>
			<div class="login text-center">
				<input style="width: 100%; max-width: 290px" type="submit" value="Login" class="btn btn-primary"  name="submit">
			</div>
		</form>
	</div>
	<script src="../mdl/material.min.js"></script>
	<script src="../jquery/jquery.min.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>