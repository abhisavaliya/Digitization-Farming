<?php 
session_start();
include('translate.php');
if(isset($_SESSION['username'])){
	require 'db.php';
	$username = $_SESSION['username'];
	$f_id = $_SESSION['f_id'];
	$f_name = $_SESSION['f_name'];
	 $s_name = $_SESSION['s_name'];
 
}
else {
    header('Location: index.php');
    die();
}



?>


<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link type="text/css" rel="stylesheet" href="../mdl/material.css">
  <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <style>
    #guide .crop div {
    	max-width: 250px;
    }
	
	.crop {
		margin: 0px auto;
	}
  </style>
</head>
<body>
  <div style="margin: 0px; width: 100%">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> 
          </button>
          <a class="navbar-brand">Welcome, <?php print($_SESSION['f_name']);?></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li id="guide_section" data-section="guide" class="active"><a href="#">Guide</a></li> 
            <li><a id="e-shopping_section" data-section="e-shopping">E-shopping</a></li>
            <li><a id="sell_section" data-section="sell_your_products">Sell your product</a></li> 
            <li><a id="jandhaan_section" data-section="jandhaan">Jandhaan Information</a></li>
            <li><a id="help_section" data-section="help">Ask for help</a></li>   
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span> Logout </a></li>

          </ul>
        </div>
      </div>
    </nav>
  </div>
  <div style="display: block" class="container section" id="guide">
  	<h1></h1>
	<div class="crop" style="display: inline-flex;flex-wrap: wrap; align-items:center;justify-content: center;">
		<?php
			$sql = "SELECT * FROM crops";
			$query = mysqli_query($conn , $sql);
			if($query){	
				while($data = mysqli_fetch_row($query))
					{
					echo '
					<div class="col-xs-12 col-md-4 col-lg-3">
						<img src="../images/'.$data[9].'" width=120px height=120px>
						<h3>'.strtoupper($data[1]).'</h3>
					    <p>
					    	Maximun pH : '.$data[2].'<br>
							Minimum pH : ' .$data[3]. '<br>
							Climate : ' .$data[4]. '<br>
							Rainfall : ' .$data[5]. '<br>
							Soil : ' .$data[6]. '<br>
							Pesticides: ' .$data[7]. '<br>
							fertilizers: ' .$data[8]. '	
					    </p>
				    </div>
				    ';}
			}
	    ?>		
	</div>
  </div>
  <div style="display: none" class="container section" id="e-shopping">
  	<h1>sec 2</h1>
  </div>
  <div style="display: none" class="container section" id="sell_your_products">
  	<h1>sec 3</h1>
  </div>
  <div style="display: none" class="container section" id="jandhaan">
  	<h1>sec 4</h1>
  </div>
  <div style="display: none" class="container section" id="help">
  	<h1>sec 5</h1>
  </div>

  <script>
  	//change section on click
	document.getElementById('guide_section').onclick = changeSection;
	document.getElementById('e-shopping_section').onclick = changeSection;
	document.getElementById('sell_section').onclick = changeSection;
	document.getElementById('jandhaan_section').onclick = changeSection;
	document.getElementById('help_section').onclick = changeSection;

	function changeSection() {
		console.log("section change");
		var x = document.getElementsByClassName('section');
		for (var i = 0; i < x.length; i++) {
    		x[i].style.display = "none";
		}

		var element = this.getAttribute("data-section")
			document.getElementById(element).style.display = "block";
		}
  </script>
  <script src="../mdl/material.min.js"></script>
  <script src="../jquery/jquery.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>