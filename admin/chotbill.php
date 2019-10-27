<?php 
    $mahoadon = $_REQUEST['mahoadon'];
	echo $mahoadon;
	include 'connect.php';
    $sql = "update hoadon set tinhtrang = '1' where mahoadon = '".$mahoadon."'";
	$result = mysqli_query($link, $sql);
	header("location: quantridonhang.php")
	?>

?>