<?php 
	$name=$_POST['name'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];
	$mail=$_POST['mail'];
	$title=$_POST['title'];
	$content=$_POST['content'];
	include('../connect.php');
	$sql="insert into contact(name,address,phone,mail,title,content) values ('$name','$address','$phone','$mail','$title','$content')";
	$query=mysqli_query($conn,$sql) or die('Lỗi truy vấn'.mysqli_error());
	
	if ($query) {
		header('location:hienthi.php');
	}

 ?>