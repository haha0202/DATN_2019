<?php 
	include('../connect.php');
	$custom_id=$_POST['cus_name'];
	$order_date=$_POST['date'];
	$id=$_POST['id'];
	$query=mysqli_query($conn,"update orders set custom_id='$custom_id',order_date='$order_date' where id='$id'")or die('Lỗi truy vấn'.mysqli_error());
	if ($query) {
		header('location:hienthi.php');
	}
 ?>