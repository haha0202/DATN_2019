<?php 
	session_start();
	if (isset($_GET['trang'])) {
		$get_trang=$_GET['trang'];
	}else{
		$get_trang="";
	}
	if ($get_trang=="" || $get_trang==1) {
		$so_trang=0;
	}else{
		$so_trang=($get_trang*5)-5;
	}
	include('backend/connect.php');
	$sql_cate="select * from category";
	$query_cate=mysqli_query($conn,$sql_cate);

	$sql_category="select * from category";
	$query_category=mysqli_query($conn,$sql_category);

	$sql_new="select * from news limit 4";
	$query_new=mysqli_query($conn,$sql_new);

	$cate_id=$_GET['cate_id'];
	$sql_pro="select product.id, product.avatar, product.cate_id, product.name, product.price, product.Khuyen_mai,product.quantity_pro from product where cate_id='$cate_id' limit $so_trang,5";
	$query_pro=mysqli_query($conn,$sql_pro);

	if (isset($_SESSION['login'])) {

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sản phẩm</title>
	<link rel="stylesheet" href="public/css/product.css">
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
							<li><a href="detail-cate-product.php?cate_id=<?php echo $result_category['id'] ?>"><?php echo $result_category['name']; ?></a></li>
							<?php } ?>
						</ul>
					</div>
					<div class="cate-pro">
						<h3 class="title_cate">Tin tức</h3>
						<ul>
							<?php 
								while ($result_new=mysqli_fetch_array($query_new)) {
							?>
							<li><a href=""><?php echo $result_new['name'] ?></a></li>
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
						<span>Sản phẩm</span>
					</h1>
					<div class="show-pro">
						<?php 
							while ($result_pro=mysqli_fetch_array($query_pro)) {
						?>
						<div class="pro col-xs-12 col-sm-6 col-md-4 col-lg-4 text-center">
							<div class="border-product">
								<a href="detail-product.php?id=<?php echo $result_pro['id'] ?>" class="thumbnail">
									<img src="public/image/<?php echo $result_pro['avatar'] ?>" alt="" width="100%">
								</a>
								<a href="detail-product.php?id=<?php echo $result_pro['id'] ?>"><?php echo $result_pro['name'] ?></a>
								<?php if ($result_pro['Khuyen_mai']>0) { ?>
									<p>Giá: <span style="color:#333;"><s><?php echo number_format($result_pro['price'],0) ?> VNĐ</s></span></p>
									<p>Khuyến mãi: <span style="color: red"><?php echo number_format($result_pro['Khuyen_mai'],0) ?> VNĐ</span></p>
								<?php }else{ ?>
									<p>Giá: <span style="color:#333;"><?php echo number_format($result_pro['price'],0) ?> VNĐ</span></p>
								<?php } ?>
								<?php 
									if ($result_pro['quantity_pro']>0) {
								?>
								<p>Tình trạng: <span style="color: green">Còn hàng</span></p>
								<?php }else{ ?>
								<p>Tình trạng: <span style="color: green">Hết hàng</span></p>
								<?php } ?>
								<p>
									<a href="detail-product.php?id=<?php echo $result_pro['id'] ?>" class="btn btn-success btn-sm">
										<span>Xem</span>
									</a>
									
								</p>
							</div>
						</div>
						<?php } ?>
					</div>
					<?php 
						$sql_trang="select * from product";
						$query_trang=mysqli_query($conn,$sql_trang);
						$num=mysqli_num_rows($query_trang);
						$trang=ceil($num/5);
					 ?>
					<div class="clear"></div>
					<div class="paging text-center">
						<nav aria-label="Page navigation">
							<ul class="pagination">
								<li>
									<a href="#" aria-label="Previous">
										<span aria-hidden="true">&laquo;</span>
									</a>
								</li>
								<?php 
									for ($i=1; $i <=$trang ; $i++) {
								?>
								<li><a href="?trang=<?php echo $i ?>"><?php echo $i; ?></a></li>
								<?php } ?>
								
								<li>
									<a href="#" aria-label="Next">
										<span aria-hidden="true">&raquo;</span>
									</a>
								</li>
							</ul>
						</nav>
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
	<script src="owl/dist/owl.carousel.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
</body>
</html>
<?php }else{ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sản phẩm</title>
	<link rel="stylesheet" href="public/css/product.css">
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
						<h3 class="title_cate">Danh mục sản phẩm</h3>
						<ul>
							<?php 
								while ($result_category=mysqli_fetch_array($query_category)) {
								
							?>
							<li><a href="detail-cate-product.php?cate_id=<?php echo $result_category['id'] ?>"><?php echo $result_category['name']; ?></a></li>
							<?php } ?>
						</ul>
					</div>
					<div class="cate-pro">
						<h3 class="title_cate">Tin tức</h3>
						<ul>
							<?php 
								while ($result_new=mysqli_fetch_array($query_new)) {
							?>
							<li><a href=""><?php echo $result_new['name'] ?></a></li>
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
						<span>Sản phẩm</span>
					</h1>
					<div class="show-pro">
						<?php 
							while ($result_pro=mysqli_fetch_array($query_pro)) {
						?>
						<div class="pro col-xs-12 col-sm-6 col-md-4 col-lg-4 text-center">
							<div class="border-product">
								<a href="detail-product.php?id=<?php echo $result_pro['id'] ?>" class="thumbnail">
									<img src="public/image/<?php echo $result_pro['avatar'] ?>" alt="" width="100%">
								</a>
								<a href="detail-product.php?id=<?php echo $result_pro['id'] ?>"><?php echo $result_pro['name'] ?></a>
								<?php if ($result_pro['Khuyen_mai']>0) { ?>
									<p>Giá: <span style="color:#333;"><s><?php echo number_format($result_pro['price'],0) ?> VNĐ</s></span></p>
									<p>Khuyến mãi: <span style="color: red"><?php echo number_format($result_pro['Khuyen_mai'],0) ?> VNĐ</span></p>
								<?php }else{ ?>
									<p>Giá: <span style="color:#333;"><?php echo number_format($result_pro['price'],0) ?> VNĐ</span></p>
								<?php } ?>
								<?php 
									if ($result_pro['quantity_pro']>0) {
								?>
								<p>Tình trạng: <span style="color: green">Còn hàng</span></p>
								<?php }else{ ?>
								<p>Tình trạng: <span style="color: green">Hết hàng</span></p>
								<?php } ?>
								<p>
									<a href="detail-product.php?id=<?php echo $result_pro['id'] ?>" class="btn btn-success btn-sm">
										<span>Xem</span>
									</a>
									
								</p>
							</div>
						</div>
						<?php } ?>
					</div>
					<?php 
						$sql_trang="select * from product";
						$query_trang=mysqli_query($conn,$sql_trang);
						$num=mysqli_num_rows($query_trang);
						$trang=ceil($num/5);
					 ?>
					<div class="clear"></div>
					<div class="paging text-center">
						<nav aria-label="Page navigation">
							<ul class="pagination">
								<li>
									<a href="#" aria-label="Previous">
										<span aria-hidden="true">&laquo;</span>
									</a>
								</li>
								<?php 
									for ($i=1; $i <=$trang ; $i++) {
								?>
								<li><a href="?trang=<?php echo $i ?>"><?php echo $i; ?></a></li>
								<?php } ?>
								
								<li>
									<a href="#" aria-label="Next">
										<span aria-hidden="true">&raquo;</span>
									</a>
								</li>
							</ul>
						</nav>
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
	<script src="owl/dist/owl.carousel.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
</body>
</html>
<?php } ?>