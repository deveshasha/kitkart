<?php
mysql_connect('localhost','root','');
mysql_select_db("users");
$Submit = mysql_escape_string('submit');
if(isset($_POST[$Submit])){
$Name = mysql_escape_string($_POST['Name']); 
$City = mysql_escape_string($_POST['City']); 
$Email = mysql_escape_string($_POST['Email']); 
$Message = mysql_escape_string($_POST['Message']); 


$sql = mysql_query("INSERT INTO contact values('','$Name','$City','$Email','$Message')");
header("location:thanks.html");}


?>