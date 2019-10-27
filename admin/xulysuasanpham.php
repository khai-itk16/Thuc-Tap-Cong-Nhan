<?php 
	include 'connect.php';
	$idsanpham = $_REQUEST['idsanpham'];
	$iddanhmuc = $_REQUEST['iddanhmuc'];
	$tensp = $_REQUEST['tensp'];
	$mota = $_REQUEST['mota'];
	$gia = $_REQUEST['giasp'];
	$soluong = $_REQUEST['soluongsp'];
	$hinhanh =$_REQUEST['hinhanhsp'];
	$spmuanhieu =$_REQUEST['spmuanhieu'];
	$linhkiencb = $_REQUEST['linhkien'];
	$ngaythem = date("Y/m/d");

	$sql= "update sanpham set tensp='$tensp', mota ='$mota', giatien ='$gia', soluong ='$soluong', hinhanh = '$hinhanh', sanphammuanhieu = '$spmuanhieu', linhkiencoban ='$linhkiencb', ngaythem ='$ngaythem' where idsanpham ='$idsanpham' ";
	mysqli_query($link,$sql);
	header("location: quantrisanpham.php?idsanpham=$idsanpham");

 ?>