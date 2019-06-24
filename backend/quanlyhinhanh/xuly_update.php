<?php 

include('../connect.php');

if (isset($_POST['id'])) {
	$id=$_POST['id'];
	$pro_id=$_POST['product_name'];
	$hinhanh=$_FILES['hinhanh']['name'];
	$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
	move_uploaded_file($hinhanh_tmp,'upload/'.$hinhanh);

	$hinhanh1=$_FILES['hinhanh1']['name'];
	$hinhanh1_tmp=$_FILES['hinhanh1']['tmp_name'];
	move_uploaded_file($hinhanh1_tmp,'upload/'.$hinhanh1);

	$hinhanh2=$_FILES['hinhanh2']['name'];
	$hinhanh2_tmp=$_FILES['hinhanh2']['tmp_name'];
	move_uploaded_file($hinhanh2_tmp,'upload/'.$hinhanh2);

	$hinhanh3=$_FILES['hinhanh3']['name'];
	$hinhanh3_tmp=$_FILES['hinhanh3']['tmp_name'];
	move_uploaded_file($hinhanh3_tmp,'upload/'.$hinhanh3);

	$hinhanh4=$_FILES['hinhanh4']['name'];
	$hinhanh4_tmp=$_FILES['hinhanh4']['tmp_name'];
	move_uploaded_file($hinhanh4_tmp,'upload/'.$hinhanh4);

	$array_img = array('1' => $hinhanh, '2' => $hinhanh1, '3'=>$hinhanh2, '4'=>$hinhanh3, '5'=>$hinhanh4);
	$img=implode('/', $array_img);
	$sql="UPDATE product_image set pro_id='$pro_id', hinh_anh='$img' where id='$id'";
	$query=mysqli_query($conn,$sql)or die('Lỗi truy vấn'.mysqli_error());
	if ($query) {
		header('location:hienthi.php');
	}
}
?>