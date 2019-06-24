<?php 
	session_start();
	if (isset($_SESSION['dangnhap'])) {
		unset($_SESSION['dangnhap']);
		header('location:dangnhap.php');
	}else{
		header('location:dangnhap.php');
	}
 ?>