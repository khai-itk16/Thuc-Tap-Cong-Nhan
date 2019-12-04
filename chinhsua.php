<?php 
    session_start();
    if(isset($_POST['user'])) {
        require_once('connect.php');
        $user = $_POST['user'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $sex = $_POST['sex'];
        $sql = "UPDATE khachhang kh 
            SET kh.tendangnhap='$user', kh.hoten='$name', kh.diachi='$address', kh.sdt='$phone', kh.email='$email', kh.gioitinh='$sex' 
            WHERE kh.makhachhang = '".$_SESSION['makh']."'";
            $result = mysqli_query($link, $sql);
            $_SESSION['user'] = $user;
            echo "<script>
               alert('Chỉnh sửa thông tin thành công');
               window.location='profile.php';
            </script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <!--theme-style-->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/style1.css">
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Bonfire Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--fonts-->
    <link href='http://fonts.googleapis.com/css?family=Exo:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <!--//fonts-->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!--//slider-script-->
    <script>
        $(document).ready(function(c) {
            $('.alert-close').on('click', function(c) {
                $('.message').fadeOut('slow', function(c) {
                    $('.message').remove();
                });
            });
        });
    </script>
    <script>
        $(document).ready(function(c) {
            $('.alert-close1').on('click', function(c) {
                $('.message1').fadeOut('slow', function(c) {
                    $('.message1').remove();
                });
            });
        });
    </script>
    <script type="text/javascript">
        
        function validateForm() {
            //Tài khoản phải được điền
            var taiKhoan = document.forms["myForm"]["user"].value;
            if (taiKhoan == "") {
                alert("Tài khoản không được để trống");
                document.forms["myForm"]["user"].focus();
                return false;
            }
            //Tên phải được điền
            var ten = document.forms["myForm"]["name"].value;
            if (ten == "") {
                alert("Tên không được để trống");
                document.forms["myForm"]["name"].focus();
                return false;
            }

            //Địa chỉ phải được điền
            var diaChi = document.forms["myForm"]["address"].value;
            if (diaChi == "") {
                alert("Địa chỉ không được để trống");
                document.forms["myForm"]["address"].focus();
                return false;
            }
             //Nhập số điện thoại
            var dienThoai = document.forms["myForm"]["phone"].value;
            var kiemTraDT = isNaN(dienThoai);
            if (dienThoai == "") {
                alert("Điện thoại không được để trống");
                document.forms["myForm"]["phone"].focus();
                return false;
            }
            if (kiemTraDT == true) {
                alert("Điện thoại phải để ở định dạng số");
                document.forms["myForm"]["phone"].focus();
                return false;
            }

            //Email phải được điền chính xác
            var email=document.forms["myForm"]["email"].value;
            var aCong=email.indexOf("@");
            var dauCham = email.lastIndexOf(".");
            if (email == "") {
                alert("Email không được để trống");
                document.forms["myForm"]["email"].focus();
                return false;
            }
            else if ((aCong<1) || (dauCham<aCong+2) || (dauCham+2>email.length)) {
                alert("Email bạn điền không chính xác");
                document.forms["myForm"]["email"].focus();
                return false;
            }
        }
    </script>
</head>
<body>
    <?php require_once ('header.php');?>
    <?php
        $sql="SELECT * FROM khachhang kh WHERE kh.makhachhang = '".$_SESSION['makh']."';";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_BOTH);
    ?>
    <div class="container">
		<div class="account">
			<h2 class="account-in">THÔNG TIN TÀI KHOẢN</h2>
				<form action="chinhsua.php" method="POST" name="myForm" onsubmit="return validateForm();">
				<div class="col-md-12">
					<span class="col-md-2">Tài khoản*</span>
					<input class="col-md-10" type="text" name="user" value="<?= $row['tendangnhap'] ?>">
				</div> 
                <div class="col-md-12">
					<span class="col-md-2">Họ và tên*</span>
					<input class="col-md-10" type="text" name="name" value="<?= $row['hoten'] ?>"> 
				</div>
                <div class="col-md-12">
					<span class="col-md-2">Địa chỉ*</span>
					<input class="col-md-10" type="text" name="address" value="<?= $row['diachi'] ?>">
				</div> 
                <div class="col-md-12"> 	
					<span class="mail col-md-2" >Số điện thoại*</span>
					<input type="text" class="col-md-10" name="phone" value="<?= $row['sdt'] ?>"> 
				</div>	
				<div class="col-md-12"> 	
					<span class="mail col-md-2" >Email*</span>
					<input type="text" class="col-md-10" name="email" value="<?= $row['email'] ?>"> 
				</div>
                <div class="col-md-12"> 
					<span class="word col-md-2">Gới tính*</span>
					<select name="sex">
                        <option value="1" <?= ($row['gioitinh']==1)?("selected"):''?>>Nam</option>
                        <option value="0"<?= ($row['gioitinh']==0)?("selected"):''?>>Nữ</option>
                    </select>
				</div>
                    <input type="submit" value="Cập nhật">
                    <button class="button" style="width: 80px !important"><a href="profile.php" style="display:block; width: 100% !important">Hủy</a></button>
				</form>
		</div>
	</div>    
    <?php require_once ('footer.php');?>
</body>
</html>