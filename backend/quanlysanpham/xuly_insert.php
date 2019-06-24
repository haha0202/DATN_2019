<?php 

	include('../connect.php');

	
	//$name="";
	//$cate="";
	//$price="";
	//$image_pro="";
	//$post_content="";
	//$khuyen_mai="";
	//$quantity="";
	//$mieu_ta="";

	$name=$_POST['name_pro'];	
	$cate_id=$_POST['cate'];	
	$price=$_POST['price'];
	
	$image_pro=$_FILES['image_pro']['name'];
	$image_pro_tmp=$_FILES['image_pro']['tmp_name'];
	move_uploaded_file($image_pro_tmp,'upload/'.$image_pro);
	$post_content=$_POST['post_content'];
	$khuyen_mai=$_POST['khuyen_mai'];
	$quantity=$_POST['quantity'];

	
		$sql = "insert into product(name,avatar,cate_id,price,mieu_ta,Khuyen_mai,quantity_pro) values ('$name','$image_pro','$cate_id','$price','$post_content','$khuyen_mai','$quantity')";
		$resu=mysqli_query($conn,$sql) or die('lỗi truy vấn');
		if($resu){
			header("location:hienthi.php");
		}

?>