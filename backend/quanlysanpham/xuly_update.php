<?php 
	include('../connect.php');
	// $id="";
	// $name="";
	// $cate_id="";
	// $price="";
	// $image_pro="";
	// $post_content="";
	// $khuyen_mai="";
	// $quantity="";
	// $mieu_ta="";
	$id=$_POST['id'];
	$name=$_POST['name_pro'];	
	$cate_id=$_POST['cate'];	
	$price=$_POST['price'];
	
	$image_pro=$_FILES['image_pro']['name'];
	$image_pro_tmp=$_FILES['image_pro']['tmp_name'];
	move_uploaded_file($image_pro_tmp,'upload/'.$image_pro);
	$post_content=$_POST['post_content'];
	$khuyen_mai=$_POST['khuyen_mai'];
	$quantity=$_POST['quantity'];

	
		$sql = "update product
				set name='$name',
					avatar='$image_pro',
					cate_id='$cate_id',
					price='$price',
					mieu_ta='$post_content',
					Khuyen_mai='$khuyen_mai',
					quantity_pro='$quantity'
				where id='$id'";
		$resu=mysqli_query($conn,$sql) or die('lỗi truy vấn');
		if($resu){
			header("location:hienthi.php");
		}

?>