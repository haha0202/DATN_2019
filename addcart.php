<?php 
	session_start();
	
	$id = isset($_GET['id']) ? (int)$_GET['id'] : 0; 
	include('backend/connect.php');
	$sql="select * from product where id = '$id'";
	$query=mysqli_query($conn, $sql);
	$result=mysqli_fetch_array($query);
	
	
	if ($query) {
		//kiểm tra đã tồn tại session['cart'] hay chưa
		if (isset($_SESSION['cart'])) {
			//đã tồn tại

			if ($_SESSION['cart'][$id]) {
				$_SESSION['cart'][$id]['qty'] +=$_SESSION['quantity'];
				
			}else{
				$_SESSION['cart'][$id]['qty']=$_SESSION['quantity'];
			}
			unset($_SESSION['quantity']);
			$_SESSION['cart'][$id]['name']=$result['name'];
			$_SESSION['cart'][$id]['price']=$result['price']; 
			$_SESSION['cart'][$id]['on_sale']=$result['Khuyen_mai'];
			$_SESSION['cart'][$id]['image']=$result['avatar'];
		


			header('location:cart.php');exit();
		}else{
			//chưa tồn tại
			
			$_SESSION['cart'][$id]['qty']=$_SESSION['quantity'];
			unset($_SESSION['quantity']);
			$_SESSION['cart'][$id]['name']=$result['name'];
			$_SESSION['cart'][$id]['price']=$result['price'];
			$_SESSION['cart'][$id]['on_sale']=$result['Khuyen_mai'];
			$_SESSION['cart'][$id]['image']=$result['avatar'];
			header('location:cart.php');exit(); 
		}
	}
	
 ?>