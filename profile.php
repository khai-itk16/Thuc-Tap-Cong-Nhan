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
				
            <div class="col-md-12">
                <span class="col-md-2">Tài khoản: </span>
                <input class="col-md-10" type="text" readonly value="<?= $row['tendangnhap'] ?>">
            </div> 
            <div class="col-md-12">
                <span class="col-md-2">Họ và tên: </span>
                <input class="col-md-10" type="text" readonly value="<?= $row['hoten'] ?>">
            </div>
            <div class="col-md-12">
                <span class="col-md-2">Địa chỉ: </span>
                <input class="col-md-10" type="text" readonly value="<?= $row['diachi'] ?>">
            </div> 
            <div class="col-md-12"> 	
                <span class="mail col-md-2" >Số điện thoại: </span>
                <input type="text" class="col-md-10" readonly value="<?= $row['sdt'] ?>"> 
            </div>	
            <div class="col-md-12"> 	
                <span class="mail col-md-2" >Email: </span>
                <input type="text" class="col-md-10" readonly value="<?= $row['email'] ?>"> 
            </div>
            <div class="col-md-12"> 
                <span class="word col-md-2">Gới tính: </span>
                <?php
                    if($row['gioitinh'] == 1) {
                        ?>
                        <input type="text" class="col-md-10" readonly value="Nam"> 
                        <?php
                    } else {
                        ?>
                        <input type="text" class="col-md-10" readonly value="Nữ"> 
                        <?php
                    }
                ?>
                
            </div>

            <div class="col-md-12" style="text-align: center;"> 	
                <button class="button"><a href="chinhsua.php">Chỉnh sửa</a></button>
                <button class="button"><a href="doimatkhau.php">Đổi mật khẩu</a></button>
            </div>
		</div>
	</div>    
    <?php require_once ('footer.php');?>
</body>
</html>