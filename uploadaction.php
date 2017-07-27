<?php
//	include ('connect.php');
	
     
    if (isset($_POST['submit'])) {
		if(isset($_POST['cname'])) {
			$c_name= $_POST['cname'];
		}
		if(isset($_POST['submit'])){
			$s_name = $_POST['sname'];
  		}
  		$desc = $_POST['description'];
  		$start_price = $_POST['sprice'];
  		$quant = $_POST['quantity'];
  		$start_date = date('Y-m-d', strtotime($_POST['startdate']));
  		$end_date = date('Y-m-d', strtotime($_POST['enddate']));
  		$curr = $_POST['currency'];
  		$count = $_POST['country'];
  		$stat = $_POST['state'];
  		$add = $_POST['address'];
  		$pay = $_POST['payoptions'];


  		$path="images/";

		

		$path=$path.$_FILES['files']['name'];
		    
		if(move_uploaded_file($_FILES['files']['tmp_name'],$path))
		{
		echo " ".basename($_FILES['files']['name'])." has been uploaded<br/>";
		echo '<img src="images'.$_FILES['files']['name'].'" width="48" height="48"/>';
		$img=$_FILES['files']['name'];
		   
		}


		$myConnection= mysqli_connect("localhost","root","", "digi_farmers") or die ("could not connect to mysql"); 
		$sqlCommand="insert into auction (image,cname,sname,description,sprice,quantity,sdate,edate,currency,country,state,address,payoptions) values ('$img','$c_name','$s_name','$desc','$start_price','$quant','$start_date','$end_date','$curr','$count','$stat','$add','$pay')";
		echo $sqlCommand;
		$query=mysqli_query($myConnection, $sqlCommand) or die(mysql_error()) ;

		
    }
?>
<html>
<body class="hold-transition login-page">
<?php
header('Location: auctions.php');
?>
</body>
</html>