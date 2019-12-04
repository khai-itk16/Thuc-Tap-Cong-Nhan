<?php 
        include './inc/header.php';
        include './inc/leftbar.php';

    ?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Sửa danh mục</h2>
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
                                <form action="xulysuadanhmuc.php?iddanhmuc=<?php echo $_REQUEST['iddanhmuc']?>"  role="form" method="post" id="form">
                        <?php 
                            echo ' <label for="name">Tên danh muc</label>
                            <input name="tendanhmuc" value="'.$_REQUEST['tendanhmuc'].'" type="text" placeholder="Nhập tên danh mục">'
                        
                        ?>
                         <button type="submit" name="submit" class="btn btn-success btn-md">Sửa</button>
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