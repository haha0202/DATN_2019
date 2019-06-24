<?php
	$usename=$_POST['usename'];
	$pass=$_POST['pass'];
	$auth=$_POST['auth'];
	include('../connect.php');
	$sql="insert into account (usename,password,auth) values ('$usename','$pass','$auth')";
	$query=mysqli_query($conn,$sql) or die('Lỗi truy vấn'.mysqli_error());
	if ($query) {
		header('location:hienthi.php');
	}
 ?>