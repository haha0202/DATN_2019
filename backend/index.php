<?php 
	session_start();
	if (isset($_SESSION['dangnhap'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Quản lý</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

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
				<li><a href="dangnhap/dangxuat.php"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>

			</ul>
		</div>
	</nav>

		<div class="main-left col-xs-2 col-sm-2 col-md-2 col-lg-2">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Menu</h3>
				</div>
				<div class="list-group">
					<a href="index.php" class="list-group-item">Trang chủ</a>
					<a href="thongke/hienthi.php" class="list-group-item"> Thống kê </a>

					<a href="quanlysanpham/hienthi.php" class="list-group-item">Quản lý sản phẩm</a>
					<a href="quanlydanhmuc/hienthi.php" class="list-group-item">Quản lý danh mục</a>
					<a href="quanlykhachhang/hienthi.php" class="list-group-item">Quản lý khách hàng</a>
					<a href="quanlyhinhanh/hienthi.php" class="list-group-item">Quản lý hình ảnh sản phẩm</a>
					<a href="quanlyhoadon/hienthi.php" class="list-group-item">Quản lý hóa đơn</a>
					<!-- <a href="quanlychitiethoadon/hienthi.php" class="list-group-item">Quản lý chi tiết hóa đơn</a> -->
					<a href="quanlytintuc/hienthi.php" class="list-group-item">Quản lý tin tức</a>
					<a href="quanlykienthuc/hienthi.php" class="list-group-item">Quản lý kiến thức</a>
					<a href="quanlylienhe/hienthi.php" class="list-group-item">Quản lý liên hệ</a>
					<?php if ($_SESSION['dangnhap']['auth']==1) { ?>
						<a href="quanlytaikhoan/hienthi.php" class="list-group-item">Quản lý tài khoản</a>
					<?php } ?>
					<!-- <a href="quanlytaikhoan/hienthi.php" class="list-group-item">Quản lý tài khoản</a> -->
					
					
				</div>
			</div>
		</div>
		<div class="main-right col-xs-10 col-sm-10 col-md-10 col-lg-10">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Menu</h3>
				</div>
				<div class="panel-body">
					Panel content
				</div>
			</div>
		</div>

</body>
</html>
<?php
	}else{
		header('location:dangnhap/dangnhap.php');
	} 
?>