<?php 
        include './inc/header.php';
        include './inc/leftbar.php';
         include 'connect.php';
        $search = $_REQUEST['search'];
        $sql = "select * from sanpham where tensp like '%$search%' ";
        $result = mysqli_query($link,$sql);
       $row = mysqli_fetch_array($result,MYSQLI_BOTH);
   
    ?>
    <div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2> Tìm kiếm sản phẩm</h2>
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
                            
                            <?php                           
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

                                while($row ){
                                        echo '<tr>
                                        <td>'.$row['masp'].'</td>
                                        <td>'.$row['tensp'].'</td>
                                        <td>'.$row['soluong'].'</td>
                                        <td>'.$row['mota'].'</td>
                                        <td>'.$row['giatien'].'</td>
                                        <td width="30%"><img style="width: 100px; height: 100px; " src="../images/'.$row['hinhanh'].'"></td>';
                                    ?>
                                        <td><a href="xulyxoasanpham.php?idsp= <?php echo $row['masp'].'&iddanhmuc='.$iddanhmuc?>" onclick = "return confirm('Bạn có chắc muốn xóa sản phẩm này không?')">Xóa sản phẩm</a></td>
                                  <?php    echo'  <td><a href="formsuasanpham.php?iddanhmuc='. $row['madanhmuc'].'&idsp='.$row['masp'].'">Sửa sản phẩm</a></td>
                        
                                    </tr>';
                                    $row = mysqli_fetch_array($result, MYSQLI_BOTH);
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
    document.getElementById("song").classList.add('active-menu');
</script>



