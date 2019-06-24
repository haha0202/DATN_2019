<?php 
	include('../connect.php');

	$id=$_GET['id'];

	$sql = ("delete from product where id='$id'");
	$resu=mysqli_query($conn,$sql) or die('lỗi truy vấn');
	if($resu){
		header("location:hienthi.php");
	}

?>