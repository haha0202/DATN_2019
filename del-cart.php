<?php 
	session_start();
	if (isset($_GET['id'])) {
		$id=$_GET['id'];
		$cart=$_SESSION['cart'];
		if ($id==0) {
			unset($_SESSION['cart']);
		}else{
			unset($_SESSION['cart'][$id]);
		}
		header('location: cart.php');
	}
	
 ?>