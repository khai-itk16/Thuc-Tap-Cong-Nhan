<?php 
        include './inc/header.php';
        include './inc/leftbar.php';
         include 'connect.php';
        $iddanhmuc = $_REQUEST['iddanhmuc'];
        $sql = "select *from danhmuc where madanhmuc = ".$iddanhmuc;
        $result = mysqli_query($link,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_BOTH);
    ?>
    <div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Quản lý sản phẩm</h2>
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
                                    <a href="formthemsanpham.php?iddanhmuc=<?php echo $iddanhmuc ?>" class="btn btn-success btn-md">Thêm sản phẩm</a>
                                </div>
                                <div class="col-sm-6" style="text-align: right;">
                                   <form method="post" action="xulytimkiem.php">
                                        <input type="submit"  value="Tìm kiếm" class="btn btn-warning btn-sm" style="float:right" />
                                        <input type="text" name="search"class="form-control input-sm" placeholder="Nhập tên sản phẩm" style="float:right; width: 300px;" />
                                        <div style="clear:both"></div>
                                    </form><br />
                                </div>
                            </div>

                            
                            <?php 
                            $sql = "select * from sanpham where madanhmuc =".$iddanhmuc;
                            $result = mysqli_query($link,$sql);
                            if(mysqli_num_rows($result) == 0){
                                echo "<h1>Không tìm thấy thông tin</h1><br>";
                            }
                            else{
                    ?>


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
                                while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
                                        echo '<tr>
                                        <td>'.$row['masp'].'</td>
                                        <td>'.$row['tensp'].'</td>
                                        <td>'.$row['soluong'].'</td>
                                        <td>'.$row['mota'].'</td>
                                        <td>'.$row['giatien'].'</td>
                                        <td width="30%"><img style="width: 100px; height: 100px; " src="../images/'.$row['hinhanh'].'"></td>';
                                    ?>
                                        <td><a href="xulyxoasanpham.php?idsp= <?php echo $row['masp'].'&iddanhmuc='.$iddanhmuc?>" onclick = "return confirm('Bạn có chắc muốn xóa sản phẩm này không?')">Xóa sản phẩm</a></td>
                                  <?php    echo'  <td><a href="formsuasanpham.php?iddanhmuc='.$iddanhmuc.'&idsp='.$row['masp'].'">Sửa sản phẩm</a></td>
                        
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
                <!--End Advanced Tables -->
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById("danhmuc").classList.add('active-menu');
</script>



