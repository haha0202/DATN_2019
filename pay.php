<?php 
	session_start();
	include('backend/connect.php');

	$sql_cate="select * from category";
	$query_cate=mysqli_query($conn,$sql_cate);

	$sql_new="select * from news limit 4";
	$query_new=mysqli_query($conn,$sql_new);

	$sql_category="select * from category";
	$query_category=mysqli_query($conn,$sql_category);

	

	$thanhtien=0;
	$tongtien=0;

	
	if (isset($_SESSION['login'])) {
		if (isset($_POST['pay'])) {

			$id=$_SESSION['login']['id'];
			$date=date("Y-m-d");
			
			// $pro_id=$_SESSION['cart']['id'];
			// $qty=$_SESSION['cart']['id']['qty'];
			// $price=$_SESSION['cart']['id']['price'];
			
			$sql1="INSERT into orders(custom_id,order_date) values ('$id','$date')";
			$query1=mysqli_query($conn,$sql1)or die('Lỗi truy vấn'.mysqli_query());
			$od_id=mysqli_insert_id($conn);
			foreach ($_SESSION['cart'] as $key => $value) {
				$pro_id=$key;
				$qty=$value['qty'];
				$price=$value['price'];
				$on_sale=$value['on_sale'];
				if ($on_sale==0) {
					$sql2="INSERT INTO order_detail(pro_id,order_id,quantity,price) values('$pro_id','$od_id','$qty','$price')";
					$qr=mysqli_query($conn,$sql2)or die('Lỗi truy vấn'.mysqli_error());
				}else{
					$sql2="INSERT INTO order_detail(pro_id,order_id,quantity,price) values('$pro_id','$od_id','$qty','$on_sale')";
					$qr=mysqli_query($conn,$sql2)or die('Lỗi truy vấn'.mysqli_error());
				}
				$sql_product="select * from product where id=$pro_id";
				$query_product=mysqli_query($conn,$sql_product);
				
				$sr_product=mysqli_fetch_array($query_product);
				// echo "<pre>";
				// print_r($sr_product['quantity_pro']);die;
				// echo "</pre>";

				$conlai=$sr_product['quantity_pro']-$qty;
				$sql_ud="UPDATE product set quantity_pro=$conlai where id=$pro_id ";
				$qr_ud=mysqli_query($conn,$sql_ud);
			}
			
			if ($query1) {
				//include('sendmail.php');
				
				unset($_SESSION['cart']);
			}
		} 


?>
<?php 
	// if (isset($_POST['pay'])) {
	// 	if(isset($_SESSION['login'])){
	// 		$type=0;
	// 		$id=$_SESSION['user_infor']['id'];
	// 		$date=date("Y-m-d");
	// 		$sql1="INSERT into orders(custom_id,order_date,type) values ('$id','$date','$type')";
	// 		$query1=mysqli_query($conn,$sql1)or die('Lỗi truy vấn'.mysqli_query());
	// 		if ($query1) {
	// 			echo "Thanh Toán Thành công";
	// 		}
	// 	} else {

	// 	}
	// }
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Thanh toán</title>
	<link rel="stylesheet" href="public/css/pay.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="owl/dist/assets/owl.theme.default.min.css">
  	<link rel="stylesheet" type="text/css" href="owl/dist/assets/owl.carousel.min.css">
  	
</head>
<body>
	<div class="container">
		<header class="header">
			<div class="row">
				<div class="logo col-xs-3 col-sm-3 col-md-3 col-lg-3 text-center">
					
						<a href="index.php">
							<img src="public/image/logo tron.png" width="100" height="100" alt="">
						</a>
					
				</div>
				<div class="title-name col-xs-5 col-sm-5 col-md-5 col-lg-5 text-center">
					
						<p class="p1">Công ty cổ phần dược phẩm linh khuê đường</p>
						<p class="p2">Hotline: 0948.322.668 - 024.6386.3003</p>
					
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<div>
						<ul class="nav navbar-nav navbar-right">
							<li style="padding-top: 15px; font-size: 18px">Xin chào: <span style="color: blue"><?php echo $_SESSION['login']['usename'] ?></span></li>
							<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
							<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>
						</ul>
					</div>
					<div>
						<form class="navbar-form navbar-right" method="post" action="search.php" enctype="multipart/form-data">
							<div class="form-group">
								<input name="search-txt" type="text" class="form-control" placeholder="Tìm kiếm">
							</div>
							<button name="search" type="submit" class="btn btn-default">Tìm kiếm</button>
						</form>
					</div>
				</div>
			</div>
		</header>

		<!-- kết thúc header -->

		<nav class="menu">
			<ul>
				<li><a href="index.php" class="glyphicon glyphicon-home"></a></li>
				<li><a href="index.php">Trang chủ</a></li>
				<li><a href="introduce.php">Giới thiệu</a></li>
				<li>
					<a href="product.php">Sản phẩm</a>
					<ul>
						<?php 
							foreach ($query_cate as $key => $value) {
						?>
						<li><a href="detail-cate-product.php?cate_id=<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a></li>
						<?php } ?>
						
					</ul>
				</li>
				<li><a href="knowledge.php">Kiến thức</a></li>
				<li><a href="news.php">Tin tức</a></li>
				<li><a href="cooperate.php">Hợp tác</a></li>
				<li><a href="contact.php">Liên hệ</a></li>
			</ul>
		</nav>
		
		<!-- kết thúc nav menu -->

		<main class="main">
			<div class="row">
				<div class="main-navbar-left hidden-sm hidden-xs col-md-3 col-lg-3 ">
					<div class="cate-pro">
						<h3 class="title_cate">Danh mục sản phẩm</h3>
						<ul>
							<?php 
								while ($result_category=mysqli_fetch_array($query_category)) {
							?>
							<li><a href="detail-cate-product.php?cate_id=<?php echo $result_category['id'] ?>"><?php echo $result_category['name'] ?></a></li>
							<?php } ?>
						</ul>
					</div>
					<div class="cate-pro">
						<h3 class="title_cate">Tin tức</h3>
						<ul>
							<?php 
								while ($result_new=mysqli_fetch_array($query_new)) {
							?>
							<li><a href="#"><?php echo $result_new['name'] ?></a></li>
							<?php } ?>
						</ul>
					</div>
					<!-- <div class="cate-pro">
						<h3 class="title_cate">Thống kê</h3>
						<ul class="list-group">
							<li class="list-group-item">
								<span class="badge">5</span>
								Đang online:
							</li>
							<li class="list-group-item">
								<span class="badge">10</span>
								Trong ngày:
							</li>
							<li class="list-group-item">
								<span class="badge">15</span>
								Hôm qua:
							</li>
							<li class="list-group-item">
								<span class="badge">15</span>
								Trong tháng:
							</li>
							<li class="list-group-item">
								<span class="badge">15</span>
								Tổng truy cập:
							</li>
						</ul>
					</div> -->
				</div>
				<div class=" block_content col-xs-12  col-md-9 col-lg-9">
					<h1 class="title_index">
						<span>Giỏ hàng</span>
					</h1>
					<div class="content">
						<?php if (isset($_SESSION['cart'])) { ?>
						<table class="table table-hover">
							<thead>
								<tr>
									<th>STT</th>
									<th>Ảnh</th>
									<th>Tên</th>
									<th>Giá</th>
									<th>Số lượng</th>
									<th>Thành tiền</th>
								</tr>
							</thead>
							<?php 
								$st=1;
								foreach ($_SESSION['cart'] as $key => $value) { 

								?>
								<tr>
									<td><?php echo $st ?></td>
									<td><img src="public/image/<?php echo $value['image'] ?>" width="60" height="60"></td>

									<td><?php echo $value['name'] ?></td>
									<td><?php echo number_format($value['price'],0) ?> đ</td>
									<td><?php echo $value['qty'] ?></td>
									<?php 
										if ($value['on_sale']) { 
									?>
										<td><?php echo number_format($thanhtien=($value['qty']*$value['on_sale']),0) ?> đ</td>
									<?php }else{ ?>
										<td><?php echo number_format($thanhtien=($value['qty']*$value['on_sale'])) ?> đ</td>
									<?php } ?>
									
								</tr>
								<?php $tongtien+=$thanhtien;$st++;} ?>
								<tr>
									<td colspan="6">Tổng giá trị đơn hàng: <span style="color: orange"><?php echo number_format($tongtien,0) ?></span> đ</td>
								</tr>
							</tbody>
						</table>
						<?php } ?>
						<div class="pay">
							<form action="" method="post">
								<!-- <h3 class="cus-info">Thông tin khách hàng</h3>
								<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
									Họ và tên
								</div>
								<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
									<input type="text" name="name" id="name" class="input">
								</div>
								<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
									Điện thoại
								</div>
								<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
									<input type="text" name="phone" id="phone" class="input">
								</div>
								<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
									Địa chỉ
								</div>
								<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
									<input type="text" name="address" id="address" class="input">
								</div>
								<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
									Email
								</div>
								<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
									<input type="text" name="mail" id="mail" class="input">
								</div>
								 -->
								<div class="btn_thanhtoan">
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
									<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
										
										<!-- Trigger the modal with a button -->
										<button type="submit" name="pay" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Đặt hàng</button>

										<!-- Modal -->
										
										<div id="myModal" class="modal fade" role="dialog">
											<div class="modal-dialog">

												<!-- Modal content-->
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal">&times;</button>
														<h4 class="modal-title"> Thông báo </h4>
													</div>
													<div class="modal-body">
														<p> Cảm ơn bạn đã mua hàng tại linhkhueduong</p>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
													</div>
												</div>

											</div>
										</div>
										
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		
		</main>

	<!-- kết thúc main -->
	
	
		<footer class="footer">
			<div class="container foot">
				<div class="row ">
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
						
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-center">
						<p class="name-footer-1">copyright@ Công ty cổ phần dược phẩm linh khuê đường</p>
						<p>Địa chỉ: Số 39, ngách 46/12 , Ngõ 46 Hào Nam, Ô chợ dừa, Đống Đa, Hà Nội. Điện thoại: 024.6386.3003</p>
						<p>Hotline: 0948.322.668 - Email: dongyduoclinhkhueduong@gmail.com</p>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="padding-top: 27px">
						<p style="padding-left: 60px">Powered by: <a href="#">haha.studio</a></p>
					</div>
				</div>
				</div>
		</footer>
		
			<!-- kết thúc footer -->
	</div>
	<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
	<script src="owl/dist/owl.carousel.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	
</body>
</html>

<?php } ?>
