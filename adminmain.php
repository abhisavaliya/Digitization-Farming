<!DOCTYPE html>
<?php

include ('connect.php');
//include ('adminsession.php');
ob_start();

$query="select * from tools;";
$query2="select * from technology;";
$query3="select * from fertilizers;";

$run=mysqli_query($connect,$query);
$run2=mysqli_query($connect,$query2);
$run3=mysqli_query($connect,$query3);


?>
    <html>

    <head>
        <title>ADMIN MAIN</title>
        <link rel="stylesheet" type="text/css" href="adminmain.css"> </head>

    <body>
        <div class="maindiv">
            <h1>ADMIN ADD/DELETE</h1></div>
        <div class="mainmain">
            <br>
            <div class="tools">
                <form name='addtools' action='addtools.php' method="post">
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Cover Page</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Details</th>
                            <th>Delete</th>
                        </tr>
                        <?php
while($row=mysqli_fetch_array($run))
{
    $id=$row['id'];
    $image=$row['image'];
    $name=$row['name'];
    $price=$row['price'];
    $details=$row['details'];
    
    echo "<tr><td>$id</td><td><img src='m_images/$image.jpg' alt=$image width='200px' height='100px'></td><td>$name</td><td>$price</td><td>$details</td><td><a href='adminmain.php?delete=$id'>Delete</a></td></tr>";
}
  echo "<tr><td></td><td><input type='text' name='image' required></td><td><input type='text' name='name' required></td><td><input type='number' name='price' required><td><input type='text' name='details' required></td>";
echo "<td><input type='submit' name='add' value='ADD TOOLS'></td>";
 
?>
                    </table>
                </form>
            </div>
            <br>
            <br>
            <div class="technology">
                <form name='addtechnology' action='addtechnology.php' method="post">
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Cover Page</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Details</th>
                            <th>Delete</th>
                        </tr>
                        <?php
while($row=mysqli_fetch_array($run2))
{
    $id=$row['id'];
    $image=$row['image'];
    $name=$row['name'];
    $price=$row['price'];
    $details=$row['details'];
    
    echo "<tr><td>$id</td><td><img src='m_images/$image.jpg' alt=$image width='200px' height='100px'></td><td>$name</td><td>$price</td><td>$details</td><td><a href='adminmain.php?delete=$id'>Delete</a></td></tr>";
}
  echo "<tr><td></td><td><input type='text' name='image' required></td><td><input type='text' name='name' required></td><td><input type='number' name='price' required><td><input type='text' name='details' required></td>";
echo "<td><input type='submit' name='add' value='ADD TECHNOLOGY'></td>";
 
?>
                    </table>
                </form>
            </div>
            <br>
            <br>
            <div class="tools">
                <form name='addfertilizers' action='addfertilizers.php' method="post">
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Cover Page</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Details</th>
                            <th>Delete</th>
                        </tr>
                        <?php
while($row=mysqli_fetch_array($run3))
{
    $id=$row['id'];
    $image=$row['image'];
    $name=$row['name'];
    $price=$row['price'];
    $details=$row['details'];
    
    echo "<tr><td>$id</td><td><img src='m_images/$image.jpg' alt=$image width='200px' height='100px'></td><td>$name</td><td>$price</td><td>$details</td><td><a href='adminmain.php?delete=$id'>Delete</a></td></tr>";
}
  echo "<tr><td></td><td><input type='text' name='image' required></td><td><input type='text' name='name' required></td><td><input type='number' name='price' required><td><input type='text' name='details' required></td>";
echo "<td><input type='submit' name='add' value='ADD FERTILIZERS'></td>";
 
?>
                    </table>
                </form>
            </div>
            <br>
            <br>
         
        </div>
        <?php
        if(isset($_GET['delete']))
        {
            $nid=$_GET['delete'];
            $querydel="DELETE from tools where id=$nid;";
            $rundel=mysqli_query($connect,$querydel);
            header('location:adminmain.php');
        }
        
        
        if(isset($_GET['delete2']))
        {
            $nid=$_GET['delete2'];
            $querydel="DELETE from technology where id=$nid;";
            $rundel=mysqli_query($connect,$querydel);
            header('location:adminmain.php');
        }
        
        if(isset($_GET['delete3']))
        {
            $nid=$_GET['delete3'];
            $querydel="DELETE from fertilizers where id=$nid;";
            $rundel=mysqli_query($connect,$querydel);
            header('location:adminmain.php');
        }
        
    ?>
        <div class="lmain">
         <div class="logout">
                    <?php
            echo "<form action='adminlogout.php'>";
            echo "<input type='submit' name='submit' value='LOG OUT'>";
            echo "</form>";
?>
                </div>
        </div>
    </body>

    </html>