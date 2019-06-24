<!-- <?php 
	// include('../connect.php');
	// session_start();
	// if (isset($_POST['dangky'])) {
	// 	if (empty($_POST['usename']) || empty($_POST['password'])) {
	// 		echo "Vui lòng nhập đầy đủ thông tin";
	// 	}else{
	// 		$usename=$_POST['usename'];
	// 		$password=$_POST['password'];
	// 		$password2=$_POST['password2'];
	// 		$auth=$_POST['auth'];
	// 		//kiểm tra độ dài của usename và password
	// 		if (strlen($usename)<6 || strlen($password)<6) {
	// 			echo "usename và password phải nhiều hơn 6 ký tự";
	// 		}else{
	// 			if ($password2 != $password) {
	// 				echo "Mật khẩu không trùng nhau";
	// 			}else{
	// 				//kiểm tra tên người dùng đã tồn tại hay chưa
	// 				$sql="select * from account where usename='$usename'";
	// 				$query=mysqli_query($conn,$sql);
	// 				$num=mysqli_num_rows($query);
	// 				if ($num==0) {
	// 					$sql2="insert into account(usename,password,auth) values ('$usename','$password','$auth')";
	// 					$them=mysqli_query($conn,$sql2);
	// 					if ($them) {
	// 						echo "Đăng ký thành công";
	// 					}else{
	// 						echo "Đăng ký không thành công";
	// 					}
	// 				}else{
	// 					echo "Tên tài khoản đã tồn tại";
	// 				}
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
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
	
	<script src="../../bootstrap/js/jquery.js"></script>
	<script src="../../bootstrap/js/bootstrap.min.js"></script>
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
					<input type="text" placeholder="Tài khoản...." name="usename" class="form-control">
				</div>
				<div class="form-group">
					<input type="password" placeholder="Mật khẩu...." name="password" class="form-control">
				</div>
				<div class="form-group">
					<input type="password" placeholder="Mật khẩu...." name="password2" class="form-control">
				</div>
				<div class="form-group">
					<input type="text" value="2" name="auth" class="form-control">
				</div>
				<div class="form-group form-action">
					
					<input type="submit" value="Đăng Ký" name="dangky" class="btn btn-register">
				</div>
			</form>
		</div>
	</div>
</body>
</html> -->