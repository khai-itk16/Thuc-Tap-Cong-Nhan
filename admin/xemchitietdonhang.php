<?php 
        include './inc/header.php';
        include './inc/leftbar.php';
         include 'connect.php';
    ?>
    <div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Quản lý người dùng</h2>
            </div>
        </div>
        <!-- /. ROW  -->
        <hr />
        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <div class="row">
                                <div class="col-sm-6">
                                </div>
                                <div class="col-sm-6" style="text-align: right;">
                                  
                                </div>
                            </div>

                            
                            <?php 
                             $sql = "select * from chitiethoadon where mahoadon = ".$_REQUEST['mahoadon'];
                            $result = mysqli_query($link,$sql);
                            if(mysqli_num_rows($result) == 0){
                                echo "<h1>Không tìm thấy thông tin</h1><br>";
                            }
                            else{
                    ?>

                    <table class="table table-light" border="1">
                        <tr>
                           <th>Mã hóa đơn</th>
                            <th>Mã sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Số lượng</th>
                            <th>Đơn giá</th>
                        </tr>
                        
                        <?php 
                           $total = 0;
                                while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
                                    $total += $row['dongia'] * $row['soluong'];
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
                                            <td width=\"30%\"><img style=\"width: 50%;\" src=\"../images/".$row['hinhanh']."\"></td>
                                            <td>".$row['soluong']."</td>
                                            <td>".$row['dongia']."</td>
                                        </tr>
                                    ";
                                }
                                echo '<tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Tổng tiền</td>
                                <td>'.$total.'</td>
                                    </tr>';
                                if($_REQUEST['tinhtrang'] == 0){
                                   
                                echo '<tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><a href="chotbill.php?mahoadon='.$mahoadon.'&tinhtrang='.$_REQUEST['tinhtrang'].'">Xác nhận đơn</a></td>
                                    </tr>';
                                }else{

                                   echo '<tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                       <td><a href="chotbill.php?mahoadon='.$mahoadon.'&tinhtrang='.$_REQUEST['tinhtrang'].'">Đã giao hàng</a></td>
                                    </tr>';
                                }
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
    document.getElementById("hoadon").classList.add('active-menu');
</script>
</body>
