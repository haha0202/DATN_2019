<?php 
	$name=$_POST['name'];
	$id=$_POST['id'];
	$content=$_POST['content'];
	$image=$_FILES['image']['name'];
	$image_tmp=$_FILES['image']['tmp_name'];
	move_uploaded_file($image_tmp,'upload/'.$image);
	$date=$_POST['date'];
	include('../connect.php');
	$sql="update knowledge set name='$name',content='$content',image='$image',knowledge_date='$date' where id='$id'";
	$query=mysqli_query($conn,$sql)or die("Lỗi truy vấn".mysqli_error());
	if ($query) {
		header('location:hienthi.php');
	}
	
 ?>