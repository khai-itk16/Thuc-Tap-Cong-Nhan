<?php

if(isset ($_POST['checkUser']) && $_POST['checkUser'] == 1) {
   require_once ("connect.php");
   $user = $_POST['user'];
   $name = $_POST['name'];
   $address = $_POST['address'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];
   $sex = $_POST['sex'];
   $pass = md5($_POST['pass']);
   $sql = "insert into khachhang (tendangnhap,  hoten, matkhau, gioitinh, email, sdt, diachi) 
   values ('$user', '$name', '$pass',  '$sex', '$email', '$phone',  '$address');";
   $result = mysqli_query($link, $sql);
   echo "<script>
      alert('Đăng ký tài khoản thành công');
      window.location='login.php';
   </script>";
   
}
else if(isset ($_POST['checkUser']) && $_POST['checkUser'] == 0) {
   echo "<script>
      alert('Đăng ký tài khoản không thành công');
      window.location='register.php';
   </script>";
}
?>