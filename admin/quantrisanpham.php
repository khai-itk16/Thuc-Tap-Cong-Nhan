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
        include 'connect.php';
        $iddanhmuc = $_REQUEST['iddanhmuc'];
        $sql = "select *from danhmuc where madanhmuc = ".$iddanhmuc;
        $result = mysqli_query($link,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_BOTH);
   

        
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
                <div class="col-md-10">
                    <div class="title-menu">Quản trị sản phẩm của danh mục <?php echo $row['tendanhmuc']?></div> 
                    <table class="table table-light" border="1">
                        <tr>
                            <td><h5>Mã sản phẩm</h5></td>
                            <td><h5>Tên sản phẩm</h5></td>
                            <td><h5>Số lượng</h5></td>
                            <td><h5>Mô tả</h5></td>
                            <td><h5>Giá bán</h5></td>
                            <td><h5>Hình ảnh</h5></td>
                            <td><h5>Xóa sản phẩm</h5></td>
                            <td><h5>Sửa sản phẩm</h5></td>
                        </tr>
                        <?php 
                            $sql = "select * from sanpham where madanhmuc =".$iddanhmuc;
                            $result = mysqli_query($link,$sql);
                            if(mysqli_num_rows($result) == 0){
                                echo "Không tìm thấy thông tin<br>";
                            }
                            else{
                                while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
                                        echo '<tr>
                                        <td>'.$row['masp'].'</td>
                                        <td>'.$row['tensp'].'</td>
                                        <td>'.$row['soluong'].'</td>
                                        <td>'.$row['mota'].'</td>
                                        <td>'.$row['giatien'].'</td>
                                        <td width="30%"><img style="width: 100%; " src="../images/'.$row['hinhanh'].'"></td>

                                        <td><a href="xulyxoasanpham.php?idsp='.$row['masp'].'&">Xóa sản phẩm</a></td>
                                        <td><a href="formsuasanpham.php?iddanhmuc='.$iddanhmuc.'&idsp='.$row['masp'].'">Sửa sản phẩm</a></td>
                        
                                    </tr>';
                                }
                            }
                            //free
                            mysqli_free_result($result);
                            mysqli_close($link);
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>