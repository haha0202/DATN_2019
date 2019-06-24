<?php 
	$name=$_POST['name'];
	$id=$_POST['id'];
	include('../connect.php');
	$query=mysqli_query($conn,"update category set name='$name' where id='$id'")or die("Lỗi truy vấn".mysqli_error());
	if ($query) {
		header('location:hienthi.php');
	}
 ?>