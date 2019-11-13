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
         include 'header.php';?>
        <div class="container welcome">
            <div class="row">
                <div class="col-md-12 content-form">
                    <form action="index.php" method="POST">
                        <input class="form-control" type="text" name="dulieutimkiem" required placeholder="Nhập dữ liệu tìm kiếm">
                        Tìm kiếm theo <select name="luachon">
                            <option value="1">Danh mục</option>
                            <option value="2">Sản phẩm</option>
                        </select><br />
                        <input type="submit" name="action" value="Tìm kiếm">
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
        <div class="row">
            <div class="col-md-12">
            <?php
            include 'connect.php';
            if(isset($_POST['action'])){
                if ($_POST['luachon'] == '1') {
                    $sql = "select * from danhmuc where tendanhmuc LIKE '%".$_POST['dulieutimkiem']."%'";
                    $result = mysqli_query($link,$sql);
                    if(mysqli_num_rows($result) == 0){
                        echo "Không tìm thấy thông tin<br>";
                    }
                    else{
                        echo '<b>Kết quả tìm kiếm</b><table border="1" width="100%">
                                
                                <tr>
                                    <td><h5>Mã danh mục</h5></td>
                                    <td><h5>Tên danh mục</h5></td>
                                    <td><h5>Xem danh sách sản phẩm</h5></td>
                                    <td><h5>Sửa danh mục</h5></td>
                                    <td><h5>Xóa danh mục</h5></td>
                                    <td><h5>Thêm sản phẩm</h5></td>
                                </tr>';
                            while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
                                echo '<tr>
                                    <td>'.$row['madanhmuc'].'</td>
                                    <td>'.$row['tendanhmuc'].'</td>
                                    <td><a href="quantrisanpham.php?iddanhmuc='.$row['madanhmuc'].'">Xem sản phẩm</a></td>
                                    <td><a href="formsuadanhmuc.php?iddanhmuc='.$row['madanhmuc'].'&tendanhmuc='.$row['tendanhmuc'].'">Sửa danh mục</a></td>
                                    <td><a href="xulyxoadanhmuc.php?iddanhmuc='.$row['madanhmuc'].'">Xóa danh mục</a></td>
                                    <td><a href="formthemsanpham.php?iddanhmuc='.$row['madanhmuc'].'">Thêm sản phẩm</a></td>
                                </tr>';
                            }
                        echo '</table>';
                    }
                    //free
                    mysqli_free_result($result);
                    mysqli_close($link);
                }
                else if ($_POST['luachon'] == '2') {
                    $sql = "select * from sanpham where tensp like '%".$_POST['dulieutimkiem']."%'";
                    $result = mysqli_query($link,$sql);
                    if(mysqli_num_rows($result) == 0){
                        echo "Không tìm thấy thông tin<br>";
                    }
                    else{
                        echo '<b>Kết quả tìm kiếm</b><table border="1" width="100%">
                                
                                <tr>
                                    <td><h5>Mã sản phẩm</h5></td>
                                    <td><h5>Tên sản phẩm</h5></td>
                                    <td><h5>Số lượng</h5></td>
                                    <td><h5>Mô tả</h5></td>
                                    <td><h5>Giá bán</h5></td>
                                    <td><h5>Hình ảnh</h5></td>
                                    <td><h5>Xóa sản phẩm</h5></td>
                                    <td><h5>Sửa sản phẩm</h5></td>
                                </tr>';
                            while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
                                echo '<tr>
                                    <td>'.$row['masp'].'</td>
                                    <td>'.$row['tensp'].'</td>
                                    <td>'.$row['soluong'].'</td>
                                    <td>'.$row['mota'].'</td>
                                    <td>'.$row['giatien'].'</td>
                                    <td><img style="width: 40%; " src="../images/'.$row['hinhanh'].'"></td>

                                    <td><a href="xulyxoasanpham.php?idsp='.$row['masp'].'&">Xóa sản phẩm</a></td>
                                    <td><a href="formsuasanpham.php?iddanhmuc='.$row['madanhmuc'].'&idsp='.$row['masp'].'">Sửa sản phẩm</a></td>
                    
                                </tr>';
                                }
                        echo '</table>';
                    }
                    //free
                    mysqli_free_result($result);
                    mysqli_close($link);
                }
                
            }
        ?>
        </div>
    </div>
</div>
</body>
</html>