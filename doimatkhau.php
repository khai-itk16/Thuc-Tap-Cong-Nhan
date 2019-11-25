<?php 
    session_start();
    if(isset($_POST['pass_old'])) {
        require_once('connect.php');
        
        $pass_old = $_POST['pass_old'];
        $pass_new = $_POST['pass_new'];
        $sql="SELECT kh.matkhau FROM khachhang kh WHERE kh.makhachhang = '".$_SESSION['makh']."';";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_BOTH);

        if($row['matkhau'] != md5($pass_old)) {
            echo "<script>
            alert('Mật khẩu củ không đúng.');
        </script>";
        } else {
            $sql = "UPDATE khachhang kh 
            SET kh.matkhau='".md5($pass_new)."' 
            WHERE kh.makhachhang = '".$_SESSION['makh']."'";
            $result = mysqli_query($link, $sql);
            echo "<script>
                alert('Đổi mật khẩu thành công');
                window.location='profile.php';
            </script>";
        }
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
             // Xác nhận mật khẩu
            var matKhauCu = document.forms["myForm"]["pass_old"].value;
            var matKhauMoi = document.forms["myForm"]["pass_new"].value;
            var xacNhanMatKhau = document.forms["myForm"]["re_pass"].value;
            if (matKhauCu == '') {
                alert("Mật khẩu củ không được để trống.");
                document.forms["myForm"]["pass_old"].focus();
                return false;
            }
            if (matKhauMoi == '') {
                alert("Mật khẩu mới không được để trống.");
                document.forms["myForm"]["pass_new"].focus();
                return false;
            }
            if (matKhauMoi != xacNhanMatKhau) {
                alert("Xác nhận mật khẩu không khớp. Vui lòng nhập lại mật khẩu");
                document.forms["myForm"]["re_pass"].value = "";
                document.forms["myForm"]["re_pass"].focus();
                return false;
            }
        }
    </script>
</head>
<body>
    <?php require_once ('header.php');?>
    <div class="container">
		<div class="account">
			<h2 class="account-in">ĐỔI MẬT KHẨU</h2>
				<form action="doimatkhau.php" method="POST" name="myForm" onsubmit="return validateForm();">
                    <div class="col-md-12"> 
                        <span class="word col-md-2">Mật khẩu củ* </span>
                        <input type="password" class="col-md-10" name="pass_old">
                    </div>	
                    <div class="col-md-12"> 
                        <span class="word col-md-2">Mật khẩu mới*</span>
                        <input type="password" class="col-md-10" name="pass_new" >
                    </div>
                    <div class="col-md-12"> 
                        <span class="word col-md-2">Nhập lại mật khẩu*</span>
                        <input type="password" class="col-md-10" name="re_pass" >
                    </div>				
                    <input type="submit" value="Cập nhật">
                    <button class="button" style="width: 80px !important"><a href="profile.php">Hủy</a></button>
				</form>
		</div>
	</div>    
    <?php require_once ('footer.php');?>
</body>
</html>