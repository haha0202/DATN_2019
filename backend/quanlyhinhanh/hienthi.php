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
		.header a{margin-top: 10px;}
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
					<a href="hienthi.php" class="list-group-item">Quản lý hình ảnh sản phẩm</a>
					<a href="../quanlyhoadon/hienthi.php" class="list-group-item">Quản lý hóa đơn</a>
					
					<a href="../quanlytintuc/hienthi.php" class="list-group-item">Quản lý tin tức</a>
					<a href="../quanlykienthuc/hienthi.php" class="list-group-item">Quản lý kiến thức</a>
					<a href="../quanlylienhe/hienthi.php" class="list-group-item">Quản lý liên hệ</a>
					<a href="../quanlytaikhoan/hienthi.php" class="list-group-item">Quản lý tài khoản</a>
					
				</div>
			</div>
		</div>
		<div class="main-right col-xs-10 col-sm-10 col-md-10 col-lg-10">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Quản lý hình ảnh sản phẩm</h3>
				</div>

				<div class="header">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<div class="panel-body">
							Danh sách hình ảnh
						</div> 
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<form action="" method="POST" class="form-inline" role="form">


							<a href="insert.php" class="btn btn-info">Thêm hình ảnh</a>
						</form>
					</div>
				</div>
				<?php 

					include('../connect.php');
					$query = mysqli_query($conn,"select product_image.id, product.name as product_name, product_image.hinh_anh from product_image join product on product_image.pro_id=product.id ") or die('Lỗi truy vấn');

				?>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>STT</th>
							<th>Tên sản phẩm</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
					<?php  
						$a=1;
						while($result=mysqli_fetch_array($query)){
							$img=explode('/', $result['hinh_anh']);
							
					?>	
						<tr>
							<td><?php echo $a ?></td>
							<td><?php echo $result['product_name'] ?></td>
							
							<td>
								<a href="update.php?id=<?=$result['id']?>" class="btn btn-warning">Sửa</a>
								<a href="delete.php?id=<?=$result['id']?>" class="btn btn-danger">Xóa</a>
								<a href="xem.php?id=<?=$result['id']?>" class="btn btn-primary">Xem</a>
										
							</td>
						</tr>
						<?php $a++;} ?>
					</tbody>
				</table>
			</div>
		</div>

</body>
</html>
