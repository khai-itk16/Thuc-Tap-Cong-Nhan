<?php 
        include './inc/header.php';
        include './inc/leftbar.php';

    ?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Thêm danh mục</h2>
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
                                <form action="xulythemdanhmuc.php" role="form" method="post" id="form">
                                    <div class="form-group">
                                        <label for="name">Tên danh muc</label>
                                        <input type="text" id="name" value="" name="tendanhmuc" class="form-control" />
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