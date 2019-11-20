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
<body style="width:100%; float: left;">
    <?php require_once 'header.php';?>
    
    <div class="clearfix"></div>
    <div class="container">
        <div class="row">
            <div class="content col-md-12">
                <h3 class="future">THANH TOÁN</h2>
                <div class="content-header">
                    <div class="col-md-2">Hình ảnh</div>
                    <div class="col-md-3">Sản phẩm</div>
                    <div class="col-md-2">Đơn giá</div>
                    <div class="col-md-2">Số lượng</div>
                    <div class="col-md-3">Thành tiền</div>
                </div>
                
                <div class="cart-item-content col-md-12">
                    <div class="img-content col-md-2">
                        <a href=""><img src="./images/74hc.png" alt=""></a>
                    </div>
                    <div class="name-content col-md-3">
                        IC 74HC
                    </div>
                    <div class="price-content col-md-2">
                        <input class="price-status" name="price" readonly value="10000">đ 
                    </div>
                    <div class="count-content col-md-2">
                        <input class="quatity-status" style="outline: none;" name="quatity" readonly value="2">
                    </div>
                    <div class="total-content col-md-3">
                        <input class="total-status" name="price" readonly value="2000">đ 
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="cart-item-content" style="color: red;">
                        <div class="col-md-4">       
                            Tình trạng đơn hàng:
                            <input class="order-status" name="" readonly value="Đang chờ xử lý.">
                        </div>

                        <div class="col-md-4">       
                            Thời gian nhận hàng:
                            <input class="time-receipt"name="" readonly value="Giao hàng chậm nhất trong vòng 3 ngày.">
                        </div>

                        <div class="col-md-4">       
                            Tổng tiền thanh toán:
                            <input class="total-price" name="total-price" readonly value="2000">đ 
                        </div>
                    </div> 
                </div> 
            </div>
        </div>
    </div>

        <!---->
    <?php include 'footer.php';?>
</body>
</html>