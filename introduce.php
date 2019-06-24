<?php 
	session_start();
	include('backend/connect.php');

	$sql_cate="select * from category";
	$query_cate=mysqli_query($conn,$sql_cate);

	$sql_new="select * from news limit 4";
	$query_new=mysqli_query($conn,$sql_new);

	$sql_category="select * from category";
	$query_category=mysqli_query($conn,$sql_category);

	if (isset($_SESSION['login'])) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Giới thiệu</title>
	<link rel="stylesheet" href="public/css/introduce.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
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
						<span>Giới thiệu</span>
					</h1>
					<div class="content">
						<div class="text-center">
							<img src="public/image/su_menh.jpg" alt="">
						</div>
						<div class="intro">
							<h4><i>Tầm nhìn</i></h4>
							<div>
								Với một khát khao mãnh liệt: “Sẽ đem nhưng dược phẩm tự nhiên tốt nhất đến tay người tiêu dùng”, cùng khát vọng và chiến lược đầu tư – phát triển bền vững, Công ty dược phẩm Linh Khuê Đường sẽ là đơn vị đi đầu trong lĩnh vực sản xuất, phân phối dược phẩm có nguồn gốc thiên nhiên tại Việt Nam và vươn tầm Quốc tế.
							</div>
						</div>
						<div class="intro">
							<h4><i>Sứ mệnh</i></h4>
							<div>
								Công ty dược phẩm Linh Khuê Đường tự tin với đội ngũ bác sỹ có kinh nghiệm lâu năm tại Bệnh viện Y học cổ truyền và các bệnh viện uy tín ở Việt Nam, bằng sự trân trọng và trách nhiệm cao nhất của mình đối với xã hội, chúng tôi cam kết đem đến cho cộng đồng những sản phẩm y dược 100% tự nhiên chất lượng cao, giá thành hợp lý nhất. Song song với chất lượng sản phẩm là chất lượng phục vụ tận tâm, uy tín cùng mạng lưới các nhà phân phối chuyên nghiệp, Linh Khuê Đường hứa hẹn làm hài lòng cả những khách hàng khó tính nhất.
							</div>
						</div>
						<div class="intro">
							<h4><i>Giá trị cốt lõi</i></h4>
							<div>
								<p><span style="font-weight: bold">Thấu hiểu:</span> Luôn luôn lắng nghe và đặt mình vào vị trí, hoàn cảnh của khách hàng để có thể cảm thông và từ đó tìn ra giải pháp tốt nhất cho khách hàng. Linh Khuê Đường luôn tâm niệm “cố gắng làm hài lòng khách hàng từ những việc làm nhỏ nhất”</p>

								<p><span style="font-weight: bold">Tin cậy:</span> Mạch lạc trong sự thống nhất từ tư duy đến hành động, Linh Khuê Đường luôn tuân thủ nguyên tắc các bên cùng có lợi, đảm bảo tính minh bạch, trung thực, nhất quán trong quá trình làm việc đối với mọi giao dịch dù là trực tiếp hay gián tiếp. Đảm bảo sẽ đen lại sự yên tâm tuyệt đối tới khách hàng.</p>

								<p><span style="font-weight: bold">Năng động:</span> Luôn tràn trề năng lượng, nhiệt huyết để sẵn sàng thích nghi với mọi sự biến động, thay đổi của thị trường cũng như nhu cầu của khách hàng một cách linh hoạt, khéo léo để đảm bảo đạt được hiệu quả cao nhất.</p>

								<p><span style="font-weight: bold">Không ngừng học hỏi:</span> Lenin chẳng phải đã nói “học, học nữa, học mãi”, lại nhất là trong lĩnh vực chuyên biệt, bảo vệ sức khỏe của người dân. Linh Khuê Đường không ngừng trau dồi thêm những kiến thức mới, tân tiến trên Thế Giới và học hỏi từ chính những thành công và thất bại của bản thân và những đơn vị bạn để tìm ra những hướng đi đúng đắn nhất.</p>

								<p><span style="font-weight: bold">Cam kết:</span> Linh Khuê Đường cam kết đem đến tận tay khách hàng những sản phẩm Y dược thiên nhiên tốt nhất cùng với sự phục vụ chuyên nghiệp, bằng chính cái TÂM của người thầy thuốc.</p>
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
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<?php }else{ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Giới thiệu</title>
	<link rel="stylesheet" href="public/css/introduce.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
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
						<span>Giới thiệu</span>
					</h1>
					<div class="content">
						<div class="text-center">
							<img src="public/image/su_menh.jpg" alt="">
						</div>
						<div class="intro">
							<h4><i>Tầm nhìn</i></h4>
							<div>
								Với một khát khao mãnh liệt: “Sẽ đem nhưng dược phẩm tự nhiên tốt nhất đến tay người tiêu dùng”, cùng khát vọng và chiến lược đầu tư – phát triển bền vững, Công ty dược phẩm Linh Khuê Đường sẽ là đơn vị đi đầu trong lĩnh vực sản xuất, phân phối dược phẩm có nguồn gốc thiên nhiên tại Việt Nam và vươn tầm Quốc tế.
							</div>
						</div>
						<div class="intro">
							<h4><i>Sứ mệnh</i></h4>
							<div>
								Công ty dược phẩm Linh Khuê Đường tự tin với đội ngũ bác sỹ có kinh nghiệm lâu năm tại Bệnh viện Y học cổ truyền và các bệnh viện uy tín ở Việt Nam, bằng sự trân trọng và trách nhiệm cao nhất của mình đối với xã hội, chúng tôi cam kết đem đến cho cộng đồng những sản phẩm y dược 100% tự nhiên chất lượng cao, giá thành hợp lý nhất. Song song với chất lượng sản phẩm là chất lượng phục vụ tận tâm, uy tín cùng mạng lưới các nhà phân phối chuyên nghiệp, Linh Khuê Đường hứa hẹn làm hài lòng cả những khách hàng khó tính nhất.
							</div>
						</div>
						<div class="intro">
							<h4><i>Giá trị cốt lõi</i></h4>
							<div>
								<p><span style="font-weight: bold">Thấu hiểu:</span> Luôn luôn lắng nghe và đặt mình vào vị trí, hoàn cảnh của khách hàng để có thể cảm thông và từ đó tìn ra giải pháp tốt nhất cho khách hàng. Linh Khuê Đường luôn tâm niệm “cố gắng làm hài lòng khách hàng từ những việc làm nhỏ nhất”</p>

								<p><span style="font-weight: bold">Tin cậy:</span> Mạch lạc trong sự thống nhất từ tư duy đến hành động, Linh Khuê Đường luôn tuân thủ nguyên tắc các bên cùng có lợi, đảm bảo tính minh bạch, trung thực, nhất quán trong quá trình làm việc đối với mọi giao dịch dù là trực tiếp hay gián tiếp. Đảm bảo sẽ đen lại sự yên tâm tuyệt đối tới khách hàng.</p>

								<p><span style="font-weight: bold">Năng động:</span> Luôn tràn trề năng lượng, nhiệt huyết để sẵn sàng thích nghi với mọi sự biến động, thay đổi của thị trường cũng như nhu cầu của khách hàng một cách linh hoạt, khéo léo để đảm bảo đạt được hiệu quả cao nhất.</p>

								<p><span style="font-weight: bold">Không ngừng học hỏi:</span> Lenin chẳng phải đã nói “học, học nữa, học mãi”, lại nhất là trong lĩnh vực chuyên biệt, bảo vệ sức khỏe của người dân. Linh Khuê Đường không ngừng trau dồi thêm những kiến thức mới, tân tiến trên Thế Giới và học hỏi từ chính những thành công và thất bại của bản thân và những đơn vị bạn để tìm ra những hướng đi đúng đắn nhất.</p>

								<p><span style="font-weight: bold">Cam kết:</span> Linh Khuê Đường cam kết đem đến tận tay khách hàng những sản phẩm Y dược thiên nhiên tốt nhất cùng với sự phục vụ chuyên nghiệp, bằng chính cái TÂM của người thầy thuốc.</p>
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
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<?php } ?>