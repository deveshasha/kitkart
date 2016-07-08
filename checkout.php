<script type="text/javascript">
	function check(){
		

		var value=document.forms["form1"]["Name1"].value;
		var city=document.forms["form1"]["City1"].value;
		var status = false;
		if(city==null || city=="")
		{
			alert("Enter valid data");
			return false;
		}
		else
			status=true;
		if(value==null || value=="")
		{
			alert("Enter valid data");
			return false;
		}
		else status=true;
		return status;
	}
</script>
<style>
@import url(https://fonts.googleapis.com/css?family=Montserrat);
body {
	font-family: 'Montserrat', sans-serif;
	background-color: #D6D6D6;
}

p {
	font-size: 1.3em;
	margin-bottom: 15px;
}
.container{
	width: 100%;
	height: auto;
	font-family: 'Montserrat', sans-serif;
}
#logo img{
	margin-left: 5%;
	float: left;
}
#login a{
	float: right;
	padding:25px;
	text-decoration: none;
	color: black;
	
}
#login a:hover{
	color: white;
}
#nav{
	text-align: center;
}
#nav ul{
	display: inline-block;
	list-style: none;
}
#nav li{
	display: inline;
}
#nav a{
	font-size: 16px;
	color: black;
	float: left;
	text-decoration: none;
	padding: 12px 75px;
	background-color: #939393;

}
#nav li:first-child a{
    border-top-left-radius: 20px;
    border-bottom-left-radius: 20px;
}
#nav li:last-child a{
	border-top-right-radius:20px;
	border-bottom-right-radius: 20px;		
}

#nav a:hover{
	color:white;
	background-color:#181818;
	background: linear-gradient(#313131,#696969);
}
#page-wrap {
	width: 660px;
	padding: 20px 50px 20px 50px;
	margin: 20px auto;
	min-height: 500px;
	height: auto !important;
	height: 500px;
}

#contact-area {
	width: 600px;
	margin-top: 25px;
}

#contact-area input, #contact-area textarea {
	padding: 5px;
	width: 471px;
	font-family: Helvetica, sans-serif;
	font-size: 1.4em;
	margin: 0px 0px 10px 0px;
	border: 2px solid #ccc;
}

#contact-area textarea {
	height: 90px;
}

#contact-area textarea:focus, #contact-area input:focus {
	border: 2px solid #900;
}

#contact-area input.submit-button {
	width: 100px;
	float: right;
}

label {
	float: left;
	text-align: right;
	margin-right: 15px;
	width: 100px;
	padding-top: 5px;
	font-size: 1.4em;
}
</style>
<table border="1" align="center" size="30">
<tr>
<th>PRODUCT</th>
<th>TEAM</th>
<th>PRICE</th>
<th>ID</th>
</tr>
<?php

mysql_connect('localhost','root','');
mysql_select_db("users");
$id=htmlspecialchars($_GET["jerseyid"]);
$sqlimage  = "SELECT * FROM checkout where id = '$id' ";
$imageresult1 = mysql_query($sqlimage);

while($rows=mysql_fetch_assoc($imageresult1))
{
	$team= $rows['team'];
	$image= $rows['images'];
	$price= $rows['price'];
    $id = $rows['id'];?>
    <tr>
    	<td><?php echo "<img src= '$image'>";?></td>
    	
    	<td><?php echo "$team";?></td>
    	<td><?php echo "$price";?></td>
    	<td><?php echo "$id";?></td>
    </tr>
    <?php
} ?>
<div id="logo"><a href="home.html"><img src="logo.png"></a></div>
	<div id="login">
		<a href="register.html">SIGN UP</a>
		<a href="login.html">LOGIN</a>
	</div>
	<div id="nav">
	<ul>
		<li><a href="#">Home</a></li>
		<li><a href="club.html">Shop by Club</a></li>
		<li><a href="country.html">Shop by country</a></li>
		<li><a href="aboutus.html">About Us</a></li>
		<li><a href="contact.html">Contact Us</a></li>
	</ul>
	</div>
	<h1 align="center">CHECKOUT</h1>
</table>
<br><br><br>
<form name="form1" onsubmit="return check()" method="POST" style="margin-left:30%;">
				<label for="Name">Name:</label>
				<input type="text" name="Name1" id="Name1" /><br><br><br>
				
				<label for="City">City:</label>
				<input type="text" name="City1" id="City1" /><br><br>
	
				<label for="Email">Email:</label>
				<input type="text" name="Email1" id="Email1"/><br><br>
				
				<label for="Address">Address:</label><br />
				<textarea name="Address1" rows="20" cols="50" id="Message"></textarea><br><br>

				<input type="submit" name="submit" value="Checkout" onsubmit="return check()" style="margin-left:120px;font-size:200%;" >
			</form>
	<?php
	//mysql_error(0);



//$id=htmlspecialchars($_GET["jerseyid"]);
if(isset($_POST['submit'])){
	$name = mysql_escape_string($_POST['Name1']);
	$city=mysql_escape_string($_POST['City1']);
	$email=mysql_escape_string($_POST['Email1']);
	$address=mysql_escape_string($_POST['Address1']);
	$sql=mysql_query("INSERT INTO abc values ($id,'$name','$city','$email','$address')");}
	?>