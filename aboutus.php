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
    <?php include 'header.php'?>
    <div class="aboutus">
        <div class="container">
            <div class="row title">
                <div class="col-md-12">
                    <h1>VỀ CHÚNG TÔI</h1>
                    <br>
                    <p>Công ty điện tử K2DMC là công ty TNHH chuyên cung cấp các linh kiện điện tử chất lượng cao</p>
                    <p>Được thành lập ngày 28/10/2019</p>
                    <p>Tham vọng chiếm lĩnh thị trường linh kiện điện tử tại Việt Nam</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="box-profile">
                        <div class="img-profile"><img src="" alt=""></div>
                        <div class="name">Hồ Gia Khánh</div>
                        <div class="role">Giám đốc</div>
                        <div class="social">
                            <a href=""><i class="fab fa-facebook-square" style="color: #3B5998"></i></a>
                            <a href=""><i class="fab fa-instagram" style="color: brown"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box-profile">
                        <div class="img-profile"><img src="" alt=""></div>
                        <div class="name">Đinh Quang Duy</div>
                        <div class="role">Phó giám đốc</div>
                        <div class="social">
                            <a href=""><i class="fab fa-facebook-square" style="color: #3B5998"></i></a>
                            <a href=""><i class="fab fa-instagram" style="color: brown"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="box-profile">
                        <div class="img-profile"><img src="" alt=""></div>
                        <div class="name">Hoàng Văn Cường</div>
                        <div class="role">Trưởng phòng kinh doanh</div>
                        <div class="social">
                            <a href=""><i class="fab fa-facebook-square" style="color: #3B5998"></i></a>
                            <a href=""><i class="fab fa-instagram" style="color: brown"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-profile">
                        <div class="img-profile"><img src="" alt=""></div>
                        <div class="name">Nguyễn Văn Mạnh</div>
                        <div class="role">Trưởng phòng nhân sự</div>
                        <div class="social">
                            <a href=""><i class="fab fa-facebook-square" style="color: #3B5998"></i></a>
                            <a href=""><i class="fab fa-instagram" style="color: brown"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-profile">
                        <div class="img-profile"><img src="" alt=""></div>
                        <div class="name">Lê Minh Khai</div>
                        <div class="role">Trưởng phòng marketing</div>
                        <div class="social">
                            <a href=""><i class="fab fa-facebook-square" style="color: #3B5998"></i></a>
                            <a href=""><i class="fab fa-instagram" style="color: brown"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include 'footer.php'?>
</body>

</html>