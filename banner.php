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
   <!--slider-script-->
   <script src="./js/responsiveslides.min.js"></script>
    <script>
        $(function() {
            $(".rslides").responsiveSlides({
                auto: true,             
                speed: 1000,            
                timeout: 4000,          
                pager: false,           
                nav: false,             
                random: false,          
                pause: false,           
                pauseControls: false,   
                prevText: "Previous",   
                nextText: "Next",       
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
    <div class="banner-mat">
        <div class="container-fluid">
            <div class="row">
                <div class="banner">

                    <!-- Slideshow 4 -->
                    <div class="slider">
                        <ul class="rslides" id="slider1">
                            <li><img src="images/banner.jpg" alt=""></li>
                            <li><img src="images/banner1.jpg" alt=""></li>
                            <li><img src="images/banner.jpg" alt=""></li>
                            <li><img src="images/banner2.jpg" alt=""></li>
                        </ul>
                    </div>

                    <div class="banner-bottom">
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- //slider-->
        </div>
    </div>
</body>
</html>