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
    <?php require_once ('banner.php');?>
    <!---->
		<div class="container">
			<div class="content">
				<div class="content-top">
					<h3 class="future"><a href="product.php?spmuanhieu=true">SẢN PHẨM MUA NHIỀU</a></h3>
					<div class="content-top-in">

					<?php 
						$sql = "select * from sanpham where spmuanhieu = '1' limit 8";
						$result = mysqli_query($link, $sql);
						while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
							echo '<div class="col-md-3 " style="padding: 10px;">
								<div class="col-md">
									<a href="single.php?masanpham='.$row["masp"].'"><img src="images/'.$row["hinhanh"].'" alt="" /></a>
									<div class="top-content">
                                        <h5>'.$row["tensp"].'</h5>';
										echo '<div class="white clearfix">
												<a href="javascript:void(0)" id='.$row["masp"].' class="hvr-shutter-in-vertical hvr-shutter-in-vertical2 cart-to" >ADD TO CART</a>';
											echo "<div class='price'>".$row["giatien"]." VND</div>";
										echo "</div>
									</div>
								</div>
							</div>";
						}
                    ?>
                       
					<div class="clearfix"></div>
					</div>
				</div>
				<!---->
				<div class="content-middle">
                <h3 class="future"><a href="product.php?spmoi=true">SẢN PHẨM MỚI</a></h3>
					<div class="content-top-in">
					<?php 
						$sql = "select * from sanpham where spmoi = '1' limit 8";
						$result = mysqli_query($link, $sql);
						while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
							echo '<div class="col-md-3" style="padding: 10px;">
								<div class="col-md">
									<a href="single.php?masanpham='.$row["masp"].'"><img src="images/'.$row["hinhanh"].'" alt="" /></a>
									<div class="top-content">';
										echo "<h5>".$row['tensp']."</h5>";
										echo '<div class="white clearfix">
												<a href="javascript:void(0)" id='.$row["masp"].' class="hvr-shutter-in-vertical hvr-shutter-in-vertical2 cart-to" >ADD TO CART</a>';
											echo "<div class='price'>".$row["giatien"]." VND</div>";
										echo "</div>
									</div>
								</div>
							</div>";
						}
                    ?>
					<div class="clearfix"></div>
					</div>
                </div>
                <!---->
                <!---->
				<div class="content-middle">
                <h3 class="future"><a href="product.php?linhkiencoban=true">LINH KIÊN CƠ BẢN</a></h3>
					<div class="content-top-in">
					<?php 
						$sql = "select * from sanpham where linhkiencoban = '1' limit 8";
						$result = mysqli_query($link, $sql);
						while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
							echo '<div class="col-md-3" style="padding: 10px;">
								<div class="col-md">
									<a href="single.php?masanpham='.$row["masp"].'"><img src="images/'.$row["hinhanh"].'" alt="" /></a>
                                    <div class="top-content">
                                    <h5>'.$row["tensp"].'</h5>';
										echo '<div class="white clearfix">
												<a href="javascript:void(0)" id='.$row["masp"].' class="hvr-shutter-in-vertical hvr-shutter-in-vertical2 cart-to" >ADD TO CART</a>';
											echo "<div class='price'>".$row["giatien"]." VND</div>";
										echo "</div>
									</div>
								</div>
							</div>";
						}
                    ?>
					<div class="clearfix"></div>
					</div>
                </div>
                <!---->
            <!-- <ul class="start">
                <li ><a href="#"><i></i></a></li>
                <li><span>1</span></li>
                <li class="arrow"><a href="#">2</a></li>
                <li class="arrow"><a href="#">3</a></li>
                <li class="arrow"><a href="#">4</a></li>
                <li class="arrow"><a href="#">5</a></li>
                <li ><a href="#"><i  class="next"> </i></a></li>
            </ul> -->
        </div>
    </div>
    <?php require_once ('footer.php');?>
</body>
</html>