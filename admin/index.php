  <?php 
        include './inc/header.php';
        include './inc/leftbar.php';

    ?>
    <div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Quản lý Trang chủ</h2>
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
                                    <form method="post" action="xulytimkiem.php">
                                        <input type="submit"  value="Tìm kiếm" class="btn btn-warning btn-sm" style="float:right" />
                                        <input type="text" name="search"class="form-control input-sm" placeholder="Nhập tên sản phẩm" style="float:right; width: 300px;" />
                                        <div style="clear:both"></div>
                                    </form><br />
                                </div>
                            </div>
            <table class="table table-light" border="1">
                <tr>
                    <td>Mã sản phẩm</td>
                    <td>Tên sản phẩm</td>
                    <td>Tên danh mục</td>
                    <td>Lựa chọn</td>
                </tr>
                <?php 
                    include 'connect.php';
                    $sql = "select * from sanpham";
                    $result = mysqli_query($link,$sql);
                    if(mysqli_num_rows($result) == 0){
                        echo "Không tìm thấy thông tin<br>";
                    }
                    else{
                        while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
                            $sql1 = "select * from danhmuc where madanhmuc = ".$row['madanhmuc'];
                            $result1 = mysqli_query($link,$sql1);
                            if(mysqli_num_rows($result1) == 0){
                                echo "Không tìm thấy thông tin<br>";
                            }else{
                                $row1 = mysqli_fetch_array($result1, MYSQLI_BOTH);
                            }
                            $spmoi = $spmuanhieu = $linhkiencoban = "";
                            if($row['spmoi'] == "1"){
                                $spmoi = "checked";
                            }
                            if($row['spmuanhieu'] == "1"){
                                $spmuanhieu = "checked";
                            }
                            if($row['linhkiencoban'] == "1"){
                                $linhkiencoban = "checked";
                            }
                            echo "
                                <tr>
                                    <td>".$row['masp']."</td>
                                    <td>".$row['tensp']."</td>
                                    <td>".$row1['tendanhmuc']."</td>
                                    <td><form action=\"xulytrangchu.php\" method=\"POST\">
                                    <input hidden=\"true\" type=\"text\" name=\"masp\" value=\"".$row['masp']."\" readonly=\"true\" >
                                    <div><input ".$spmoi." type=\"checkbox\" name=\"ckb1\"  value=\"1\"><div>Sản phẩm mới</div></div>
                                    <div><input ".$spmuanhieu." type=\"checkbox\" name=\"ckb2\"  value=\"1\"><div>Sản phẩm mua nhiều</div></div>
                                    <div><input ".$linhkiencoban." type=\"checkbox\" name=\"ckb3\"  value=\"1\"><div>Linh kiện cơ bản</div></div>
                                    <input type=\"submit\" value=\"Xác nhận\">
                                    </form></td>
                                </tr>
                            ";
                        }
                    }
                ?>
                </table>
                <div class="form">
                    
                </div>
            </div>
        </div>
    </div>
    <script>
    document.getElementById("sanpham").classList.add('active-menu');
</script>
</body>