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
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">Quản trị trang web</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Quản trị trang chủ
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="quantrisanphammoi.php">Quản trị sản phẩm mới</a>
                            <a class="dropdown-item" href="quantrisanphammuanhieu.php">Quản trị sản phẩm mua nhiều</a>
                            <a class="dropdown-item" href="quantrilinhkiencoban.php">Quản trị linh kiện cơ bản</a>
                            <a class="dropdown-item" href="quantriarduino.php">Quản trị arduino</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="quantridanhmuc.php" >
                        Quản trị sản phẩm
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="quantriphanhoi.php" >
                        Quản trị phản hồi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="quantritaikhoanuser.php" >
                        Quản trị tài khoản người dùng
                        </a>
                    </li>    
                </ul>
                <ul class="navbar-nav ml-auto">
                    Chào: 
                </ul>
                </form>
            </div>
        </div>    
    </nav>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-2 menu">
                    <div class="title-menu">Lựa chọn</div>
                    <div class="menu1">
                        <a href="quantridanhmuc.php" class="menu-item">Hiển thị danh mục</a>
                        <a href="formthemdanhmuc.php" class="menu-item">Thêm danh mục</a>
                    </div>
                    
                </div>
                <div class="col-md-10">
                    <div class="title-menu">Quản trị danh mục</div>
                    <table class="table table-light" border="1">
                        <tr>
                            <td><h5>Mã danh mục</h5></td>
                            <td><h5>Tên danh mục</h5></td>
                            <td><h5>Xem danh sách sản phẩm</h5></td>
                            <td><h5>Sửa danh mục</h5></td>
                            <td><h5>Xóa danh mục</h5></td>
                            <td><h5>Thêm sản phẩm</h5></td>
                        </tr>
                        <tr>

                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>