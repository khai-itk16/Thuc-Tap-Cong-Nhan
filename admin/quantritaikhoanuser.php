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
                            $sql = "select * from khachhang";
                            $result = mysqli_query($link,$sql);
                            if(mysqli_num_rows($result) == 0){
                                echo "<h1>Không tìm thấy thông tin</h1><br>";
                            }
                            else{
                    ?>

                    <table class="table table-light" border="1">
                        <tr>
                            <th>Mã khách hàng</th>
                            <th>Tên tài khoản</th>
                            <th>Họ tên</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                        </tr>
                        
                        <?php 
                            while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
                                        echo '<tr><td>'.$row['makhachhang'].'</td>
                                        <td>'.$row['tendangnhap'].'</td>
                                        <td>'.$row['hoten'].'</td>
                                        <td>'.$row['email'].'</td>
                                        <td>'.$row['sdt'].'</td>
                                        <td>'.$row['diachi'].'</td></tr>';
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
    document.getElementById("user").classList.add('active-menu');
</script>
</body>