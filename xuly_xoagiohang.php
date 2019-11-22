<?php 
include ("connect.php");
session_start();

if(!isset($_SESSION['cart'])){

	header("location: index.php");
}

if(isset($_GET["id"])){
	$key= $_GET["id"];
}

if($key){
	if(array_key_exists($key,$_SESSION['cart'])){
		unset($_SESSION['cart'][$key]);
		echo true;
	}
}
//header("location: gio-hang.php");
?>