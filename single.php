<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
    <title>Bonfire a Ecommerce Category Flat Bootstarp Responsive Website Template | Single :: w3layouts</title>
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
    <link rel="stylesheet" href="css/etalage.css">
    <script src="js/jquery.etalage.min.js"></script>
    <script>
        jQuery(document).ready(function($) {

            $('#etalage').etalage({
                thumb_image_width: 300,
                thumb_image_height: 400,
                source_image_width: 900,
                source_image_height: 1200,
                show_hint: true,
                click_callback: function(image_anchor, instance_id) {
                    alert('Callback example:\nYou clicked on an image with the anchor: "' + image_anchor + '"\n(in Etalage instance: "' + instance_id + '")');
                }
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
</head>

<body>
    <?php include 'header.php'?>
    <div class="container">
        <div class="single">
            <div class="row">
                <div class="col-md-9 top-in-single">
                    <div class="row">
                        <div class="col-md-5 single-top">
                            <ul id="etalage">
                                <li>
                                    <a href="optionallink.html">
                                        <img class="etalage_thumb_image img-responsive" src="images/arduino.jpg" alt="">
                                        <img class="etalage_source_image img-responsive" src="images/arduino.jpg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <img class="etalage_thumb_image img-responsive" src="images/arduino.jpg" alt="">
                                    <img class="etalage_source_image img-responsive" src="images/arduino.jpg" alt="">
                                </li>
                                <li>
                                    <img class="etalage_thumb_image img-responsive" src="images/arduino.jpg" alt="">
                                    <img class="etalage_source_image img-responsive" src="images/arduino.jpg" alt="">
                                </li>
                                <li>
                                    <img class="etalage_thumb_image img-responsive" src="images/arduino.jpg" alt="">
                                    <img class="etalage_source_image img-responsive" src="images/arduino.jpg" alt="">
                                </li>
                            </ul>


                        </div>
                        <div class="col-md-7 single-top-in clearfix">
                            <div class="single-para">
                                <h4>ARDUINO UNO R3</h4>
                                <div class="para-grid">
                                    <span class="add-to price">210,000 VND</span>
                                    <a href="#" class="hvr-shutter-in-vertical cart-to">Add to Cart</a>
                                    <div class="clearfix"></div>
                                </div>
                                <h5>Còn số lượng 45</h5>
                                <div class="available">
                                    Số lượng:
                                    <select>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <p>Arduino Uno R3 DIP là dòng Arduino thế hệ thứ 3 cũng giống như các phiên bản trước đây giúp người dùng dễ dàng tiếp cận với lập trình để tạo ra phần cứng có những tính năng mong muốn một cách nhanh chóng với chi phí hợp
                                    lý. Hiện nay nó đã được biết đến một cách quen thuộc tại Việt Nam và sức mạnh của chúng ngày càng được chứng tỏ theo thời gian với vô vàn các ứng dụng mở (open source) độc đáo được chia sẻ rộng rãi.</p>

                            </div>
                        </div>
                    </div>

                    <div class="content-top-in">
                        <h4>SẢN PHẨM LIÊN QUAN</h4>
                        <div class="row">
                            <div class="col-md-4 top-single">
                                <div class="col-md">
                                    <img src="images/pic8.jpg" alt="" />
                                    <div class="top-content">
                                        <h5>ARDUINO NANO</h5>
                                        <div class="white clearfix">
                                            <a href="#" class="hvr-shutter-in-vertical hvr-shutter-in-vertical2">ADD TO CART</a>
                                            <div class="price">200,000 VND</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 top-single">
                                <div class="col-md">
                                    <img src="images/pic9.jpg" alt="" />
                                    <div class="top-content">
                                        <h5>ARDUINO NANO</h5>
                                        <div class="white clearfix">
                                            <a href="#" class="hvr-shutter-in-vertical hvr-shutter-in-vertical2">ADD TO CART</a>
                                            <div class="price">200,000 VND</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 top-single-in">
                                <div class="col-md">
                                    <img src="images/pic10.jpg" alt="" />
                                    <div class="top-content">
                                        <h5>ARDUINO NANO</h5>
                                        <div class="white clearfix">
                                            <a href="#" class="hvr-shutter-in-vertical hvr-shutter-in-vertical2">ADD TO CART</a>
                                            <div class="price">200,000 VND</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="single-bottom">
                        <h4>Danh mục</h4>
                        <ul>
                            <li><a href="#"><i> </i>ADRUINO</a></li>
                            <li><a href="#"><i> </i>LED</a></li>
                            <li><a href="#"><i> </i>MÀN HÌNH</a></li>
                            <li><a href="#"><i> </i>VI ĐIỀU KHIỂN</a></li>
                            <li><a href="#"><i> </i>CẢM BIẾN</a></li>
                            <li><a href="#"><i> </i>IC</a></li>
                        </ul>
                    </div>
                    <div class="single-bottom">
                        <h4>Sản phẩm mua nhiều</h4>
                        <div class="product">
                            <img class="img-responsive fashion" src="images/st1.jpg" alt="">
                            <div class="grid-product">
                                <a href="#" class="elit">Consectetuer adipiscing elit</a>
                                <span class="price price-in">$400.00</span>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="product">
                            <img class="img-responsive fashion" src="images/st2.jpg" alt="">
                            <div class="grid-product">
                                <a href="#" class="elit">Consectetuer adipiscing elit</a>
                                <span class="price price-in">$400.00</span>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="product">
                            <img class="img-responsive fashion" src="images/st3.jpg" alt="">
                            <div class="grid-product">
                                <a href="#" class="elit">Consectetuer adipiscing elit</a>
                                <span class="price price-in">$400.00</span>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---->
    <?php include 'footer.php'?>
</body>

</html>