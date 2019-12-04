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
        $sql="SELECT count(*) FROM hoadon hd INNER JOIN khachhang kh 
            ON hd.makhachhang = kh.makhachhang 
            WHERE hd.dathanhtoan = 0 AND hd.makhachhang = ".$_SESSION['makh'];
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_BOTH);
    ?>
    <div class="clearfix"></div>
    <div class="container">
        <div class="row">
            <div class="content col-md-12">
                <h3 class="future">THANH TOÁN</h2>
                <?php
                    if($row[0] == 0) {
                ?>
                    <div class="col-md-12" style="background: white; padding: 10px;">
                        <h3 class="no-item">Hiện tại bạn chưa đặt đơn hàng nào.</h3>
                    </div>
                <?php
                    } else{
                ?>
                        
                
                <div class="content-header">
                    <div class="col-md-2">Hình ảnh</div>
                    <div class="col-md-2">Sản phẩm</div>
                    <div class="col-md-2">Đơn giá</div>
                    <div class="col-md-2">Số lượng</div>
                    <div class="col-md-2">Thành tiền</div>
                    <div class="col-md-2">Tình trạng</div>
                </div>
                <?php 
                    $sql="SELECT hd.tongtien, hd.tinhtrang, ct.* FROM hoadon hd 
                        INNER JOIN chitiethoadon ct ON hd.mahoadon = ct.mahoadon 
                        WHERE hd.dathanhtoan = 0 AND hd.makhachhang 
                        IN (SELECT kh.makhachhang FROM khachhang kh WHERE kh.makhachhang = ".$_SESSION['makh'].");";
                    $result = mysqli_query($link, $sql);
                    while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
                ?>
                    <div lass="col-md-12">
                        <div class="cart-item-content">
                            <div class="img-content col-md-2">
                                <a href="single.php?masanpham=<?= $row['masp'];?>"><img src="./images/<?= $row['hinhanh'];?>" alt=""></a>
                            </div>
                            <div class="name-content col-md-2">
                            <?= $row['tensp'];?>
                            </div>
                            <div class="price-content col-md-2">
                                <input class="price-status"readonly value="<?= $row['dongia'];?>">đ 
                            </div>
                            <div class="count-content col-md-2">
                                <input class="quatity-status" style="outline: none;" readonly value="<?= $row['soluong'];?>">
                            </div>
                            <div class="total-content col-md-2">
                                <input class="total-status" readonly value="<?= $row['thanhtien'];?>">đ 
                            </div>
                            <div class="col-md-2">
                                <input class="status-bill" readonly value="<?php echo(($row['tinhtrang']==0) ? "Đang chờ xử lý" : "Đang giao hàng" );?>">
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
                
                <div class="cart-item-content" style="color: red;">
                    <div class="col-md-6">       
                        Thời gian nhận hàng:
                        <input class="time-receipt"name="" readonly value="Giao hàng chậm nhất trong vòng 3 ngày.">
                    </div>

                    <div class="col-md-4">       
                        Tổng tiền thanh toán:
                        <input class="total-price" name="total-price" readonly value="<?= $row['tongtien'] ?>">đ 
                    </div>
                </div> 
                <?php
                    }
                ?>
            </div>
        </div>
    </div>

        <!---->
    <?php include 'footer.php';?>
</body>
</html>