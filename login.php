<?php 
	include('backend/connect.php');
	session_start();
	if(isset($_SESSION['login'])){
		header('location:index.php');
	}else{
		if(isset($_POST['dangnhap'])){
			if(empty($_POST['usename']) || empty($_POST['password'])){
				echo "Vui lòng nhập đầy đủ thông tin";
			}else{
				$usename=$_POST['usename'];
				$password=$_POST['password'];
				$sql="select * from customer where usename='$usename' and password='$password'";
				$query=mysqli_query($conn,$sql);
				$num=mysqli_num_rows($query);
				$user = mysqli_fetch_array($query);
				if($num==0){
					echo "tài khoản hoặc mật khẩu không đúng";
				}else{
					$_SESSION['login']=$user;
					// $_SESSION['user_infor']=$user;
					// echo "<pre>";
					// print_r($_SESSION['login']);die;
					// echo "</pre>";
					header('location:index.php');
				}
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	
	<script src="bootstrap/js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<style>
		*{
			padding: 0;
			margin: 0;
		}
		/* body{
			background-image: url('../../public/image/Nancy-4.jpg');
			background-repeat: no-repeat;
			background-position: center center;
			background-size: cover;
			background-attachment: fixed;

		} */
		.container{
			width: 400px;
			background-color: rgba(128, 0, 128, 0.7);
			text-align: center;
			position: absolute;
			top: 50%;
			right: 50%;
			transform: translate(50%, -50%);
			border-radius: 10px;
			box-shadow: 2px 2px 5px 5px purple;
		}
		h1{
			text-transform: uppercase;
			color: white;
			margin-bottom: 15px;
		}
		.form-group{
			width: 100%;
			float: left;
			margin-bottom: 10px;
		}
		.form-control{
			width: 100%;
			padding: 7px;
			box-sizing: border-box;
			outline: none;
		}
		.form-control::-moz-placeholder{
			color: green;
		}
		.btn{
			border: 0;
			padding: 10px 15px;
			font-weight: bold;
		}
		.btn-login{
			color: white;
			cursor: pointer;
			background-color: blue;
		}
		.btn-register{
			color: white;
			cursor: pointer;
			background-color: orange;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Đăng nhập</h1>
		<div>
			<form action="" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<input type="text" placeholder="Tài khoản...." name="usename" class="form-control">
				</div>
				<div class="form-group">
					<input type="password" placeholder="Mật khẩu...." name="password" class="form-control">
				</div>
				<div class="form-group form-action">
					<input type="submit" value="Đăng nhập" name="dangnhap" class="btn btn-login">
					<a name="dangky" href="" class="btn btn-warning">Đăng ký</a>
				</div>
			</form>
		</div>
	</div>
</body>
</html>