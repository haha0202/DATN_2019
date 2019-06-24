<?php 
	$id=$_POST['id'];
	$name=$_POST['name'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];
	$mail=$_POST['mail'];
	$title=$_POST['title'];
	$content=$_POST['content'];
	include('../connect.php');
	$query=mysqli_query($conn,"update contact set name='$name',address='$address',phone='$phone',mail='$mail', title='$title', content='$content' where id='$id'")or die("Lỗi truy vấn".mysqli_error());
	if ($query) {
		header('location:hienthi.php');
	}
 ?>