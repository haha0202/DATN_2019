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
		.main-left{
			padding: 0 15px 0 15px;
			box-sizing: border-box;
		}
		.main-right{
			padding: 0 15px 0 15px;
			box-sizing: border-box;
		}
		.menu-left a.active{background-color: #eff1f4;border:0;color: #333;}
		.menu-left a:hover{background-color: #eff1f4}
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
		<div class="panel panel-primary menu-left">
			<div class="panel-heading">
				<h3 class="panel-title">Menu</h3>
			</div>
			<div class="list-group">
				<a href="hienthi.php" class="list-group-item">Quản lý sản phẩm</a>
				<a href="../quanlydanhmuc/hienthi.php" class="list-group-item">Quản lý danh mục</a>
				<a href="../quanlykhachhang/hienthi.php" class="list-group-item">Quản lý khách hàng</a>
				<a href="../quanlyhinhanh/hienthi.php" class="list-group-item">Quản lý hình ảnh sản phẩm</a>
				<a href="../quanlyhoadon/hienthi.php" class="list-group-item">Quản lý hóa đơn</a>
				
				<a href="../quanlytintuc/hienthi.php" class="list-group-item">Quản lý tin tức</a>
				<a href="../quanlykienthuc/hienthi.php" class="list-group-item">Quản lý kiến thức</a>
				<a href="../quanlylienhe/hienthi.php" class="list-group-item">Quản lý liên hệ</a>
				<a href="../quanlytaikhoan/hienthi.php" class="list-group-item">Quản lý tài khoản</a>
				
			</div>
		</div>
	</div>
	<div class="main-right col-xs-10 col-sm-10 col-md-10 col-lg-10">
		<?php 
			
			include('../connect.php');
			
			$sql="SELECT product.name,month(orders.order_date) as month,SUM(order_detail.quantity) as total FROM order_detail JOIN orders ON order_detail.order_id=orders.id JOIN product ON product.id=order_detail.pro_id 
				WHERE orders.order_date BETWEEN '2019-06-01' And '2019-06-30'
				GROUP BY product.name,month(orders.order_date)
				ORDER BY SUM(order_detail.quantity) DESC";
			$query=mysqli_query($conn,$sql);
			$rs=mysqli_fetch_array($query);
		?>


			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"> Thống kê</h3>
				</div>
				<div class="header">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<div class="panel-body">
							Danh sách sản phẩm
						</div> 
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<!-- <form action="" method="post">
							<input type="date" name=thang_st>
							<input type="date" name=thang_end>
							<button type="submit" name="submit">chọn</button>
						</form> -->
					</div>
				</div>


				<table class="table table-hover">
					<thead>
						<tr>
							
							<th>Tên</th>
							<th>Tháng</th>
							<th>Số lượng</th>
							
							
						</tr>
					</thead>
					<tbody> 
						<?php 
						foreach ($query as $key => $value) { ?>	
							<tr>
								<td><?php echo $value['name']; ?></td>
								<td><?php echo $value['month']; ?></td>
								<td><?php echo $value['total']; ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
	</div>




</body>
</html>
