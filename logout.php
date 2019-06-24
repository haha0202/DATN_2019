<?php 
	session_start();
	if (isset($_SESSION['login'])) {
		unset($_SESSION['login']);
		unset($_SESSION['cart']);
		header('location:index.php');
	}else{
		header('location:index.php');
	}

 ?>