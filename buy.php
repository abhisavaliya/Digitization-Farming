<?php
include ('connect.php');
include ('session.php');

$price=$_POST['price'];
$user=$_SESSION['username'];
$fname=ucwords($_SESSION['finalname']);
$name=ucwords($_POST['name']);

$query1="select bought from db where email='$user';";
$run1=mysqli_query($connect,$query1);
if(!$run1)
    echo "ERROR!!";
else{
$row=mysqli_fetch_array($run1);  
$row[0]=$row[0]+$price;
    
    
$query2="UPDATE db set bought='$row[0]' where email='$user';";
$run2=mysqli_query($connect,$query2);
    
$to = $user;
$subject = "From DIGI FARM: Purchased $name!!";
$txt = "Dear $fname,Your Just purchased $name for $price  and  total Purchases of cost : $row[0]";
$headers = "From:DIGI FARM";

mail($to,$subject,$txt,$headers);
    
 
    echo "<script>alert('You Bought For ".$price." and Total Purchases are ".$row[0]."');location.href='premium.php';</script>";

}

?>