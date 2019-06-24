<?php 
	$id=$_GET['id'];
	include('../connect.php');
	$sql="select * from account where id=$id";
	$query=mysqli_query($conn,$sql)or die('Lỗi truy vấn'.mysqli_error());
	$result=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Quản lý</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">

	<script src="../../bootstrap/js/jquery.js"></script>
	<script src="../../bootstrap/js/bootstrap.min.js"></script>
	<style>
		nav{
			background-color: #22509b !important;
		}
		nav a{color: #fff !important;}
	</style>
</head>
<body>

	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Xin chào <span style="color: yellow">admin</span></a>
			</div>

			<ul class="nav navbar-nav navbar-right">
				<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>

			</ul>
		</div>
	</nav>

		<div class="main-left col-xs-2 col-sm-2 col-md-2 col-lg-2">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Menu</h3>
				</div>
				<div class="list-group">
					<a href="../quanlysanpham/hienthi.php" class="list-group-item">Quản lý sản phẩm</a>
					<a href="../quanlydanhmuc/hienthi.php" class="list-group-item">Quản lý danh mục</a>
					<a href="../quanlykhachhang/hienthi.php" class="list-group-item">Quản lý khách hàng</a>
					<a href="../quanlyhinhanh/hienthi.php" class="list-group-item">Quản lý hình ảnh sản phẩm</a>
					<a href="../quanlyhoadon/hienthi.php" class="list-group-item">Quản lý hóa đơn</a>
					<!-- <a href="../quanlychitiethoadon/hienthi.php" class="list-group-item">Quản lý chi tiết hóa đơn</a> -->
					<a href="../quanlytintuc/hienthi.php" class="list-group-item">Quản lý tin tức</a>
					<a href="../quanlykienthuc/hienthi.php" class="list-group-item">Quản lý kiến thức</a>
					<a href="../quanlylienhe/hienthi.php" class="list-group-item">Quản lý liên hệ</a>
					<a href="hienthi.php" class="list-group-item">Quản lý tài khoản</a>
					
				</div>
			</div>
		</div>
		<div class="main-right col-xs-10 col-sm-10 col-md-10 col-lg-10">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Cập nhật tài khoản</h3>
				</div>
				<form class="form" action="xuly_update.php" method="post" enctype="multipart/form-data">
					<table class="table table-hover">
						<tr>
							<input type="hidden" name="id" value="<?php echo $result['id'] ?>">
							<td><label for="usename">usename </label></td>
							<td><input type="text" name="usename" id="usename" value="<?php echo $result['usename'] ?>"></td>
						</tr>
						<tr>
							<td><label for="password">password</label>
							<td><input type="text" id="password" name="pass" value="<?php echo $result['password'] ?>"></td>
						</tr>
						<tr>
							<td><label for="auth">auth</label></td>
							<td><input type="text" name="auth" id="auth" value="<?php echo $result['auth'] ?>"></td>
						</tr>
						<tr>
							<td colspan="2" class="text-center"><button type="submit" class="btn btn-default text-center" name="them">Cập nhật</button></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
</body>
</html>
