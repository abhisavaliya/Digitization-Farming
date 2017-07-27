

<?php
include ('translate.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Auction</title>
		<link type="text/css" rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
		<link href="elements.css" rel="stylesheet">
<script src="my_js.js"></script>
		<script>
		//Function To Display Popup
		function div_show() {
		document.getElementById('abc').style.display = "block";
		}
		</script>
</head>
<body id="body" style="overflow:hidden;">
<h2> Auction </h2>

 <div id="abc">
				<!-- Popup Div Starts Here -->
				<div id="popupContact">
				<!-- Contact Us Form -->
					<form action="process.php" id="form" method="post" name="form">
				<img id="close" src="images/3.png" onclick ="div_hide()">
				<h2>Contact Us</h2>
				<hr>
				
				<input id="id" name="id" placeholder="Product id" type="text">				
				<input id="email" name="email" placeholder="Email" type="text">
				<input id="bid" name="bid" placeholder="bid" type="text">				

				<input id="password" name="password" placeholder="Password" type="text">
				<br><br><br>

				<input type="submit" name="submit" id="submit" value="submit">
				</form>
				</div>
				<!-- Popu Div Ends Here -->
					</div>
				<center>

				<br>
				<button id="popup" onclick="div_show()">Bid</button>
		</center>
</body>
</html>





