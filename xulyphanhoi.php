<?php 
    include 'connect.php';
    $noidung = $_POST['noidung'];
    $email = $_POST['email'];
    $ngay = date("Y/m/d");
    $link = mysqli_connect("localhost","root","") or die ("Khong the ket noi den CSDL");
    mysqli_set_charset($link, "UTF8");
    mysqli_select_db($link,"thuctapcongnhan");
    $sql = "insert into lienhe (email, noidung, ngaylienhe) values ('".$email."','".$noidung."','".$ngay."')";
    if(mysqli_query($link, $sql)){
        header('location: contactus.php');
    }else{
        echo 'Thêm thất bại';
    }
?>