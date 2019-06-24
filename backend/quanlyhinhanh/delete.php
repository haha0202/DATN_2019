<?php 
	$id=$_GET['id'];
	include('../connect.php');
	$query=mysqli_query($conn,"delete from product_image where id='$id'")or die('lỗi truy vấn'.mysqli_error());
	if ($query) {
		header('location:hienthi.php');
	}
 ?>