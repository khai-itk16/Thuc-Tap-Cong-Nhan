
<?php
    require_once ("connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <!--theme-style-->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
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
    <!--slider-script-->
    <script src="js/responsiveslides.min.js"></script>
    <script>
        $(function() {
            $("#slider1").responsiveSlides({
                auto: true,
                speed: 500,
                namespace: "callbacks",
                pager: true,
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
    <!--header-->
    <?php require_once ('header.php'); ?>
    <div class="search-result">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                <?php
                    if (isset($_REQUEST['spmoi'])) {
                        echo '<h3 class="title">SẢN PHẨM MỚI</h2>';
                    } else if (isset($_REQUEST['spmuanhieu'])) {
                        echo '<h3 class="title">SẢN PHẨM MUA NHIỀU</h2>';
                    } else if (isset($_REQUEST['linhkiencoban'])) {
                        echo '<h3 class="title">LINH KIỆN CƠ BẢN</h2>';
                    } else if (isset($_REQUEST['madanhmuc'])) {
                        $maDM = $_REQUEST['madanhmuc'];
                        $sql = "SELECT dm.tendanhmuc FROM sanpham sp INNER JOIN danhmuc dm ON sp.madanhmuc = dm.madanhmuc WHERE dm.madanhmuc = '$maDM';";
                        $result = mysqli_query($link, $sql);
                        $row = mysqli_fetch_array($result, MYSQLI_BOTH);
                        echo '<h3 class="title">DANH MỤC '.$row['tendanhmuc'].'</h2>';
                    }
                   
                ?>
                
                </div>
            </div>
            <div class="row">

            <?php 

                if (isset($_REQUEST['spmoi'])) {
                    $sql = "SELECT * FROM sanpham WHERE spmoi = '1';";
                } else if (isset($_REQUEST['spmuanhieu'])) {
                    $sql = "SELECT * FROM sanpham WHERE spmuanhieu = '1';";
                } else if (isset($_REQUEST['linhkiencoban'])) {
                    $sql = "SELECT * FROM sanpham WHERE linhkiencoban = '1';";
                } else if (isset($_REQUEST['madanhmuc'])) {
                    $maDM = $_REQUEST['madanhmuc'];
                    $sql = "SELECT * FROM sanpham WHERE madanhmuc = '$maDM ';";
                }
                $result = mysqli_query($link, $sql);
                while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
                    echo '<div class="col-md-3" style="padding: 10px;">
                        <div class="col-md">
                            <a href="single.php?masanpham='.$row["masp"].'"><img src="images/'.$row["hinhanh"].'" alt="" /></a>
                            <div class="top-content">';
                                echo "<h5>".$row['tensp']."</h5>";
                                echo '<div class="white clearfix">
                                        <a href="#" class="hvr-shutter-in-vertical hvr-shutter-in-vertical2">ADD TO CART</a>';
                                    echo "<div class='price'>".$row["giatien"]." VND</div>";
                                echo "</div>
                            </div>
                        </div>
                    </div>";
                }
            ?>

            </div>
        </div>
    </div>


    <!--footer-->
    <?php include 'footer.php';?>
</body>

</html>