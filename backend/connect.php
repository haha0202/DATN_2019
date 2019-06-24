<?php 
	$host = "localhost"; // Host name
	$username = "root"; // mysqli username 
	$password = ""; // mysqli password 
	$db_name = "duocpham"; // Database name
	$conn = mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect ".mysqli_error());
	mysqli_query($conn,"SET NAMES 'utf8'");
	date_default_timezone_set('Asia/Bangkok');

?>