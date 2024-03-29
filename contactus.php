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

</body>

</html>
<?php include 'header.php'?>
<div class="contactus">
    
    <div class="container">
        <h1 class="title">LIÊN HỆ VỚI CHÚNG TÔI</h1>
        <hr />
        <div class="row content">
            <div class="col-md-6">
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.554943702515!2d108.18405291422359!3d16.036667244570854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421976ef86ce7b%3A0x6bbfa14f2bb5cef8!2zSzA1LCA0NyBMw6ogVHLhu41uZyBU4bqlbiwgSMOyYSBQaMOhdCwgQ-G6qW0gTOG7hywgxJDDoCBO4bq1bmcsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1572594314395!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
            <div class="col-md-6">
                <div class="info">
                    <h3>Điện tử K2DMC</h3>
                    <h4><i class="fas fa-map-marker-alt"></i>Địa chỉ: K05/47 Lê Trọng Tấn, Thành phố Đà Nẵng</h4>
                    <h4><i class="fas fa-phone-volume"></i>Số điện thoại: 0335941792</h4>
                    <h4><i class="fas fa-envelope"></i>Email: dientuk2dmc@gmail.com</h4>
                    <h4><i class="fab fa-facebook-square"></i>facebook.com/page/dientuk2dmc</h4>
                    <form class="form-lienhe" method="POST" action="xulyphanhoi.php">
                        <div class="row">
                            
                            <div class="col-md-12">
                                <textarea required name="noidung" placeholder="Nội dung thắc mắc" name="" id="" cols="100%" rows="4" width="100%"></textarea>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                                <input required name="email" type="gmail" width="100%" placeholder="Nhập email của bạn">
                            </div>
                            <div class="col-md-3">
                                <div class="btn-submit">
                                    <input class="" type="submit" value="Xác nhận">
                                </div>
                            </div>
                        
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'?>