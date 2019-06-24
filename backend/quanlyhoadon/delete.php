<?php 
	$id=$_GET['id'];
	include('../connect.php');
	$query=mysqli_query($conn,"delete from orders where id='$id'")or die('Lỗi truy vấn'.mysqli_error());
	if ($query) {
		header('location:hienthi.php');
	}
 ?>