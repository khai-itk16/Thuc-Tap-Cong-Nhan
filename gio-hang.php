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
    <?php
    if(isset($_SESSION['cart']) && $_SESSION['cart'] !=null ) {
     ?>
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
                    <?php  

                    foreach ($_SESSION['cart'] as $key => $value) : ?>
                        <?php $tongtien=$value['tien']*$value['qty'];?>
                    <div class="cart-item-content">
                        <div class="img-content col-md-2">
                            <a href=""><img src="./images/<?=$value['hinhanh'] ?>" alt=""></a>
                        </div>
                        <div class="name-content col-md-3">
                            <?=$value['name']?>
                        </div>
                        <div class="price-content col-md-2">
                            <input class="price-status" name="price" readonly value="<?=$value['tien'] ?>">đ 
                        </div>
                        <div class="count-content col-md-2">
                            <button  type="button" class="minus" id="<?=$key?>">-</button>
                            <input class="quatity-status" name="quatity" value="<?=$value['qty'] ?>">
                            <button  type="button" class="plus"  id="<?=$key?>">+</button>
                        </div>
                        <div class="total-content col-md-2">
                            <input class="total-status" name="price" readonly value="<?=$tongtien?>">đ 
                        </div>
                        <div >
                            <a href="javascript:void(0)"class="xoagiohang" id="<?=$key?>"><i class="far fa-trash-alt" ></i></a>
                        </div>
                    </div>

                <?php endforeach; ?>
                        
                <div class="cart-item-content" style="color: red;">
                    TỔNG CỘNG:
                    <input class="total-price" name="total-price" readonly value="0">đ 
                </div>

                <?php }else {?>
                    <div class="col-md-12" style="background: white; padding: 10px;">
                        <h3 class="no-item">Không có sản phẩm nào trong giỏ </h3>
                    </div>
                <?php };?>
                    <div class="col-md-12" style="background: white; padding: 20px; margin-bottom: 20px;">
                        <div class="cart-order">
                            <button><a href="index.php">MUA THÊM SẢN PHẨM</a></button>&emsp;
                            <button><a href="don-hang.php">Đặt Hàng</a></button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

        <!---->
    <?php include 'footer.php';?>
</body>
</html>