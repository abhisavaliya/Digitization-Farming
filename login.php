<?php 

session_start();
if(isset($_POST['submit'])){
	require 'db.php';
    $username = strip_tags($_POST['username']);
	//echo $username;
    $password = strip_tags($_POST['password']);
	//echo $password;
	//$email = $_POST['email'];
	
	$sql = "SELECT * FROM `login` WHERE username ='$username' LIMIT 1";
	$query = mysqli_query($conn , $sql);
	
	if($query){
		$data = mysqli_fetch_row($query);
		$userId_db = $data[0];
		$username_db = $data[3];		
		$password_db = $data[4];
		$confirmed_db = $data[7];
	}
	if($username == $username_db && $password == $password_db ){
		if($confirmed_db == 1){
			$_SESSION['username'] = $username_db;
			$_SESSION['userId'] = $userId_db;
			$_SESSION['email'] = $email_db;
			header('Location: users.php');
		}
		else{
			echo 'account is not activated';
		}
	}
	else{
		echo 'wrong password or username';
	}

}

?>
