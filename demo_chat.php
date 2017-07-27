<?php
include ('translate.php');
?>



<!DOCTYPE html>
<html>
<head>
	<title>Group Chat</title>
	<link href="elements.css" rel="stylesheet">
	<style>

	.hello {
		background-color:green ;
		width: 5px;
		height: 5px;
		float:left;
	}

	.bye{
		background-color:gray ;
		width: 5px;
		height: 5px;
		float:left;
	}

	.first {
		position : relative;	
	}

	</style>
</head>
<body>


	<h2>Group Chat</h2>
<hr><center>
<form action="process2.php" id="form" method="post" name="form">

<?php

	session_start();
	$_SESSION['user']="Harish";
	$user_active =$_SESSION['user'];
	$user_identity = 1; //temp
	$myConnection= mysqli_connect("localhost","root","", "digi_farmers") or die ("could not connect to mysql"); 
		//$sqlCommand="insert into chat (name,msg,status) values ('$b_id', '$mail', '$pass', '$amm')";
		$sqlCommand="select * from chat";
		$query=mysqli_query($myConnection, $sqlCommand) or die(mysql_error()) ;

		echo "<table>";
		if($query) {
                while($row = mysqli_fetch_assoc($query) ) {
                echo '<div class="first">';	
      if($row['status']==1){ 
			echo '<tr><td><div class="hello"></div></td>';
	 } 
	 else {
	 	echo '<tr><td><div class="bye"></div></td>';
	 
	 }         	
echo '<td colspan="100px">
	'.$row["name"] .'</td> <td>:</td> <td>' .$row["msg"].'</td></tr></div>';
	}
}

echo "</table>";
?>

<textarea id="msg" name="message" placeholder="Message"></textarea>
<input type="submit" value="Submit" name="submit" id="submit" >
</form>
</center>

</body>
</html>
