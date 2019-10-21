<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <!--theme-style-->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="./css/style1.css">
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <!--fonts-->
    <link href='http://fonts.googleapis.com/css?family=Exo:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <div class="clearfix"></div>
    <div class="container">
        <div class="row">
            <div class="content col-md-12">
                <h3 class="future">GIỎ HÀNG</h2>
                <form action="">
                    <div class="content-header">
                        <div class="col-md-2">Hình ảnh</div>
                        <div class="col-md-3">Sản phẩm</div>
                        <div class="col-md-2">Đơn giá</div>
                        <div class="col-md-2">Số lượng</div>
                        <div class="col-md-3">Thành tiền</div>
                    </div>

                    <div class="cart-item-content">
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
                            <input class="total-status" name="price" readonly value="1000">đ 
                        </div>
                        <div class="delete-item col-md-1">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </div>
                    </div>
                    
                    <div class="cart-item-content">
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
                            <input class="total-status" name="price" readonly value="1000">đ 
                        </div>
                        <div class="delete-item col-md-1">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </div>
                    </div>

                    <div class="cart-item-content">
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
                            <input class="total-status" name="price" readonly value="1000">đ 
                        </div>
                        <div class="delete-item col-md-1">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="cart-order col-md-4">
                        <button><a href="">MUA THÊM SẢN PHẨM</a></button>
                        <input type="submit" value="ĐẶT HÀNG">
                    </div>
                </form>

            </div>
        </div>
	</div>
		<!---->
    <?php include 'footer.php';?>
</body>
</html>