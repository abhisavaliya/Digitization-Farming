<!DOCTYPE html>
<html lang="en">
<head>
  <title>DIGITIZATION FARM</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/agency.min.css" rel="stylesheet">
</head>
<body style=" background-color:rgba(34, 34, 34,0.9)">

<?php
include ('translate.php');
?>


<nav class="navbar navbar-inverse " style="border-radius:0px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Digitization Farming</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="auctionUpload.php">Auction</a></li>
      <li><a href="ecart.php">E-Shopping</a></li>
      <li><a href="govt.php">Policies</a></li>
      <li><a href="demo_chat.php">Group Chat</a></li>
      <li><a href="qa.php">Forums</a></li>
      <li><a href="loan.php">Loan Calculator</a></li>
      <li><a href="#aboutus"><span class="glyphicon glyphicon-log-in"></span>About Us</a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
      <li><a href="#contact"><span class="glyphicon glyphicon-log-in"></span>Contact Us</a></li>
      
    </ul>
  </div>
</nav>
  
<div style="min-height:100vh;display:flex;justify-content:center;align-items:center;" >


<div class="row" style="margin:0;">
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="farmer_login.php">
        <img src="images/farmer.jpg" style="width:100%">
        <div class="caption text-center">
          <button type="button" class="btn btn-primary" style="width:100%">FARMER LOGIN</button>
        </div>
      </a>
    </div>
  </div>
 
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="youtu.be/x4amg6p9qww">
        <img src="images/demo.jpg" style="width:70%">
        <div class="caption text-center">
            <button type="button" class="btn btn-primary" style="width:100%">DEMO</button>
        </div>
      </a>
    </div>
  </div>
   <div class="col-md-4">
    <div class="thumbnail">
      <a href="mentor_login.php">
        <img src="images/prof.jpg" style="width:100%">
        <div class="caption text-center">
          <button type="button" class="btn btn-primary" style="width:100%">MENTOR LOGIN</button>
        </div>
      </a>
    </div>
  </div>
  
</div>
    </div>
    

<section id="aboutus" style="width:100%;height:100vh;background-color:#222222;color:white;border-bottom:2px solid yellow;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About Us</h2>
                    <h3 class="section-subheading text-muted">We are farmers</h3>
                </div>
            </div>
    </div>
    </section>


<section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Help Will Always Be Provided To Those Who Ask For It!</h3>
                </div>
            </div>
			
			<div class="row">
			 <div class="col-lg-12">
			  <div class="enquiry">
			     <h3>For Enquiry Call or Email:</h3>
			      <p>Office :- 022-28113458</p>
				  <p>Mr.Keyur :- 8767325697</p>
				  <p>Mr.Yeshpal :- 9892594827</p>
				  <p>Mr.Nayan :- 9769951175</p>
				  <p>Email :- digi_farm@gmail.com</p>
				  
			 </div>
			</div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage"  action="contact.php" method="post" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" name="name1" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" name="email1" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" name="phone1" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" name="message1" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </section>


<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>



</body>
</html>
