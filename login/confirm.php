

<!DOCTYPE html>
<html>
<head>
	<title>Confirmation of email</title>
</head>	
<body>
<?php 
require 'db.php';


		$username = $_GET['username'];
		$code = $_GET['code'];

		$sql = "SELECT * FROM login WHERE username='$username'";
		$query = mysqli_query($conn , $sql);
		if($query){
			$data = mysqli_fetch_row($query);
			$username_db = $data[3];
			$confirm_code_db = $data[8];
		}
		if($username == $username_db && $code == $confirm_code_db){
			$sql = "UPDATE `login` SET `confirmed` = '1'";
			mysqli_query($conn , $sql);
			echo 'Your account has been activated';
		}
		else{
			echo 'error while confirming the code';
		}


?>
<h1>efnowovOPF </h1>

</body>
</html>