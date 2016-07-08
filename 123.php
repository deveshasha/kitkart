<?php
	//mysql_error(0);
mysql_connect('localhost','root','');
mysql_select_db("users");



	$uname = mysql_escape_string($_POST['uname']);
	$pass=mysql_escape_string($_POST['pass']);
	
	$pass=md5($pass);
	
	$sql=mysql_query("SELECT * FROM login WHERE username='$uname' AND password='$pass'");
	if(mysql_num_rows($sql)>0){
		echo "hello";
		header('location:home.html');
	}
	else{
		echo "wrong id or password";
	}
		
	
?>
