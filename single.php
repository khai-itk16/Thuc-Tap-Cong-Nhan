
<!DOCTYPE html>
<html>

<head>
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
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Exo:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>
<link rel="stylesheet" href="css/etalage.css">
<script src="js/jquery.etalage.min.js"></script>
		<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>
<script>$(document).ready(function(c) {
	$('.alert-close').on('click', function(c){
		$('.message').fadeOut('slow', function(c){
	  		$('.message').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close1').on('click', function(c){
		$('.message1').fadeOut('slow', function(c){
	  		$('.message1').remove();
		});
	});	  
});
</script>
</head>

<body>
    <?php require_once ('header.php')?>
    <?php
        require_once ("connect.php");
        if ($_REQUEST["masanpham"]) {
            $masp = $_REQUEST["masanpham"];
            $sql = "select * from sanpham where masp = '$masp';";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_array($result, MYSQLI_BOTH);
        }
    ?>
    <div class="container">
        <div class="single">
            <div class="row">
                <div class="col-md-9 top-in-single">
                    <div class="row">
                        <div class="col-md-5 single-top">
                            <ul id="etalage">
                                <li>
                                    <img class="etalage_source_image etalage_thumb_image img-responsive" src="<?php echo $row['hinhanh']; ?>" alt="">
                                </li>
                            </ul>


                        </div>
                        <div class="col-md-7 single-top-in clearfix">
                            <div class="single-para">
                                <h4><?php echo $row['tensp']; ?></h4>
                                <div class="para-grid">
                                    <span class="add-to price"><?php echo $row['giatien']; ?> VND</span>
                                    <a href="#" class="hvr-shutter-in-vertical cart-to">Add to Cart</a>
                                    <div class="clearfix"></div>
                                </div>
                                <h5>Còn số lượng <?php echo $row['soluong']; ?></h5>
                                <div class="available">
                                    Số lượng:
                                    <select name="quantity">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                                <p><?php echo $row['mota']; ?></p>

                            </div>
                        </div>
                    </div>

                    <div class="content-top-in">
                        <h4>SẢN PHẨM LIÊN QUAN</h4>
                        <div class="row">
                        <?php 
                            $maDM = $row['madanhmuc'];
                            $sql = "SELECT * FROM sanpham WHERE madanhmuc = '$maDM ' LIMIT 3;";
                            $result = mysqli_query($link, $sql);
                            while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
                                echo '<div class="col-md-4 top-single">
                                    <div class="col-md">
                                        <img src="'.$row['hinhanh'].'" alt="" />
                                        <div class="top-content">
                                            <h5>'.$row['tensp'].'</h5>
                                            <div class="white clearfix">
                                                <a href="#" class="hvr-shutter-in-vertical hvr-shutter-in-vertical2">ADD TO CART</a>
                                                <div class="price">'.$row['giatien'].' VND</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                            }
                        ?>
                        </div>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="single-bottom">
                        <h4>Danh mục</h4>
                        <ul>
                            <?php 
                                $sql = "select * from danhmuc;";
                                $result = mysqli_query($link, $sql);
                                while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
                                    echo "<li><a href='product.php?madanhmuc=".$row['madanhmuc']."'><i> </i>".$row['tendanhmuc']."</a></li>";
                                }
                            ?>
                        </ul>
                    </div>
                    <div class="single-bottom">
                        <h4>Sản phẩm mua nhiều</h4>

                        <?php 
                            $sql = "select * from sanpham where spmuanhieu != 'NULL' limit 3";
                            $result = mysqli_query($link, $sql);
                            while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
                                echo '<div class="product">
                                    <img class="img-responsive fashion" src="'.$row["hinhanh"].'" alt="">
                                    <div class="grid-product">
                                        <a href="single.php?masanpham='.$row["masp"].'" class="elit">'.$row['tensp'].'</a>
                                        <span class="price price-in">'.$row["giatien"].'</span>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---->
    <?php include 'footer.php'?>
</body>

</html>