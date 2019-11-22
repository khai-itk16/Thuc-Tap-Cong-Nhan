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
    <link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
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
            var taiKhoan = document.forms["myForm"]["hoten"].value;
            if (taiKhoan == "") {
                alert("Tên không được để trống");
                document.forms["myForm"]["hoten"].focus();
                return false;
            }
            //Địa chỉ phải được điền
            var diaChi = document.forms["myForm"]["diaChi"].value;
            if (diaChi == "") {
                alert("Địa chỉ không được để trống");
                document.forms["myForm"]["diaChi"].focus();
                return false;
            }
             //Nhập số điện thoại
            var dienThoai = document.forms["myForm"]["sodienthoai"].value;
            var kiemTraDT = isNaN(dienThoai);
            if (dienThoai == "") {
                alert("Sô Điện thoại không được để trống");
                document.forms["myForm"]["sodienthoai"].focus();
                return false;
            }
            if (kiemTraDT == true) {
                alert("Số Điện thoại phải để ở định dạng số");
                document.forms["myForm"]["sodienthoai"].focus();
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
    <?php require_once 'header.php';?>
    <div class="container">
        <div class="row">
            <div class="account"> 
                <form action="xuly_donhang.php" method="POST" name="myForm" >  
                    <h3 class="future">ĐỊA ĐIỂM NHẬN HÀNG</h3>
                    <div class="col-md-12">
                        <span class="col-md-2">Họ và tên*</span>
                        <input class="col-md-10" type="text" name="hoten" required>
                    </div>
                    <div class="col-md-12">
                        <span class="col-md-2" >Địa chỉ nhận hàng*</span>
                        <input class="col-md-10" type="text" name="diachi" required>
                    </div> 
                    <div class="col-md-12"> 	
                        <span class="mail col-md-2" >Số điện thoại liên hệ*</span>
                        <input type="text" class="col-md-10" name="sodienthoai" required> 
                    </div>	
                    <div class="col-md-12"> 	
                        <span class="mail col-md-2" >Email*</span>
                        <input type="text" class="col-md-10" name="email" required> 
                    </div>
                    <div class="col-md-12"> 	
                        <span class="mail col-md-2" >Ghi chú</span>
                        <input type="text" class="col-md-10" name="ghichu"> 
                    </div>					

                    <div class="col-md-12"> 
                        <h3 class="future">HÌNH THỨC THANH TOÁN</h3>	
                        <div class="payment-method"> 
                            <div class="col-md-4 payment_name">
                                <h4>Thanh toán khi nhận hàng</h4>
                                <img src="./images/give-money.png" alt="give money">
                                <input type="radio" name="radio" value="1" checked="true">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12"> 
                        <input type="submit" value="ĐẶT HÀNG" style="margin-left: 45% !important;"> 
                    </div>

                </form>
            </div>
        </div>
	</div>
		<!---->
    <?php include 'footer.php';?>
</body>
</html>