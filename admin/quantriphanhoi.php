<?php 
        include './inc/header.php';
        include './inc/leftbar.php';
         include 'connect.php';
    ?>
    <div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Quản lý phản hồi</h2>
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
                            $sql = "select * from lienhe";
                            $result = mysqli_query($link,$sql);
                            if(mysqli_num_rows($result) == 0){
                                echo "<h1>Không tìm thấy thông tin phản hồi </h1><br>";
                            }
                            else{
                    ?>

                    <table class="table table-light" border="1">
                        <tr>
                            <th>Email</th>
                            <th>Nội dung phản hồi</h5></td>
                            <th>Ngày phản hồi</h5></th>
                            <th>Chức năng</th>
                        </tr>
                        
                        <?php 
                            while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
                                        echo '<tr><td>'.$row['email'].'</td>
                                        <td>'.$row['noidung'].'</td>
                                        <td>'.$row['ngaylienhe'].'</td> ';
                        ?>
                                       <td><a class="user" href="xulyxoaphanhoi.php?idphanhoi= <?php echo $row['malienhe']?>"
                                    onclick ="return confirm('Bạn có chắc muốn xóa phản hồi này không?')" >Xóa phản hồi</a></td></tr>';
                                       <?php
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
    document.getElementById("contact").classList.add('active-menu');
</script>
</body>
