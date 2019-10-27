<?php 
    $masp = $_POST['masp'];
    
    
    if(isset($_POST['ckb1'])){
        $ckb1 = $_POST['ckb1'];
        $ckb1 = '1';
    }else{
        $ckb1 = '0';
    }
    if(isset($_POST['ckb2'])){
        $ckb2 = $_POST['ckb2'];
        $ckb2 = '1';
    }else{
        $ckb2 = '0';
    }
    if(isset($_POST['ckb3'])){
        $ckb3 = $_POST['ckb3'];
        $ckb3 = '1';
    }else{
        $ckb3 = '0';
    }
    include 'connect.php';

    $link = mysqli_connect("localhost","root","") or die ("Khong the ket noi den CSDL");
    mysqli_set_charset($link, "UTF8");
    mysqli_select_db($link,"thuctapcongnhan");
    $sql = "update sanpham set spmoi = '".$ckb1."', spmuanhieu = '".$ckb2."', linhkiencoban = '".$ckb3."' where masp = '".$masp."'";
    $result = mysqli_query($link, $sql);
    header("location: quantritrangchu.php");
    $khanh = "sssssssssss";
    echo $khanh;
    
?>