<?php 
	$name=$_POST['name'];
	$content=$_POST['content'];
	$image=$_FILES['image']['name'];
	$image_tmp=$_FILES['image']['tmp_name'];
	move_uploaded_file($image_tmp,'upload/'.$image);
	$date=$_POST['date'];
	include('../connect.php');
	$sql="insert into news(name,content,image,new_date) values ('$name','$content','$image','$date')";
	$query=mysqli_query($conn,$sql) or die('Lỗi truy vấn'.mysqli_error());
	
	if ($query) {
		header('location:hienthi.php');
	}

 ?>