<?php 
	include('backend/connect.php');
	
	if(isset($_POST['dang_ki'])){
		if (empty($_POST['usename']) || empty($_POST['password']) || empty($_POST['mail']) || empty($_POST['fullname']) || empty($_POST['phone'])) {
			echo "vui lòng nhập đầy đủ thông tin";
		}else{

			$fullname=$_POST['fullname'];
			$phone=$_POST['phone'];
			$usename=$_POST['usename'];
			$password=$_POST['password'];
			$password2=$_POST['password2'];
			$mail=$_POST['mail'];
			$address=$_POST['address'];

			//kiểm tra độ dài của usename và password
			if (strlen($usename)<8 || strlen($password)<8) {
				echo "Usename và password phải nhiều hơn 8 kí tự";
			}else{
				if ($password != $password2) {
					echo "mật khẩu không trùng nhau, vui lòng nhập lại";
				}else{
					$sql="SELECT * from customer where usename='$usename'";
					$query=mysqli_query($conn,$sql)or die('Lỗi truy vấn'.mysqli_error());
					
					$num=mysqli_num_rows($query);
					if ($num==0) {
						$sql_insert="INSERT into customer(name,mail,phone,address,usename,password) values ('$fullname','$mail','$phone','$address','$usename','$password')";
						$query_insert=mysqli_query($conn,$sql_insert);
						if ($query_insert) {
							header('location:index.php');
						}else{
							echo "<p style='color:red; text-align:center; font-weight: bold; font-size: 20px'>Đăng kí không thành công</p>";
						}
					}else{
						echo "<p style='color:red; text-align:center; font-weight: bold; font-size: 20px'>Tài khoản đã tồn tại</p>";
					}
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
		<h1>Đăng ký</h1>
		<div>
			<form action="" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<input type="text" placeholder="Họ và tên...." name="fullname" class="form-control">
				</div>
				<div class="form-group">
					<input type="text" placeholder="Số điện thoại...." name="phone" class="form-control">
				</div>
				<div class="form-group">
					<input type="text" placeholder="Tài khoản...." name="usename" class="form-control">
				</div>
				<div class="form-group">
					<input type="password" placeholder="Mật khẩu...." name="password" class="form-control">
				</div>
				<div class="form-group">
					<input type="password" placeholder="Nhập lại mật khẩu...." name="password2" class="form-control">
				</div>
				<div class="form-group">
					<input type="text" placeholder="Nhập gmail...." name="mail" class="form-control">
				</div>
				<div class="form-group">
					<input type="text" placeholder="Nhập Địa chỉ...." name="address" class="form-control">
				</div>
				<div class="form-group form-action">
					
					<input type="submit" value="Đăng ký" name="dang_ki" class="btn btn-warning">
				</div>
			</form>
		</div>
	</div>
</body>
</html>