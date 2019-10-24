g<!DOCTYPE html>
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
        <div class="row">
            <div class="account">
                <h3 class="future">ĐƠN HÀNG</h2>
                <form action="">
                    <div class="content-order">
                        <div class="content-header">
                            <div class="col-md-2" style="padding: 0 !important;">Hình ảnh</div>
                            <div class="col-md-3" style="padding: 0 !important;">Sản phẩm</div>
                            <div class="col-md-2" style="padding: 0 !important;">Đơn giá</div>
                            <div class="col-md-2" style="padding: 0 !important;">Số lượng</div>
                            <div class="col-md-3" style="padding: 0 !important;">Thành tiền</div>
                        </div>

                        <div class="cart-item-content" style="padding-top: 0 !important; line-height: 80px;">
                            <div class="img-content col-md-2">
                                <a href=""><img src="./images/cuon_cam.jpg" alt=""></a>
                            </div>
                            <div class="name-content col-md-3">
                                Cuộn cảm 0.1uH
                            </div>
                            <div class="price-content col-md-2">
                                <input class="price-status" name="price" readonly value="1000">đ 
                            </div>
                            <div class="count-content col-md-2">
                                <button class="minus">-</button>
                                <input class="quatity-status" name="quatity" value="1">
                                <button class="plus">+</button>
                            </div>
                            <div class="total-content col-md-2">
                                <input class="total-status" name="total-status" readonly value="1000">đ 
                            </div>
                            <div class="delete-item col-md-1">
                                <i class="far fa-trash-alt"></i>
                            </div>
                        </div>

                        <div class="cart-item-content" style="padding-top: 0 !important; line-height: 80px;">
                            <div class="img-content col-md-2">
                                <a href=""><img src="./images/cuon_cam.jpg" alt=""></a>
                            </div>
                            <div class="name-content col-md-3">
                                Cuộn cảm 0.1uH
                            </div>
                            <div class="price-content col-md-2">
                                <input class="price-status" name="price" readonly value="1000">đ 
                            </div>
                            <div class="count-content col-md-2">
                                <button class="minus">-</button>
                                <input class="quatity-status" name="quatity" value="1">
                                <button class="plus">+</button>
                            </div>
                            <div class="total-content col-md-2">
                                <input class="total-status" name="total-status" readonly value="1000">đ 
                            </div>
                            <div class="delete-item col-md-1">
                                <i class="far fa-trash-alt"></i>
                            </div>
                        </div>

                        <div class="cart-item-content" style="color: red;">
                            TỔNG CỘNG:
                            <input class="total-price" name="total-price" readonly value="0">đ 
                        </div>
                    </div>

                    
                    <h3 class="future">ĐỊA ĐIỂM NHẬN HÀNG</h2>
                    <div class="col-md-12">
                        <span class="col-md-2">Họ và tên*</span>
                        <input class="col-md-10" type="text" require="require">
                    </div>
                    <div class="col-md-12">
                        <span class="col-md-2" >Địa chỉ nhận hàng*</span>
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
                        <span class="mail col-md-2" >Ghi chú</span>
                        <input type="text" class="col-md-10"> 
                    </div>					

                    <h3 class="future">HÌNH THỨC THANH TOÁN</h2>
                    <input type="submit" value="ĐẶT HÀNG"> 

                </form>
            </div>
        </div>
	</div>
		<!---->
    <?php include 'footer.php';?>
</body>
</html>