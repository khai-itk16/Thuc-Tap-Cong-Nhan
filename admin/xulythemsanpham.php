<?php 
	$iddm = $_REQUEST['iddanhmuc'];
	$tensp = $_REQUEST['tensp'];
	$motasp = $_REQUEST['motasp'];
	$giasp = $_REQUEST['giasp'];
	$soluong = $_REQUEST['soluongsp'];
	$hinhanh = $_REQUEST['hinhanhsp'];
	$ngay = date("Y/m/d");
	include 'connect.php';
	$sql = "insert into sanpham(madanhmuc,tensp,mota,giatien,soluong,hinhanh,ngaythem) values('$iddm','$tensp','$motasp','$giasp','$soluong', '$hinhanh', '$ngay')";
	mysqli_query($link,$sql);
	header("location: quantrisanpham.php?iddanhmuc=$iddm");
?>