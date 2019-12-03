
  <?php 
        include './inc/header.php';
        include './inc/leftbar.php';

    ?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Quản lý danh mục</h2>
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
                                    <a href="formthemdanhmuc.php" class="btn btn-success btn-md">Thêm danh mục</a>
                                </div>
                            </div>
                        </br>
                            <?php 
                            include 'connect.php';
                            $sql = "select * from danhmuc";
                            $result = mysqli_query($link,$sql);
                            if(mysqli_num_rows($result) == 0){
                                echo "Không tìm thấy thông tin<br>";
                            } else{ ?>

                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Mã danh mục</th>
                                        <th>Tên danh mục</th>
                                        <th>Xem danh sách sản phẩm</th>
                                        <th>Sửa danh mục</th>
                                        <th>Xóa danh mục</th>
                                        <th>Thêm sản phẩm</th>
                                    </tr>
                                </thead>
                                <tbody>
									 <?php         
                                while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
                                        echo '<tr>
                                        <td>'.$row['madanhmuc'].'</td>
                                        <td>'.$row['tendanhmuc'].'</td>
                                        <td><a href="quantrisanpham.php?iddanhmuc='.$row['madanhmuc'].'">Xem sản phẩm</a></td>
                                        <td><a href="formsuadanhmuc.php?iddanhmuc='.$row['madanhmuc'].'&tendanhmuc='.$row['tendanhmuc'].'">Sửa danh mục</a></td>';
                                        ?>
                                         <td><a href="xulyxoadanhmuc.php?iddanhmuc=<?php echo $row['madanhmuc']?>" onclick = "return confirm('Bạn có chắc muốn xóa sản phẩm này không?')">Xóa danh mục</a></td>
                                        <?php 
                                        echo '<td><a href="formthemsanpham.php?iddanhmuc='.$row['madanhmuc'].'">Thêm sản phẩm</a></td>
                                    </tr>';
                                }
                            }
                            //free
                            mysqli_free_result($result);
                            mysqli_close($link);
                            ?>
                                </tbody>
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
<!-- /. PAGE INNER  -->
