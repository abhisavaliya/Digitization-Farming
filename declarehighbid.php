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
<h2>Results of Bid</h2>
</body>
</html>

<?php
	
	$myConnection= mysqli_connect("localhost","root","", "digi_farmers") or die ("could not connect to mysql"); 
		$sqlCommand="select * from auction";
		$query=mysqli_query($myConnection, $sqlCommand) or die(mysql_error()) ;

	
$products = array();
	$i = array();
$y = array();
$image =array();


		echo "<table>";
		if($query) {
                while($row = mysqli_fetch_assoc($query) ) {
                	$pieces1 = explode("-",$row['edate']);
                	//print_r($pieces1);
                	$pieces2 = explode("-",$row['sdate']);
                	//print_r($pieces2);
                	//echo $row['id'];
                	if (date('m')==$pieces2[1] && date('m')==$pieces1[1] && date('d')>=$pieces2[2] && date('d')>=$pieces1[2] )  {
                		//echo $row['id'];
                		array_push($products, $row['id']);
                		array_push($image, $row['image']);

                		}
                	}
                }
//print_r($products);



                $myConnection= mysqli_connect("localhost","root","", "digi_farmers") or die ("could not connect to mysql"); 
		$sqlCommand="select * from bid";
		$query=mysqli_query($myConnection, $sqlCommand) or die(mysql_error()) ;
		if($query) {
                
                	$arrlength = count($products);

					for($x = 0; $x < $arrlength; $x++) {
						$high = 0;
					    while($row = mysqli_fetch_assoc($query) ) {
					    	
					    	if($row['amount'] >= $high) {
					    		$high = $row['amount'];
					    		$i[$x] =$row['email'];
					    		$y[$x] =$high;
					    	}
					    	
					}



                }
            }
 /*           echo $high;
            print_r($products);
            print_r($i);
                        print_r($y);
*/
//echo $i[0];
//echo $y[0];
//echo $products[0];

            $myConnection= mysqli_connect("localhost","root","", "digi_farmers") or die ("could not connect to mysql"); 
		$sqlCommand="select * from auction";
		$query=mysqli_query($myConnection, $sqlCommand) or die(mysql_error()) ;
		if($query) {

					$arrlength = count($products);

					for($x = 0; $x < $arrlength; $x++) {

						
							echo '<tr>
						
				 <center><img src=" images/'. $image[$x].'" height = "200px" ></center>
				 </tr><br>
				 <tr>
				 	<center>
				 	<div >Product Id: '.$products[$x].'</div>
				 	</center>
				 	<center>
				 	<div >Sold At: '.$y[$x].'</div>
				 	</center>
				 	<center>
				 	<div >Owned By: '.$i[$x].'</div>
				 	</center>
				 	</tr>';

					    	
						}
					}

             		
                
            
  ?>              	