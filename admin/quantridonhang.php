
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
                            $sql = "select * from hoadon";
                            $result = mysqli_query($link,$sql);
                            if(mysqli_num_rows($result) == 0){
                                echo "<h1>Không tìm thấy thông tin</h1><br>";
                            }
                            else{
                    ?>
                    <table class="table table-light" border="1">
                        <tr>
                            <td>Mã hóa đơn</td>
                            <td>Tên khách hàng</td>
                            <td>Số điện thoại</td>
                            <td>Email</td>
                            <td>Địa chỉ giao hàng</td>
                            <td>Ngày lập</td>
                            <td>Tình trạng</td>
                            <td>Xem đơn hàng</td>
                        </tr>
                <?php        
                                while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
                                        if($row['tinhtrang'] == 1){
                                            if($row['dathanhtoan'] == 1){
                                                $tinhtrang = "ĐÃ GIAO HÀNG";
                                            }else{
                                                $tinhtrang = "ĐANG GIAO HÀNG";
                                            }
                                        }else{
                                            $tinhtrang = "CHƯA XÁC NHẬN";
                                        }

                                       
                                        echo '<tr>
                                        <td>'.$row['mahoadon'].'</td>
                                        <td>'.$row['tenkhachhang'].'</td>
                                        <td>'.$row['sdt'].'</td>
                                        <td>'.$row['email'].'</td>
                                        <td>'.$row['diachigiaohang'].'</td>
                                        
                                        <td>'.$row['ngaylap'].'</td>
                                        <td>'.$tinhtrang.'</td>
                                        <td><a href="xemchitietdonhang.php?mahoadon='.$row['mahoadon'].'&tinhtrang='.$row['tinhtrang'].'">Xem đơn hàng</a></td>
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
    <script>
    document.getElementById("hoadon").classList.add('active-menu');
</script>
</body>