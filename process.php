<?php

if (isset($_POST['submit'])) {

		$b_id = $_POST['id']; 
		$mail = $_POST['email'];
		$pass = $_POST['password'];
		$amm = $_POST['bid'];

	$myConnection= mysqli_connect("localhost","root","", "digi_farmers") or die ("could not connect to mysql"); 
		$sqlCommand="insert into bid (id,email,password,amount) values ('$b_id', '$mail', '$pass', '$amm')";
		$query=mysqli_query($myConnection, $sqlCommand) or die(mysql_error()) ;

}

header('Location: declarehighbid.php');

?>