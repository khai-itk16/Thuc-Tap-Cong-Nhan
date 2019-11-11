<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
     <?php 
        include 'header.php';
        $iddanhmuc = $_REQUEST['iddanhmuc'];
    ?>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-2 menu">
                    <div class="title-menu">Lựa chọn</div>
                    <div class="menu1">
                        <a href="quantrisanpham.php?iddanhmuc=<?php echo $iddanhmuc ?>" class="menu-item">Hiển thị sản phẩm</a>
                        <a href="formthemsanpham.php?iddanhmuc=<?php echo $iddanhmuc ?>" class="menu-item">Thêm sản phẩm</a>
                    </div>
                    
                </div>
                <div class="col-md-10 content-form">
                    <div class="title-menu">Thêm sản phẩm</div>

                    <form action="xulythemsanpham.php?iddanhmuc=<?php echo $iddanhmuc ?>" method="POST" enctype="multipart/form-data">                      
                        <input type="text" placeholder="Nhập tên sản phẩm" name="tensp">
                        <textarea placeholder="Nhập mô tả sản phẩm" name="motasp"></textarea>
                        <input type="text" placeholder="Nhập giá bán sản phẩm" name="giasp">
                        <input type="text" placeholder="Nhập số lượng" name="soluongsp">
                        <div class="clearfix clear">
                            <div class="float-left">Hình ảnh sản phẩm</div>
                            <input class="float-left hinhanh" type="file" name="hinhanhsp" placeholder="Hình ảnh">
                        </div>
                        <input type="submit" name="" id="" value="Thêm sản phẩm">
                    </form>
            </div>
        </div>
    </div>
</body>