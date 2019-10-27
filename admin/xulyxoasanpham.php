<?php 
    $idsp = $_REQUEST['idsp'];
    $iddanhmuc = $_REQUEST['iddanhmuc'];
    include 'connect.php';
    $sql = "delete from sanpham where masp = '".$idsp."'";
		if(mysqli_query($link, $sql)){
			header("location: quantrisanpham.php?iddanhmuc=$iddanhmuc");
		}else{
			echo 'Xoa that bai';
		}
	?>
?>