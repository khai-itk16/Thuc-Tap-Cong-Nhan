<?php 
    		include 'connect.php'; 
   
             $tendanhmuc = $_REQUEST['tendanhmuc'];
             $sql = "insert into danhmuc(tendanhmuc) values('$tendanhmuc')" ;
            $result = mysqli_query($link, $sql);

            header("location: quantridanhmuc.php");

?>