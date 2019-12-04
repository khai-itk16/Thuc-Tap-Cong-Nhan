

<?php 
        include './inc/header.php';
        include './inc/leftbar.php';
        $iddanhmuc = $_REQUEST['iddanhmuc'];
        $masp = $_REQUEST['idsp'];
    ?>


<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Sửa sản phẩm</h2>
            </div>
        </div>
        <!-- /. ROW  -->
        <hr />
        <div class="row">
            <div class="col-md-12">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="xulysuasanpham.php" role="form" method="post" enctype="multipart/form-data" id="form">
                                    <?php 
                            include 'connect.php';
                            $sql = "select * from sanpham where masp = '$masp'";
                            $result = mysqli_query($link,$sql);
                            if(mysqli_num_rows($result) == 0){
                                echo "Không tìm thấy thông tin<br>";
                            }else{
                                $row = mysqli_fetch_array($result, MYSQLI_BOTH);
                                ?>
                                     <div class="form-group">
                                        <label for="name">Mã danh mục</label>
                                       <input readonly type="text" id="name" value="<?php echo $iddanhmuc ?>" name="iddanhmuc" class="form-control" />
                                    </div>
                                     <div class="form-group">
                                        <label for="name">Mã sản phẩm </label>
                                        <input readonly type="text" id="name" value="<?php echo $row['masp'] ?>" name="masp" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Tên sản phẩm </label>
                                         <input type="text" id="name" value="<?php echo $row['tensp']?>" name="tensp" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label for="preview">Mô tả</label>
                                        <textarea id="preview" class="form-control" rows="3" name="motasp"><?php echo $row['mota']?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="preview">giá</label>
                                         <input type="number" id="name" value="<?php echo $row['giatien'] ?>" name="giasp" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label for="preview">Số lượng</label>
                                        <input  type="number" id="name" value="<?php echo $row['soluong'] ?>" name="soluongsp" class="form-control" />
                                    </div>
                                    <div class="form-group">

                                        <label for="picture">Hình ảnh</label>
                                        <input type="file" name="hinhanhsp" />
                                        
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-success btn-md">Sửa</button>
                                <?php      }
    
    
                            
                            mysqli_free_result($result);
                            mysqli_close($link);
                        ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Form Elements -->
            </div>
        </div>
        <!-- /. ROW  -->
    </div>
    <!-- /. PAGE INNER  -->
</div>
<script>
    document.getElementById("danhmuc").classList.add('active-menu');
</script>