<?php
include ("connect.php");
session_start();
if(!isset($_SESSION['cart'])){

	header("location: index.php");
}
if(isset($_GET["id"])){
	$key= $_GET["id"];
	$sql= "SELECT * FROM sanpham where masp='$key'"; 
	$result = mysqli_query($link, $sql);
	$sanpham= mysqli_fetch_assoc($result);
	$value = $_GET["status"];
}
if($sanpham){
		// if($_SESSION['cart'][$key]['qty'] >= $sanpham['soluong']){
		// 		echo false;
		// }else{
		// 	$_SESSION['cart'][$key]['qty'] +=1;
		// 	echo true;
	if ($value == 1) {
		if($_SESSION['cart'][$key]['qty'] >= $sanpham['soluong']){
		 		echo false;
		}
		else {
			$_SESSION['cart'][$key]['qty'] += 1;
			echo true;
		}
	} else {
		if($_SESSION['cart'][$key]['qty'] == 1) {
		} else {
			$_SESSION['cart'][$key]['qty'] -= 1;
			echo true;
		}
	}
}

?>