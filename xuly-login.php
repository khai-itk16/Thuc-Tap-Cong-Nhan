<?php
    include ("connect.php");
    session_start();
    if(isset ($_REQUEST["logout"])) {
        session_unset();
        header("location: index.php");
    }

    if (isset($_POST["user"])) {
        $user = $_POST["user"];
        $pass = $_POST["pass"];
        $sql = "select count(*) from khachhang where tendangnhap='$user' and matkhau='$pass';";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_BOTH);
        
        if($row[0] == 1) {
            $_SESSION['user']=$user;
            $_SESSION['pass']=$pass;// nói với khai ko nên lưu pass trong session nì  so thế hắn bị
            header("location: index.php");

        } else {
            session_unset();
            header("location: register.php");
        }
    }
