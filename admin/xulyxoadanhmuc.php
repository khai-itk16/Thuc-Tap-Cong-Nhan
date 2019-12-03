<?php 
    $iddanhmuc = $_REQUEST['iddanhmuc'];
	include 'connect.php';
	$sql1 = "delete from sanpham where madanhmuc = '".$iddanhmuc."'";

	mysqli_query($link, $sql1);
	
    $sql2 = "delete from danhmuc where madanhmuc = '".$iddanhmuc."'";
		if(mysqli_query($link, $sql2)){
			header("location: quantridanhmuc.php");
		}else{
			echo '<script>alert("Xóa thất bại")</script>';
		}
	?>
?>