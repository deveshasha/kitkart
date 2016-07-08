<?php
	
mysql_connect('localhost','root','');
mysql_select_db("users");



	$uname = mysql_escape_string($_POST['username']);
	$pass=mysql_escape_string($_POST['password']);
	
	
	$pass=md5($pass);
	
	$sql=mysql_query("INSERT INTO login values ('','$uname','$pass')");
	
	header('location:login.html');
	
?>
