<?php 
$iddanhmuc = $_REQUEST['iddanhmuc'];
$tendanhmuc =$_REQUEST['tendanhmuc'];

 include 'connect.php';
 $sql = "update tintuc set tendanhmuc = '$tendanhmuc' where madanhmuc ='$iddanhmuc'";
 mysqli_query($link, $sql);
 header("location: quantridanhmuc.php?iddanhmuc=$iddanhmuc");
                            
 
?>