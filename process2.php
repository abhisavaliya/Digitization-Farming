<?php
		
			$myConnection= mysqli_connect("localhost","root","", "digi_farmers") or die ("could not connect to mysql"); 
			$msg= $_POST['message'];
			$sqlCommand="insert into chat (user_id,name,msg,status) values (3,'Aditi','$msg',1)";
		$query=mysqli_query($myConnection, $sqlCommand) or die(mysql_error()) ;
		echo $sqlCommand;
		header('Location: demo_chat.php');
?>