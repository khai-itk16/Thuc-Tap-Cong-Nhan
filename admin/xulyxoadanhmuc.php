<?php 
    $iddanhmuc = $_REQUEST['iddanhmuc'];
    include 'connect.php';
    $sql = "delete from danhmuc where madanhmuc = '".$iddanhmuc."'";
		if(mysqli_query($link, $sql)){
			header("location: quantridanhmuc.php");
		}else{
			echo 'Xoa that bai';
		}
	?>
?>