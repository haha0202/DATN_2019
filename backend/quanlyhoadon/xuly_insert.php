<?php 
	include('../connect.php');
	$custom_id=$_POST['cus_name'];
	$date=$_POST['date'];
	$query=mysqli_query($conn,"insert into orders(custom_id,order_date) values ('$custom_id','$date')")or die('Lỗi truy vấn'.mysqli_error());
	if ($query) {
		header('location:hienthi.php');
	}
?>