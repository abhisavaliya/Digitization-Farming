<!DOCTYPE html>
<?php
//include ('session.php');
include ('connect.php');
include('translate.php');
//$username=$_SESSION['finalname'];
?>
    <html>

    <head>
        <title>E-CART</title>
        <link rel="stylesheet" type="text/css" href="ecart.css"> 
        <link rel="icon" type="text/css" href="images/crown.png">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
    <body>
       
        <div class="main">
            <div class="nav">
                <div class="logo"><img src="images/crown.png" width=60 height="60"></div>
                <div class="main1">
                    <ul>
                        <li><a href="#tools1">TOOLS</a></li>
                        <li><a href="#technology1">TECHNOLOGY</a></li>
                        <li><a href="#fertilizers1">FERTILIZERS</a></li>
                        <li><a href="index.php">HOME</a></li>
                    </ul>
                </div>
                <div class="logout">
                    <?php
            echo "<form action='logout.php'>";
            echo "<input type='submit' name='submit' value='LOG OUT'>";
            echo "</form>";
?>
                </div>
            </div>
        
            
               
        <div id="tools1"></div>
        <div class="nav2">
            <br>
            <br>
            
            <div class="headings">
                
            <div class="next"><a href="#technology1"><img src="images/down.png" width=50px height=50px></a></div>  
            <h1>TOOLS</h1> </div>
            <br>
            <div class="form1">
                <?php
            
            $query="select image,name,price,details from tools;";
            $run=mysqli_query($connect,$query);
            
            while($row=mysqli_fetch_assoc($run))
            {
                
                $image=$row['image'];
                $name=$row['name'];
                $price=$row['price'];
                $details=$row['details'];
                
                echo "<form name='farm' action='buy.php' method='post'>";
                echo "<div><img src=m_images/".$image.".jpg  width='300px' height='150px'><h4>".$name."</h4></div>";
                echo "<input type='hidden' name='name' value='$name'>";
                echo "<input type='hidden' name='price' value='$price'>";
                echo "<input type='submit' name='submit' value='Buy For RS.".$price."'>";
                echo "</form>";
            }
            
            
            
?>
            </div>
            <br> </div>
        <div id="technology1"></div>
        <div class="nav3">
            <br>
            <br>
            <div class="headings">
                <div class="next">
                    <a href="#fertilizers1"><img src="images/down.png" width=50px height=50px></a>
                </div>
                <h1>TECHNOLOGY</h1> </div>
            <br>
            <div class="form1">
                <?php
            
            $query="select image,name,price,details from technology;";
            $run=mysqli_query($connect,$query);
            
            while($row=mysqli_fetch_assoc($run))
            {
                
                $image=$row['image'];
                $name=$row['name'];
                $price=$row['price'];
                $details=$row['details'];
                
                echo "<form name='farm' action='buy.php' method='post'>";
                echo "<div ><img src=m_images/".$image.".jpg width='300px' height='150px'><h4>".$name."</h4></div>";
                echo "<input type='hidden' name='name' value='$name'>";
                echo "<input type='hidden' name='price' value='$price'>";
                echo "<input type='submit' name='submit' value='Buy For RS.".$price."'>";
                echo "</form>";
            }
            
            
            
?>
            </div>
            <br> </div>
        <div id="fertilizers1"></div>
        <div class="nav4">
            <br>
            <br>
            <div class="headings">
                <div class="next">
                    <a href="#top"><img src="images/up.png" width=50px height=50px></a>
                </div>
                <h1>FERTILIZERS</h1> </div>
            <br>
            <div class="form1">
                <?php
            
            $query="select image,name,price,details from fertilizers;";
            $run=mysqli_query($connect,$query);
            
            while($row=mysqli_fetch_assoc($run))
            {
                
                $image=$row['image'];
                $name=$row['name'];
                $price=$row['price'];
                $details=$row['details'];
                
                echo "<form name='farm' action='buy.php' method='post'>";
                echo "<div ><img src=m_images/".$image.".jpg width='250px' height='300px'><h4>".$name."</h4></div>";
                echo "<input type='hidden' name='name' value='$name'>";
                echo "<input type='hidden' name='price' value='$price'>";
                echo "<input type='submit' name='submit' value='Buy For RS.".$price."'>";
                echo "</form>";
            }
            
            
            
?>
            </div>
            <br> </div>
        
        
    </div>
    </body>

    </html>