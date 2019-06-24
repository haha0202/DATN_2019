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
			$qr = mysqli_query($conn,"select product.id,product.name,product.avatar, category.name as category_name, product.price, product.mieu_ta, product.Khuyen_mai, product.quantity_pro from product join category on product.cate_id=category.id") or die('Lỗi truy vấn');
 

		?>


			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Quản lý sản phẩm</h3>
				</div>
				<div class="header">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<div class="panel-body">
							Danh sách sản phẩm
						</div> 
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
						<form action="" method="POST" class="form-inline" role="form">


							<a href="insert_product.php" class="btn btn-info">Thêm sản phẩm</a>
						</form>
					</div>
				</div>


				<table class="table table-hover">
					<thead>
						<tr>
							<th>STT</th>
							<th>Tên</th>
							<th>Hình ảnh</th>
							<th>Danh mục</th>
							<th>Giá</th>
							<th>Miêu tả</th>
							<th>Khuyến mãi</th>
							<th>Số lượng</th>
							<th></th>
						</tr>
					</thead>
					<tbody> 
						<?php 
							$a=1;
							while ($result=mysqli_fetch_array($qr)) {
								echo '<tr>';
									echo '<td>'. $a .'</td>';
									echo '<td>'. $result['name'] .'</td>';
									echo '<td><img src="upload/'.$result['avatar'].'" width="80" alt=""></td>';
									echo '<td>'. $result['category_name'] .'</td>';
									echo '<td>'. $result['price'] .'</td>';
									echo '<td>'. $result['mieu_ta'] .'</td>';
									echo '<td>'. $result['Khuyen_mai'] .'</td>';
									echo '<td>'. $result['quantity_pro'] .'</td>';
									
									
										echo '<td>
												<a href="update.php?id='.$result['id'].'" class="btn btn-warning">Sửa</a>
												<a href="delete.php?id='.$result['id'].'" class="btn btn-danger">Xóa</a>
												
											</td>';
								echo '</tr>';
								$a++;

							}
						?>	
					</tbody>
				</table>
			</div>
	</div>




</body>
</html>
