<?php
    include ("connect.php");
    session_start();
    if(isset ($_REQUEST["logout"])) {
        session_unset();
        header("location: index.php");
    }

    if (isset($_POST["user"])) {
        $user = $_POST["user"];
        $pass = md5($_POST["pass"]);
        $sql = "select count(*), makhachhang from khachhang where tendangnhap='$user' and matkhau='$pass';";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_BOTH);
        
        if($row[0] == 1) {
            $_SESSION['user']=$user;
            $_SESSION['makh']=$row[1];
            header("location: index.php");
        } else {
            $_SESSION['errorLogin']=0;
            header("location: login.php");
        }
    }
?>
