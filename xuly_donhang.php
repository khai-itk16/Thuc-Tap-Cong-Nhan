<?php
include ("connect.php");
session_start();
if(isset( $_SESSION['user'])) {
   $user=$_SESSION['user'];
if ( isset($_POST['hoten']) && isset($_SESSION['cart'])) {
   $name = $_POST['hoten'];
   $address = $_POST['diachi'];
   $phone = $_POST['sodienthoai'];
   $email = $_POST['email'];
   $ghichu = $_POST['ghichu'];
   $radioVal = $_POST['radio'];
   $HinhThucThanhToan = "";
   $sql1 = "SELECT makhachhang FROM khachhang where tendangnhap = '$user' "; 
   $khachhang = mysqli_query($link, $sql1);
   $row = mysqli_fetch_array($khachhang, MYSQLI_BOTH );
   $makhachhang = $row['makhachhang'];
   if($radioVal == "1") {
   		$HinhThucThanhToan = "Thanh toán khi nhận hàng";
   }
   $tongtien= 0;
   foreach ($_SESSION['cart'] as $key => $value) {
         $price=$value['tien'];
         $qty=$value['qty'];
         $tongcong= $price * $qty;
         $tongtien+=$tongcong;
   }
   $sql2 = "insert into hoadon (makhachhang, tenkhachhang, sdt, diachigiaohang, email, ghichu, ptthanhtoan,tongtien) 
   values ( '$makhachhang','$name', '$phone', '$address', '$email', '$ghichu' ,'$HinhThucThanhToan','$tongtien');";
   $result = mysqli_query( $link, $sql2 );
   $sql3 = "SELECT mahoadon FROM hoadon where makhachhang = '$makhachhang'"; 
   $hoaDon = mysqli_query($link, $sql3);
   $row = mysqli_fetch_array($hoaDon, MYSQLI_BOTH );
   $maHoaDon = $row['mahoadon'];
   	foreach ($_SESSION['cart'] as $key => $value) {
		   $masp=$key;
         $name= $value['name'];
         $hinhanh= $value['hinhanh'];
		   $price=$value['tien'];
		   $qty=$value['qty'];
         $thanhtien= $price * $qty;
		   $sql4 = "insert into chitiethoadon ( mahoadon , masp, tensp, hinhanh, soluong, dongia, thanhtien ) values( '$maHoaDon', '$masp', '$name', '$hinhanh', '$qty', '$price', '$thanhtien');";
		    $rs= mysqli_query($link, $sql4);
   	}
    unset($_SESSION['cart']);
}else {
   echo "<script>
      alert('Giỏ hàng trỗng');
      window.location='don-hang.php';
   </script>";
}
}else {
   echo "<script>
      alert('Vui lòng đăng nhập');
      window.location='login.php';
   </script>";
}
?>