<?php 
    $mahoadon = $_REQUEST['mahoadon'];
	echo $mahoadon;
	include 'connect.php';
    $sql = "update hoadon set dathanhtoan = '1' where mahoadon = '".$mahoadon."'";
	if(mysqli_query($link, $sql)){
		// header("location: quantridonhang.php");
		echo  '<script>alert("Đã xong");
		window.location="quantridonhang.php";</script>';
	};
	
	?>

?>