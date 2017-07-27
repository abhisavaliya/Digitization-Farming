<?php
include ('translate.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Auction
		</title>
		<link type="text/css" rel="stylesheet" href="css/auction.css">
	</head>
	<body>
	<h2 align="center">Item Details to be sold at Auction</h2>
	<form id="form1" action="uploadaction.php" method="post" enctype="multipart/form-data" >
		 <div><table align="center">
                        <tr>
                            <td align="right"><label for="cname">Crop Name</label></td><td>:</td>
                            <td><input type="radio" id="cname" name="cname">Rice
                          <input type="radio" id="cname" name="cname" value="Wheat">Wheat
                            <input type="radio" id="cname" name="cname" value="Cotton">Cotton
                            <input type="radio" id="cname" name="cname" value="Jute">Jute
                            <input type="radio" id="cname" name="cname" value="Sugarcane">Sugarcane
                            <input type="radio" id="cname" name="cname" value="Apple">Apple
                            <input type="radio" id="cname" name="cname" value="Orange">Orange
                            <input type="radio" id="cname" name="cname" value="Spinach">Spinach
                            <input type="radio" id="cname" name="cname" value="Carrots">Carrots</td>
                        </tr>  
                         <tr>
                            <td align="right"><label for="sname">Crop Subcategory</label></td><td>:</td>
                        	<td><select id="sname" name="sname">
                        	<option value="Red Apple">Red Apple</option>
                        	<option value="Green Apple">Green Apple</option>
                        	</select></td>
                        </tr> 
                        <tr>
                                <td align="right"><label for="type">Crop Type</label></td><td>:</td>
                                <td><input type="checkbox" id="type" name="type"\>Food Grains  
                                 <input type="checkbox" id="type" name="type" >Plantation Crop
                                 <input type="checkbox" id="type" name="type" >Cash Crop
                                 <input type="checkbox" id="type" name="type" >Horticulture Crop</td>
                            </tr>   
                       <tr>
                                <td align="right"><label for="description">Description</label></td><td>:</td>
                                <td><textarea id="description" name="description" rows="3" cols="50">
                                </textarea></td>
                        </tr>
                        <tr>
                            <td align="right"><label for="sprice">Start Price( per kg )</label></td><td>:</td>
                            <td><input type="text" id="sprice" name="sprice" required></td>
                        </tr> 
                        <tr>
                            <td align="right"><label for="quantity">Quantity( in kgs )</label></td><td>:</td>
                            <td><input type="text" id="quantity" name="quantity" required></td>
                        </tr> 
                        <tr>
                            <td align="right"><label for="startdate">Start Date</label></td><td>:</td>
                            <td><input type="date" id="startdate" name="startdate"  value="<?php echo date('Y-m-d'); ?>" required></td>
                        </tr>
                        <tr>
                            <td align="right"><label for="enddate">End Date</label></td><td>:</td>
                            <td><input type="date" id="enddate" name="enddate"  value="<?php echo date('Y-m-d'); ?>" required></td>
                        </tr>
                        <tr>
                            <td align="right"><label for="image">Crop Picture</label></td><td>:</td>
                            <td><input type="file" id="files" name="files" ></td> 
                        </tr>
                        <tr>
                            <td align="right">Image Preview</td><td>:</td>
						    <td> <img id="image" src="#" alt="image" height="100px"/></td>
							<script>
							document.getElementById("files").onchange = function () {
						    var reader = new FileReader();

						    reader.onload = function (e) {
						        // get loaded data and render thumbnail.
						        document.getElementById("image").src = e.target.result;
						    };

						    // read the image file as a data URL.
						    reader.readAsDataURL(this.files[0]);
						};
						</script>
                            <!-- Lil Javascript for showing image -->
                        </tr>
                        <tr>
                            <td align="right"><label for="currency">Currency</label></td><td>:</td>
                        	<td><select id="currency" name="currency">
                        	<option value="Dollars">$ Dollars</option>
                        	<option value=:DOllars>Rupees</option>
                        	</select></td>
                        </tr>
                        <tr>
                            <td align="right"><label for="country">Country</label></td><td>:</td>
                        	<td><select id="country" name="country">
                        	<option value="India">India</option>
                        	<option value="USA">USA</option>
                        	</select></td>
                        </tr>
                        <tr>
                            <td align="right"><label for="state">State</label></td><td>:</td>
                        	<td><select id="state" name="state">
                        	<option value="Maharashtra">Maharashtra</option>
                        	<option value="Tamil Nadu">Tamil Nadu</option>
                        	</select></td>
                        </tr>
                        <tr>
                                <td align="right"><label for="address">Address</label></td><td>:</td>
                                <td><textarea id="address" name="address" rows="3" cols="50">
                                </textarea></td>
                            </tr>
                        <tr>
                            <td align="right"><label for="payoptions">Payment Options</label></td><td>:</td>
                            <td><input type="radio" id="payoptions" name="payoptions">Payment On Delivery 
                            <input type="radio" id="payoptions" name="payoptions" >Credit Card
                            <input type="radio" id="payoptions" name="payoptions" >Debit Card
                            <input type="radio" id="payoptions" name="payoptions" >Net Bamking</td>
                        </tr>
                        <tr>
                                <td><label for="contact">Method to contact you</label></td><td>:</td>
                                <td><input type="checkbox" id="contact" name="contact" >Email 
                                <input type="checkbox" id="contact" name="contact" >Whatsapp
                                    <input type="checkbox" id="contact" name="contact" >In-app chat</td>
                            </tr>  
                     </table>
                </div>   <br><br>
                <center><input type="submit" value="Submit" name="submit" id="submit" ></center>
        </form>
	</body>
</html>