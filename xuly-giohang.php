<?php
	include ("connect.php");
    session_start();
if(isset($_GET["id"])){
	$_masp= $_GET["id"];
	$sql= "SELECT * FROM sanpham where masp='$_masp'"; 
	$result = mysqli_query($link, $sql);
	$sanpham= mysqli_fetch_assoc($result);
}
if($sanpham){
	if(isset($_SESSION['cart'])){
		if(isset($_SESSION['cart'][$_masp])){
			if($_SESSION['cart'][$_masp]['qty'] >= $sanpham['soluong']){
				echo false;
			}else{
					$_SESSION['cart'][$_masp]['qty'] +=1;
					echo true;
				}
		}else {
				$_SESSION['cart'][$_masp]['qty']= 1;
				$_SESSION['cart'][$_masp]['name']= $sanpham['tensp'];
				$_SESSION['cart'][$_masp]['hinhanh']=$sanpham['hinhanh'];
				$_SESSION['cart'][$_masp]['tien']= $sanpham['giatien'];
				echo true;
			}
			
	}else {
		$_SESSION['cart'][$_masp]['qty']= 1;
		$_SESSION['cart'][$_masp]['name']= $sanpham['tensp'];
		$_SESSION['cart'][$_masp]['hinhanh']= $sanpham['hinhanh'];
		$_SESSION['cart'][$_masp]['tien']= $sanpham['giatien'];
		echo true;
	}
}
 
?>
