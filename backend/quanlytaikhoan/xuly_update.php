<?php 
	$id=$_POST['id'];
	$usename=$_POST['usename'];
	$pass=$_POST['pass'];
	$auth=$_POST['auth'];
	include('../connect.php');
	$sql="update account set usename='$usename',password='$pass',auth='$auth' where id='$id'";
	// var_dump($sql);
	$query=mysqli_query($conn,$sql)or die("Lỗi truy vấn".mysqli_error());
	if ($query) {
		header('location:hienthi.php');
	}
 ?>