<?php 
    @session_start();
    require_once ("connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"/>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <!--theme-style-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" type="text/css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="./css/style1.css">
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
    <script src="./js/custom.js"></script>
</head>

<body>
    <!--header-->
    <div class="header">
        <div class="header-top">
            <div class="container">
                <div class="header-top-in">
                    <div class="logo">
                        <a href="index.php"><img src="images/logo.png" alt=" "></a>
                    </div>
                    <div class="header-in">
                        <ul class="icon1 sub-icon1">
                            <?php

                            if(isset($_SESSION['user'])) {
                                echo '<li><a href="thanhtoan.php">';
                                    echo "Welcom ".$_SESSION['user'];
                                echo '</a></li>';
                                echo '<li><a href="xuly-login.php?logout=true">Đăng xuất</a></li>';
                            } else {
                                echo '<li><a href="register.php">Đăng ký</a> </li>';
                                echo '<li><a href="login.php">Đăng nhập</a></li>';
                            }
                            ?>
                            <li>
                                <div class="cart" style="margin-top: 12px;">
                                    <a href="gio-hang.php" class="cart-in"> </a>
                                    <span id="test123"><?php
                                        $sum = 0;
                                        if(isset($_SESSION['cart'])){
                                            
                                             foreach ($_SESSION['cart'] as $key => $value){
                                                   $sum += $value['qty'];
                                             }
                                        }
                                        echo $sum;
                                     ?></span>
                                </div>
                               
                                    <div class="clearfix"></div>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="h_menu4">
                    <a class="toggleMenu" href="#">Menu</a>
                    <ul class="nav">
                        <li><a href="index.php"><i> </i>Trang chủ</a></li>
                        <li><a href="#">Danh mục</a>
                            <ul class="drop">
                                <?php 
                                    $sql = "select * from danhmuc;";
                                    $result = mysqli_query($link, $sql);
                                    while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
                                        echo "<li><a href='product.php?madanhmuc=".$row['madanhmuc']."'>".$row['tendanhmuc']."</a></li>";
                                    }
                                ?>
                            </ul>
                        </li>
                        <li><a href="aboutus.php">Về chúng tôi</a></li>
                        <li><a href="contactus.php">Liên hệ</a></li>
                        <div class="search" style="margin-top: 20px; float: right;">
                            <form action="searchresult.php" method="POST">
                                <input name="tensp" type="text" placeholder="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
                                <input type="submit" value="">
                            </form>
                        </div>
                    </ul>
                    
                    <script type="text/javascript" src="js/nav.js"></script>
                </div>
            </div>
        </div>
    </div>

</body>
</html>