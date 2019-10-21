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
    <?php include 'header.php';?>
    <div class="container">
		<div class="account">
			<h2 class="account-in">ĐĂNG KÝ TÀI KHOẢN</h2>
				<form>
				<div class="col-md-12">
					<span class="col-md-2">Tài khoản*</span>
					<input class="col-md-10" type="text">
				</div> 
                <div class="col-md-12">
					<span class="col-md-2">Họ và tên*</span>
					<input class="col-md-10" type="text">
				</div>
                <div class="col-md-12">
					<span class="col-md-2">Địa chỉ*</span>
					<input class="col-md-10" type="text">
				</div> 
                <div class="col-md-12"> 	
					<span class="mail col-md-2" >Số điện thoại*</span>
					<input type="text" class="col-md-10"> 
				</div>	
				<div class="col-md-12"> 	
					<span class="mail col-md-2" >Email*</span>
					<input type="text" class="col-md-10"> 
				</div>
				<div class="col-md-12"> 
					<span class="word col-md-2">Mật khẩu*</span>
					<input type="password" class="col-md-10">
				</div>	
                <div class="col-md-12"> 
					<span class="word col-md-2">Nhập lại mật khẩu*</span>
					<input type="password" class="col-md-10">
				</div>				
					<input type="submit" value="Đăng ký"> 
				</form>
		</div>
	</div>
		<!---->
    <?php include 'footer.php';?>
</body>
</html>