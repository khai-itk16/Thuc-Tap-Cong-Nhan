<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        form{
            width: 100%;
            display: flex;
            flex-direction: column;
            text-align: center;
        }
        form div{
            display: flex;
            width: 100%;
            text-align: left;
        }
        form input{
            
            margin-top: 6px;
        }
        .table tr td{
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
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
</body>