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
</head>
<body>
<h2>Auction</h2>
<center>
<button onclick="location.href = 'auctionStart.php';" id="myButton" class="float-left submit-button" style="padding:3px;">Proceed to Bid</button>
</center>
<br>
<?php
	

	$myConnection= mysqli_connect("localhost","root","", "digi_farmers") or die ("could not connect to mysql"); 
		$sqlCommand="select * from auction";
		$query=mysqli_query($myConnection, $sqlCommand) or die(mysql_error()) ;
		


		echo "<table>";
		if($query) {
                while($row = mysqli_fetch_assoc($query) ) {
                	$pieces1 = explode("-",$row['edate']);
                	
                	$pieces2 = explode("-",$row['sdate']);

                	//print_r($pieces2); // s date   1
					//print_r($pieces1); // e date  2
					//echo date('m');   //1
					//echo date('d');   //29
					//pieces 1- month
					// piesces 2- date
/*
					echo date('m');
					echo  "==";
					echo $pieces2[1]; 
					echo "<br>" ;

					echo date('m');
					echo "==";
					echo $pieces1[1]; 
					echo "<br>" ;

					echo date('d');
					echo ">=";
					echo $pieces2[2];
					echo "<br>" ;

					echo date('d');
					echo "<=";
					echo $pieces1[2];
					echo "<br>" ;

*/
                	//if((date('m')==$pieces2[1] && date('m')==$pieces1[1] && date('d')>=$pieces2[2] && date('d')<=$pieces1[2] )|| (date('m')>$pieces2[1] && date('m')<$pieces1[1]) || (date('m')>=$pieces2[1] && date('d')>=$pieces1[2] && (date('m')<$pieces1[1]||(date('m')==$pieces1[1]&&date('d')>=$pieces2[2])) )) {
					if( (date('m')==$pieces2[1] && date('m')==$pieces1[1] && date('d')>=$pieces2[2] && date('d')<=$pieces1[2] )|| (date('m')== $pieces2[1] && date('m')<$pieces1[1]) ){
				echo '
				 <tr>
				 <center><img src=" images/'. $row["image"].'" height = "200px" ></center>
				 </tr><br>
				 <tr>
				 	<center>
				 	<div >Product Id: '.$row["id"].'</div>
				 	</center>
				 	<center>
				 	<div >Start Price: '.$row["sprice"].'</div>
				 	</center>
				 	<center>
				 	<div >Quantity (in kgs): '.$row["quantity"].'</div>
				 	</center>
				 	</tr>
				 	<tr>
				 	
				 	<center>
				 	<div >Start Date: '.$row["sdate"].'</div>
				 	</center>
				 	<center>
				 	<div >End Date: '.$row["edate"].'</div>
				 	</center>

				 </tr>
				

				 ';   }

                       }
                       }

                    echo "</table>";
?>


</body>
</html>
