<?php
 require_once ("connect.php");
 if(isset($_POST['user'])) {
    $sql="SELECT count(*) FROM khachhang kh WHERE kh.tendangnhap = '".$_POST['user']."';";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_BOTH);
    if($row[0] != 0) {
       echo true;
    } else {
       echo false;
    }
 }
