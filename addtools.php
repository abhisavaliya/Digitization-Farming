<?php

include ('connect.php');

$image=$_POST['image'];
$name=$_POST['name'];
$price=$_POST['price'];
$details=$_POST['details'];


$query="INSERT INTO `tools` (`image`, `name`, `price`, `details`) VALUES ('$image','$name','$price','$details')";

$run=mysqli_query($connect,$query);
if($run)
    header('location:adminmain.php');

?>