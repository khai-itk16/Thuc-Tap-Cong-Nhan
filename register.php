<?php 
    require_once ("xuly-dangky.php");
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
            //Tài khoản bị trùng
            var checkUser = document.forms["myForm"]["checkUser"].value;
            if (checkUser == "0") {
                alert("Tài khoản không được trùng");
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
           

            //xác nhận giới tính
            var gioiTinh = document.forms["myForm"]["sex"].value;
            if (gioiTinh == -1) {
                alert("Bạn chưa chọn giới tính");
                return false;
            }
            // Xác nhận mật khẩu
            var matKhau = document.forms["myForm"]["pass"].value;
            var xacNhanMatKhau = document.forms["myForm"]["re_pass"].value;
            if (matKhau == '') {
                alert("Mật khẩu không được để trống.");
                document.forms["myForm"]["pass"].focus();
                return false;
            }
            if (matKhau != xacNhanMatKhau) {
                alert("Xác nhận mật khẩu không khớp. Vui lòng nhập lại mật khẩu");
                document.forms["myForm"]["re_pass"].value = "";
                document.forms["myForm"]["re_pass"].focus();
                return false;
            }
        }
    </script>
</head>
<body>
    <?php require_once 'header.php';?>
    <div class="container">
		<div class="account">
			<h2 class="account-in">ĐĂNG KÝ TÀI KHOẢN</h2>
				<form action="register.php" method="POST" name="myForm" onsubmit="return validateForm();">
				<div class="col-md-12">
					<span class="col-md-2">Tài khoản*</span>
					<input class="col-md-10 account-user" type="text" name="user">
                    <span class="col-md-2 check-user"></span>
                    <input class="input-check-user" type="hidden" name="checkUser" value="1">
				</div> 
                <div class="col-md-12">
					<span class="col-md-2">Họ và tên*</span>
					<input class="col-md-10" type="text" name="name">
				</div>
                <div class="col-md-12">
					<span class="col-md-2">Địa chỉ*</span>
					<input class="col-md-10" type="text" name="address">
				</div> 
                <div class="col-md-12"> 	
					<span class="mail col-md-2" >Số điện thoại*</span>
					<input type="text" class="col-md-10" name="phone"> 
				</div>	
				<div class="col-md-12"> 	
					<span class="mail col-md-2" >Email*</span>
					<input type="text" class="col-md-10" name="email"> 
				</div>
                <div class="col-md-12"> 
					<span class="word col-md-2">Gới tính*</span>
					<select name="sex">
                        <option value="-1">--</option>
                        <option value="1">Nam</option>
                        <option value="0">Nữ</option>
                    </select>
				</div>
				<div class="col-md-12"> 
					<span class="word col-md-2">Mật khẩu*</span>
					<input type="password" class="col-md-10" name="pass">
				</div>	
                <div class="col-md-12"> 
					<span class="word col-md-2">Nhập lại mật khẩu*</span>
					<input type="password" class="col-md-10" name="re_pass" >
				</div>				
					<input type="submit" value="Đăng ký"> 
				</form>
		</div>
	</div>
		<!---->
    <?php require_once ('footer.php');?>
</body>
</html>