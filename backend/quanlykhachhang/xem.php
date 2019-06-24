<?php
	
	$id=$_GET['id'];
	include('../connect.php');
	

	$sql_pro="select
				orders.custom_id as custom_id
				product.id as pro_id,
				product.name,
				product.avatar,
				order_detail.quantity,
				order_detail.price,
				SUM(order_detail.quantity*order_detail.price) as sub_total
			from order_detail join product on order_detail.pro_id=product.id
			join orders on order_detail.order_id=orders.id
			where order_detail.custom_id=$id
			group by order_detail.pro_id";
	$query_pro=mysqli_query($conn,$sql_pro);
	
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
		.header a{margin-top: 10px;}
		.clear{clear: both;}
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
					<a href="hienthi.php" class="list-group-item">Quản lý chi tiết hóa đơn</a>
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
					<h3 class="panel-title">Chi tiết hóa đơn</h3>
				</div>

				<div class="header">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<div class="panel-body">
							Chi tiết hóa đơn
						</div> 
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						
					</div>
				</div>
				<div class="clear"></div>
				<div class="row">
					<div class="col-md-6">
						<h3>Thông tin hóa đơn</h3>
						<table class="table table-hover">
							<tr>
								<td>ID</td>
								<td></td>
							</tr>
							<tr>
								<td>Ngày tạo</td>
								<td></td>
							</tr>
							
						</table>
					</div>
					<div class="col-md-6">
						<h3>Thông tin khách hàng</h3>
						<table class="table table-hover">
							<tr>
								<td>Họ và tên</td>
								<td></td>
							</tr>
							<tr>
								<td>Điện thoại</td>
								<td></td>
							</tr>
						</table>
					</div>
				</div>

				<h3>Thông tin chi tiết sản phẩm đã mua</h3>
				<table class="table table-hover">
					<tr>
						<th>ID</th>
						<th>Ảnh</th>
						<th>Tên</th>
						<th>Số lượng</th>
						<th>Giá</th>
						<th>Thành tiền</th>
					</tr>
					<?php foreach ($query_pro as $key => $value) { ?>
					<tr>
						<td><?php echo $value['pro_id']?></td>
						<td><img src="../quanlysanpham/upload/<?php echo $value['avatar'] ?>" alt="" width="80" height="80"></td>
						<td><?php echo $value['name']?></td>
						<td><?php echo $value['quantity']?></td>
						<td><?php echo $value['price']?></td>
						<td><?php echo $value['sub_total']?></td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>

</body>
</html>