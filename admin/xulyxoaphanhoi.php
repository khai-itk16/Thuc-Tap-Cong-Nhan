<?php 
    $idphanhoi = $_REQUEST['idphanhoi'];
    include 'connect.php';
    
    $sql = "delete from lienhe where malienhe = '".$idphanhoi."'";
		if(mysqli_query($link, $sql)){
			header("location: quantriphanhoi.php");
		}else{
			echo 'Xoa that bai';
		}
	?>
?>