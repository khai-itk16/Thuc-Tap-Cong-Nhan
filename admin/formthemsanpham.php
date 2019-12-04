<?php 
        include './inc/header.php';
        include './inc/leftbar.php';
        $iddanhmuc = $_REQUEST['iddanhmuc'];
    ?>



<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Thêm sản phẩm</h2>
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
                                <form action="xulythemsanpham.php?iddanhmuc=<?php echo $iddanhmuc ?>" role="form" method="post" enctype="multipart/form-data" id="form">
                                    <div class="form-group">
                                        <label for="name">Tên sản phẩm </label>
                                        <input type="text" id="name" value="" name="tensp" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label for="preview">Mô tả</label>
                                        <textarea id="preview" class="form-control" rows="3" name="motasp"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="gia">Giá</label>
                                        <input type="number" id="gia" class="form-control" rows="3" name="giasp"></input>
                                    </div>
                                    <div class="form-group">
                                        <label for="soluong">Số lượng</label>
                                        <input type="number" id="soluong" class="form-control" rows="3" name="soluongsp"></input>
                                    </div>
                                    <div class="form-group">

                                        <label for="picture">Hình ảnh</label>
                                        <input id="picture" type="file" name="hinhanhsp" />
                                    </div>
                                    
                               
                                    <button type="submit" name="submit" class="btn btn-success btn-md">Thêm</button>
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
<!-- /. PAGE WRAPPER  -->
