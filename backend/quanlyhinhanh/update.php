

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Quản lý</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
	
	<script src="../../bootstrap/js/jquery.js"></script>
	<script src="../../bootstrap/js/bootstrap.min.js"></script>
	<script src="../ckeditor/ckeditor.js"></script>
	<script src="../ckeditor/ckfinder/ckfinder.js"></script>
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
					<a href="hienthi.php" class="list-group-item">Quản lý hình ảnh sản phẩm</a>
					<a href="../quanlyhoadon/hienthi.php" class="list-group-item">Quản lý hóa đơn</a>
					
					<a href="../quanlytintuc/hienthi.php" class="list-group-item">Quản lý tin tức</a>
					<a href="../quanlykienthuc/hienthi.php" class="list-group-item">Quản lý kiến thức</a>
					<a href="../quanlylienhe/hienthi.php" class="list-group-item">Quản lý liên hệ</a>
					<a href="../quanlytaikhoan/hienthi.php" class="list-group-item">Quản lý tài khoản</a>
					
				</div>
			</div>
		</div>
		<?php 
			$id=$_GET['id'];
			include('../connect.php');
			$qr=mysqli_query($conn,"select * from product_image where id='$id'")or die('Lỗi truy vấn'.mysqli_error());
			$rs=mysqli_fetch_array($qr);
			$img=explode('/', $rs['hinh_anh']);
		?>
		<div class="main-right col-xs-10 col-sm-10 col-md-10 col-lg-10">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Cập nhật hình ảnh</h3>
				</div>
				<form class="form" action="xuly_update.php" method="post" enctype="multipart/form-data">
					<table class="table table-hover">
						<tr>
							<input type="hidden" name="id" value="<?php echo $rs['id'] ?>">
							<td><label for="name">Tên sản phẩm</label></td>
							<td>
								<select name="product_name" id="">
								<?php 
									include('../connect.php');
									$query=mysqli_query($conn,"select product.id, product.name from product") or die('Lỗi truy vấn'.mysqli_error());
									while($result=mysqli_fetch_array($query)){
									if($rs['pro_id']==$result['id']){
								?>
								<option selected="selected" value="<?php echo $result['id'] ?>"><?php echo $result['name'] ?></option>
								<?php }else{ ?>
								<option value="<?php echo $result['id'] ?>"><?php echo $result['name'] ?></option>
								<?php }} ?>
								</select>
							</td>
						</tr>
						<tr>
							<td><label for="hinhanh">Hình ảnh</label></td>
							<td>
								<input type="file" name="hinhanh" id="hinhanh">
								<img src="upload/<?php echo $img[0] ?>" alt="" width="200" height="200">
								<input type="file" name="hinhanh" id="hinhanh">
								<img src="upload/<?php echo $img[1] ?>" alt="" width="200" height="200">
								<input type="file" name="hinhanh" id="hinhanh">
								<img src="upload/<?php echo $img[2] ?>" alt="" width="200" height="200">
								<input type="file" name="hinhanh" id="hinhanh">
								<img src="upload/<?php echo $img[3] ?>" alt="" width="200" height="200">
								<input type="file" name="hinhanh" id="hinhanh">
								<img src="upload/<?php echo $img[4] ?>" alt="" width="200" height="200">
							</td>
						</tr>
						<tr>
							<td colspan="2" class="text-center"><button type="submit" class="btn btn-default text-center" name="them">Cập nhật</button></td>
						</tr>
					</table>
						
					</div>
					
					
				</form>
			</div>
		</div>


</body>
</html>
