<?php 
	session_start();
	include('backend/connect.php');
	$id=$_GET['id'];
	$sql_cate="select * from category";
	$query_cate=mysqli_query($conn,$sql_cate);

	$sql_new="select * from news limit 4";
	$query_new=mysqli_query($conn,$sql_new);

	$sql_img="select * from product_image where pro_id='$id'";
	$query_img=mysqli_query($conn,$sql_img);
	$result_img=mysqli_fetch_array($query_img);

	$sql_pro="select * from product where id='$id'";
	$query_pro=mysqli_query($conn,$sql_pro);
	$result_pro=mysqli_fetch_array($query_pro);

	$sql_category="select * from category";
	$query_category=mysqli_query($conn,$sql_category);

	if (isset($_GET['quantity'])) {
		$id=$_GET['id'];
		$_SESSION['quantity']=$_GET['quantity'];
		header('location: addcart.php?id='.$id.'');

	}

	if (isset($_SESSION['login'])) {
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $result_pro['name'] ?></title>
	<link rel="stylesheet" href="public/css/detail-product.css">
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
						<h3 class="title_cate">Danh sách sản phẩm</h3>
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
							<li><a href="detail-new.php?id=<?php echo $result_new['id'] ?>"><?php echo $result_new['name'] ?></a></li>
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
								<span class="badge">15683</span>
								Tổng truy cập:
							</li>
						</ul>
					</div> -->
				</div>
				<div class=" block_content col-xs-12  col-md-9 col-lg-9">
					<h1 class="title_index">
						<span>Chi tiết sản phẩm</span>
					</h1>
					<div class="show-pro">
						<div class="content">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<div class="img-pro">
									<div class="img-cap">
										<img src="backend/quanlysanpham/upload/<?php echo $result_pro['avatar'] ?>" alt="">
									</div>
									<?php 

										$sql_img_pro="SELECT * from product_image where pro_id=$id";
										$query_img_pro=mysqli_query($conn,$sql_img_pro)or die('Lỗi truy vấn'.mysqli_error());
										$rs_img_pro=mysqli_fetch_array($query_img_pro);
										$img_pro=explode('/', $rs_img_pro['hinh_anh']);
									?>
									<div class="img-more row">
										<?php for ($i=0; $i < count($img_pro); $i++) { ?>
										<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
											
												<img src="backend/quanlyhinhanh/upload/<?php echo $img_pro[$i] ?>" alt="">
											
										</div>
										<?php } ?>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<div class="detail-content">
									<form action="" method="get">
									<ul>
										<li style="font-size: 18px;"><?php echo $result_pro['name'] ?></li>
										<?php if ($result_pro['Khuyen_mai']>0) {?>
											<li>Giá bán: <span style="color: #333;"><s><?php echo number_format($result_pro['price'],0) ?> VNĐ</s></span></li>
											<li>Khuyến mãi: <span style="color: red;"><?php echo number_format($result_pro['Khuyen_mai'],0) ?> VNĐ</span></li>
										<?php }else{ ?>
											<li>Giá bán: <span style="color: #333;"><?php echo number_format($result_pro['price'],0) ?> VNĐ</span></li>
										<?php } ?>
										<?php if ($result_pro['quantity_pro']>0) { ?>
										<li>
											Tình trạng: <span style="color: green">Còn hàng</span>
										</li>
										<?php }else{ ?>
											<li>
											Tình trạng: <span style="color: green">Hết hàng</span>
										</li>
										<?php } ?>
										<li id="qtv">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 " style="padding-left: 0">
												<label for="qtv" style="font-weight: bold">Số lượng: </label>
											</div>
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 ">
												<div id="qtv" class="center valign cm-value-changer">

													
														<input style="width: 50px!important;" type="number" name="quantity" value="1">
														
													
												</div> 
											</div>
											<div class="clear"></div>

										</li>
										<li>
											<input type="hidden" name="id" value="<?= $result_pro['id'] ?>">
											<!-- <button type="button" style="padding: 8px 25px;border: none;background:linear-gradient(#08d63b, green);color: #fff;">Mua hàng</button> -->
											<button type="submit" class="btn btn-success">Mua hàng</button>
											
										</li>
									</ul>
									</form>
								</div>
							</div>
						</div>
						<div class="clear"></div>
						<div class="detail-pro">
							<ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#home">Miêu tả</a></li>
								<li><a data-toggle="tab" href="#menu1">Bình luận</a></li>

							</ul>

							<div class="tab-content">
								<div id="home" class="tab-pane fade in active">
									<?php echo $result_pro['mieu_ta'] ?>
								</div>
								<div id="menu1" class="tab-pane fade">
									<div id="fb-root"></div>
									<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=2337503869857605&autoLogAppEvents=1"></script>

									<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="800" data-numposts="1"></div>
								</div>
								
							</div>
						</div>
						<?php 
							$sql_other="select * from product where id != '$id'";
							$query_other=mysqli_query($conn,$sql_other);
						?>
						<div class="pro-other">
							<h3 class="title-other"><span>Sản phẩm khác</span></h3>
							<div class="owl-carousel owl-theme">
								<?php while ($result_other=mysqli_fetch_array($query_other)) {  ?>
								<div class="item">
									<a href="detail-product.php?id=<?php echo $result_other['id']  ?>"><img src="backend/quanlysanpham/upload/<?php echo $result_other['avatar'] ?>" alt="" style=""></a>
								</div>
								<?php } ?>
								
							</div>
					</div>
					</div>	
				</div>
			</div>
		
		</main>

		<!-- kết thúc main -->

		<footer class="footer">
			<div class="row">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">
					<p class="name-footer-1">copyright@ Công ty cổ phần dược phẩm linh khuê đường</p>
					<p>Địa chỉ: Số Sn 39, ngách 46/12 , Ngõ 46 Hào Nam, Ô chợ dừa, Đống Đa, Hà Nội. Điện thoại: 024.6386.3003</p>
					<p>Hotline: 0948.322.668 - Email: dongyduoclinhkhueduong@gmail.com</p>
				</div>
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="padding-top: 27px">
					<p style="padding-left: 60px">Powered by: <a href="#">haha.studio</a></p>
				</div>
			</div>
		</footer>

		<!-- kết thúc footer -->
	</div>


<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
<script src="owl/dist/owl.carousel.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
		$('.owl-carousel').owlCarousel({
			loop:true,
			margin:10,
			nav:true,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				1000:{
					items:5
				}
			}
		})
	</script>
