<?php 
	$name=$_POST['name'];
	include('../connect.php');
	$query=mysqli_query($conn,"insert into category(name) values ('$name')") or die('Lỗi truy vấn'.mysqli_error());
	if ($query) {
		header('location:hienthi.php');
	}

 ?>