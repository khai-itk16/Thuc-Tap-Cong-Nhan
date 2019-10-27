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
    ?>
    <div class="don-hang">
        <div class="container">
            <h4>Danh sách các mặt hàng của đơn hàng <?php echo $_REQUEST['mahoadon'];?></h4>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-light" border="1">
                        <tr>
                            <td>Mã hóa đơn</td>
                            <td>Mã sản phẩm</td>
                            <td>Tên sản phẩm</td>
                            <td>Số lượng</td>
                            <td>Tổng tiền</td>
                        </tr>
                        <?php 
                            include 'connect.php';
                            $sql = "select * from chitiethoadon where mahoadon = ".$_REQUEST['mahoadon'];
                            $result = mysqli_query($link,$sql);
                            if(mysqli_num_rows($result) == 0){
                                echo "Không tìm thấy thông tin<br>";
                            }
                            else{
                                $total = 0;
                                while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
                                    $total += $row['giatien'];
                                    $sql1 = "select * from sanpham where masp = ".$row['masp'];
                                    $result1 = mysqli_query($link,$sql1);
                                    if(mysqli_num_rows($result1) == 0){
                                        echo "Không tìm thấy thông tin<br>";
                                    }else{
                                        $row1 = mysqli_fetch_array($result1, MYSQLI_BOTH);
                                    }
                                    $mahoadon = $row['mahoadon'];
                                    echo "
                                        <tr>
                                            <td>".$row['mahoadon']."</td>
                                            <td>".$row['masp']."</td>
                                            <td>".$row1['tensp']."</td>
                                            <td>".$row['soluong']."</td>
                                            <td>".$row['giatien']."</td>
                                        </tr>
                                    ";
                                }
                                
                                echo '<tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Tổng tiền</td>
                                    <td>'.$total.'</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><a href="chotbill.php?mahoadon='.$mahoadon.'">Chốt bill</a></td>
                                </tr>';
                                
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</body>