</body>
</html>
<?php }else{ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $result_pro['name'] ?></title>
	<link rel="stylesheet" href="public/css/detail-product.css">
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
							
							<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
							<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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
						<h3 class="title_cate">Danh sách sản phẩm</h3>
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
							<li><a href="detail-new.php?id=<?php echo $result_new['id'] ?>"><?php echo $result_new['name'] ?></a></li>
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
								<span class="badge">15683</span>
								Tổng truy cập:
							</li>
						</ul>
					</div> -->
				</div>
				<div class=" block_content col-xs-12  col-md-9 col-lg-9">
					<h1 class="title_index">
						<span>Chi tiết sản phẩm</span>
					</h1>
					<div class="show-pro">
						<div class="content">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<div class="img-pro">
									<div class="img-cap">
										<img src="backend/quanlysanpham/upload/<?php echo $result_pro['avatar'] ?>" alt="">
									</div>
									<?php 

									$sql_img_pro="SELECT * from product_image where pro_id=$id";
									$query_img_pro=mysqli_query($conn,$sql_img_pro)or die('Lỗi truy vấn'.mysqli_error());
									$rs_img_pro=mysqli_fetch_array($query_img_pro);
									$img_pro=explode('/', $rs_img_pro['hinh_anh']);
									?>
									<div class="img-more row">

										<?php for ($i=0; $i < count($img_pro); $i++) { ?>
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
												
												<img src="backend/quanlyhinhanh/upload/<?php echo $img_pro[$i] ?>" alt="">
													
											</div>
										<?php } ?>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<div class="detail-content">
									<form action="" method="get">
									<ul>
										<li style="font-size: 18px;"><?php echo $result_pro['name'] ?></li>
										<?php if ($result_pro['Khuyen_mai']>0) {?>
											<li>Giá bán: <span style="color: #333;"><s><?php echo number_format($result_pro['price'],0) ?> VNĐ</s></span></li>
											<li>Khuyến mãi: <span style="color: red;"><?php echo number_format($result_pro['Khuyen_mai'],0) ?> VNĐ</span></li>
										<?php }else{ ?>
											<li>Giá bán: <span style="color: #333;"><?php echo number_format($result_pro['price'],0) ?> VNĐ</span></li>
										<?php } ?>
										<?php if ($result_pro['quantity_pro']>0) { ?>
										<li>
											Tình trạng: <span style="color: green">Còn hàng</span>
										</li>
										<?php }else{ ?>
											<li>
											Tình trạng: <span style="color: green">Hết hàng</span>
										</li>
										<?php } ?>
										<li id="qtv">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 " style="padding-left: 0">
												<label for="qtv" style="font-weight: bold">Số lượng: </label>
											</div>
											<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 ">
												<div id="qtv" class="center valign cm-value-changer">

													
														<input style="width: 50px !important;" type="number" name="quantity" value="1">
														
													
												</div> 
											</div>
											<div class="clear"></div>

										</li>
										<li>
											<input type="hidden" name="id" value="<?= $result_pro['id'] ?>">
											<!-- <button type="button" style="padding: 8px 25px;border: none;background:linear-gradient(#08d63b, green);color: #fff;">Mua hàng</button> -->
										<!-- 	<button type="submit" class="btn btn-success">Mua hàng</button> -->
											<!-- Trigger the modal with a button -->
											<button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#myModal">Mua hàng</button>

											<!-- Modal -->
											<div id="myModal" class="modal fade" role="dialog">
												<div class="modal-dialog">

													<!-- Modal content-->
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal">&times;</button>
															<h4 class="modal-title">Xin chào quý khách, vui lòng đăng nhập để tiếp tục</h4>
														</div>
														<div class="modal-body text-center">
															<a href="login.php" class="btn btn-success">Đăng nhập</a>
														</div>
														
													</div>

												</div>
											</div>
										</li>
									</ul>
								</form>
							</div>
						</div>
					</div>
					<div class="clear"></div>
					<div class="detail-pro">
							<ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#home">Miêu tả</a></li>
								<li><a data-toggle="tab" href="#menu1">Bình luận</a></li>

							</ul>

							<div class="tab-content">
								<div id="home" class="tab-pane fade in active">
									<?php echo $result_pro['mieu_ta'] ?>
								</div>
								<div id="menu1" class="tab-pane fade">
									<div id="fb-root"></div>
									<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=2337503869857605&autoLogAppEvents=1"></script>

									<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="800" data-numposts="1"></div>
								</div>
								
							</div>
						</div>
						<?php 
							$sql_other="select * from product where id != '$id'";
							$query_other=mysqli_query($conn,$sql_other);
						?>
						<div class="pro-other">
							<h3 class="title-other"><span>Sản phẩm khác</span></h3>
							<div class="owl-carousel owl-theme">
								<?php while ($result_other=mysqli_fetch_array($query_other)) {  ?>
								<div class="item">
									<a href="detail-product.php?id=<?php echo $result_other['id']  ?>"><img src="backend/quanlysanpham/upload/<?php echo $result_other['avatar'] ?>" alt="" style=""></a>
								</div>
								<?php } ?>
								
							</div>
						</div>
					</div>	
				</div>
			</div>
		
		</main>

		<!-- kết thúc main -->

		<footer class="footer">
			<div class="row">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">
					<p class="name-footer-1">copyright@ Công ty cổ phần dược phẩm linh khuê đường</p>
					<p>Địa chỉ: Số Sn 39, ngách 46/12 , Ngõ 46 Hào Nam, Ô chợ dừa, Đống Đa, Hà Nội. Điện thoại: 024.6386.3003</p>
					<p>Hotline: 0948.322.668 - Email: dongyduoclinhkhueduong@gmail.com</p>
				</div>
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="padding-top: 27px">
					<p style="padding-left: 60px">Powered by: <a href="#">haha.studio</a></p>
				</div>
			</div>
		</footer>

		<!-- kết thúc footer -->
	</div>


<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
<script src="owl/dist/owl.carousel.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
		$('.owl-carousel').owlCarousel({
			loop:true,
			margin:10,
			nav:true,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				1000:{
					items:5
				}
			}
		})
	</script>
</body>
</html>
<?php } ?>