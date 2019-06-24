<?php 
	$name=$_POST['name'];
	$mail=$_POST['mail'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$usename=$_POST['usename'];
	$password=$_POST['password'];
	include('../connect.php');
	$query=mysqli_query($conn,"insert into customer(name,mail,phone,address,usename,password) values ('$name','$mail','$phone','$address','$usename','$password')") or die('Lỗi truy vấn'.mysqli_error());
	if ($query) {
		header('location:hienthi.php');
	}
?>