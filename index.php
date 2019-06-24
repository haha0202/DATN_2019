<?php 
	session_start();
	include('backend/connect.php');

	$sql_cate="select * from category";
	$query_cate=mysqli_query($conn,$sql_cate);

	$sql_new="select * from news limit 4";
	$query_new=mysqli_query($conn,$sql_new);

	$sql_kl="select * from knowledge limit 5";
	$query_kl=mysqli_query($conn, $sql_kl);


	if (isset($_POST['search'])) {
		$search=$_POST['search-txt'];
		$sql_search="select * from product where name like '%$search%' or price = '$search' limit $so_trang,5";
		$query_search=mysqli_query($conn, $sql_search);
	}
	if (isset($_SESSION['login'])) { 
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Công ty cổ phần dược phẩm linh khuê đường</title>
	<link rel="stylesheet" href="public/css/index.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="owl/dist/assets/owl.theme.default.min.css">
  	<link rel="stylesheet" type="text/css" href="owl/dist/assets/owl.carousel.min.css">
  	

</head>
<body>
	<div class="container">
		<header class="header">
			<div class="row">
				<div class="logo col-xs-12 col-sm-12 col-md-3 col-lg-3 text-center">
					
						<a href="index.php">
							<img src="public/image/logo tron.png" width="100" height="100" alt="">
						</a>
					
				</div>
				<div class="title-name hidden-xs hidden-sm col-md-5 col-lg-5 text-center">
					
						<p class="p1">Công ty cổ phần dược phẩm linh khuê đường</p>
						<p class="p2">Hotline: 0948.322.668 - 024.6386.3003</p>
					
				</div>
				<div class="hidden-xs hidden-sm col-md-4 col-lg-4">
					<div>
						<ul class="nav navbar-nav navbar-right">
							<li style="padding-top: 15px; font-size: 18px">Xin chào: <span style="color: blue"><?php echo $_SESSION['login']['usename'] ?></span></li>
							<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
							<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>
						</ul>
					</div>
					<div>
						<form class="form-search navbar-form navbar-right" action="search.php" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<input type="text" name="search-txt" class="form-control" placeholder="Tìm kiếm">
							</div>
							<button type="submit" name="search" class="btn btn-default">Tìm kiếm</button>
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

		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="public/image/banner.jpg" alt="">
				</div>

				
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

		<!-- kết thúc banner -->

		<main class="main">
			<div class="box_index">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<div class="row">
							<div class="left col-xs-7 col-sm-7 col-md-7 col-lg-7">
								<h4>Linh chi đỏ</h4>
								<p>><a href="pro-introduce.php"> Giới thiệu</a></p>
								<p>><a href="#"> Tác dụng</a></p>
								<p>><a href="#"> HDSD</a></p>
							</div>
							<div class="right col-xs-5 col-sm-5 col-md-5 col-lg-5">
								<a href="#"><img width="100%" src="public/image/namlinhchi_6059.jpg" alt=""></a>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<div class="row">
							<div class="left col-xs-7 col-sm-7 col-md-7 col-lg-7">
								<h4>Hoạt huyết</h4>
								<p>><a href="#"> Giới thiệu</a></p>
								<p>><a href="#"> Tác dụng</a></p>
								<p>><a href="#"> HDSD</a></p>
							</div>
							<div class="right col-xs-5 col-sm-5 col-md-5 col-lg-5">
								<a href="#"><img width="100%" src="public/image/hoathuyet2_2551.jpg" alt=""></a>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<div class="row">
							<div class="left col-xs-7 col-sm-7 col-md-7 col-lg-7">
								<h4>Nano Curcumin</h4>
								<p>><a href="pro2-introduce.php"> Giới thiệu</a></p>
								<p>><a href="#"> Tác dụng</a></p>
								<p>><a href="#"> HDSD</a></p>
							</div>
							<div class="right col-xs-5 col-sm-5 col-md-5 col-lg-5">
								<a href="#"><img width="100%" src="public/image/nano-curcumin.jpg" alt=""></a>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<div class="row">
							<div class="left col-xs-7 col-sm-7 col-md-7 col-lg-7">
								<h4>Thảo dược khác</h4>
								<p>><a href="#"> Giới thiệu</a></p>
								<p>><a href="#"> Tác dụng</a></p>
								<p>><a href="#"> HDSD</a></p>
							</div>
							<div class="right col-xs-5 col-sm-5 col-md-5 col-lg-5" style="border-right: none">
								<a href="#"><img width="100%" src="public/image/trathaomoc.jpg" alt=""></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="main_new">
				<div class="row">
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">
						<div class="item">
							<a href="#"><img src="public/image/bs3_4666.jpg" alt=""></a>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" style="border-right: 0.5px solid lightgray; border-left:  0.5px solid lightgray">
						<h4>Tin tức</h4>
						<?php foreach ($query_new as $new) { ?>
						<div>
							<a href="detail-new.php?id=<?php echo $new['id'] ?>"><p><?php echo $new['name'] ?></p></a>
							<p><?php echo strip_tags(substr($new['content'], 0, 150)) ?>...</p>
						</div>
						<?php } ?>
						<!-- <div>
							<a href="#"><p>Sỏi tiết niệu</p></a>
							<div>Sỏi tiết niệu (sỏi thận, sỏi đài bể thận, sỏi niệu quản, sỏi bàng quang) là một trong những bệnh lý rất phổ biến hiện nay,...</div>
						</div>
						<div>
							<a href="#"><p>Điều trị hiệu quả hen phế quản bằng Y học cổ truyền</p></a>
							<div>HEN PHẾ QUẢN là một bệnh lý viêm mạn tính của phế quản , có rất nhiều nguyên nhân kết hợp gây nên tình trạng tăng đáp ứng phế...</div>
						</div>
						<div>
							<a href="#"><p>Thái hóa cột sống cổ</p></a>
							<div>Thoái hóa cột sống cổ là tình trạng rất thường gặp ở những người ở độ tuổi trung niên trở về già. Người bệnh thường cố...</div>
						</div> -->
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<h4>Kiến thức</h4>
						<?php while ($result_kl=mysqli_fetch_array($query_kl)) { ?>
						<div>
							<span class="glyphicon glyphicon-education"></span>
							<span><a href="detail-new.php?id=<?php echo $result_kl['id']?>"><?php echo $result_kl['name'] ?></a></span>
						</div>
						<?php } ?>
						
						<h4>Mạng xã hội</h4>
						<a href="#"><img src="public/image/01350852.png" alt=""></a>
						<a href="#"><img src="public/image/37670544.png" alt=""></a>
						<a href="#"><img src="public/image/39777269.png" alt=""></a>
						<a href="#"><img src="public/image/58196593.png" alt=""></a>
						<a href="#"><img src="public/image/66108679.png" alt=""></a>
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
	
	<!-- <script type="text/javascript">
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
	</script> -->
	
</body>
</html>

<?php 
	}else{ 

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Công ty cổ phần dược phẩm linh khuê đường</title>
	<link rel="stylesheet" href="public/css/index.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="owl/dist/assets/owl.theme.default.min.css">
  	<link rel="stylesheet" type="text/css" href="owl/dist/assets/owl.carousel.min.css">
  	

</head>
<body>
	<div class="container">
		<header class="header">
			<div class="row">
				<div class="logo col-xs-12 col-sm-12 col-md-3 col-lg-3 text-center">
					
						<a href="index.php">
							<img src="public/image/logo tron.png" width="100" height="100" alt="">
						</a>
					
				</div>
				<div class="title-name hidden-xs hidden-sm col-md-5 col-lg-5 text-center">
					
						<p class="p1">Công ty cổ phần dược phẩm linh khuê đường</p>
						<p class="p2">Hotline: 0948.322.668 - 024.6386.3003</p>
					
				</div>
				<div class="hidden-xs hidden-sm col-md-4 col-lg-4">
					<div>
						<ul class="nav navbar-nav navbar-right">
							
							<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
							<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
						</ul>
					</div>
					<div>
						<form class="form-search navbar-form navbar-right" action="search.php" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<input type="text" name="search-txt" class="form-control" placeholder="Tìm kiếm">
							</div>
							<button type="submit" name="search" class="btn btn-default">Tìm kiếm</button>
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

		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="public/image/banner.jpg" alt="">
				</div>

				<div class="item">
					<img src="public/image/000_3833.jpg" alt="">
				</div>

				<div class="item">
					<img src="public/image/555_8082.jpg" alt="">
				</div>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

		<!-- kết thúc banner -->

		<main class="main">
			<div class="box_index">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<div class="row">
							<div class="left col-xs-7 col-sm-7 col-md-7 col-lg-7">
								<h4>Linh chi đỏ</h4>
								<p>><a href="pro-introduce.php"> Giới thiệu</a></p>
								<p>><a href="#"> Tác dụng</a></p>
								<p>><a href="#"> HDSD</a></p>
							</div>
							<div class="right col-xs-5 col-sm-5 col-md-5 col-lg-5">
								<a href="#"><img width="100%" src="public/image/namlinhchi_6059.jpg" alt=""></a>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<div class="row">
							<div class="left col-xs-7 col-sm-7 col-md-7 col-lg-7">
								<h4>Hoạt huyết</h4>
								<p>><a href="#"> Giới thiệu</a></p>
								<p>><a href="#"> Tác dụng</a></p>
								<p>><a href="#"> HDSD</a></p>
							</div>
							<div class="right col-xs-5 col-sm-5 col-md-5 col-lg-5">
								<a href="#"><img width="100%" src="public/image/hoathuyet2_2551.jpg" alt=""></a>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<div class="row">
							<div class="left col-xs-7 col-sm-7 col-md-7 col-lg-7">
								<h4>Nano Curcumin</h4>
								<p>><a href="pro2-introduce.php"> Giới thiệu</a></p>
								<p>><a href="#"> Tác dụng</a></p>
								<p>><a href="#"> HDSD</a></p>
							</div>
							<div class="right col-xs-5 col-sm-5 col-md-5 col-lg-5">
								<a href="#"><img width="100%" src="public/image/nano-curcumin.jpg" alt=""></a>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<div class="row">
							<div class="left col-xs-7 col-sm-7 col-md-7 col-lg-7">
								<h4>Thảo dược khác</h4>
								<p>><a href="#"> Giới thiệu</a></p>
								<p>><a href="#"> Tác dụng</a></p>
								<p>><a href="#"> HDSD</a></p>
							</div>
							<div class="right col-xs-5 col-sm-5 col-md-5 col-lg-5" style="border-right: none">
								<a href="#"><img width="100%" src="public/image/trathaomoc.jpg" alt=""></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="main_new">
				<div class="row">
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">
						<div class="item">
							<a href="#"><img src="public/image/bs3_4666.jpg" alt=""></a>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" style="border-right: 0.5px solid lightgray; border-left:  0.5px solid lightgray">
						<h4>Tin tức</h4>
						<?php foreach ($query_new as $new) { ?>
						<div>
							<a href="detail-new.php?id=<?php echo $new['id'] ?>"><p><?php echo $new['name'] ?></p></a>
							<p><?php echo strip_tags(substr($new['content'], 0, 150)) ?>...</p>
						</div>
						<?php } ?>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<h4>Kiến thức</h4>
						<?php while ($result_kl=mysqli_fetch_array($query_kl)) { ?>
						<div>
							<span class="glyphicon glyphicon-education"></span>
							<span><a href="detail-new.php?id=<?php echo $result_kl['id']?>"><?php echo $result_kl['name'] ?></a></span>
						</div>
						<?php } ?>
						
						<h4>Mạng xã hội</h4>
						<a href="#"><img src="public/image/01350852.png" alt=""></a>
						<a href="#"><img src="public/image/37670544.png" alt=""></a>
						<a href="#"><img src="public/image/39777269.png" alt=""></a>
						<a href="#"><img src="public/image/58196593.png" alt=""></a>
						<a href="#"><img src="public/image/66108679.png" alt=""></a>
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
	
	<!-- <script type="text/javascript">
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
	</script> -->
	
</body>
</html>
<?php } ?>