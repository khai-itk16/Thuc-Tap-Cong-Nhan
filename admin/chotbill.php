<?php 
	$mahoadon = $_REQUEST['mahoadon'];
	echo $mahoadon;
	echo $_REQUEST['tinhtrang'];
	echo  '<script>alert("'.$_REQUEST['tinhtrang'].'");</script>';
	include 'connect.php';

	if($_REQUEST['tinhtrang'] == 0){
		$sql = "update hoadon set tinhtrang = 1, dathanhtoan = 0 where mahoadon = '".$mahoadon."'";
	
	}else if($_REQUEST['tinhtrang'] == 1){
		$sql = "update hoadon set tinhtrang = 1, dathanhtoan = 1 where mahoadon = '".$mahoadon."'";
	}
	if(mysqli_query($link, $sql)){
		// header("location: quantridonhang.php");
		echo  '<script>alert("Đã xong");
		window.location="quantridonhang.php";</script>';
	};
	


?>