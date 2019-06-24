<?php 
include('../connect.php');
	$id=$_POST['id'];
	$name=$_POST['name'];
	$mail=$_POST['mail'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$usename=$_POST['usename'];
	$password=$_POST['password'];
	
	$sql="update customer
							   set 	  name='$name',
							   		  mail='$mail',
							   		  phone='$phone',
							   		  address='$address',
							   		  usename='$usename',
							   		  password='$password'
							   where  id='$id'";
	
	$query=mysqli_query($conn,$sql) or die("Lỗi truy vấn".mysqli_error());
	
	if ($query) {
		header('location:hienthi.php');
	}
 ?>